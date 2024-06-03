import forms from "@tailwindcss/forms"

/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
		"./resources/**/*.blade.php",
		 "./vendor/robsontenorio/mary/src/View/Components/**/*.php"
	],
  theme: {
    extend: {},
  },
  plugins: [
		forms,
		require("daisyui")
	],
}

