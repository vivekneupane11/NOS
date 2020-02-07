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


Route::get('/xyz', function () {
    return view('admin');
}); 

Route::get('/a', function () {
    return view('test');
}); 

Route::group(['middleware' => 'checkuser'], function(){
   Route::get('/view','postController@viewposts')->name('viewpost');
  
        Route::get('/edit/{id}/product','postController@edit')->name('edit');

 
});
   Route::post('/postedit/{id}/zz','postController@getPostedit')->name('getpostedit');
    Route::post('/admin', 'adminController@index' )->name('admin');
         Route::post('/show-by-id','postController@showbyid')->name('showbyid');
      Route::post('profile','postController@profile')->name('profile');

Route::delete('/delete/{id}/product','postController@delete')->name('delete');


Route::get('/53g3g3v33','adminController@logout')->name('logout');
    Route::post('/post','postController@getPost')->name('getpost');


Route::get('/sunglass','homeController@sunglass')->name('sunglass');
Route::get('/watch','homeController@watch')->name('watch');
Route::get('/bag','homeController@bag')->name('bag');
Route::get('/locket','homeController@locket')->name('locket');
Route::get('/wallet','homeController@wallet')->name('wallet');
Route::get('/purse','homeController@purse')->name('purse');
Route::get('/homes','homeController@index')->name('home');


Route::get('/cart/{id}/get-product-ordered','homeController@order')->name('order');
//Route::post('/send-order/{id}/getorder','ordercontroller@order')->name('orde');


Route::post('/sendmail/{id}','mailcontroller@send')->name('sendmail');
