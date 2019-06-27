<?php

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

//old thing routin

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/','HomeController@index');

// Route::get('/contact', function(){
//     return view('contact');
// });

//new thing...shrot..clean...single line routing
// Route::get('about', function(){
//     return view('pages.about');
// });

Route::view('/about','pages.about')->middleware('test');

Route::get('/contact','ContactController@create')->name('contact.create');
Route::post('/contact','ContactController@store')->name('contact.store');

Route::get('/customers','CustomerController@index');
Route::get('/customers/add_new','CustomerController@add_new');
Route::post('/customer','CustomerController@store');
Route::get('/customers/{customerSingleDetails}','CustomerController@sho');
Route::get('/customers/{customerSingleDetails}/edit','CustomerController@edit');
Route::patch('/customers/{customerSingleDetails}','CustomerController@update')->name('customers.update');
Route::delete('/customers/{customerSingleDetails}','CustomerController@delete');


Route::get('/test', function(){
    $data = [
        'nfew','test',4535,'fajsdkjfk'
    ];
   
    return view('test',[
        'r_data'=>$data
    ]);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
