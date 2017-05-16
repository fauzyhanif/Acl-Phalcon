<style>
.cursor:hover{
  cursor: pointer;
  color: #ccc;
}
.vertical-text {
  transform: rotate(270deg);
  transform-origin: left top 0;
  margin: 0px;
}
</style>
<section class="content-header animated fadeIn">
  <h1>Acl</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-home"></i> Home</li>
    <li>Data Master</li>
    <li class="active">acl</li>
  </ol>
</section>

<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Input Group Menu</h3>
        </div>
        <form name="group" action="{{ url('Acl/MenuGroup/Input') }}" method="POST" data-remote>
          <div class="box-body">
            <div class="form-group">
              <label>Name Menu Group</label>
              <input type="text" name="menu_group" class="form-control" placeholder="Menu Group">
            </div>
            <div class="form-group usergroup">
              <label>Usergroup</label><br>
              {% for ug in usergroup %}
              <td align="center">
                <label class="usergroup">
                  <input type="checkbox" name="usergroup[]" value="{{ ug.id }}"> {{ ug.usergroup }}
                </label><br>
              </td>
              {% endfor %}
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-flat btn-block">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="col-md-8">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">List Group Menu</h3>
        </div>
        <div class="box-body">
          <table id="table" class="table table-bordered table-hover">
            <thead> 
              <tr>
                <th width="25">No</th>
                <th width="120">Action</th>
                <th>Menu Group</th>
                <th>Usergroup</th>
              </tr>
            </thead>
            <tbody id="listViewGroup">
              {% set no = 1 %}
              {% for x in group %}
              <tr id="groupdel{{ x.id }}">
                <td>{{ no }}</td>
                <td>
                  <i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#groupDelete" onclick="deletedGroup({{ x.id }}, '{{ x.menu_group }}')"></i> |
                  {% if x.actived === 'Y' %}
                  <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="grouptext{{ x.id }}" onclick="statusGroup({{ x.id }}, 'N')"></i> |
                  <span class="label bg-green" id="groupstatus{{ x.id }}">active</span>
                  {% else %}
                  <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="grouptext{{ x.id }}" onclick="statusGroup({{ x.id }}, 'Y')"></i> |
                  <span class="label bg-red" id="groupstatus{{ x.id }}">not active</span>
                  {% endif %}
                </td>
                <td>{{ x.menu_group }}</td>
                <td>{{ x.usergroup }}</td>
              </tr>
              {% set no = no + 1 %}
              {% endfor %}
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">List Acl</h3>
          <div class="box-tools pull-right" style="margin-top:2px;">
            <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#Tambah" onclick="clear_form()">
              <i class="fa fa-plus-circle"></i> Tambah
            </button>
          </div>
        </div>
        <div class="box-body">
          
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th width="163">Action</th>
                <th width="50" align="center">ID</th>
                <th width="25">Icon</th>
                <th>Url</th>
                {% for ug in usergroup %}
                <th width="10" style="height:120px; padding:0px;">
                  <div class="vertical-text">{{ ug.usergroup }}</div>
                </th>
                {% endfor %}
                <th width="100">Except</th>
              </tr>
            </thead>
            <tbody id="listView">
              {% for x in acl %}
              <tr id="del{{ x.id }}">
                <td>
                  <i class="fa fa-edit cursor" style="font-size:18px;" data-toggle="modal" data-target="#Tambah" onclick="updated('{{ x.id }}', '{{ x.url }}', '{{ x.controller }}', '{{ x.action }}', '{{ x.except }}')"></i> |
                  <i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#Delete" onclick="deleted({{ x.id }}, '{{ x.url }}')"></i> |
                  {% if x.actived === 'Y' %}
                  <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'N')"></i> |
                  <span class="label bg-green" id="status{{ x.id }}">active</span>
                  {% else %}
                  <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'Y')"></i> |
                  <span class="label bg-red" id="status{{ x.id }}">not active</span>
                  {% endif %}
                </td>
                <td align="center">{{ x.id }}</td>
                <td align="center">
                {% if x.icon is not empty %}
                  <i class="fa {{ x.icon }}"></i></td>
                {% endif %}
                <td>{{ x.url }}</td>
                {% for ug in usergroup %}
                <td align="center">
                  <input type="checkbox" id="check" class="flat-blue" value="{{ x.id }},{{ ug.id }}"
                  {% if ug.id in Helpers.usergroup(x.usergroup) %}
                  checked="true" 
                  {% endif %}
                  >
                </td>
                {% endfor %}
                <td style="padding: 0px;"><div ondblclick="return except(this)" style="padding: 10px;" acl="{{ x.id }}">{{ x.except }}</div></td>
              </tr>
              {% endfor %}
            </tbody>
          </table>

        </div>
      </div>
    </div>

  </div>
</section>

<!-- include popup -->
{% include "acl/form.volt" %}
{% include "acl/deleted.volt" %}
{% include "menu/deleted.volt" %}

<!-- include Js -->
{% include "acl/js.volt" %}