let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');
// let glob = require("glob-all");
// let PurgecssPlugin = require("purgecss-webpack-plugin");
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Custom PurgeCSS extractor for Tailwind that allows special characters in
// class names.
//
// https://github.com/FullHuman/purgecss#extractor
// class TailwindExtractor {
//   static extract(content) {
//     return content.match(/[A-Za-z0-9-_:\/]+/g) || [];
//   }
// }

mix.postCss('resources/assets/css/list.css', 'public/css', [
  tailwindcss('./tailwind.js'),
])
// .browserSync('tailwind-examples.test');
.purgeCss();


// Only run PurgeCSS during production builds for faster development builds
// and so you still have the full set of utilities available during
// development.
// if (mix.inProduction()) {
//   mix.webpackConfig({
//     plugins: [
//       new PurgecssPlugin({

//         // Specify the locations of any files you want to scan for class names.
//         paths: glob.sync([
//           path.join(__dirname, "resources/views/**/*.blade.php"),
//           path.join(__dirname, "resources/assets/js/**/*.vue")
//         ]),
//         extractors: [
//           {
//             extractor: TailwindExtractor,

//             // Specify the file extensions to include when scanning for
//             // class names.
//             extensions: ["html", "js", "php", "vue"]
//           }
//         ]
//       })
//     ]
//   });
// }
