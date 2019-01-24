<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Phalcon Acl Lte</title>
  {{ stylesheet_link(["rel":"icon", "href":"img/master/logo.jpg", "type":"image/x-icon"]) }}
  {{ stylesheet_link('css/bootstrap.min.css') }}
  {{ stylesheet_link('plugins/font-awesome/css/font-awesome.min.css') }}
  {{ stylesheet_link("plugins/select2/select2.min.css") }}
  {{ stylesheet_link('css/AdminLTE.min.css') }}
  {{ stylesheet_link('css/skins/_all-skins.min.css') }}
  {{ stylesheet_link('css/animate.css') }}
  {{ stylesheet_link('css/core/style.css') }}

  <!-- JS -->
  {{ javascript_include('plugins/jQuery/jquery-2.2.3.min.js') }}
  {{ javascript_include('js/bootstrap.min.js') }}
  {{ javascript_include('plugins/file-style/bootstrap-filestyle.min.js') }}

  <!-- iCheck -->
  {{ stylesheet_link('plugins/iCheck/all.css') }}
  {{ javascript_include('plugins/iCheck/icheck.min.js') }}

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

  <!-- all -->
  {{ javascript_include('plugins/slimScroll/jquery.slimscroll.min.js') }}
  {{ javascript_include('plugins/fastclick/fastclick.js') }}
  {{ javascript_include('plugins/input-mask/jquery.inputmask.js') }}
  {{ javascript_include("plugins/select2/select2.full.min.js") }}
  {{ javascript_include('js/app.min.js') }}


  <!-- bootstrap datepicker -->
  {{ stylesheet_link("plugins/datepicker/datepicker3.css") }}

  <!-- bootstrap datepicker -->
  {{ javascript_include("plugins/datepicker/bootstrap-datepicker.js") }}

    <!-- select -->
  {{ stylesheet_link("plugins/select2/select2.css") }}
  {{ javascript_include("plugins/select2/select2.js") }}
  {{ javascript_include("plugins/select2/select2.full.js") }}
    
    <!-- input mask -->
  {{ javascript_include("js/jquery.mask.js") }}

  <!-- sweetalert -->
  {{ stylesheet_link('css/sweetalert.css') }}
  {{ stylesheet_link('css/sweetalert2.css') }}
  {{ stylesheet_link('css/sweetalert2.min.css') }}
  {{ javascript_include('js/sweetalert2.js') }}
  {{ javascript_include('js/sweetalert.min.js') }}
  {{ javascript_include('js/sweetalert2.min.js') }}

  {{ javascript_include("plugins/autocomplete/jquery.autocomplete.js") }}

  <script type="text/javascript">
    jQuery(function ($) {
      $("ul a").click(function(e) {
        var link = $(this);

        var item = link.parent("li");
        
        if (item.hasClass("active")) {
          item.removeClass("active").children("a").removeClass("active");
        } else {
          item.addClass("active").children("a").addClass("active");
        }

        if (item.children("ul").length > 0) {
          var href = link.attr("href");
          link.attr("href", "#");
          setTimeout(function () { 
              link.attr("href", href);
          }, 300);
          e.preventDefault();
        }
      })
      .each(function() {
        var link = $(this);
        if (link.get(0).href === location.href) {
          link.addClass("active").parents("li").addClass("active");
          return false;
        }
      });
    });
    </script>
    
    

</head>