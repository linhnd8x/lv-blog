@extends('layouts.master')

@section('blog')
<!-- bLOG Start -->
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title">My <b>Blog</b></h3>
                    <h4 class="feature_sub">This is note my experience. </h4>
                    <div class="divider"></div>
                </div>
            </div>  <!-- Col-md-12 End -->
        </div>
        <div class="row">
             <div class="blog-timeline">
                <div id="owl-blog" class="owl-carousel owl-theme">
                	@if ($posts)
	                    @foreach ($posts as $post)
                    	<div class="item ">
	                        <div class="single_blog">
	                            <div class="post_img text-center">
	                               <a href="{{ url('/posts') . '/' . $post->slug }}"><img src="images/blog/{{ ($post->image && strlen($post->image) > 14 ) ? substr($post->image,0,8) . '/' . $post->image : 'pic4.jpg' }}" alt="" class="img-responsive"></a>
	                                <div class="post-date">
	                                    <span>{{ $post->published_at->format('d') }}</span> {{ $post->published_at->format('m') }}
	                                </div>
	                            </div>
	                            <a href="{{ url('/posts'). '/' . $post->slug }}"><h4>{{ $post->title }}</h4></a>
	                            <ul class="list-inline">
	                                <li> <i class="fa fa-pencil"></i> Edo Nguyen</li>
	                                <li> <i class="fa fa-comments"></i> 0</li>
	                            </ul>
	                            <p>{!! str_limit($post->content, 50) !!}</p>
	                        </div>
                    	</div>
						@endforeach
					@endif
                </div>
            </div> <!-- blog Timeline End -->
        </div>
    </div>
</section>
<!-- bLOG End -->
@endsection