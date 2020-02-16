@extends('admin.layouts.app')

@section('title', '| Criação de post')

@section('style')
  {!!Html::style('css/parsley.css')!!}
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Escreva um novo post</h1>
    <hr>
    {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
        {{Form::label('title', 'Titulo:')}}
        {{Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '150'))}}

        {{Form::label('body', 'Escreva o conteúdo do post:')}}
        {{Form::textarea('body', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '3000'))}}

        {{Form::label('autor', 'autor do post:')}}
        {{Form::text('autor', null, array('class' => 'form-control', 'required' => ''))}}

        {{Form::submit('Criar Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 2%'))}}
    {!! Form::close() !!}
  </div>
</div>

@endsection

@section('script')
{!!Html::script('js/parsley.min.js')!!}
@endsection
