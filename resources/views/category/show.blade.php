@extends('layouts.blog_master')
@section('list-post')

    @if ($posts)
    @foreach ($posts as $post)
    <div class="post-item">
        <h3>{{$post->title}}</h3>
        <div class="post-meta">
            <span class='meta'><i class="fa fa-user"></i> Admin</span>
            <span class='meta'><i class="fa fa-calendar"></i> {{date('d M, Y', strtotime($post->created_at))}}</span>
            <span class='meta'><i class="fa fa-clock-o"></i> {{$post->category}}</span>
        </div>
        <a href="{{ url('/posts') . '/' . $post->slug }}"><img src="images/blog/{{ ($post->image && strlen($post->image) > 14 ) ? substr($post->image,0,8) . '/' . $post->image : 'pic4.jpg' }}" alt="" class="img-responsive"></a>
        <!--a href="#"> -->
            <!-- <img src="images/blog/{{$post->image}}" alt=""> -->

            <!-- <img src="/images/luffy.jpg" alt="blog_image" class="img-responsive" max-width="700"> -->
        <!-- </a> -->
        <div class="sumary-text">{!! str_limit($post->content, 100) !!}</div>
        <div class="row read-me">
          <a class="btn btn-primary pull-right" href="{{url('posts/'.$post->slug)}}">Read More</a>
        </div>
        
    </div>
    @endforeach
    @endif
    <div class="pagination-area">
        <ul class="pagination">
            {!! $posts->render() !!}
        </ul>
    </div>
@endsection
 
