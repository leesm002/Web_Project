<?php



Auth::routes();

// Route::middleware('auth')->view('/', 'mainpage', [ 'user' => auth()->user()->email ] );


Route::get('/', ['middleware' => 'auth', function () {
    return auth()->user()->email;
}]);

// Route::view('/','mainpage', [ 'user' => $email ]);

Route::get('/logged', 'LoggedController@index')->name('logged');
