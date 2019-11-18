<?php



Auth::routes();

// Route::middleware('auth')->view('/', 'mainpage', [ 'user' => auth()->user()->email ] );

// Route::get('/', ['middleware' => 'auth', function () {
//     $email = auth()->user()->email;
//     $view = Route::view('/', 'mainpage', [ 'user' => $email]);
//     return $email;
// }]);

// Route::view('/','mainpage', [ 'email' => $email ]);
// Route::view('/','mainpage', [ 'email' => 'SM@naver.com' ]);

Route::get('/', function () {
    if( auth()->check() ){
        $email = auth()->user()->email; 
        return view('mainpage', [ 'email' => $email ]);
    }
    else{
        return view('mainpage', [ 'email' => '-' ]);
    }
    // $view = Route::view('/', 'mainpage', [ 'email' => $email ]);
    // return view('mainpage', [ 'email' => $email ]);
});

Route::get('/logged', 'LoggedController@index')->name('logged');
