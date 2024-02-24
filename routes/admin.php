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

Route::/*middleware(['auth'])->*/namespace('App\Http\Controllers\Admin')->group(function(){

Route::prefix('organizacao')->group(function(){
        Route::get('organizacao', ['as' => 'admin.organizacao.index', 'uses'=> 'OrganizacaoController@index']);

    });
});
