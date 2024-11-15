import type {Config} from 'tailwindcss'

const config: Config = {
    content: ['./site/**/*.php'],
    theme: {
        extend: {

            colors: {
                primary: {
                    DEFAULT: '#FFB736',
                    600: '#e39e23',
                    700: '#c7860e',
                },
                secondary: {
                    DEFAULT: '#7768AE',
                    800: 'rgb(83, 68, 138)'
                },
                tertiary: {
                    DEFAULT: '#306B34'
                },
                quaternary: {
                    DEFAULT: '#A3BFA8'
                },
                quinary: {
                    DEFAULT: '#772F1A'
                },
            },
            fontFamily: {
                'sans': ['"Noto Sans"', 'sans-serif'],
                'cursive': ['"Twinkle Star"', 'cursive'],
            }
        },
    },
    plugins: [],
} satisfies Config

export default config