<section class="title">
  <h1>最新消息</h1>
</section>
<section class="container-fluid">
  <article class="content">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="{!!(request('status') == '')?'active':'';!!}">
          <a href="#">news</a>
        </li>
      </ul>
      <div class="tab-content">
        <table id="page-page-list" class="table table-striped data-table">
          <thead class="list_head">
            <th>{!! trans('page::page.label.name')!!}</th>
            <th>發佈日期</th>
          </thead>
        </table>
      </div>
    </div>
  </article>
</section>
<script src="https://kit.fontawesome.com/0f57f39519.js" crossorigin="anonymous"></script>
<style>
  table.dataTable thead .sorting:after,
  table.dataTable thead .sorting_asc:after,
  table.dataTable thead .sorting_desc:after,
  table.dataTable thead .sorting_asc_disabled:after,
  table.dataTable thead .sorting_desc_disabled:after {

    font-family: "Font Awesome 5 Free" !important;

  }
</style>
<script type="text/javascript">
  var oTable;
var oSearch = [];
$(document).ready(function(){
  //app.load('#page-page-entry', '{!!guard_url('page/page/0')!!}');
 
  oTable = $('#page-page-list').dataTable( {
      
      
      "responsive" : true,
      "sAjaxSource": '/api/pagelist',
      "fnServerData" : function ( sSource, aoData, fnCallback ) {


          // $.each(oSearch, function(key, val){
          //     aoData.push( { 'name' : key, 'value' : val } );
          // });
          // $('#page-page-list').dataTable(aoData);
          //var userToken = 'EKrKbQzCWTs0H4HwQE0OMRasE7Yo95kbRAIXPLps';
          $.ajax({
              //'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
              'dataType'  : 'json',
              'data'      : aoData,
              'type'      : 'GET',
              'url'       : sSource,
              'success'   : fnCallback
          });
      },

      "columns": [
          {data :'name'},
          
          
          {data :'created_at'}
      ],
      "pageLength": 25
  });

});
</script>