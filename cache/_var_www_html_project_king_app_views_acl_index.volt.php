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
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Input Group Menu</h3>
        </div>
        <form name="group" action="<?= $this->url->get('Acl/MenuGroup/Input') ?>" method="POST" data-remote>
          <div class="box-body">
            <div class="form-group">
              <label>Name Menu Group</label>
              <input type="text" name="menu_group" class="form-control" placeholder="Menu Group">
            </div>
            <div class="form-group usergroup">
              <label>Usergroup</label><br>
              <?php foreach ($usergroup as $ug) { ?>
              <td align="center">
                <label class="usergroup">
                  <input type="checkbox" name="usergroup[]" value="<?= $ug->id ?>"> <?= $ug->usergroup ?>
                </label><br>
              </td>
              <?php } ?>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-flat btn-block">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="col-md-8">
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">List Group Menu</h3>
        </div>
        <div class="box-body">
          <table id="table1" class="table table-bordered table-hover">
            <thead> 
              <tr>
                <th width="25">No</th>
                <th width="120">Action</th>
                <th>Menu Group</th>
                <th>Usergroup</th>
              </tr>
            </thead>
            <tbody id="listViewGroup">
              <?php $no = 1; ?>
              <?php foreach ($group as $x) { ?>
              <tr id="groupdel<?= $x->id ?>">
                <td><?= $no ?></td>
                <td>
                  <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
                    <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#groupDelete" onclick="deletedGroup(<?= $x->id ?>, '<?= $x->menu_group ?>')"></i>  
                  </button>
                  <?php if ($x->actived === 'Y') { ?>
                  <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                    <i class="fa fa-power-off cursor text-success iconCrud" id="grouptext<?= $x->id ?>" onclick="statusGroup(<?= $x->id ?>, 'N')"></i> 
                  </button>
                  <span class="label bg-green" id="groupstatus<?= $x->id ?>">active</span>
                  <?php } else { ?>
                  <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                    <i class="fa fa-power-off cursor text-danger iconCrud" id="grouptext<?= $x->id ?>" onclick="statusGroup(<?= $x->id ?>, 'Y')"></i> |
                  </button>
                  <span class="label bg-red" id="groupstatus<?= $x->id ?>">not active</span>
                  <?php } ?>
                </td>
                <td><?= $x->menu_group ?></td>
                <td><?= $x->usergroup ?></td>
              </tr>
              <?php $no = $no + 1; ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">List Acl</h3>
          <div class="box-tools pull-right" style="margin-top:2px;">
            <button type="button" class="btn btn-primary btn-flat btn-block" data-toggle="modal" data-target="#Tambah" onclick="clear_form()">
              <i class="fa fa-plus-circle"></i> Tambah
            </button>
          </div>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table id="table2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th width="163">Action</th>
                  <th width="50" align="center">ID</th>
                  <th width="25">Icon</th>
                  <th>Url</th>
                  <?php foreach ($usergroup as $ug) { ?>
                  <th>
                    <div class="text-center"><?= $ug->id ?></div>
                  </th>
                  <?php } ?>
                  <th width="100">Except</th>
                </tr>
              </thead>
              <tbody id="listView">
                <?php foreach ($acl as $x) { ?>
                <tr id="del<?= $x->id ?>">
                  <td>
                    <button class="btn btn-primary btn-flat" style="padding: 4px 4px 0px 4px">
                      <i class="fa fa-edit cursor" style="font-size:18px;" data-toggle="modal" data-target="#Tambah" onclick="updated('<?= $x->id ?>', '<?= $x->url ?>', '<?= $x->controller ?>', '<?= $x->action ?>', '<?= $x->except ?>')"></i> 
                    </button>

                    <button class="btn btn-danger btn-flat" style="padding: 4px 4px 0px 4px">
                      <i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->id ?>, '<?= $x->url ?>')"></i>
                    </button> 

                    <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                      <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'N')"></i>
                    </button>

                    <?php if ($x->actived === 'Y') { ?>
                    <span class="label bg-green" id="status<?= $x->id ?>">active</span>
                    <?php } else { ?>
                    <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'Y')"></i> 

                    <span class="label bg-red" id="status<?= $x->id ?>">not active</span>
                    <?php } ?>
                  </td>
                  <td align="center"><?= $x->id ?></td>

                  <td align="center">
                  <?php if (!empty($x->icon)) { ?>
                    <i class="fa <?= $x->icon ?>"></i></td>
                  <?php } ?>

                  <td><?= $x->url ?></td>
                  <?php foreach ($usergroup as $ug) { ?>
                  <td align="center">
                    <input type="checkbox" id="check" class="flat-blue" value="<?= $x->id ?>,<?= $ug->id ?>"
                    <?php if ($this->isIncluded($ug->id, $this->Helpers->usergroup($x->usergroup))) { ?>
                    checked="true" 
                    <?php } ?>
                    >
                  </td>
                  <?php } ?>
                  <td style="padding: 0px;"><div ondblclick="return except(this)" style="padding: 10px;" acl="<?= $x->id ?>"><?= $x->except ?></div></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- include Js -->
