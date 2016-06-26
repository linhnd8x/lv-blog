@extends('layouts.app')

@section('title')
Edit Post
@endsection

@section('content')

<!-- TinyMCE 4.x -->
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
  tinymce.init({
    selector: "textarea",
    height: 300,

  // ===========================================
  // INCLUDE THE PLUGIN
  // ===========================================
  
  plugins: [
  "advlist autolink lists link image charmap print preview anchor",
  "searchreplace visualblocks code fullscreen",
  "insertdatetime media table contextmenu paste jbimages"
  ],
  
  // ===========================================
  // PUT PLUGIN'S BUTTON on the toolbar
  // ===========================================
  
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",

  // ===========================================
  // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
  // ===========================================
  
  relative_urls: false
  
});
</script>
<!-- /TinyMCE -->

<form method="post" action='{{ url("posts/update") }}'>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="post_id" value="{{ $post->id }}">
  <div class="form-group">
    <input required="required" placeholder="Enter title here" type="text" name = "title" class="form-control" value="@if(!old('title')){{$post->title}}@endif{{ old('title') }}"/>
  </div>
  <div class="form-group">
    <textarea name='content' class="form-control">
      @if(!old('content'))
      {!! $post->content !!}
      @endif
      {!! old('content') !!}
    </textarea>
  </div>

  <div class="row">
        <div class="form-group">
        <div class="col-sm-6">
            <label class="col-sm-3" for="category">Category:</label>
            <div class="col-sm-9">
                <select class="form-control" id="category_type" required="required" name="category">
                    @foreach($category as $cat)
                        <option value="{{$cat->id}}" {{ ($post->category_id == $cat->id) ? "selected" : '' }}>{{$cat->category}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <label class="col-sm-3 control-label">Publish Date:</label>
            <div class="col-sm-9">
                <div class="input-group">
                    <input name="published_at" type="text" class="form-control datepicker" data-format="yyyy/mm/dd" value="{{ date('Y/m/d', strtotime($post->published_at)) }}">
                </div>
            </div>
        </div>   
    </div>   
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label class="col-sm-3" for="tags">Tags:</label>
            <div class="col-sm-9">
                <input id="tags" name='tags' class="form-control" data-role="tagsinput" value="{{ $tag }}" />
            </div>
        </div>
    </div>

  @if($post->active == '1')
  <input type="submit" name='publish' class="btn btn-success" value = "Update"/>
  @else
  <input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
  @endif
  <input type="submit" name='save' class="btn btn-default" value = "Save As Draft" />
  <a href="{{  url('posts/') }}" class="btn btn-default">Back</a>
  <!-- <a href="{{  url('posts/delete/'.$post->id.'?_token='.csrf_token()) }}" class="btn btn-danger">Delete</a> -->
</form>

<script src="{{ asset('/js/selectboxit/jquery.selectBoxIt.min.js') }}"></script>
<script src="{{ asset('/js/tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('/js/datepicker/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript">
jQuery(document).ready(function($)
{
    $("#category_type").selectBoxIt().on('open', function(){
        $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
    });
});
</script>
@endsection
