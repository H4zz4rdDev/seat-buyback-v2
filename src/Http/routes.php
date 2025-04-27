<?php

Route::group([
    'namespace' => 'h4zz4rddev\Seat\SeatBuybackV2\Http\Controllers',
    'middleware' => ['web', 'auth', 'locale'],
], function () {
    Route::prefix('/buyback')
        ->group(function () {
            Route::get('/')
                ->name('seatbuybackv2.home')
                ->uses('BuybackV2DashboardController@getHome');
        });
});