<div class="modal fade" id="groupDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Delete Menu Group</h4>
      </div>

      <form name="delete" action="<?= $this->url->get('Acl/MenuGroup/deleted') ?>" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <input type="hidden" name="id" id="group_delete" value="">
          <p>Apakah anda yakin akan menghapus Menu Group "<span id="menuGroup" class="text-red"></span>" ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default close_btn" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </form>

    </div>
  </div>
</div>
<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clear_form()">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="labelAcl">Input Acl</h4>
      </div>

      <form name="acl" action="<?= $this->url->get('Acl/input') ?>" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Icon</label>
                <input type="text" name="icon" class="form-control" placeholder="Icon">
                <p class="text-muted"><a target="Blank" href="http://fontawesome.io/icons/">http://fontawesome.io/icons/</a></p>
              </div>
              <div class="form-group">
                <label>Label Menu</label>
                <input type="text" name="label" class="form-control" placeholder="Label Menu">
              </div>
              <div class="form-group">
                <label>Group Menu</label>
                <select class="form-control" name="menu_group">
                  <?= $this->Tag->groupMenu() ?>
                </select>
              </div>
              <div class="form-group">
                <label>Parent Menu</label>
                <input type="text" name="parent" class="form-control" placeholder="Parent Menu">
              </div>
              <div class="form-group">
                <label>Child Menu</label>
                <select class="form-control" name="child">
                  <option value="">Child Menu</option>
                  <option value="N">N</option>
                  <option value="Y">Y</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Url</label>
                <input type="text" name="url" class="form-control" placeholder="url">
              </div>
              <div class="form-group">
                <label>Controller</label>
                <input type="text" name="controller" class="form-control" placeholder="Controller">
              </div>
              <div class="form-group">
                <label>Action</label>
                <input type="text" name="actions" class="form-control" placeholder="Action"> 
              </div>
              <div class="form-group usergroup">
                <label>Usergroup</label><br>
                <?php foreach ($usergroup as $ug) { ?>
                <td align="center">
                  <label>
                    <input type="checkbox" name="usergroup[]" id="data<?= $ug->id ?>" class="flat-blue tambah" value="<?= $ug->id ?>"> <?= $ug->usergroup ?>
                  </label><br>
                </td>
                <?php } ?>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Except</label>
                <textarea class="form-control" name="except" placeholder="Except User ..."></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clear_form()">Close</button>
          <button type="submit" class="btn btn-success">Save</button>
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
        <h4 class="modal-title">Delete Acl</h4>
      </div>

      <form name="delete" action="<?= $this->url->get('Acl/deleted') ?>" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <input type="hidden" name="id" id="id_delete" value="">
          <p>Apakah anda yakin akan menghapus Acl "<span id="acl" class="text-red"></span>" ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default close_btn" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </form>

    </div>
  </div>
</div>
<script>
$(function () {
  $('#table1').DataTable();
});
$(function () {
  $('#table2').DataTable();
});


