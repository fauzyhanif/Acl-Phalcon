<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PMB | STIEWW</title>
  <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
  <?= $this->tag->stylesheetLink('plugins/font-awesome/css/font-awesome.min.css') ?>
  <?= $this->tag->stylesheetLink('css/AdminLTE.min.css') ?>
  <?= $this->tag->stylesheetLink('css/skin-blue.min.css') ?>
  <?= $this->tag->stylesheetLink('css/animate.css') ?>

  <!-- js -->
  <?= $this->tag->javascriptInclude('plugins/jQuery/jquery-2.2.3.min.js') ?>
  <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
  <?= $this->tag->javascriptInclude('plugins/file-style/bootstrap-filestyle.min.js') ?>
  <?= $this->tag->javascriptInclude('plugins/slimScroll/jquery.slimscroll.min.js') ?>
  <?= $this->tag->javascriptInclude('plugins/fastclick/fastclick.js') ?>

  <!-- Pnotify -->
  <?= $this->tag->stylesheetLink('plugins/pnotify/pnotify.min.css') ?>
  <?= $this->tag->javascriptInclude('plugins/pnotify/pnotify.core.js') ?>
  <?= $this->tag->javascriptInclude('plugins/pnotify/pnotify.buttons.js') ?>
  <?= $this->tag->javascriptInclude('plugins/pnotify/pnotify.nonblock.js') ?>
  
  <!-- dataTables css -->
  <?= $this->tag->stylesheetLink('plugins/datatables/jquery.dataTables.min.css') ?>
  <?= $this->tag->stylesheetLink('plugins/datatables/buttons.bootstrap.min.css') ?>
  <?= $this->tag->stylesheetLink('plugins/datatables/fixedHeader.bootstrap.min.css') ?>
  <?= $this->tag->stylesheetLink('plugins/datatables/responsive.bootstrap.min.css') ?>
  <?= $this->tag->stylesheetLink('plugins/datatables/scroller.bootstrap.min.css') ?>
  <?= $this->tag->stylesheetLink('plugins/select2/select2.min.css') ?>
  <?= $this->tag->javascriptInclude('plugins/select2/select2.full.min.js') ?>

  <!-- dataTables js -->
  <?= $this->tag->javascriptInclude('plugins/datatables/jquery.dataTables.min.js') ?>
  <?= $this->tag->javascriptInclude('plugins/datatables/dataTables.bootstrap.js') ?>
  <?= $this->tag->javascriptInclude('plugins/datatables/dataTables.buttons.min.js') ?>
  <?= $this->tag->javascriptInclude('plugins/datatables/buttons.bootstrap.min.js') ?>
  <?= $this->tag->javascriptInclude('plugins/datatables/jszip.min.js') ?>
  <?= $this->tag->javascriptInclude('plugins/datatables/pdfmake.min.js') ?>
  <?= $this->tag->javascriptInclude('plugins/datatables/vfs_fonts.js') ?>
  <?= $this->tag->javascriptInclude('plugins/datatables/buttons.html5.min.js') ?>
  <?= $this->tag->javascriptInclude('plugins/datatables/buttons.print.min.js') ?>
  <?= $this->tag->javascriptInclude('plugins/datatables/dataTables.fixedHeader.min.js') ?>
  <?= $this->tag->javascriptInclude('plugins/datatables/dataTables.keyTable.min.js') ?>
  <?= $this->tag->javascriptInclude('plugins/datatables/dataTables.responsive.min.js') ?>
  <?= $this->tag->javascriptInclude('plugins/datatables/responsive.bootstrap.min.js') ?>
  <?= $this->tag->javascriptInclude('plugins/datatables/dataTables.scroller.min.js') ?>
  <?= $this->tag->javascriptInclude('plugins/datatables/dataTables.fixedColumns.min.js') ?>

  <!-- costume js -->
  <?= $this->tag->javascriptInclude('js/app.min.js') ?>
