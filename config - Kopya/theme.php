<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Path to directory with themes
    |--------------------------------------------------------------------------
    |
    | The directory with your themes.
    |
    */

    'path' => base_path('resources/views/themes'),
    'admin_path' => base_path('resources/views/themes/admins'),
    'frontend_path' => base_path('resources/views/themes/frontends'),
    'partial_path' => base_path('resources/views/themes/partials'),
    'common_path' => base_path('resources/views/themes/commons'),

    'resourceContainer' => array(
        'path' => base_path('resources/views/themes'),
        'admin_path' => base_path('resources/views/themes/admins'),
        'frontend_path' => base_path('resources/views/themes/frontends'),
        'partial_path' => base_path('resources/views/themes/partials'),
        'common_path' => base_path('resources/views/themes/commons'),
    ),
    'baseContainerDir' => array(
        '0' => 'accounting',
        '1' => 'company',
        '2' => 'e-shop',
        '3' => 'marketplace',
        '4' => 'production',
        '5' => 'school',
    ),
    /*
    |--------------------------------------------------------------------------
    | Path to directory with assets
    |--------------------------------------------------------------------------
    |
    | The directory with assets.
    |
    */
    'assets_path' => public_path('themes'),
    'assets_admin_path' => public_path('themes/admins'),
    'assets_frontend_path' => public_path('themes/frontends'),

    'publicContainer' => array(
        'assets_path' => public_path('themes'),
        'assets_admin_path' => public_path('themes/admins'),
        'assets_frontend_path' => public_path('themes/frontends'),
        'assets_mobile_path' => public_path('themes/mobiles'),
    ),
    /*
    |--------------------------------------------------------------------------
    | A pieces of theme collections
    |--------------------------------------------------------------------------
    |
    | Inside a theme path we need to set up directories to
    | keep "layouts", "assets" and "partials".
    |
    */
    'assetContainerDir' => array(
        'css' => 'css',
        'js' => 'js',
        'fonts' => 'fonts',
        'images' => 'images',
        'ajax' => 'ajax',
        'videos' => 'videos',
        'sass' => 'sass',
    ),
    'containerDir' => array(
        'assets' => 'assets',
        'layout' => 'layouts',
        'partial' => 'partials',
        'common' => 'commons',
        'view' => 'views',
    ),
    'themeTypes' => array(
        'admin' => 'Admin',
        'frontend' => 'Frontend',
    ),

    'viewsContainerDir' => array(
        'auth' => 'auth',
        'pages' => 'pages',
        'panels' => 'panels'
    ),
);
