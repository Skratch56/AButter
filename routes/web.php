<?php
if (App::environment('production')) {
    URL::forceScheme('https');
}
Route::get('install/pre-installation', 'InstallController@preInstallation');
Route::get('install/configuration', 'InstallController@getConfiguration');
Route::post('install/configuration', 'InstallController@postConfiguration');
Route::get('install/complete', 'InstallController@complete');
Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return '<h1>Config cache cleared successfully</h1>';
});