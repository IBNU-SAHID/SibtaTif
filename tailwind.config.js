/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'white': '#ffffff',
            // primary Curious Blue
            'primary': {
                100: '#D1F4FD',
                200: '#A4E5FC',
                300: '#75CDF6',
                400: '#52B4ED',
                500: '#1D8EE2', //curious blue
                600: '#156EC2',
                700: '#0E52A2',
                800: '#093A83',
                900: '#05296C',
            },
            'success': {
                100: '#EDFBCE',
                200: '#D7F7A0',
                300: '#B5E76D',
                400: '#90D046',
                500: '#61B215',
                600: '#4A990F',
                700: '#37800A',
                800: '#266706',
                900: '#1A5504',
            },
            'info': {
                100: '#CFEBFF',
                200: '#9FD3FF',
                300: '#70B7FF',
                400: '#4C9EFF',
                500: '#1174FF',
                600: '#0C59DB',
                700: '#0842B7',
                800: '#052E93',
                900: '#03207A',
            },
            'warning': {
                100: '#FEF5CD',
                200: '#FEE89B',
                300: '#FED869',
                400: '#4C9EFF',
                500: '#1174FF',
                600: '#0C59DB',
                700: '#0842B7',
                800: '#052E93',
                900: '#03207A',
            },
            'danger': {
                100: '#FFE8D4',
                200: '#FFCAAA',
                300: '#FFA67F',
                400: '#FF8460',
                500: '#FF4B2B',
                600: '#DB2D1F',
                700: '#B71516',
                800: '#930D18',
                900: '#7A081A',
            },

            // ...
        },
        extend: {

        },

    },
    plugins: [
        require('flowbite/plugin')
    ],
}