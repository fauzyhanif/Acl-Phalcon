<style>
  ul.sidebar-menu li a {
    padding: 2px 5px;
  } 
</style>
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

    <ul class="sidebar-menu" style="font-size:16px;">
      <li><br></li>
      <?= $this->Menu->menuList() ?>
    </ul>
  </section>
</aside>