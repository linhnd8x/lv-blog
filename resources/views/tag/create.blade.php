@extends('layouts.app')

@section('title')
Add New Tag
@endsection

@section('content')
<form action="{{ url("tag/store") }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
      <div class="form-group col-sm-6">
        <input required="required" placeholder="Enter tag here" type="text" name = "tag" class="form-control" />
      </div>
    </div>
      <div class="form-group">
          <input type="submit" name='save' class="btn btn-success" value = "Save"/>
          <a href="{{  url('tag/') }}" class="btn btn-default">Back</a>
      </div>
</form>
@endsection
