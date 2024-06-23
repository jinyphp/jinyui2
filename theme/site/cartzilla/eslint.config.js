import globals from 'globals'
import js from '@eslint/js'
import eslintPluginPrettierRecommended from 'eslint-plugin-prettier/recommended'

export default [
  js.configs.recommended,
  {
    languageOptions: {
      globals: {
        ...globals.browser,
      },
    },
    rules: {
      'prettier/prettier': 'error',
      indent: ['error', 2],
      semi: ['error', 'never'],
      'no-var': 'error',
    },
  },
  eslintPluginPrettierRecommended,
]
