    @extends('layouts.blog_master')

    @section('single-post')
    <div class="blog-desc">
        <h4>{{ $post->title }}</h4>
        <ul class="post-meta-links list-inline">
            <li><span> <i class="fa fa-bookmark"></i></span> {{ $post->published_at->format('d F, Y')}}</li>
            <li><span><i class="fa fa-user"></i></span> Edo Nguyen</li>
            <li><span><i class="fa  fa-folder"></i></span> {{ $post->category }}</li>
            <li><span><i class="fa fa-comments"></i></span> 0</li>
        </ul>
        {!! $post->content !!}
        
    </div>
    <hr>
    <div class="clearfix"></div>
        <div class="tags1">
            <p>Tags: </p>
            @foreach ($tags as $tag)
				<a href="{{ url('tag/') . '/' . $tag->slug }}">{{ $tag->tag }} </a>
	        @endforeach
        </div>
        <!-- <div class="clearfix"></div> -->
        <div class="share1">
           <h4>Share this :</h4>
            <ul class="social-contact list-inline">
                <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                <li> <a href="#"><i class="fa fa-google-plus"></i> </a></li>
                <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"> <i class="fa fa-pinterest"></i></a></li>
            </ul>
        </div>
	<div class="clearfix"></div>
	<hr>
	<div class="about-auther">
	    <h4>About the Author</h4>
	    <hr>
	     <div class="well">
	        <img src="/images/team/pic1.jpg" alt="alt" class="img-responsive">
	        <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>
	    </div>
	</div><!-- About auther end -->
	<div class="related-post">
	    <h4>Related Posts</h4>
	    <hr>
	    @foreach ($relatepost as $rpost)
	    <div class="col-md-4 col-sm-4">
	        <div class="rel-post">
	        	<a href="{{ url('/posts') . '/' . $rpost->slug }}"><img src="/images/blog/{{ ($rpost->image && strlen($rpost->image) > 14 ) ? substr($rpost->image,0,8) . '/' . $rpost->image : 'pic4.jpg' }}" alt="" class="img-responsive">
	       
	                <div class="caption">
	                    <h4>{{$rpost->title}}</h4>
	            </a>
	                   {!! str_limit($rpost->content, 50) !!}
	                </div>
	            
	        </div>
	    </div>
	    @endforeach
	</div>
	<div class="clearfix"></div>
	<!-- comments start -->
<!-- 	    <div class="comments">
	        <h4>Comments</h4>
	        <hr>
	        <ul class="media-list">
	            <li class="media">
	                <a class="media-left" href="#">
	                    <img src="/images/team/pic5.jpg" alt="alt" class="img-responsive">
	                </a>
	              <div class="media-body">
	                <h4 class="media-heading">Jhohn Milton<span><i>2 july 2014</span></i></h4>
	                <p> Odit nostrum et debitis reiciendis ullam quam corrupti modi, porro similique, voluptatem cumque tempore, ratione libero harum pariatur error veritatis aliquid laboriosam.</p>
	                <a href="#">Reply</a>
	              </div>
	            </li>
	            <li class="media middle">
	                    <a class="media-left" href="#">
	                        <img src="/images/team/pic1.jpg" alt="alt" class="img-responsive" >
	                    </a>
	                  <div class="media-body ">
	                        <h4 class="media-heading">Rack Hasilton <span><i>2 july 2014</span></i></h4>
	                        <p> Odit nostrum et debitis reiciendis ullam quam corrupti modi, porro similique, voluptatem cumque tempore, ratione libero harum pariatur error veritatis aliquid laboriosam.</p>
	                        <a href="#">Reply</a>
	                  </div>
	            </li>
	             <li class="media">
	                    <a class="media-left" href="#">
	                        <img src="/images/team/pic6.jpg" alt="alt" class="img-responsive">
	                    </a>
	                  <div class="media-body">
	                        <h4 class="media-heading">Dim karton<span><i>2 july 2014</span></i></h4>
	                        <p> Odit nostrum et debitis reiciendis ullam quam corrupti modi, porro similique, voluptatem cumque tempore, ratione libero harum pariatur error veritatis aliquid laboriosam.</p>
	                        <a href="#">Reply</a>
	                  </div>
	            </li>
	        </ul>       
	    </div> -->
	<!-- comments End -->
	<!-- <div class="blog-form">
	    <h4>Leave for a <span>comment </span></h4>
	    <hr>
	   
	   <div class="form-group">
	        <div class="col-md-6">
	            <input type="text" class="form-control" placeholder="Name">
	        </div>
	    </div>
	    <div class="form-group">
	        <div class="col-md-6">
	            <input type="email" class="form-control" placeholder="Email">
	        </div>
	    </div>
	    <div class="form-group">
	        <div class="col-md-12">
	            <textarea name="comment" id="" cols="30" rows="7" class="form-control" placeholder="Messege"></textarea>
	        </div>
	     </div>
	     <div class="form-group">
	         <div class="col-md-12">
	             <div class="text-center">
	                   <button class="btn btn-main "> Submit Now </button>
	             </div>
	         </div>
	     </div>
	</div> -->
	@endsection