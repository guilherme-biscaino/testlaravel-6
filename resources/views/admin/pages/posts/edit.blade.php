@extends('admin.layouts.app')

@section('style')
  {!!Html::style('css/parsley.css')!!}
@endsection

@section('content')
{!! Form::model($post, ['route'=> ['posts.update', $post->id], 'method' => 'PATCH']) !!}
<div class="row">

<div class="col-md-8">
  {!! Form::label('title', 'title:') !!}
  {!! Form::text('title', null , ['class' => 'form-control']) !!}
  {!! Form::label('body', 'body:') !!}
  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

</div>


<div class="col-md-4">
    <div class="well">
        <dl class="dl-horizontal">
          <dt>criado por:<dt>
          <dd><h6>{{$post -> autor}}</h6><dd>
        <dl>

        <dl class="dl-horizontal">
          <dt>em:<dt>
          <dd><h6>{{date('d/m/o',strtotime($post -> created_at))}}</h6><dd>
        <dl>
        <hr>


        <div class="row">
            <div class="col-sm-6">
            {!! Html::LinkRoute('posts.show', 'Cancel', array($post->id)
            , array('class' => 'btn btn-danger btn-block'))!!}
            </div>

            <div class="col-sm-6">
              {!! Form::submit('save', ['class' => 'btn btn-success btn-block', 'method' => 'PATCH']) !!}
            </div>

        </div>
    </div>
</div>
{!! Form::close() !!}
</div>
@endsection
