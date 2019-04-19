<?php
if (App::environment('production')) {
    URL::forceScheme('https');
}
Route::get('storefront', [
    'as' => 'admin.storefront.settings.edit',
    'uses' => 'StorefrontController@edit',
    'middleware' => 'can:admin.storefront.edit',
]);

Route::put('storefront', [
    'as' => 'admin.storefront.settings.update',
    'uses' => 'StorefrontController@update',
    'middleware' => 'can:admin.storefront.edit',
]);
