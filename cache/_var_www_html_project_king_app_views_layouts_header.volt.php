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
                  <?php $v177326359404691301351iterator = $this->session->get('acl')['usergroup']; $v177326359404691301351incr = 0; $v177326359404691301351loop = new stdClass(); $v177326359404691301351loop->self = &$v177326359404691301351loop; $v177326359404691301351loop->length = count($v177326359404691301351iterator); $v177326359404691301351loop->index = 1; $v177326359404691301351loop->index0 = 1; $v177326359404691301351loop->revindex = $v177326359404691301351loop->length; $v177326359404691301351loop->revindex0 = $v177326359404691301351loop->length - 1; ?><?php foreach ($v177326359404691301351iterator as $key => $value) { ?><?php $v177326359404691301351loop->first = ($v177326359404691301351incr == 0); $v177326359404691301351loop->index = $v177326359404691301351incr + 1; $v177326359404691301351loop->index0 = $v177326359404691301351incr; $v177326359404691301351loop->revindex = $v177326359404691301351loop->length - $v177326359404691301351incr; $v177326359404691301351loop->revindex0 = $v177326359404691301351loop->length - ($v177326359404691301351incr + 1); $v177326359404691301351loop->last = ($v177326359404691301351incr == ($v177326359404691301351loop->length - 1)); ?>
                    <?php if ($key === 1) { ?>
                      <?= $value['usergroup'] ?>
                    <?php } elseif ($v177326359404691301351loop->length === $key) { ?>
                      and <?= $value['usergroup'] ?>
                    <?php } else { ?>
                      , <?= $value['usergroup'] ?>
                    <?php } ?>
                  <?php $v177326359404691301351incr++; } ?>
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
        <?php $v177326359404691301351iterator = $this->session->get('acl')['usergroup']; $v177326359404691301351incr = 0; $v177326359404691301351loop = new stdClass(); $v177326359404691301351loop->self = &$v177326359404691301351loop; $v177326359404691301351loop->length = count($v177326359404691301351iterator); $v177326359404691301351loop->index = 1; $v177326359404691301351loop->index0 = 1; $v177326359404691301351loop->revindex = $v177326359404691301351loop->length; $v177326359404691301351loop->revindex0 = $v177326359404691301351loop->length - 1; ?><?php foreach ($v177326359404691301351iterator as $key => $value) { ?><?php $v177326359404691301351loop->first = ($v177326359404691301351incr == 0); $v177326359404691301351loop->index = $v177326359404691301351incr + 1; $v177326359404691301351loop->index0 = $v177326359404691301351incr; $v177326359404691301351loop->revindex = $v177326359404691301351loop->length - $v177326359404691301351incr; $v177326359404691301351loop->revindex0 = $v177326359404691301351loop->length - ($v177326359404691301351incr + 1); $v177326359404691301351loop->last = ($v177326359404691301351incr == ($v177326359404691301351loop->length - 1)); ?>
        <li>
          <a href="<?= $this->url->get('/Set/group/session/' . $value['id']) ?>">
            <i class="menu-icon fa <?= $value['icon'] ?> <?= $value['color'] ?>"></i>
            <div class="menu-info">
              <h4 class="control-sidebar-subheading"><?= $value['usergroup'] ?></h4>
              <p><?= $value['description'] ?></p>
            </div>
          </a>
        </li>
        <?php $v177326359404691301351incr++; } ?>
      </ul>
    </div>
  </div>
</aside>
<?php } ?>