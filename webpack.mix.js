let mix = require('laravel-mix');



mix.less('resources/assets/less/app.less', 'public/css')
   .js('resources/assets/js/app.js','public/js')
   .disableNotifications();

