<style type="text/css">
#formDaftar{
  padding: 5px 10px;
  background-color: #F7CA18;
  font-size: 16px;
}

#formDaftar a{
  color: black;
}

thead{
  background-color: #F7CA18;
  }
</style>
<section class="content-header animated fadeIn">
  <h1>Program Studi</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-database"></i> Data Master</li>
    <li class="active">Program Studi</li>
  </ol>
</section>
<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header">
          <button type="button" class="btn btn-primary btn-flat pull-right btn-sm" data-toggle="modal" data-target="#Tambah">
            <i class="fa fa-plus-circle"></i> Tambah
          </button>
        </div>
        <div class="box-body">
          <table id="table" class="table table-bordered table-hover">
	        <thead>
	          <tr>
	            <td width="35">
	              <b>No</b>
	            </td>
	            <td align="center" width="180">
	              <b>Action</b>
	            </td>
	            <td align="center">
	              <b>Nama Program Study</b>
	            </td>
	          </tr>
	        </thead>
	        <tbody id="listView">
              <?php $no = 1; ?>
              <?php foreach ($data as $x) { ?>
              <tr id="del<?= $x->id ?>">
                <td><?= $no ?></td>
                <td>

                  <button class="btn btn-primary btn-flat"  id="buttonCrudGroupMenu">
                    <i class="fa fa-edit cursor iconCrud" data-toggle="modal" data-target="#Edit" onclick="updated(<?= $x->id ?>, '<?= $x->nm_program_studi ?>')"></i>  
                  </button>

                  <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
                    <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->id ?>, '<?= $x->nm_program_studi ?>')"></i>  
                  </button>
                  <?php if ($x->actived === 'Y') { ?>
                  <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                    <i class="fa fa-power-off cursor text-success iconCrud" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'N')"></i> 
                  </button>
                  <span class="label bg-green" id="status<?= $x->id ?>">active</span>
                  <?php } else { ?>
                  <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                    <i class="fa fa-power-off cursor text-danger iconCrud" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'Y')"></i> |
                  </button>
                  <span class="label bg-red" id="status<?= $x->id ?>">not active</span>
                  <?php } ?>
                </td>
                <td><?= $x->nm_program_studi ?></td>
              </tr>
              <?php $no = $no + 1; ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- include Js -->
<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clear_form()">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="labelAcl">Input Program Studi</h4>
      </div>

      <form name="program_studi" action="<?= $this->url->get('Program-Studi/input') ?>" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Nama Program Studi</label>
                <input type="text" name="nm_program_studi" class="form-control">
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
<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clear_form()">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="labelAcl">Edit Program Studi</h4>
      </div>

      <form name="edit_program_studi" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Nama Program Studi</label>
                <input type="text" name="nm_program_studi" class="form-control">
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
        <h4 class="modal-title">Delete Program studi</h4>
      </div>

      <form name="delete" action="<?= $this->url->get('Program-Studi/deleted') ?>" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <input type="hidden" name="id" id="id_delete" value="">
          <p>Apakah anda yakin akan menghapus Program studi ini "<span id="program" class="text-red"></span>" ?</p>
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
  $('#table').DataTable({
      "ordering": false,
    });
});

(function() {

  $('form[data-remote]').on('submit', function(e) {
    var form = $(this);
    var url = form.prop('action');

    $.ajax({
      type: 'POST',
      url: url,
      dataType:'json',
      data: form.serialize(),
      success: function(response){
        list();
        clear_form();
        new PNotify({
          title: response.title,
          text: response.text,
          type: response.type
        });
        $('#Tambah').modal('hide');
        $('#Delete').modal('hide');
        $('#Edit').modal('hide');
      }
    });
 
    e.preventDefault();
  });

})();

function list() {
  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Program-Studi/list') ?>',
    dataType:'html',
    success: function(response){
      $('#listView').html(response);
    }
  });
}

function deleted(id, program) {
  $('input#id_delete').val(id);
  $('span#program').text(program);
}


function updated(id, nm_program_studi) {
  var form = $('form[name="edit_program_studi"]').attr('action', '<?= $this->url->get('Program-Studi/updated/') ?>' + id);
  form.find('[name="nm_program_studi"]').val(nm_program_studi);
}

function clear_form(id){
  $('form[name="program_studi"]').find('[name="nm_program_studi"]').val('');
}

function status(id, status) {
  $.ajax({
    type: 'POST',
    url: 'Program-Studi/status',
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
</script>