(function() {

  $('form[data-remote]').on('submit', function(e) {
    // console.log('ya')
    var form = $(this);
    var url = form.prop('action');

    $.ajax({
      type: 'POST',
      url: url,
      dataType:'json',
      data: form.serialize(),
      success: function(response){
        new PNotify({
          title: response.title,
          text: response.text,
          type: response.type
        });
        if (response.close === 1) {
          list();
          clear_form(response.close);
        } else if (response.close === 2) {
          $('#Delete').modal('hide');
          list();
          $('#del'+response.id).fadeOut(1000);
        } else if (response.close === 3) {
          $('#groupDelete').modal('hide');
          listGroup();
          clear_form();
        } else if (response.close === 4) {
          $('#groupDelete').modal('hide');
          listGroup();
          $('#groupdel'+response.id).fadeOut(1000);
        } else {
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
    url: '<?= $this->url->get('Acl/list') ?>',
    dataType:'html',
    success: function(response){
      $('#listView').html(response);
    }
  });
}

function listGroup() {
  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Acl/MenuGroup/list') ?>',
    dataType:'html',
    success: function(response){
      $('#listViewGroup').html(response);
    }
  });
}

function deleted(id, acl) {
  $('input#id_delete').val(id);
  $('span#acl').text(acl);
}

function updated(id, url, controller, action, except) {
  $('#Tambah').find('#labelAcl').text('Update Acl');
  var form = $('form[name="acl"]');
  form.attr('action', '<?= $this->url->get('Acl/updated/') ?>' + id);

  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Acl/detail/') ?>'+id,
    dataType:'json',
    success: function(response){
      console.log(response);
      $.each(response, function(key, value) {
        form.find('[name="'+key+'"]')
            .not('input[name="usergroup"]')
            .val(value);
      });

      form.find('[name="actions"]').val(response.action);
      var str = response.usergroup;
      var res = str.split(",");
      for (var i = 0; i < res.length; i++) {
        $('input[type="checkbox"]#data'+res[i]).prop('checked', true);
      }
    }
  });

  var btn_submit = form.find('button[type="submit"]');
  btn_submit.removeClass('btn-success');
  btn_submit.addClass('btn-primary');
  btn_submit.text('Save Update');
}

function clear_form(id){
  $('#Tambah').find('#labelAcl').text('Input Acl');
  var form  = $('form[name="acl"]');
  form.attr('action', '<?= $this->url->get('Acl/input') ?>');
  form.find('[name]').not('[name^="usergroup"]').val('');
  form.find('[name^="usergroup"]').prop('checked', false);
  form.find('.usergroup').show();
  $('form[name="group"]').find('[name]').not('[name^=usergroup]').val('');
  $('form[name="group"]').find('[name^="usergroup"]').prop('checked', false);
  
  var btn_submit = form.find('button[type="submit"]');
  btn_submit.removeClass('btn-primary');
  btn_submit.addClass('btn-success');
  btn_submit.text('Save');

  if (id === 1) {
    $('#Tambah').modal('hide');
  }
}

function status(id, status) {
  $.ajax({
    type: 'POST',
    url: 'Acl/status',
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

$('input[type="checkbox"]#check').on("click", function() {
  var val = $(this).val();
  var res = val.split(",");
  
  $.ajax({
    type: 'POST',
    url: 'Acl/access',
    dataType:'json',
    data: 'id='+res[0]+'&usergroup='+res[1],
    success: function(response){
      new PNotify({
        title: response.title,
        text: response.text,
        type: response.type
      });
    }
  });
});

$('.except').keyup(function(event) {
    newText = event.target.value;
    $('textarea.except').attr('textval', newText);
    console.log(newText);
});

function except(that) {
  var isi = $(that).html().trim();
  var id  = $(that).attr('acl');
  $(that).parent().html('<textarea class="form-control" onblur="return except_back(this)" style="width:100%; height:100%;" acl="'+id+'">'+isi+'</textarea>').click(); 
    $(that).parent().find('textarea').focus();
  return false;
}

function except_back(that){
  var isi = $(that).val();
  var id  = $(that).attr('acl');
  $(that).parent().html('<div ondblclick="return except(this)" style="padding: 10px;" acl="'+id+'">'+isi+'</div>');
  $.ajax({
    method: "POST",
    dataType: "json",
    url: 'Acl/except',
    data: 'id='+id+'&except='+isi,
    success: function(response){
      new PNotify({
        title: response.title,
        text: response.text,
        type: response.type
      });
    }
  });
  return false;
}

function menuAsk(that) {
  var val = $(that).val();

  if (val == 'Y') {
    $('#menuShow').collapse('show');
  } else {
    $('#menuShow').collapse('hide');
  }
}

function deletedGroup(id, group) {
  $('input#group_delete').val(id);
  $('span#menuGroup').text(group);
}

function statusGroup(id, status) {
  $.ajax({
    type: 'POST',
    url: 'Acl/MenuGroup/status',
    dataType:'json',
    data: 'id='+id+'&actived='+status,
    success: function(response){
      new PNotify({
        title: response.title,
        text: response.text,
        type: response.type
      });
      if (response.i === 'text-success' && response.bg === 'bg-green') {
        $("td i#grouptext"+id)
          .attr("onclick", "statusGroup("+id+", '"+response.active+"')")
          .toggleClass('text-danger text-success');

        $("td span#groupstatus"+id)
          .toggleClass('bg-red bg-green')
          .text(response.status);
      } else if (response.i === 'text-danger' && response.bg === 'bg-red') {
        $("td i#grouptext"+id)
          .attr("onclick", "statusGroup("+id+", '"+response.active+"')")
          .toggleClass('text-success text-danger');

        $("td span#groupstatus"+id)
          .toggleClass('bg-green bg-red')
          .text(response.status);
      }
    }
  });
}
</script>