<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PMB | STIEWW</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?= $this->tag->stylesheetLink(['rel' => 'icon', 'href' => 'img/master/favicon.ico', 'type' => 'image/x-icon']) ?>
    <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
    <?= $this->tag->stylesheetLink('plugins/font-awesome/css/font-awesome.min.css') ?>
    <?= $this->tag->stylesheetLink('css/AdminLTE.min.css') ?>
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <center>
          <?= $this->tag->image(['img/master/logo.png', 'class' => 'img-responsive', 'width' => '100']) ?>
        </center>
        <a href="<?= $this->url->get() ?>"><b>PMB</b> STIEWW</a>
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <?= $erorrSend ?>
 
        <form action="<?= $this->url->get('Login/proses') ?>" method="POST">
         <input type="hidden" name="<?= $this->security->getTokenKey() ?>" value="<?= $this->security->getToken() ?>"/>
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
            </div>

            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>

          </div>
        </form>

      </div>
    </div>

    <?= $this->tag->javascriptInclude('plugins/jQuery/jquery-2.2.3.min.js') ?>
    <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
  </body>
</html>
