var elixir = require('laravel-elixir');

elixir.config.assetsPath = 'public/themes/default/assets';
elixir.config.publicPath = elixir.config.assetsPath;

elixir.config.css.sass.pluginOptions.includePaths = [
	"node_modules/bootstrap-sass/assets/stylesheets"
];

elixir(function(mix){
  mix.sass('backend.scss');
})