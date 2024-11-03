/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./app/Views/**/*.php'],
  theme: {
    extend: {
      colors : {
        primary: '#528EA4',
        secColor: '#ADCEDE',
        bgColor: '#fff',
        textColor: '#7a7a7a',
        lineColor: '#e0e2e9',
        transparentBg : 'rgba(163, 198, 212, 1)'
      },

      fontFamily : {
        secFont : 'Protest Riot, sans-serif'
      },

      boxShadow : {
        custom : '-15px 15px 0px -7px rgba(216,218,222,0.75)'
      },

      borderRadius : {
        custom : '100px 100px 0 0'
      },

      backgroundImage: {
        'bgSection': "url('../images/img/smp1.jpg')"
      }
    },
  },
  plugins: [],
}