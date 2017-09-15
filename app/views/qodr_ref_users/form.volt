<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clear_form()">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Updated Users</h4>
      </div>

      <form name="users" method="POST" data-remote="data-remote">
        <div class="modal-body">
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
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
            <label>Usergroup</label>
            {% for u in usergroup %}
            <div class="checkbox">
              <label>
                <input type="checkbox" name="usergroup[]" id="data{{ u.id }}" value="{{ u.id }}"> {{ u.usergroup }}
              </label>
            </div>
            {% endfor %}
          </div>
          <div class="form-group">
            <label>Upload Foto</label>
            <input type="file" class="filestyle" name="image" data-size="sm" id="uploadImage2" onchange="PreviewImage(2)">
            <input type="hidden" name="remove_image">
          </div>
          <center>
            {{ image("img/users/users.png", "width":"230", "id":"uploadPreview2", "class":"img-responsive") }}
          </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clear_form()">Close</button>
          <button type="submit" class="btn btn-primary">Save Update</button>
        </div>
      </form>

    </div>
  </div>
</div>