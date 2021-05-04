const mix = require('laravel-mix');
const AdminEShopResourcesPath = 'resources/views/themes/admins/e-shop/';
const FrontendEShopResourcesPath = 'resources/views/themes/frontends/e-shop/';
const AdminEShopPublicPath = 'public/themes/admins/e-shop/';
const FrontendEShopPublicPath = 'public/themes/frontends/e-shop/';
const GorlabsAssets = 'gorlabs/assets/';


//Admin /E-Shop/Gorlabs Mixing
mix.copy(AdminEShopResourcesPath + GorlabsAssets + 'css/fonts.css', AdminEShopPublicPath + 'gorlabs/css/fonts.css');
mix.copy(AdminEShopResourcesPath + GorlabsAssets + 'css/fonts-rtl.css', AdminEShopPublicPath + 'gorlabs/css/fonts-rtl.css');
mix.copy(AdminEShopResourcesPath + GorlabsAssets + 'js/demo.js', AdminEShopPublicPath + 'gorlabs/js/demo.js');
mix.copy(AdminEShopResourcesPath + GorlabsAssets + 'img', AdminEShopPublicPath + 'gorlabs/img');
mix.copy(AdminEShopResourcesPath + GorlabsAssets + 'fonts', AdminEShopPublicPath + 'gorlabs/fonts');
mix.copy(AdminEShopResourcesPath + GorlabsAssets + 'flag-icon/flags', AdminEShopPublicPath + 'gorlabs/flags');
mix.copy(AdminEShopResourcesPath + GorlabsAssets + 'css/gorlabs.css.map', AdminEShopPublicPath + 'gorlabs/css');
mix.copy(AdminEShopResourcesPath + GorlabsAssets + 'js/plugin/data-tables/css/images', AdminEShopPublicPath + 'gorlabs/css/images');
mix.copy(AdminEShopResourcesPath + GorlabsAssets + 'css/bootstrap.min.css.map', AdminEShopPublicPath + 'gorlabs/css');
mix.copy(AdminEShopResourcesPath + GorlabsAssets + 'js/plugin/bootstrap-toggle/bootstrap-toggle.min.js.map', AdminEShopPublicPath + 'gorlabs/js');
mix.js('resources/js/app.js', AdminEShopPublicPath + 'gorlabs/js')
    .combine([
        AdminEShopResourcesPath + GorlabsAssets +  'js/gorlabs.js',
        AdminEShopResourcesPath + GorlabsAssets +  'js/gorlabs-modal.js',
        AdminEShopResourcesPath + GorlabsAssets +  'js/setting-demo.js',
        AdminEShopResourcesPath + GorlabsAssets +  'js/webfont.min.js',
    ], AdminEShopPublicPath + 'gorlabs/js/gorlabs.js')
    .combine([
        AdminEShopResourcesPath + GorlabsAssets +  'js/datatables/data-tables.min.js',
    ], AdminEShopPublicPath + 'gorlabs/js/datatables/data-tables.min.js')
    .combine([
        AdminEShopResourcesPath + GorlabsAssets +  'js/vmap.js',
    ], AdminEShopPublicPath + 'gorlabs/js/vmap.js')
    .combine([
        AdminEShopResourcesPath + GorlabsAssets +  'js/demo.js',
    ], AdminEShopPublicPath + 'gorlabs/js/demo.js')
    .combine([
        AdminEShopResourcesPath + GorlabsAssets +  'js/chart.js',
    ], AdminEShopPublicPath + 'gorlabs/js/chart.js')
    .styles([
        AdminEShopResourcesPath + GorlabsAssets + 'css/gorlabs.css',
        AdminEShopResourcesPath + GorlabsAssets + 'css/flag-icon/css/flag-icon.css',
    ], AdminEShopPublicPath + 'gorlabs/css/gorlabs.css')
    .styles([
        AdminEShopResourcesPath + GorlabsAssets + 'css/gorlabs-rtl.css',
        AdminEShopResourcesPath + GorlabsAssets + 'css/flag-icon/css/flag-icon.css',
    ], AdminEShopPublicPath + 'gorlabs/css/gorlabs-rtl.css')
    .sourceMaps()
mix.version()
    .browserSync('eprepare.test');

