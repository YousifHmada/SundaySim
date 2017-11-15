var elixir = require('laravel-elixir');

elixir.config.assetsPath = 'public/themes/default/assets';
elixir.config.publicPath = elixir.config.assetsPath;

elixir(function(mix){
  mix.sass('backend.scss');
})