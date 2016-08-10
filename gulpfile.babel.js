'use strict';

import elixir from 'laravel-elixir';

// Elixir Configurations
elixir.config.assetsPath = 'src';
elixir.config.publicPath = 'dist';

let bowerPath = './bower_components';

elixir((mix) => {
  mix.copy(`${bowerPath}/jquery/dist/jquery.min.js`, 'src/js/vendor/jquery.js');
  mix.copy(`${bowerPath}/jquery-ui/ui/widgets/datepicker.js`, 'src/js/vendor/datepicker.js');
  mix.copy(`${bowerPath}/font-awesome/scss`, 'src/sass/vendor/font-awesome');
  mix.copy(`${bowerPath}/font-awesome/fonts`, 'dist/fonts');

  mix.scripts([
    'vendor/jquery.js',
    'vendor/datepicker.js',
    'components/accordion.js',
    'scripts.js'
  ],'dist/js/metaphor.js');

  mix.sass('metaphor.scss');
  mix.sass('themes/lightning-panel/lightning-panel.scss');
});
