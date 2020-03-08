<?php
Route::group(['middleware' => ['web']], function(){

  // Rotas de uso comum dos leitores
  Route::get ('/', 'PageControlle@index');

  Route::get('/contato','PageControlle@contato');

  Route::post('/register', function(){
      return '';
  });

  Route::get('/about', 'PageControlle@about');

  // rotas do http post
  Route::resource('posts', 'NewsController');
  Route::get('/create', 'NewsController@create');

}
);
