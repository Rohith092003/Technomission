const http = require('http');
const fs = require('fs');
const path = require('path');

const PORT = process.env.PORT || 3000;
const PUBLIC_DIR = __dirname;

const MIME_TYPES = {
    '.html': 'text/html',
    '.css': 'text/css',
    '.js': 'text/javascript',
    '.json': 'application/json',
    '.png': 'image/png',
    '.jpg': 'image/jpeg',
    '.jpeg': 'image/jpeg',
    '.webp': 'image/webp',
    '.gif': 'image/gif',
    '.svg': 'image/svg+xml',
    '.ico': 'image/x-icon',
    '.woff': 'font/woff',
    '.woff2': 'font/woff2',
    '.ttf': 'font/ttf',
    '.pdf': 'application/pdf',
    '.mp4': 'video/mp4'
};

const server = http.createServer((req, res) => {
    // Decode URI component to handle spaces and special chars (e.g., 'School Images')
    const decodedUrl = decodeURIComponent(req.url.split('?')[0]);
    let safePath = path.normalize(decodedUrl).replace(/^(\.\.[\/\\])+/, '');
    
    if (safePath === '/' || safePath === '\\') {
        safePath = '/index.html';
    }

    let filePath = path.join(PUBLIC_DIR, safePath);

    fs.stat(filePath, (err, stats) => {
        if (err || !stats.isFile()) {
            // Check if adding .html helps (clean urls)
            const htmlPath = filePath + '.html';
            if (fs.existsSync(htmlPath) && fs.statSync(htmlPath).isFile()) {
                filePath = htmlPath;
            } else {
                res.writeHead(404, { 'Content-Type': 'text/plain; charset=utf-8' });
                res.end('404 Not Found');
                return;
            }
        }

        const ext = path.extname(filePath).toLowerCase();
        const contentType = MIME_TYPES[ext] || 'application/octet-stream';

        res.writeHead(200, { 'Content-Type': contentType });
        const stream = fs.createReadStream(filePath);
        stream.pipe(res);
        stream.on('error', () => {
            res.writeHead(500, { 'Content-Type': 'text/plain; charset=utf-8' });
            res.end('500 Internal Server Error');
        });
    });
});

server.listen(PORT, '127.0.0.1', () => {
    console.log(`Server running at http://localhost:${PORT}/`);
    console.log(`Open in browser: http://localhost:${PORT}/index.html`);
});
