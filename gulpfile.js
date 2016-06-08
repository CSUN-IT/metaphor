var elixir = require('laravel-elixir');
var scssLint = require('laravel-elixir-scss-lint');

// Set Base Paths
var basePath = {
  bower: './bower_components',
  styles: {
    src: './src/sass',
    dist: './dist/css'
  },
  scripts: {
    src: './src/js',
    dist: './dist/js'
  },
  fonts: './dist/fonts'
};

elixir(function(mix) {
  mix.copy(basePath.bower + '/jquery/dist/jquery.min.js', 'src/js/vendor/jquery.js');
  mix.copy(basePath.bower + '/jquery-ui/ui/minified/datepicker.min.js', 'src/js/vendor/datepicker.js');

  mix.scripts([
    'vendor/jquery.js',
    'vendor/datepicker.js',
    'scripts.js'
  ], basePath.scripts.dist + '/metaphor.js', basePath.scripts.src );

  mix.sass('metaphor.scss', basePath.styles.dist, basePath.styles.src);

  mix.scssLint();
});
