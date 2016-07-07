@extends('layouts.blog_master')
@section('list-post')

    @if ($posts)
    @foreach ($posts as $post)
    <div class="blog-desc">
        <h4>{{ $post->title }}</h4>
        <ul class="post-meta-links list-inline">
            <li><span> <i class="fa fa-bookmark"></i></span> {{ $post->published_at->format('d F, Y')}}</li>
            <li><span><i class="fa fa-user"></i></span>Edo Nguyen</li>
            <li><span><i class="fa  fa-folder"></i></span>{{ $post->category }}</li>
            <li><span><i class="fa fa-comments"></i></span>0</li>
        </ul>
        <a href="{{ url('/posts') . '/' . $post->slug }}"><img src="/images/blog/{{ ($post->image && strlen($post->image) > 14 ) ? substr($post->image,0,8) . '/' . $post->image : 'pic4.jpg' }}" alt="" class="img-responsive"></a>
        <!--a href="#"> -->
            <!-- <img src="images/blog/{{$post->image}}" alt=""> -->

            <!-- <img src="/images/luffy.jpg" alt="blog_image" class="img-responsive" max-width="700"> -->
        <!-- </a> -->
        <div class="sumary-text">{!! str_limit($post->content, 100) !!}</div>
        <div class="row read-me">
        	<a class="btn btn-primary pull-right" href="{{url('posts/'.$post->slug)}}">Read More >></a>
        </div>
        
    </div>
    @endforeach
    @endif
    <div class="pagination-area text-center">
        <ul class="pagination">
            {!! $posts->render() !!}
        </ul>
    </div>
@endsection
 
