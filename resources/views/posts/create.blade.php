@extends('layouts.app')

@section('title')
Add New Post
@endsection

@section('content')
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>

<!-- TinyMCE 4.x -->
<script type="text/javascript">
tinymce.init({
  selector: "textarea",
  height: 300,
  force_p_newlines : false,

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

<form action="{{ url("posts/store") }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <div class="form-group">
        <input required="required" placeholder="Enter title here" type="text" name = "title" class="form-control" />
    </div>

    <div class="form-group">
        <textarea id="ck_contents" name='content' class="form-control"></textarea>
    </div>

   <div class="row">
        <div class="form-group">
        <div class="col-sm-6">
            <label class="col-sm-3" for="category">Category:</label>
            <div class="col-sm-9">
                <select class="form-control" id="category_type" required="required" name="category" >
                    @foreach($category as $cat)
                        <option value="{{$cat->id}}">{{$cat->category}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <label class="col-sm-3 control-label">Publish Date:</label>
            <div class="col-sm-9">
                <div class="input-group">
                    <input name="published_at" class="form-control datepicker" data-format="yyyy/mm/dd" />
                </div>
            </div>
        </div>   
    </div>   
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label class="col-sm-3" for="tags">Tags:</label>
            <div class="col-sm-9">
                <input id="tags" name='tags' class="form-control" data-role="tagsinput" />
            </div>
        </div>
        <div class="col-sm-6">
            <label class="col-sm-3 control-label">Thumbnail</label>
            <div class="col-sm-9">
                <div class="input-group">
                    <input type="file" name="img" id="file-upload" style="display:none;" />
                    <input name="image" class="form-control" id="filename" onclick = "openFile();"/>
                </div>
            </div>
        </div>   
    </div>
    

    <div class="form-group">
        <input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
        <input type="submit" name='save' class="btn btn-default" value = "Save As Draft" />
        <a href="{{  url('posts/') }}" class="btn btn-default">Back</a>
    </div>
</form>

<script src="{{ asset('/js/selectboxit/jquery.selectBoxIt.min.js') }}"></script>
<script src="{{ asset('/js/tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('/js/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('/js/upload-file.js') }}"></script>
<script type="text/javascript">
jQuery(document).ready(function($)
{
    $("#category_type").selectBoxIt().on('open', function(){
        $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
    });
});
</script>
@endsection
