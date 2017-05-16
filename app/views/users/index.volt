<style>
.cursor:hover{
  cursor: pointer;
  color: #ccc;
}
</style>
<section class="content-header animated fadeIn">
  <h1>Users</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-home"></i> Home</li>
    <li>Data Master</li>
    <li class="active">users</li>
  </ol>
</section>

<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Input Users</h3>
        </div>
        <div class="box-body">
          <form name="user" action="{{ url('Users/input') }}" method="POST" data-remote="data-remote">
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label>Telpon</label>
              <input type="text" name="telp" class="form-control" placeholder="Telpon">
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
              <label>Usergroup</label>
              {% for u in usergroup %}
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="usergroup[]" value="{{ u.id }}"> {{ u.usergroup }}
                </label>
              </div>
              {% endfor %}
            </div>
            <div class="form-group">
              <label>Upload Foto</label>
              <input type="file" class="filestyle" name="image" data-size="sm" id="uploadImage1" onchange="PreviewImage(1)">
            </div>
            <center>
              {{ image("img/users/users.png", "width":"230", "id":"uploadPreview1", "class":"img-responsive") }}
            </center>
            <br>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-flat btn-block">Submit</button>
            </div>
          </form>
       	</div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">List Users</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table id="table" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td width="35">
                    <b>No</b>
                  </td>
                  <td align="center" width="148">
                    <b>Action</b>
                  </td>
                  <td align="center">
                    <b>Name</b>
                  </td>
                  <td align="center">
                    <b>Username</b>
                  </td>
                  <td align="center">
                    <b>Email</b>
                  </td>
                </tr>
              </thead>
              <tbody id="listView">
                {% set no = 1 %}
                {% for x in users %}
                <tr id="del{{ x.id }}">
                  <td>{{ no }}</td>
                  <td>
                    <i class="fa fa-edit cursor" style="font-size:18px;" data-toggle="modal" data-target="#Tambah" onclick="updated({{ x.id }})"></i> |
                    <i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#Delete" onclick="deleted({{ x.id }}, '{{ x.username }}')"></i> |
                    {% if x.actived === 'Y' %}
                    <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'N')"></i> |
                    <span class="label bg-green" id="status{{ x.id }}">active</span>
                    {% else %}
                    <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="text{{ x.id }}" onclick="status({{ x.id }}, 'Y')"></i> |
                    <span class="label bg-red" id="status{{ x.id }}">not active</span>
                    {% endif %}
                  </td>
                  <td>{{ x.name }}</td>
                  <td>{{ x.username }}</td>
                  <td>{{ x.email }}</td>
                </tr>
                {% set no = no + 1 %}
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- include popup -->
{% include "users/form.volt" %}
{% include "users/deleted.volt" %}

<!-- include Js -->
{% include "users/js.volt" %}