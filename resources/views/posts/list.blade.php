<!-- <html>
<head>
  <title>My Blog</title>
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1>My Blog</h1>
    <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
    <hr>
    <ul>
      @foreach ($posts as $post)
        <li>
          <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
          <em>({{ $post->published_at->format('M jS Y g:ia') }})</em>
          <p>
            {{ str_limit($post->content) }}
          </p>
        </li>
      @endforeach
    </ul>
    <hr>
    {!! $posts->render() !!}
  </div>
</body>
</html> -->

<link rel="stylesheet" href="{{ asset('/css/fonts/fontawesome/css/font-awesome.min.css') }}">

<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('/css/fw-core.css') }}">
<link rel="stylesheet" href="{{ asset('/css/fw-forms.css') }}">

<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">


<!-- <script src="{{ asset('/js/jquery.min-2.1.3.js') }}"></script> -->
<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
<!-- Imported styles on this page -->

<!-- Bottom Scripts -->
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/resizeable.js') }}"></script>
<script src="{{ asset('/js/joinable.js') }}"></script>
<script src="{{ asset('/js/fw-toggles.js') }}"></script>

<!-- JavaScripts initializations and stuff -->
<script src="{{ asset('/js/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/js/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/js/fw-custom.js') }}"></script>

<div class="container">
	<div class="row">
		<div class="col-sm-9 offset-sm-2">
  			<h1>Example page header <small>Subtext for header</small></h1>
  		</div>
	</div>
</div>


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 offset-sm-2 main-content">
                <div class="blog-post-area">
                    @if ($posts)
                    @foreach ($posts as $post)
                    <div class="single-blog-post">
                        <h3>{{$post->title}}</h3>
                        <div class="post-meta">
                            <span class='meta'><i class="fa fa-user"></i> Admin</span>
                            <span class='meta'><i class="fa fa-calendar"></i> {{date('d M, Y', strtotime($post->created_at))}}</span>
                            <span class='meta'><i class="fa fa-clock-o"></i> {{$post->category}}</span>
                        </div>
                        <!-- <a href=""> -->
                            <!-- <img src="images/blog/{{$post->image}}" alt=""> -->
                            <!-- <img src="/images/luffy.jpg" alt="blog_image" class="img-responsive" max-width="700"> -->
                        <!-- </a> -->
                        <div class="sumary-text">{!! str_limit($post->content, 300) !!}</div>
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
                </div>
            </div>
			<div class="col-sm-3">
				<div class="list-group">
					<p class="list-group-item">CATEGORIES</p>
						@if ($categories)
	                    @foreach ($categories as $category)
	                    	<a href="{{url('category/'.$category->slug)}}" class="list-group-item"> <span class="badge badge-info">{!! $category->postItems !!}</span>{!!$category->category!!}</a> 
	                    @endforeach
                   	 	@endif
					<a href="#" class="list-group-item"> <span class="badge badge-info">14</span>Sent mail</a> 
					<a href="#" class="list-group-item"> <span class="badge badge-danger">11</span>Drafts</a> 
					<a href="#" class="list-group-item"> <span class="badge badge-success">3</span>All mail</a> 
					<a href="#" class="list-group-item"> <span class="badge badge-warning">7</span>Spam</a> 
				</div>

				<div class="panel-body">

			   <h5>TAGS</h5>
			   <div class="bs-example">
			   		@if ($tags)
	                    @foreach ($tags as $tag)
	                    	<a href="{{url('tag/'.$tag->slug)}}" class="label label-default">{!! $tag->tag !!}</a> 
	                    @endforeach
                   	 	@endif
			      <div class="label label-default">Default</div>
			      <div class="label label-primary">Primary</div>
			      <div class="label label-secondary">Secondary</div>
			      <div class="label label-info">Info</div>
			      <div class="label label-warning">Warning</div>
			      <div class="label label-danger">Danger</div>
			      <div class="label label-success">Success</div>
			      <div class="label label-purple">Purple</div>
			      <div class="label label-red">Red</div>
			      <div class="label label-blue">Blue</div>
			   </div>
			</div>
			</div>
        </div>
    </div>
</section>