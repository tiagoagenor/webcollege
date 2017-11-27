var elixir = require('laravel-elixir');

elixir(function(mix){

    let styles = [
                    '../../../node_modules/vue/dist/vue.min.js'
                ];

    mix.styles(styles,'public/css/style.css');
});