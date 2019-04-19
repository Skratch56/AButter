<?php
if (App::environment('production')) {
    URL::forceScheme('https');
}
Route::get('products/{slug}/quick-view', 'ProductQuickViewController@show')->name('products.quick_view.show');
