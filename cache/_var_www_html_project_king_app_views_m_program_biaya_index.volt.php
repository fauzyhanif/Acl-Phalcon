<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Data Master Program Studi dan Biaya</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-danger btn-flat btn-block" data-toggle="modal" data-target="#Tambah">
              <i class="fa fa-plus-circle"></i> Tambah Program Studi dan Biaya
            </button>
          </div>
        </div>
        <div class="box-body">
          <table  class="table table-bordered table-hover">
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

              	<td align="center">
                	<b>Level</b>
              	</td>

              	<td align="center">
                	<b>Biaya Pendaftaran</b>
              	</td>

              	<td align="center">
                	<b>Biaya Kursus</b>
              	</td>
            	</tr>
          	</thead>
          	<tbody id="listView">
              <?php $no = 1; ?>
              <?php foreach ($biaya as $x) { ?>
              <tr id="del<?= $x->id ?>">
                <td><?= $no ?></td>
                <td>

                  <button class="btn btn-primary btn-flat"  id="buttonCrudGroupMenu">
                    <i class="fa fa-edit cursor iconCrud" data-toggle="modal" data-target="#Edit" onclick="updated(<?= $x->id ?>, '<?= $x->program_id ?>', '<?= $x->level ?>', '<?= $x->biaya_pendaftaran ?>', '<?= $x->biaya_kursus ?>')"></i>  
                  </button>

                  <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
                    <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->id ?>, '<?= $x->program_id ?>')"></i>  
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
                <td align="center"><?= $x->level ?></td>
                <td><?= $x->biaya_pendaftaran ?></td>
                <td><?= $x->biaya_kursus ?></td>
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

      <form name="program_biaya" action="<?= $this->url->get('Program-biaya/input') ?>" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Nama Program Studi</label>
                <select class="form-control" name="program_id">
                  <option>- Pilih Program Studi -</option>
                  <?php foreach ($data as $x) { ?>
                    <option value="<?= $x->id ?>"><?= $x->nm_program_studi ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label>Level</label>
                <select class="form-control" name="level">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

              <div class="form-group">
                <label>Biaya Pendaftaran</label>
                <input type="text" name="biaya_pendaftaran" class="form-control">
              </div>

              <div class="form-group">
                <label>Biaya Kursus</label>
                <input type="text" name="biaya_kursus" class="form-control">
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
        <h4 class="modal-title" id="labelAcl">Edit Program dan Biaya</h4>
      </div>

      <form name="edit_program_biaya" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Nama Program Studi</label>
                <select class="form-control" name="program_id">
                  <option>- Pilih Program Studi -</option>
                  <?php foreach ($data as $x) { ?>
                    <option value="<?= $x->id ?>"><?= $x->nm_program_studi ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label>Level</label>
                <select class="form-control" name="level">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

              <div class="form-group">
                <label>Biaya Pendaftaran</label>
                <input type="text" name="biaya_pendaftaran" class="form-control">
              </div>

              <div class="form-group">
                <label>Biaya Kursus</label>
                <input type="text" name="biaya_kursus" class="form-control">
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

      <form name="delete" action="<?= $this->url->get('Program-biaya/deleted') ?>" method="POST" data-remote="data-remote">
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
        // clear_form();
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
    url: '<?= $this->url->get('Program-biaya/list') ?>',
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


function updated(id, program_id, level, biaya_a, biaya_b) {
  console.log(biaya_a)
  var form = $('form[name="edit_program_biaya"]').attr('action', '<?= $this->url->get('Program-biaya/updated/') ?>' + id);
  form.find('[name="program_id"]').val(program_id);
  form.find('[name="level"]').val(level);
  form.find('[name="biaya_pendaftaran"]').val(biaya_a);
  form.find('[name="biaya_kursus"]').val(biaya_b);
}

function clear_form(id){
  $('form[name="program_biaya').trigger("reset");
}

function status(id, status) {
  $.ajax({
    type: 'POST',
    url: 'Program-biaya/status',
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