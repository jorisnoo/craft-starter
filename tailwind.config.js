/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './templates/**/*.{twig,html}',
        './src/**/*.{vue,js,ts,jsx,tsx,svg}',
        './config/colour-swatches.php',
    ],
    theme: {
        fontFamily: {
            sans: [...defaultTheme.fontFamily.sans],
        },
        extend: {
            spacing: {
                em: '1em',
            },
            colors: {},
            fontSize: {
                base: [
                    'clamp(1rem, 0.909rem + 0.45vw, 1.25rem)',
                    {
                        letterSpacing: '0em',
                        lineHeight: '1.2',
                    },
                ],
            },
        },
    },
}
