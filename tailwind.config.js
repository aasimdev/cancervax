/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './assets/css/tailwind.css'
  ],
  theme: {
    extend: {
      fontFamily: {
        manrope: ['Manrope', 'sans-serif'],
        awesome: ["'Font Awesome 5 Free'"],
      },
      colors: {
        custom: {
          'teal-100': "#1d8f97",
          'teal-200': "#2abac2",
          'teal-300': "#2a5c6e",
          'teal-400': "#78c7c9",
          'teal-500': "#43becf",
          'orange-100': "#f2a743",
          'orange-200': "#ff7229",
          'gray-100': "#f5f5f3",
          'gray-200': "#f1f1f1",
          'gray-300':"#dbdbdb",
          'dark-100': "#070707",
          'green-100': "#18555a",
          'aqua-100': "#d2f6f8",
          'blue-100': "#02283d",

          'green-200': "#0AE02D",
          'green-300': "#50E969",
          'green-400': "#0be02e",
          'green-500': "#4fe653",
          'green-600': "#56b947",
          'gray-dark-100': "#304151",
          'gray-dark-200': "#384B5E",
          'purple-light-100': "#75638E",
          'purple-light-200': "#8D7BA6",
          'purple-light-300': "#CDC7D4",
          'blue-light-100': "#64B3FF",
          'blue-light-200': "#065d8d",
          'white-100': "#F2F6FA",
          'white-200': "#A1B5C8",
        },
      },
      screens: {
        '3xl': '1600px'
      },
      listStyleImage: {
        'bluelist': 'url("../images/h-icon-blue.svg")',
        'greenlist': 'url("../images/h-icon-green.svg")',
      },
      maxWidth: {
        'video-screen': '700px'
      },
      backgroundImage: {
        'banner': 'url(../images/home-banner.jpg)',
        'banner-mobile': 'url(../images/home-banner-mobile.jpg)',
        'team-first': 'url(../images/team-first-bg.png)',
        'team-bg': 'url(../images/newhero.jpg)',
        'progress-bg': 'url(../images/pipeline-bg.jpg)',
        'immunotherapy-bg': 'url(../images/immunotherapy-bg.jpg)',
        'immunotherapy-cta': 'url(../images/imm-cta.jpg)',
        'market-bg': 'url(../images/market-banner.jpg)',
        'market-cta': 'url(../images/market-cta.jpg)',
        'technology-banner': 'url(../images/techBanner.png)',
        'cancer-treatment': 'url(../images/cancer-treatment.png)',
        'problem-bg': 'url(../images/problem.png)',
        'cold-tumor-bg': 'url(../images/cold-tumor-bg.png)',
        'video-bg': 'url(../images/ceo-chats-bg.jpg)',

        'breaking-new-bg': 'url(../images/breaking-news-bg.png)',
        'arrow': 'url(../images/arrow.png)',
        'line': 'url(../images/Line.png)',
        'gardiant': 'url(../images/green-gradiant.png)',
        'gardiant-top': 'url(../images/investor-obj2.png)',
        'arrow-circle': 'url(../images/arrow-circle-right.png)',
        'faq-arrow': 'url(../images/arrow.svg)',
        'bluelist': 'url("../images/h-icon-blue.svg")',
        'greenlist': 'url("../images/h-icon-green.svg")',
      },

    },
  },
  plugins: [],

}

