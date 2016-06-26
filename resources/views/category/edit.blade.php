@extends('layouts.app')

@section('title')
Edit Category
@endsection

@section('content')
<form action="{{ url("category/update") }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" value="{{ $categories->id }}">
    <div class="col-sm-6">
      <div class="form-group">
        <input required="required" placeholder="Enter category here" type="text" name = "category" class="form-control" value="@if(!old('category')){{$categories->category}}@endif{{ old('category') }}" />
      </div>
      <div class="form-group">
          <input type="submit" name='save' class="btn btn-success" value = "Save"/>
          <a href="{{  url('category/') }}" class="btn btn-default">Back</a>
      </div>
    </div>
    
</form>
@endsection