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
    return view('site.index');
});


Route::middleware(['auth'])->group(function(){


});

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'),'verified',
])->group(function () {



    Route::/*middleware(['auth'])->*/namespace('App\Http\Controllers\Admin')->group(function(){

        Route::get('/dash', function () {
            return view('admin.dashboard');});


        Route::prefix('organizacao')->group(function(){
                Route::get('index', ['as' => 'admin.organizacao.index', 'uses'=> 'OrganizacaoController@index']);
                Route::get('create', ['as' => 'admin.organizacao.create.index', 'uses'=> 'OrganizacaoController@create']);
                Route::post('store', ['as' => 'admin.organizacao.store', 'uses'=> 'OrganizacaoController@store']);
                Route::get('edit/{id}', ['as' => 'admin.organizacao.edit.index', 'uses'=> 'OrganizacaoController@edit']);
                Route::post('update/{id}', ['as' => 'admin.organizacao.update', 'uses'=> 'OrganizacaoController@update']);
                Route::get('delete/{id}', ['as' => 'admin.organizacao.delete', 'uses'=> 'OrganizacaoController@delete']);
                Route::get('purge/{id}', ['as' => 'admin.organizacao.purge', 'uses'=> 'OrganizacaoController@purge']);
            });

            Route::prefix('membro')->group(function(){
                Route::get('index', ['as' => 'admin.membro.index', 'uses'=> 'UserController@index']);
                Route::get('create', ['as' => 'admin.membro.create.index', 'uses'=> 'UserController@create']);
                Route::post('store', ['as' => 'admin.membro.store', 'uses'=> 'UserController@store']);
                Route::get('edit/{id}', ['as' => 'admin.membro.edit.index', 'uses'=> 'UserController@edit']);
                Route::post('update/{id}', ['as' => 'admin.membro.update', 'uses'=> 'UserController@update']);
                Route::get('delete/{id}', ['as' => 'admin.membro.delete', 'uses'=> 'UserController@delete']);
                Route::get('purge/{id}', ['as' => 'admin.membro.purge', 'uses'=> 'UserController@purge']);
            });


            Route::prefix('associado')->group(function(){
                Route::get('index', ['as' => 'admin.associado.index', 'uses'=> 'AssociadoController@index']);
                Route::get('create', ['as' => 'admin.associado.create.index', 'uses'=> 'AssociadoController@create']);
                Route::post('store', ['as' => 'admin.associado.store', 'uses'=> 'AssociadoController@store']);
                Route::get('edit/{id}', ['as' => 'admin.associado.edit.index', 'uses'=> 'AssociadoController@edit']);
                Route::post('update/{id}', ['as' => 'admin.associado.update', 'uses'=> 'AssociadoController@update']);
                Route::get('delete/{id}', ['as' => 'admin.associado.delete', 'uses'=> 'AssociadoController@delete']);
                Route::get('purge/{id}', ['as' => 'admin.associado.purge', 'uses'=> 'AssociadoController@purge']);
            });

            Route::prefix('voluntario')->group(function(){
                Route::get('index', ['as' => 'admin.voluntario.index', 'uses'=> 'VoluntarioController@index']);
                Route::get('create', ['as' => 'admin.voluntario.create.index', 'uses'=> 'VoluntarioController@create']);
                Route::post('store', ['as' => 'admin.voluntario.store', 'uses'=> 'VoluntarioController@store']);
                Route::get('edit/{id}', ['as' => 'admin.voluntario.edit.index', 'uses'=> 'VoluntarioController@edit']);
                Route::post('update/{id}', ['as' => 'admin.voluntario.update', 'uses'=> 'VoluntarioController@update']);
                Route::get('delete/{id}', ['as' => 'admin.voluntario.delete', 'uses'=> 'VoluntarioController@delete']);
                Route::get('purge/{id}', ['as' => 'admin.voluntario.purge', 'uses'=> 'VoluntarioController@purge']);
            });
        });

});
