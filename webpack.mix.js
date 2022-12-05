let mix = require('laravel-mix');
mix.options({
  autoprefixer: false,
  postCss: [
    require('autoprefixer')({
      remove: false,
      overrideBrowserslist: ['last 1000 versions']
    })
  ]
});
mix.sass('src/scss/core/reset.scss', 'assets/css/core/reset.css')
.sass('src/scss/style.scss', 'assets/css/style.css')
.sass('src/scss/pages/landing_page.scss', 'assets/css/pages/landing_page.css');