<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.dashboard');
});


Route::/*middleware(['auth'])->*/namespace('App\Http\Controllers\Admin')->group(function(){

Route::prefix('organizacao')->group(function(){
        Route::get('index', ['as' => 'admin.organizacao.index', 'uses'=> 'OrganizacaoController@index']);
        Route::get('create', ['as' => 'admin.organizacao.create.index', 'uses'=> 'OrganizacaoController@create']);
        Route::post('store', ['as' => 'admin.organizacao.store', 'uses'=> 'OrganizacaoController@store']);
        Route::get('edit/{id}', ['as' => 'admin.organizacao.edit.index', 'uses'=> 'OrganizacaoController@edit']);
        Route::post('update/{id}', ['as' => 'admin.organizacao.update', 'uses'=> 'OrganizacaoController@update']);
        Route::get('delete/{id}', ['as' => 'admin.organizacao.delete', 'uses'=> 'OrganizacaoController@delete']);
        Route::get('purge/{id}', ['as' => 'admin.organizacao.purge', 'uses'=> 'OrganizacaoController@purge']);
    });
});
