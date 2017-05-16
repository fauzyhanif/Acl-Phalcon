<!DOCTYPE html>
<html>
{% include "layouts/head.volt" %}
<body class="hold-transition skin-blue layout-boxed sidebar-mini">

  <!-- <div class="wrapper">
  {{ image('img/master/baner.png', 'width':'100%') }}
  </div> -->
  <div class="wrapper">
    {% include "layouts/header.volt" %}
    {% include "layouts/sidebar.volt" %}

    <div class="content-wrapper">
      {{ content() }}
    </div>

    {% include "layouts/footer.volt" %}
  </div>
</body>
</html>