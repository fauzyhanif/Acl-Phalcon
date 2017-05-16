<header class="main-header">
  <a href="{{ url('') }}" class="logo">
    <span class="logo-mini"><b>PMB</b></span>
    <span class="logo-lg"><b>PMB</b> STIEWW</span>
  </a>
  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        {% if session.get('user') is empty %}
        <li  class="dropdown user user-menu">
          <a href="{{ url('Login')}}">Login</a>
        </li>
        {% endif %}
        {% if session.get('user') is not empty %}
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            {{ image('img/users/' ~ session.get('user')['image'], 'class':'user-image', 'alt':'User Image') }}
            <span class="hidden-xs">{{ session.get('user')['username']|upper }} <i class="fa fa-caret-down"></i></span>
          </a>
          <ul class="dropdown-menu animated fadeInDown">
            <li class="user-header">
              {{ image('img/users/' ~ session.get('user')['image'], 'class':'img-circle', 'alt':'User Image') }}
              <p>
                {{ session.get('user')['username']|upper }}
                <small>
                  {% for key, value in session.get('acl')['usergroup'] %}
                    {% if key === 1 %}
                      {{ value['usergroup'] }}
                    {% elseif loop.length === key %}
                      and {{ value['usergroup'] }}
                    {% else %}
                      , {{ value['usergroup'] }}
                    {% endif %}
                  {% endfor %}
                </small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a onclick="return load_page('page_profile','Profile','page_profile')" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="{{ url('Logout') }}" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
        {% endif %}
      </ul>
    </div>
  </nav>
</header>

{% if session.get('user') is not empty %}
<aside class="control-sidebar control-sidebar-dark">
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-users"></i></a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">List Group Access</h3>
      <ul class="control-sidebar-menu">
        {% for key, value in session.get('acl')['usergroup'] %}
        <li>
          <a href="{{ url('/Set/group/session/' ~ value['id']) }}">
            <i class="menu-icon fa {{ value['icon'] }} {{ value['color'] }}"></i>
            <div class="menu-info">
              <h4 class="control-sidebar-subheading">{{ value['usergroup'] }}</h4>
              <p>{{ value['description'] }}</p>
            </div>
          </a>
        </li>
        {% endfor %}
      </ul>
    </div>
  </div>
</aside>
{% endif %}