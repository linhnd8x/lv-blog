@extends('layouts.app')

@section('title')
Add New User
@endsection

@section('content')
<form action="{{ url("user/store") }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="form-group col-sm-6">
          <label class="col-md-4 control-label">Name</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required="required">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-6">
          <label class="col-md-4 control-label">E-Mail Address</label>
          <div class="col-md-6">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required="required">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-6">
          <label class="col-md-4 control-label">Password</label>
          <div class="col-md-6">
            <input type="password" class="form-control" name="password" required="required">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-6">
          <label class="col-md-4 control-label">Confirm Password</label>
          <div class="col-md-6">
            <input type="password" class="form-control" name="password_confirmation" required="required">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-6">
            <label class="col-md-4 control-label" for="role">Role:</label>
            <div class="col-md-6">
                <select class="form-control" id="role" required="required" name="role" >
                    @foreach($role as $key => $rol)
                        <option value="{{ $key }}">{{ $rol }}</option>
                    @endforeach
                </select>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-6">
          <div class="col-md-6 col-md-offset-4">
             <input type="submit" name='save' class="btn btn-success" value = "Save"/>
             <a href="{{  url('user/') }}" class="btn btn-default">Back</a>
          </div>
        </div>
      </div>
</form>
<script src="{{ asset('/js/selectboxit/jquery.selectBoxIt.min.js') }}"></script>
<script type="text/javascript">
jQuery(document).ready(function($)
{
    $("#role").selectBoxIt().on('open', function(){
        $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
    });
});
</script>
@endsection
