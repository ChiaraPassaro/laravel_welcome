<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contatti', function () {
//     return 'Contatti';
// });

Route::get('/contatti-new', function () {
    return view('contatti');
})->name('contact');


Route::get('/', function () {
    // $data = [
    //     'name' => 'Chiara',
    //     'lastname' => 'Passaro',
    //     'age' => 41,
    //     'cats' => [
    //         'Gea',
    //         'Arturo'
    //     ]
    // ];

    $data = [
        'teacher' => 'Chiara Passaro',
        'students'  => [
            [
                'name' => 'Chiara',
                'lastname' => 'Passaro',
                'age' => 41,
                'cats' => [
                    'Gea',
                    'Arturo'
                ]
            ],
            [
                'name' => 'Michele',
                'lastname' => 'Papagni',
                'age' => 33,
                'cats' => []
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri',
                'age' => 35,
                'cats' => []
            ]
        ]
    ];

    return view('home', $data);
});

// Route::get('/', function () {
//     return 'La mia Homepage';
// });
