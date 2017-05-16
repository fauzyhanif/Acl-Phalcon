<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PMB | STIEWW</title>
  {{ stylesheet_link('css/bootstrap.min.css') }}
  {{ stylesheet_link('plugins/font-awesome/css/font-awesome.min.css') }}
  {{ stylesheet_link('css/AdminLTE.min.css') }}
  {{ stylesheet_link('css/skin-blue.min.css') }}
  {{ stylesheet_link('css/animate.css') }}

  <!-- js -->
  {{ javascript_include('plugins/jQuery/jquery-2.2.3.min.js') }}
  {{ javascript_include('js/bootstrap.min.js') }}
  {{ javascript_include('plugins/file-style/bootstrap-filestyle.min.js') }}
  {{ javascript_include('plugins/slimScroll/jquery.slimscroll.min.js') }}
  {{ javascript_include('plugins/fastclick/fastclick.js') }}

  <!-- Pnotify -->
  {{ stylesheet_link('plugins/pnotify/pnotify.min.css') }}
  {{ javascript_include("plugins/pnotify/pnotify.core.js") }}
  {{ javascript_include("plugins/pnotify/pnotify.buttons.js") }}
  {{ javascript_include("plugins/pnotify/pnotify.nonblock.js") }}
  
  <!-- dataTables css -->
  {{ stylesheet_link("plugins/datatables/jquery.dataTables.min.css") }}
  {{ stylesheet_link("plugins/datatables/buttons.bootstrap.min.css") }}
  {{ stylesheet_link("plugins/datatables/fixedHeader.bootstrap.min.css") }}
  {{ stylesheet_link("plugins/datatables/responsive.bootstrap.min.css") }}
  {{ stylesheet_link("plugins/datatables/scroller.bootstrap.min.css") }}
  {{ stylesheet_link("plugins/select2/select2.min.css") }}
  {{ javascript_include("plugins/select2/select2.full.min.js") }}

  <!-- dataTables js -->
  {{ javascript_include("plugins/datatables/jquery.dataTables.min.js") }}
  {{ javascript_include("plugins/datatables/dataTables.bootstrap.js") }}
  {{ javascript_include("plugins/datatables/dataTables.buttons.min.js") }}
  {{ javascript_include("plugins/datatables/buttons.bootstrap.min.js") }}
  {{ javascript_include("plugins/datatables/jszip.min.js") }}
  {{ javascript_include("plugins/datatables/pdfmake.min.js") }}
  {{ javascript_include("plugins/datatables/vfs_fonts.js") }}
  {{ javascript_include("plugins/datatables/buttons.html5.min.js") }}
  {{ javascript_include("plugins/datatables/buttons.print.min.js") }}
  {{ javascript_include("plugins/datatables/dataTables.fixedHeader.min.js") }}
  {{ javascript_include("plugins/datatables/dataTables.keyTable.min.js") }}
  {{ javascript_include("plugins/datatables/dataTables.responsive.min.js") }}
  {{ javascript_include("plugins/datatables/responsive.bootstrap.min.js") }}
  {{ javascript_include("plugins/datatables/dataTables.scroller.min.js") }}
  {{ javascript_include("plugins/datatables/dataTables.fixedColumns.min.js") }}

  <!-- costume js -->
  {{ javascript_include('js/app.min.js') }}
</head>