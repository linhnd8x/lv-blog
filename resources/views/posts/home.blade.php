@extends('layouts.app')
@section('title')
{{$title}}
@endsection
@section('content')
@if ( !$posts->count() )
There is no post till now. Login and write a new post now!!!
@else
<div class="">
  <table border="1">
  <tr>
      <th>ID</th>
      <th>TITLE</th>
      <th>STATUS</th>
      <th>CREATE DATE</th>
      <th>ACTION</th>
  </tr>

  @foreach( $posts as $post )
  <tr>
      <td>{{$post->id}}</td>
      <td><a href="{{ url('posts/'.$post->slug) }}">{{ $post->title }}</a></td>
      <td>
         @if($post->active == '1')
            <a href="{{ url('posts/unpusblished') }}">Unpublished</a>
          @else
            <a href="{{ url('posts/pusblished') }}">Published</a>
          @endif 
      </td>
      <td>{{$post->created_at}}</td>
      <td>
        @if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
            <button class="btn" class="btn btn-success"><a href="{{ url('posts/edit/'.$post->slug)}}">Edit</a></button>
            <button class="btn" class="btn btn-success"><a href="{{ url('posts/delete/'.$post->id)}}">Delete</a></button>
          @endif
      </td>
  </tr>
  <!-- <div class="list-group">
    <div class="list-group-item">
      <h3><a href="{{ url('posts/'.$post->slug) }}">{{ $post->title }}</a>
        @if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
          @if($post->active == '1')
          <button class="btn" style="float: right"><a href="{{ url('posts/edit/'.$post->slug)}}">Edit Post</a></button>
          @else
          <button class="btn" style="float: right"><a href="{{ url('posts/edit/'.$post->slug)}}">Edit Draft</a></button>
          @endif
        @endif
      </h3>
      <p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} By <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a></p>
    </div>
    <div class="list-group-item">
      <article>
        {!! str_limit($post->body, $limit = 1500, $end = '....... <a href='.url("/".$post->slug).'>Read More</a>') !!}
      </article>
    </div>
  </div> -->
  @endforeach
  </table>
  {!! $posts->render() !!}
</div>
@endif
@endsection