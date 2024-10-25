import type { Config } from 'tailwindcss'
const config: Config  = {
  content: ['./site/**/*.php'],
  theme: {
    extend: {

      colors: {
        primary: {
          DEFAULT: '#FFB736',
        },
        secondary: {
          DEFAULT: '#7768AE'
        }
      }
    },
  },
  plugins: [],
} satisfies Config

export default config