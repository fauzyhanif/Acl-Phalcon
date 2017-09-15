<style>
  ul.sidebar-menu li a {
    padding: 2px 5px;
  } 
</style>
<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      {% if session.get('user') is not empty %}
      <div class="pull-left image">
      {{ image('img/users/' ~ session.get('user')['image'], 'class':'img-circle') }}
      </div>
      <div class="pull-left info">
        <p>{{ session.get('user')['username'] }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
      {% else %}
      <div class="pull-left image">
      {{ image('img/master/logo.png', 'class':'img-circle') }}
      </div>
      <div class="pull-left info">
        <p>STIE WIDYA WIWAHA</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
      {% endif %}
    </div>

    <ul class="sidebar-menu" style="font-size:16px;">
      <li><br></li>
      {{ Menu.menuList() }}
    </ul>
  </section>
</aside>