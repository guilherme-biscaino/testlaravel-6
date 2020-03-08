@extends('admin.layouts.app')
@section('title', '| Todos posts')
@section('content')
<br>
  <div class="row">
    <div class="col-md-10">
        <h1>Todos Posts</h1>
    </div>

    <div class="col-md-2">
        <a href="{{route('posts.create')}}" class="btn btn-lg btn-primary btn-box"> Novo post</a>
    </div>

    <div class="col-md-12">
        <hr>
    </div>

  </div>

    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <th>id</th>
            <th>title</th>
            <th>Body</th>
            <th>Create at</th>
            <th>Autor</th>
            <th></th>
          </thead>

          <tbody>

            @foreach($posts as $post)
              <tr>
                <th>{{$post -> id}}</th>
                <td>{{$post -> title}}</td>
                <td>{{substr($post -> body, 0, 40)}}{{strlen($post->body)>50?'...':''}}</td>
                <td>{{date('d/m/o',strtotime($post -> created_at))}}</td>
                <td>{{$post -> autor}}</td>
                <td>
                  {!! Html::LinkRoute('posts.show', 'ver', array($post->id), array('class' => 'btn btn-outline-secondary'))!!}
                  {!! Html::LinkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-outline-primary'))!!}
                  {!! Html::LinkRoute('posts.destroy', 'Delete', array($post->id), array('class' => 'btn btn-outline-danger'))!!}
                </td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
<hr>

@stop
