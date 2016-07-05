
@if($post)
	<div class="container">
	    <h1>{{ $post->title }}</h1>
	    <h5>{{ $post->published_at->format('M jS Y g:ia') }}</h5>
	    <hr>
	    <div class="sumary-text">
			{!! $post->content !!}
		</div>	
	    <hr>
	    <button class="btn btn-primary" onclick="history.go(-1)">Back</button>
 	</div>

	<!-- <div class="sumary-text">
		{!! $post->content !!}
	</div>	
	<div>
		<h2>Leave a comment</h2>
	</div>
	@if(Auth::guest())
		<p>Login to Comment</p>
	@else
		<div class="panel-body">
			<form method="post" action="/comment/add">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="on_post" value="{{ $post->id }}">
				<input type="hidden" name="slug" value="{{ $post->slug }}">
				<div class="form-group">
					<textarea required="required" placeholder="Enter comment here" name = "body" class="form-control"></textarea>
				</div>
				<input type="submit" name='post_comment' class="btn btn-success" value = "Post"/>
			</form>
		</div>
	@endif
	
	<div>
		@if($comments)
		<ul style="list-style: none; padding: 0">
			@foreach($comments as $comment)
				<li class="panel-body">
					<div class="list-group">
						<div class="list-group-item">
							<h3>{{ $comment->author->name }}</h3>
							<p>{{ $comment->created_at->format('M d,Y \a\t h:i a') }}</p>
						</div>
						<div class="list-group-item">
							{!! $comment->body !!}
						</div>
					</div>
				</li>
			@endforeach
		</ul>
		@endif
	</div> -->
@else
404 error
@endif



