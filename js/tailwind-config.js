tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: '#003c71', // Classic Navy Blue
                primaryDark: '#002244', // Darker Navy
                secondary: '#e31837', // Vivid Red
                secondaryLight: '#ffffff', // White
                lightBg: '#f8f9fa', // Light gray background
            },
            fontFamily: {
                sans: ['Open Sans', 'sans-serif'],
                heading: ['Poppins', 'sans-serif'],
            },
            boxShadow: {
                'card': '0 10px 30px rgba(0,0,0,0.08)',
            }
        }
    }
}
