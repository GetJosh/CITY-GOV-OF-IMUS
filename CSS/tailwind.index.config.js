module.exports = {
  content: [
    './index.php',
    './Pages/**/*.php',
    './HTML/**/*.html'
  ],
  theme: {
    extend: {
      colors: {
        imusBlue: '#00489a',
        imusGreen: '#0f7a34',
        imusDeep: '#062a5d',
        civicInk: '#10233f'
      },
      fontFamily: {
        display: ['Trebuchet MS', 'Segoe UI', 'Tahoma', 'sans-serif'],
        sans: ['Segoe UI', 'Verdana', 'Tahoma', 'Arial', 'sans-serif']
      },
      boxShadow: {
        'soft-xl': '0 20px 45px -22px rgba(6, 42, 93, 0.42)',
        'soft-2xl': '0 28px 60px -26px rgba(16, 35, 63, 0.48)'
      },
      keyframes: {
        fadeSlide: {
          '0%': {
            opacity: '0',
            transform: 'translateY(18px)'
          },
          '100%': {
            opacity: '1',
            transform: 'translateY(0)'
          }
        }
      },
      animation: {
        'fade-slide': 'fadeSlide 550ms ease-out both'
      }
    }
  },
  plugins: []
};
