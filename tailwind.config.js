import defaultTheme from 'tailwindcss/defaultTheme'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'
import flowbite from 'flowbite/plugin'

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',

        './node_modules/flowbite/**/*.js',
    ],

    theme: {
        extend: {
           
            colors: {
                neutral: {
                    'primary-soft': '#F9FAFB',
                    'primary-medium': '#FFFFFF',
                    'secondary-soft': '#F3F4F6',
                    'secondary-medium': '#E5E7EB',
                    'tertiary': '#E5E7EB',
                    'tertiary-medium': '#D1D5DB',
                },

                default: {
                    DEFAULT: '#E5E7EB',
                    medium: '#D1D5DB',
                },

                fg: {
                    disabled: '#9CA3AF',
                    brand: '#2563EB',
                },

                danger: {
                    soft: '#FEE2E2',
                    subtle: '#FCA5A5',
                    strong: '#DC2626',
                },
            },

            borderRadius: {
                base: '0.5rem',
            },

            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        typography,
        flowbite,
    ],
}

