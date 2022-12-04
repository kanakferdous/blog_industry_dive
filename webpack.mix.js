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
mix.sass('src/scss/core/reset.scss', 'assets/css/core/reset.css');