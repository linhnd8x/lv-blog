@extends('layouts.app')
@section('content')
<!-- MAIN CONTENT -->
<div class="row">
  <!-- Conversation -->
  <div class="col-sm-12 view-list-tbl">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"> {{ $title }}</h3>                    
      </div>
      <div class="panel-body">
        <table id="category-tbl" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Category</th>
              <th style="text-align: center;">Option</th>               
            </tr>
          </thead>
          <tbody></tbody>
        </table>

      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  jQuery(document).ready(function($)
  {
    var dataSet = {!! $categories !!};
    var table = $("#category-tbl").dataTable({
      aLengthMenu: [
      [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
      ],
      "data": dataSet,
      dom: '<".col-xs-6 padL0"f><".col-xs-6 btn-wrap"l>rt<"bottom"ip><"clear">',
      iDisplayLength: 10 , //default 20 entries
      bLengthChange : false,
      bFilter : true,
      columns : [
      { "data": "no","width": "10%" },
      { "data": "category" ,"width": "60%"},
      { "data": "option","width": "20%", "bSortable": false }
      ],
      "createdRow": function ( row, data, index ) {
        $('td', row).eq(0).css({'text-align':'center'});
        $('td', row).eq(2).css({'text-align':'center'});
        $('td', row).eq(3).css({'text-align':'center'});
      },

    });
    $("div.btn-wrap" ).append('<a class="btn btn-blue pull-right" href="{!! $addurl !!}" ><i class="fa fa-plus visible-xs"></i> <span class="hidden-xs">New Category</span></a>');
  });
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

</script>
<!-- END MAIN CONTENT --> 
@stop