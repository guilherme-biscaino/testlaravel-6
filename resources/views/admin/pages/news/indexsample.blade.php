@extends('admin.layouts.app')
@section('content')
      <!-- inicio do jumbotram/carousel -->
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
              <h1 class="display-4">Post em destaque</h1>
              <hr class="my-2">
              <p>breve resumo do post</p>
              <a class="btn btn-primary btn-lg" href="#" role="button">acesso</a>
          </div>
        </div>
      </div>
      <!-- fim do jumbotram/carousel -->


      <!-- Inicio da listagem de post -->
      <div class="row">
        <div class="col-md-8">
          <div class="post">
              <h3>post title</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisicia deserunt mollit anim id est laborum.</p>
              <a href="#" class="btn btn-primary">Ler mais</a>
          </div>
          <div class="post">
              <h3>post title</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisicia deserunt mollit anim id est laborum.</p>
              <a href="#" class="btn btn-primary">Ler mais</a>
          </div>
          <div class="post">
              <h3>post title</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisicia deserunt mollit anim id est laborum.</p>
              <a href="#" class="btn btn-primary">Ler mais</a>
          </div>
        </div>

        <div class="col-md-3 col-md-offset-1">
          <h2>AdSense<h2>
        </div>
      </div>
@endsection('content')
