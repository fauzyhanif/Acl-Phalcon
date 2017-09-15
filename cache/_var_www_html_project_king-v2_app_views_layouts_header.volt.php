<header class="main-header">
  <a href="<?= $this->url->get('') ?>" class="logo">
    <span class="logo-mini"><b>KING Semarang</b></span>
    <span class="logo-lg"><b>KING</b> Semarang</span>
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
                  <?php $v182029361995397923821iterator = $this->session->get('acl')['usergroup']; $v182029361995397923821incr = 0; $v182029361995397923821loop = new stdClass(); $v182029361995397923821loop->self = &$v182029361995397923821loop; $v182029361995397923821loop->length = count($v182029361995397923821iterator); $v182029361995397923821loop->index = 1; $v182029361995397923821loop->index0 = 1; $v182029361995397923821loop->revindex = $v182029361995397923821loop->length; $v182029361995397923821loop->revindex0 = $v182029361995397923821loop->length - 1; ?><?php foreach ($v182029361995397923821iterator as $key => $value) { ?><?php $v182029361995397923821loop->first = ($v182029361995397923821incr == 0); $v182029361995397923821loop->index = $v182029361995397923821incr + 1; $v182029361995397923821loop->index0 = $v182029361995397923821incr; $v182029361995397923821loop->revindex = $v182029361995397923821loop->length - $v182029361995397923821incr; $v182029361995397923821loop->revindex0 = $v182029361995397923821loop->length - ($v182029361995397923821incr + 1); $v182029361995397923821loop->last = ($v182029361995397923821incr == ($v182029361995397923821loop->length - 1)); ?>
                    <?php if ($key === 1) { ?>
                      <?= $value['usergroup'] ?>
                    <?php } elseif ($v182029361995397923821loop->length === $key) { ?>
                      and <?= $value['usergroup'] ?>
                    <?php } else { ?>
                      , <?= $value['usergroup'] ?>
                    <?php } ?>
                  <?php $v182029361995397923821incr++; } ?>
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
        <?php $v182029361995397923821iterator = $this->session->get('acl')['usergroup']; $v182029361995397923821incr = 0; $v182029361995397923821loop = new stdClass(); $v182029361995397923821loop->self = &$v182029361995397923821loop; $v182029361995397923821loop->length = count($v182029361995397923821iterator); $v182029361995397923821loop->index = 1; $v182029361995397923821loop->index0 = 1; $v182029361995397923821loop->revindex = $v182029361995397923821loop->length; $v182029361995397923821loop->revindex0 = $v182029361995397923821loop->length - 1; ?><?php foreach ($v182029361995397923821iterator as $key => $value) { ?><?php $v182029361995397923821loop->first = ($v182029361995397923821incr == 0); $v182029361995397923821loop->index = $v182029361995397923821incr + 1; $v182029361995397923821loop->index0 = $v182029361995397923821incr; $v182029361995397923821loop->revindex = $v182029361995397923821loop->length - $v182029361995397923821incr; $v182029361995397923821loop->revindex0 = $v182029361995397923821loop->length - ($v182029361995397923821incr + 1); $v182029361995397923821loop->last = ($v182029361995397923821incr == ($v182029361995397923821loop->length - 1)); ?>
        <li>
          <a href="<?= $this->url->get('/Set/group/session/' . $value['id']) ?>">
            <i class="menu-icon fa <?= $value['icon'] ?> <?= $value['color'] ?>"></i>
            <div class="menu-info">
              <h4 class="control-sidebar-subheading"><?= $value['usergroup'] ?></h4>
              <p><?= $value['description'] ?></p>
            </div>
          </a>
        </li>
        <?php $v182029361995397923821incr++; } ?>
      </ul>
    </div>
  </div>
</aside>
<?php } ?>