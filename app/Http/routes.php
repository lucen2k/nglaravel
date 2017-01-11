<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
	return View::make('index'); // app/views/index.php を出力する
});

// ルートグループ
// フィルターをルートのグループに対して使用する必要がある場合に使う。
// それぞれのルートにフィルターを個別に指定する代わりに、ルートグループを使用できます。
Route::group(['prefix' => 'api'], function(){
	// array('onry')を使うことで、指定されたコントローラー以外へユーザーアクセスを禁止する。
	Route::resource('comments', 'CommentController',
		array('only' => ['index', 'store', 'destroy'])
	);
});


