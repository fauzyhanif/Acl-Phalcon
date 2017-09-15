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
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Input Users</h3>
        </div>
        <div class="box-body">
          <form name="user" action="<?= $this->url->get('Users/input') ?>" method="POST" data-remote="data-remote">
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
              <?php foreach ($usergroup as $u) { ?>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="usergroup[]" value="<?= $u->id ?>"> <?= $u->usergroup ?>
                </label>
              </div>
              <?php } ?>
            </div>
            <div class="form-group">
              <label>Upload Foto</label>
              <input type="file" class="filestyle" name="image" data-size="sm" id="uploadImage1" onchange="PreviewImage(1)">
            </div>
            <center>
              <?= $this->tag->image(['img/users/users.png', 'width' => '230', 'id' => 'uploadPreview1', 'class' => 'img-responsive']) ?>
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
      <div class="box box-danger">
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
                <?php $no = 1; ?>
                <?php foreach ($users as $x) { ?>
                <tr id="del<?= $x->id ?>">
                  <td><?= $no ?></td>
                  <td>

                    <button class="btn btn-primary btn-flat"  id="buttonCrudGroupMenu">
                      <i class="fa fa-edit cursor iconCrud" data-toggle="modal" data-target="#Tambah" onclick="updated(<?= $x->id ?>)"></i>
                    </button>

                    <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
                      <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->id ?>, '<?= $x->username ?>')"></i> 
                    </button>

                    <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                      <i class="fa fa-power-off cursor text-success iconCrud"  id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'N')"></i> 
                    </button>
                    <?php if ($x->actived === 'Y') { ?>
                    <span class="label bg-green" id="status<?= $x->id ?>">active</span>
                    <?php } else { ?>
                    <i class="fa fa-power-off cursor text-danger iconCrud"  id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'Y')"></i> |
                    <span class="label bg-red" id="status<?= $x->id ?>">not active</span>
                    <?php } ?>
                  </td>
                  <td><?= $x->name ?></td>
                  <td><?= $x->username ?></td>
                  <td><?= $x->email ?></td>
                </tr>
                <?php $no = $no + 1; ?>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- include popup -->
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
            <?php foreach ($usergroup as $u) { ?>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="usergroup[]" id="data<?= $u->id ?>" value="<?= $u->id ?>"> <?= $u->usergroup ?>
              </label>
            </div>
            <?php } ?>
          </div>
          <div class="form-group">
            <label>Upload Foto</label>
            <input type="file" class="filestyle" name="image" data-size="sm" id="uploadImage2" onchange="PreviewImage(2)">
            <input type="hidden" name="remove_image">
          </div>
          <center>
            <?= $this->tag->image(['img/users/users.png', 'width' => '230', 'id' => 'uploadPreview2', 'class' => 'img-responsive']) ?>
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
<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Delete User</h4>
      </div>

      <form name="delete" action="<?= $this->url->get('Users/deleted') ?>" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <input type="hidden" name="id" id="id_delete" value="">
          <p>Apakah anda yakin akan menghapus user "<span id="users" class="text-red"></span>" ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default close_btn" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- include Js -->
<script>
$(function () {
  $('#table').DataTable();
});

(function() {

  $('form[data-remote]').on('submit', function(e) {
    var form = $(this);
    var url = form.prop('action');

    $.ajax({
      type: 'POST',
      url: url,
      dataType:'json',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function(response){
        new PNotify({
          title: response.title,
          text: response.text,
          type: response.type
        });
        if (response.close === 1) {
		  $('#Tambah').modal('hide');
          list();
        } else if (response.close === 2) {
          $('#Delete').modal('hide');
          $('#del'+response.id).fadeOut(1000);
        } else {
          list();
          clear_form();
        }
      }
    });

    e.preventDefault();
  });

})();

function list() {
  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Users/list') ?>',
    dataType:'html',
    success: function(response){
      $('#listView').html(response);
    }
  });
}

function deleted(id, users) {
  $('input#id_delete').val(id);
  $('span#users').text(users);
}

function updated(id) {
  var form = $('form[name="users"]').attr('action', '<?= $this->url->get('Users/updated/') ?>' + id);
  
  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Users/detail/') ?>'+id,
    dataType:'json',
    success: function(response){
      $.each(response, function(key, value) {
      	form.find('[name="'+key+'"]')
            .not('input[name="usergroup"]')
      		  .not('input[name="image"]')
            .not('input[name="password"]')
            .val(value);
        if (key == 'image') {
          $('input[name="remove_image"]').val(value);
          $('#uploadPreview2').attr('src', 'img/users/'+value);
        }
      });

      var str = response.usergroup;
      var res = str.split(",");
      for (var i = 0; i < res.length; i++) {
        $('input[type="checkbox"]#data'+res[i]).prop('checked', true);
      }
    }
  });
}

function clear_form(id){
  $('form[name="users"]').find('[name]').not('[name="usergroup"]', '[name="image"]').val('');
  $('form[name="user"]').find('[name]').not('[name="usergroup"]', '[name="image"]').val('');
}

function status(id, status) {
  $.ajax({
    type: 'POST',
    url: 'Users/status',
    dataType:'json',
    data: 'id='+id+'&actived='+status,
    success: function(response){
      new PNotify({
        title: response.title,
        text: response.text,
        type: response.type
      });
      if (response.i === 'text-success' && response.bg === 'bg-green') {
        $("td i#text"+id)
          .attr("onclick", "status("+id+", '"+response.active+"')")
          .toggleClass('text-danger text-success');

        $("td span#status"+id)
          .toggleClass('bg-red bg-green')
          .text(response.status);
      } else if (response.i === 'text-danger' && response.bg === 'bg-red') {
        $("td i#text"+id)
          .attr("onclick", "status("+id+", '"+response.active+"')")
          .toggleClass('text-success text-danger');

        $("td span#status"+id)
          .toggleClass('bg-green bg-red')
          .text(response.status);
      }
    }
  });
}

function PreviewImage(id) {
  $('input[name="remove_image"]').val('');
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("uploadImage"+id).files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("uploadPreview"+id).src = oFREvent.target.result;
  };
};
</script>