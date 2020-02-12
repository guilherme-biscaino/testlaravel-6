<?php

// Rotas de uso comum dos leitores
Route::get ('/', 'NewsController@index');

Route::get('/contato','PageControlle@contato');

Route::post('/register', function(){
    return '';
});

Route::get('/about', 'PageControlle@about');

// Configuração das rotas de categoria

Route::get('/categorias/{cat}', function($cat){
  return "as noticias da categoria: {$cat}";
});

Route::get('/categoria/{cat}/posts', function($cat){
  return "posts da categoria: {$cat}";
});


// Configuração das rotas de posts
Route::get('/post/{id}', 'Newscontroller@show')->name('post.show');

Route::redirect('/redirect', 'https://www.google.com');



// Rotas administrativas
Route::group([
    'middleware' => [],
    'prefix' => 'admin',
],
function()
{
  Route::name('admin.')->group(function ()
  {
      Route::get('/dashboard', 'NewsController@teste')->name('dashboard');

      Route::redirect('/', function(){
        return redirect()->route('dashboard');
      })->name('home');

      Route::get('/postagens', 'NewsController@teste')->name('postagens');

// Manejamento de posts
/*
      Route::get('/post/create', 'NewsControlle@create')->name('post.create');

      Route::get('/post/{id}/preview', 'NewsControlle@teste')->name('preview');

      Route::get('/post/{id}/edit', 'Newscontrolle@edit')->name('post.edit');

      Route::post('/post/store', 'Newscontrolle@store')->name('post.store');

      Route::put('/post/{id}', 'Newscontrolle@update')->name('post.update');

      Route::delete('/post/{id}', 'Newscontrolle@destroy')->name('post.destroy');
*/
      Route::resource('posts', 'Newscontroller');
    });
});

Route::get('/login', function(){
  return 'pagina de login';
})->name('login');
