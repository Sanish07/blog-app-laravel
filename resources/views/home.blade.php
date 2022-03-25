@extends('layout.master')
@section('page-content')

@foreach(config("global.posts") as $post)

@if($post['cat'] == 'nature')
<div class="blogs-card">
    <div class="card__header">
        <img src="{{$post['img-data']}}" alt="card__image" class="card__image" width="600" height="250">
    </div>
    <div class="card__body">
        <span class="tag tag-green">Nature</span>
        <h4> <a href="/blogs/{{$post['id']}}"> {{ $post['title'] }} </a></h4>
    </div>
</div>
@endif

@if($post['cat'] == 'sports')
<div class="blogs-card">
    
    <div class="card__header">
        <img src="{{$post['img-data']}}" alt="card__image" class="card__image" width="600" height="250">
    </div>
    <div class="card__body">
        <span class="tag tag-brown">Sports</span>
        <h4> <a href="/blogs/{{$post['id']}}"> {{ $post['title'] }} </a></h4>
    </div>
</div>
@endif

@if($post['cat'] == 'ent')
<div class="blogs-card">
    <div class="card__header">
        <img src="{{$post['img-data']}}" alt="card__image" class="card__image" width="600" height="250">
    </div>
    <div class="card__body">
        <span class="tag tag-red">Entertainment</span>
        <h4> <a href="/blogs/{{$post['id']}}"> {{ $post['title'] }} </a></h4>
    </div>
</div>
@endif

@if($post['cat'] == 'food')
<div class="blogs-card">
    <div class="card__header">
        <img src="{{$post['img-data']}}" alt="card__image" class="card__image" width="600" height="250">
    </div>
    <div class="card__body">
        <span class="tag tag-yellow">Food</span>
        <h4> <a href="/blogs/{{$post['id']}}"> {{ $post['title'] }} </a></h4>
    </div>
</div>
@endif

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