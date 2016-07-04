@extends('layouts.app')

@section('title')
Edit Tag
@endsection

@section('content')
<form action="{{ url("tag/update") }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" value="{{ $tags->id }}">
    <div class="col-sm-6">
      <div class="form-group">
        <input required="required" placeholder="Enter tag here" type="text" name = "tag" class="form-control" value="@if(!old('tag')){{$tags->tag}}@endif{{ old('tag') }}" />
      </div>
      <div class="form-group">
          <input type="submit" name='save' class="btn btn-success" value = "Save"/>
          <a href="{{  url('tag/') }}" class="btn btn-default">Back</a>
      </div>
    </div>
    
</form>
@endsection