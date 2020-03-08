@extends('admin.layouts.app')

@section('content')
  <div class="row">
      <div class="col-md-8">

          <h1>{{ $post -> title }}</h1>
          <p class='lead'>{{ $post -> body }}</p>
          <h6>{{$post -> autor}} - {{date('d/m/o',strtotime($post -> created_at))}}</h6>

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
                    {!! Html::LinkRoute('posts.edit', 'Edit', array($post->id)
                    , array('class' => 'btn btn-primary btn-block'))!!}
                    </div>

                    <div class="col-sm-6">
                    {!! Html::LinkRoute('posts.destroy', 'Delete', array($post->id)
                    , array('class' => 'btn btn-danger btn-block'))!!}
                    </div>

                </div>
            </div>
      </div>

  </div>
@endsection
