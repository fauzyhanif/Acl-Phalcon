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
  <h1>Agama</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-database"></i> Data Master</li>
    <li class="active">Agama</li>
  </ol>
</section>

<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-3">
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Input Agama</h3>
        </div>
        <div class="box-body">
          <form name="group" action="<?= $this->url->get('Agama/input') ?>" method="POST" data-remote="data-remote">
            <div class="form-group">
              <label>Nama Agama</label>
              <input type="text" name="agama" class="form-control" placeholder="Agama">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">List Agama</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
          
            <table id="table" class="table table-bordered table-hover">
              <thead>
                <tr class="tableHead">
                  <td width="40">
                    <b>No</b>
                  </td>
                  <td align="center" width="150">
                    <b>Action</b>
                  </td>
                  <td>
                    <b>Agama</b>
                  </td>
                </tr>
              </thead>
              <tbody id="listView">
                <?php $no = 1; ?>
                <?php foreach ($agama as $x) { ?>
                <tr id="del<?= $x->id ?>">
                  <td><?= $no ?></td>
                  <td>
                    <button class="btn btn-primary btn-flat"  id="buttonCrudGroupMenu">
                      <i class="fa fa-edit cursor" style="font-size:18px;" data-toggle="modal" data-target="#Tambah" onclick="updated('<?= $x->id ?>', '<?= $x->agama ?>')"></i>
                    </button> |

                    <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
                      <i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#Delete" onclick="deleted('<?= $x->id ?>', '<?= $x->agama ?>')"></i>
                    </button> |
                    <?php if ($x->actived === 'Y') { ?>

                    <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                      <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'N')"></i>
                    </button> |
                    <span class="label bg-green" id="status<?= $x->id ?>">active</span>
                    <?php } else { ?>
                    <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                      <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'Y')"></i>
                    </button> |
                    <span class="label bg-red" id="status<?= $x->id ?>">not active</span>
                    <?php } ?>
                  </td>
                  <td><?= $x->agama ?></td>
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
        <h4 class="modal-title">Updated Agama</h4>
      </div>

      <form name="agama" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <div class="form-group">
            <label>Name Agama</label>
            <input type="text" name="agama" class="form-control" placeholder="Agama">
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
        <h4 class="modal-title">Delete Agama</h4>
      </div>

      <form name="delete" action="<?= $this->url->get('Agama/deleted') ?>" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <input type="hidden" name="id" id="id_delete" value="">
          <p>Apakah anda yakin akan menghapus Agama "<span id="agama" class="text-red"></span>" ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default close_btn" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- includemJs -->
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
    url: '<?= $this->url->get('Agama/list') ?>',
    dataType:'html',
    success: function(response){
      $('#listView').html(response);
    }
  });
}

function deleted(id, agama) {
  $('input#id_delete').val(id);
  $('span#agama').text(agama);
}

function updated(id, agama, description) {
  var form = $('form[name="agama"]').attr('action', '<?= $this->url->get('Agama/updated/') ?>' + id);
  form.find('[name="agama"]').val(agama);
}

function clear_form(id){
  $('form[name="agama"]').find('[name]').val('');
  $('form[name="group"]').find('[name]').val('');
}

function status(id, status) {
  $.ajax({
    type: 'POST',
    url: 'Agama/status',
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