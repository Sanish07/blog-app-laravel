@extends('layout.master')
@section('page-content')

@foreach(config("global.posts") as $post)

@if($post['cat'] == 'tech')
<div class="blogs-card">
    <div class="card__header">
        <img src="{{$post['img-data']}}" alt="card__image" class="card__image" width="600" height="250">
    </div>
    <div class="card__body">
        <span class="tag tag-blue">Technology</span>
        <h4> <a href="/blogs/{{$post['id']}}"> {{ $post['title'] }} </a></h4>
    </div>
</div>
@endif

@endforeach
@endsection