</head>
<body class="hold-transition skin-blue layout-boxed sidebar-mini">

  <!-- <div class="wrapper">
  <?= $this->tag->image(['img/master/baner.png', 'width' => '100%']) ?>
  </div> -->
  <div class="wrapper">
    <header class="main-header">
  <a href="<?= $this->url->get('') ?>" class="logo">
    <span class="logo-mini"><b>PMB</b></span>
    <span class="logo-lg"><b>PMB</b> STIEWW</span>
  </a>
  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <?php if (empty($this->session->get('user'))) { ?>
        <li  class="dropdown user user-menu">
          <a href="<?= $this->url->get('Login') ?>">Login</a>
        </li>
        <?php } ?>
        <?php if (!empty($this->session->get('user'))) { ?>
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?= $this->tag->image(['img/users/' . $this->session->get('user')['image'], 'class' => 'user-image', 'alt' => 'User Image']) ?>
            <span class="hidden-xs"><?= Phalcon\Text::upper($this->session->get('user')['username']) ?> <i class="fa fa-caret-down"></i></span>
          </a>
          <ul class="dropdown-menu animated fadeInDown">
            <li class="user-header">
              <?= $this->tag->image(['img/users/' . $this->session->get('user')['image'], 'class' => 'img-circle', 'alt' => 'User Image']) ?>
              <p>
                <?= Phalcon\Text::upper($this->session->get('user')['username']) ?>
                <small>
                  <?php $v180815027379016343011iterator = $this->session->get('acl')['usergroup']; $v180815027379016343011incr = 0; $v180815027379016343011loop = new stdClass(); $v180815027379016343011loop->self = &$v180815027379016343011loop; $v180815027379016343011loop->length = count($v180815027379016343011iterator); $v180815027379016343011loop->index = 1; $v180815027379016343011loop->index0 = 1; $v180815027379016343011loop->revindex = $v180815027379016343011loop->length; $v180815027379016343011loop->revindex0 = $v180815027379016343011loop->length - 1; ?><?php foreach ($v180815027379016343011iterator as $key => $value) { ?><?php $v180815027379016343011loop->first = ($v180815027379016343011incr == 0); $v180815027379016343011loop->index = $v180815027379016343011incr + 1; $v180815027379016343011loop->index0 = $v180815027379016343011incr; $v180815027379016343011loop->revindex = $v180815027379016343011loop->length - $v180815027379016343011incr; $v180815027379016343011loop->revindex0 = $v180815027379016343011loop->length - ($v180815027379016343011incr + 1); $v180815027379016343011loop->last = ($v180815027379016343011incr == ($v180815027379016343011loop->length - 1)); ?>
                    <?php if ($key === 1) { ?>
                      <?= $value['usergroup'] ?>
                    <?php } elseif ($v180815027379016343011loop->length === $key) { ?>
                      and <?= $value['usergroup'] ?>
                    <?php } else { ?>
                      , <?= $value['usergroup'] ?>
                    <?php } ?>
                  <?php $v180815027379016343011incr++; } ?>
                </small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a onclick="return load_page('page_profile','Profile','page_profile')" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="<?= $this->url->get('Logout') ?>" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </nav>
</header>

<?php if (!empty($this->session->get('user'))) { ?>
<aside class="control-sidebar control-sidebar-dark">
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-users"></i></a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">List Group Access</h3>
      <ul class="control-sidebar-menu">
        <?php $v180815027379016343011iterator = $this->session->get('acl')['usergroup']; $v180815027379016343011incr = 0; $v180815027379016343011loop = new stdClass(); $v180815027379016343011loop->self = &$v180815027379016343011loop; $v180815027379016343011loop->length = count($v180815027379016343011iterator); $v180815027379016343011loop->index = 1; $v180815027379016343011loop->index0 = 1; $v180815027379016343011loop->revindex = $v180815027379016343011loop->length; $v180815027379016343011loop->revindex0 = $v180815027379016343011loop->length - 1; ?><?php foreach ($v180815027379016343011iterator as $key => $value) { ?><?php $v180815027379016343011loop->first = ($v180815027379016343011incr == 0); $v180815027379016343011loop->index = $v180815027379016343011incr + 1; $v180815027379016343011loop->index0 = $v180815027379016343011incr; $v180815027379016343011loop->revindex = $v180815027379016343011loop->length - $v180815027379016343011incr; $v180815027379016343011loop->revindex0 = $v180815027379016343011loop->length - ($v180815027379016343011incr + 1); $v180815027379016343011loop->last = ($v180815027379016343011incr == ($v180815027379016343011loop->length - 1)); ?>
        <li>
          <a href="<?= $this->url->get('/Set/group/session/' . $value['id']) ?>">
            <i class="menu-icon fa <?= $value['icon'] ?> <?= $value['color'] ?>"></i>
            <div class="menu-info">
              <h4 class="control-sidebar-subheading"><?= $value['usergroup'] ?></h4>
              <p><?= $value['description'] ?></p>
            </div>
          </a>
        </li>
        <?php $v180815027379016343011incr++; } ?>
      </ul>
    </div>
  </div>
</aside>
<?php } ?>
    <aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <?php if (!empty($this->session->get('user'))) { ?>
      <div class="pull-left image">
      <?= $this->tag->image(['img/users/' . $this->session->get('user')['image'], 'class' => 'img-circle']) ?>
      </div>
      <div class="pull-left info">
        <p><?= $this->session->get('user')['username'] ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
      <?php } else { ?>
      <div class="pull-left image">
      <?= $this->tag->image(['img/master/logo.png', 'class' => 'img-circle']) ?>
      </div>
      <div class="pull-left info">
        <p>STIE WIDYA WIWAHA</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
      <?php } ?>
    </div>

    <ul class="sidebar-menu" style="font-size:12px;">
      <li><br></li>
      <?= $this->Menu->menuList() ?>
    </ul>
  </section>
</aside>

    <div class="content-wrapper">
      <?= $this->getContent() ?>
    </div>

    <footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 1.0.3
  </div>
  <strong>Copyright &copy; 2017 <a href="https://www.visualcv.com/saipul-hidayat">@TheGerr09</a>.</strong> All rights reserved.
</footer>
  </div>
</body>
</html>
