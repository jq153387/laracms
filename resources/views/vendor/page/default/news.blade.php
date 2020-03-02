{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.20/datatables.min.css" /> --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.20/datatables.min.js"></script>
<section class="title">
  <h1>最新消息</h1>
</section>
<section class="container-fluid">
  <article class="content">
    <table id="page-page-list" class="table table-striped data-table">
      <thead class="list_head">
        <th>{!! trans('page::page.label.name')!!}</th>
        <th>發佈日期</th>
      </thead>
    </table>
  </article>
</section>
<script type="text/javascript">
  var oTable;
var oSearch = [];
$(document).ready(function(){
  //app.load('#page-page-entry', '{!!guard_url('page/page/0')!!}');
 
  oTable = $('#page-page-list').dataTable( {
      
      
      "responsive" : true,
      "sAjaxSource": '/api/pagelist',
      "language": {
                "url": "/js/datatable_tw.json"
      },
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
          {
            data :'name',
            render : function (data, type, row, meta) { 
              return `<a href='/news/${row.slug}.html'>${data}</a>`;
            }
          },
          {
            data :'created_at',
            render: function(data, type, row, meta){
              return data.substr(0,10);
            }
          }
      ],
      "pageLength": 25
  });

});
</script>