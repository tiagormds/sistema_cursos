<?php

Route::group(['prefix'=>'admin/cursos'], function (){

    Route::get('/', ['as'=>'admin.cursos', 'uses'=>'admin\CursoController@index']);
    Route::get('/adicionar', ['as'=>'admin.adicionar', 'uses'=>'admin\CursoController@adicionar']);
    Route::post('/salvar', ['as'=>'admin.salvar', 'uses'=>'admin\CursoController@salvar']);
    Route::get('/editar/{id}', ['as'=>'admin.editar', 'uses'=>'admin\CursoController@editar']);
    Route::put('/atualizar/{id}', ['as'=>'admin.atualizar', 'uses'=>'admin\CursoController@atualizar']);
    Route::get('/deletar/{id}', ['as'=>'admin.deletar', 'uses'=>'admin\CursoController@deletar']);

});
