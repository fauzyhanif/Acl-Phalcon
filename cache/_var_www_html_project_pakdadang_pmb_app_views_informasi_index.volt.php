<section class="content-header animated fadeIn">
  <h1>Informasi</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-home"></i> Home</li>
    <li>Data Master</li>
    <li class="active">Informasi</li>
  </ol>
</section>

<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Input Informasi</h3>
        </div>
        <div class="box-body">
          <form name="group" action="<?= $this->url->get('Informasi/input') ?>" method="POST" data-remote="data-remote">
            <div class="form-group">
              <label>Nama Informasi</label>
              <input type="text" name="nama" class="form-control" placeholder="Informasi">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
            </div>
          </form>
       	</div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">List Informasi</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
          
            <table id="table" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td width="40">
                    <b>No</b>
                  </td>
                  <td align="center" width="150">
                    <b>Action</b>
                  </td>
                  <td>
                    <b>Informasi</b>
                  </td>
                </tr>
              </thead>
              <tbody id="listView">
                <?php $no = 1; ?>
                <?php foreach ($informasi as $x) { ?>
                <tr id="del<?= $x->id ?>">
                  <td><?= $no ?></td>
                  <td>
                    <i class="fa fa-edit cursor" style="font-size:18px;" data-toggle="modal" data-target="#Tambah" onclick="updated('<?= $x->id ?>', '<?= $x->nama ?>')"></i> |
                    <i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->id ?>, '<?= $x->nama ?>')"></i> |
                    <?php if ($x->actived === 'Y') { ?>
                    <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'N')"></i> |
                    <span class="label bg-green" id="status<?= $x->id ?>">active</span>
                    <?php } else { ?>
                    <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'Y')"></i> |
                    <span class="label bg-red" id="status<?= $x->id ?>">not active</span>
                    <?php } ?>
                  </td>
                  <td><?= $x->nama ?></td>
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
        <h4 class="modal-title">Updated Informasi</h4>
      </div>

      <form name="informasi" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <div class="form-group">
            <label>Name Informasi</label>
            <input type="text" name="informasi" class="form-control" placeholder="Informasi">
          </div>
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
        <h4 class="modal-title">Delete Informasi</h4>
      </div>

      <form name="delete" action="<?= $this->url->get('Informasi/deleted') ?>" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <input type="hidden" name="id" id="id_delete" value="">
          <p>Apakah anda yakin akan menghapus Informasi "<span id="informasi" class="text-red"></span>" ?</p>
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
      data: form.serialize(),
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
    url: '<?= $this->url->get('Informasi/list') ?>',
    dataType:'html',
    success: function(response){
      $('#listView').html(response);
    }
  });
}

function deleted(id, informasi) {
  $('input#id_delete').val(id);
  $('span#informasi').text(informasi);
}

function updated(id, informasi, description) {
  var form = $('form[name="informasi"]').attr('action', '<?= $this->url->get('informasi/updated/') ?>' + id);
  form.find('[name="informasi"]').val(informasi);
}

function clear_form(id){
  $('form[name="informasi"]').find('[name]').val('');
  $('form[name="group"]').find('[name]').val('');
}

function status(id, status) {
  $.ajax({
    type: 'POST',
    url: 'informasi/status',
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