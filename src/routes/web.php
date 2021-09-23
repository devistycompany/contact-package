<?php

Route::group(['namespace' => 'Devisty\Contact\Http\Controllers'], function () {
    Route::resource('contact', ContactController::class);

});
