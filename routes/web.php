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

Route::get('/', function () {
    return view('index');
});

Route::get('/test/', 'TestController@index');
Route::get('/test/{id?}', function ($name = null) {
    return 'ok~!';
});

Route::get('list', 'ListController@main');

Route::get('excel_download', 'ExcelDownload@export');

//Route::get('user/{id}', function ($id) {
//    return 'User ' . $id;
//});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return $postId . '-' . $commentId;
});


Route::get('users/{name?}', function ($name = null) {
    return $name;
});

Route::get('users/{name?}', function ($name = 'John') {
    return $name;
});

Route::get('user/profile', function () {
    // 通过路由名称生成 URL
    return 'my url: ' . route('profile');
})->name('profile');

Route::get('user/profile', 'UserController@showProfile')->name('profile');


//Route::get('user/{name}', function ($name) {
//    // $name 必须是字母且不能为空
//})->where('name', '[A-Za-z]+');

//Route::get('user/{id}', function ($id) {
//    // $id 必须是数字
//})->where('id', '[0-9]+');

Route::get('user/{id}/{name}', function ($id, $name) {
    // 同时指定 id 和 name 的数据格式
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


Route::get('form_without_csrf_token', function (){
    return '<form method="POST" action="/hello_from_form"><button type="submit">提交</button></form>';
});

Route::get('form_with_csrf_token', function () {
    return '<form method="POST" action="/hello_from_form">' . csrf_field() . '<button type="submit">提交</button></form>';
});

Route::post('hello_from_form', function (){
    return 'hello laravel!';
});


Route::get('usera/{id}', 'ShowProfile')->middleware('auth');

Route::group(['domain'=>'http://gng.com'], function(){
    Route::group(['namespace'=>'Front'], function(){
        Route::group(['middleware'=>'front.login'], function(){
            Route::get('abc', 'IndexController@index');
        });
    });
});

Route::resource('posts', 'PostController');
Route::post('posts/deleteItem', 'PostController@deleteItem');


Route::get('/test/crypt', function (){
    $raw_str = encrypt('Laravel学院');
    $decrypted_str = decrypt($raw_str);
    dd(['after_encryt' => $raw_str, 'after_decrypt' => $decrypted_str]);
});

//API token
Route::middleware('auth:api');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/register', 'Auth\ApiController@register');
// Route::post('/login', 'Auth\ApiController@login');
// Route::post('/refresh', 'Auth\ApiController@refresh');
// Route::post('/logout', 'Auth\ApiController@logout');
// 20000

// 20000

// 80000

