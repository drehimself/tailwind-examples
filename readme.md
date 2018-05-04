# Tailwind CSS Examples

A collection of web pages and web components built in Tailwind CSS.

Website: [https://tailwindcss.andremadarang.com](https://tailwindcss.andremadarang.com)

Screencasts: [YouTube link](https://www.youtube.com/playlist?list=PLEhEHUEU3x5p8cxOJ27w20LffCknp935L)

## Installation

I'm using Laravel for these examples. For me, it was the fastest way to get Tailwind CSS running.

1. Clone the repo and `cd` into it
1. `composer install`
1. Rename or copy `.env.example` file to `.env`
1. `php artisan key:generate`
1. `npm install`
1. `npm run dev` or `npm run watch`
1. `php artisan serve` or use Laravel Valet or Laravel Homestead
1. Visit `localhost:8000` in your browser

## If you're not using Laravel

Check out the [Tailwind CSS Docs](https://tailwindcss.com/) on how to get setup in your environment.

Here are the relevant files:

- [HTML Markup](https://github.com/drehimself/tailwind-examples/tree/master/resources/views) - These are purely HTML. They DO NOT have any PHP syntax in them.
- [CSS](https://github.com/drehimself/tailwind-examples/tree/master/resources/assets/css) - The CSS that Tailwind CSS will compile.
- [tailwind.js](https://github.com/drehimself/tailwind-examples/blob/master/tailwind.js) - The Tailwind config file.

