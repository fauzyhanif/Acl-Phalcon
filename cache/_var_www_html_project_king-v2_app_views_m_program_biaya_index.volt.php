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
  <h1>Program Studi dan Biaya</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-database"></i> Data Master</li>
    <li class="active">Program Studi dan Biaya</li>
  </ol>
</section>
<section class="content animated fadeIn">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header">
          <button type="button" class="btn btn-primary btn-flat pull-right" data-toggle="modal" data-target="#Tambah">
            <i class="fa fa-plus-circle"></i> Tambah Program Studi dan Biaya
          </button>
        </div>
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">REGULAR (12 Sesi = 1 level)</a></li>
            <li><a href="#tab_2" data-toggle="tab">INTENSIVE (22 sesi = 2 level)</a></li>
            <li><a href="#tab_3" data-toggle="tab">Spesial Program</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
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

                    <td align="center" width="130">
                      <b>Biaya Lunas di Depan</b>
                    </td>

                    <td align="center" width="130">
                      <b>Total Biaya Angsuran</b>
                    </td>

                    <td align="center" width="130">
                      <b>Angsuran 1</b>
                    </td>

                    <td align="center" width="130">
                      <b>Angsuran 2</b>
                    </td>
                  </tr>
                </thead>
                <tbody id="listView1">
                  <?php $no = 1; ?>
                  <?php foreach ($biaya1 as $x) { ?>
                  <tr id="del<?= $x->a->id ?>">
                    <td><?= $no ?></td>
                    <td>
                      <button class="btn btn-primary btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-edit cursor iconCrud" data-toggle="modal" data-target="#Edit" onclick="updated(<?= $x->a->id ?>, '<?= $x->a->program_id ?>', '<?= $x->a->biaya_kursus ?>', '<?= $x->a->biaya_kursus_angsuran ?>', '<?= $x->a->angsuran_1 ?>', '<?= $x->a->angsuran_2 ?>')"></i>  
                      </button>

                      <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->a->id ?>, '<?= $x->b->nm_program_studi ?>')"></i>  
                      </button>
                      <?php if ($x->a->actived === 'Y') { ?>
                      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-power-off cursor text-success iconCrud" id="text<?= $x->a->id ?>" onclick="status(<?= $x->a->id ?>, 'N')"></i> 
                      </button>
                      <span class="label bg-green" id="status<?= $x->a->id ?>">active</span>
                      <?php } else { ?>
                      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-power-off cursor text-danger iconCrud" id="text<?= $x->a->id ?>" onclick="status(<?= $x->a->id ?>, 'Y')"></i> |
                      </button>
                      <span class="label bg-red" id="status<?= $x->a->id ?>">not active</span>
                      <?php } ?>
                    </td>
                    <td><?= $x->b->nm_program_studi ?></td>
                    <td>Rp. <?= number_format($x->a->biaya_kursus,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->biaya_kursus_angsuran,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->angsuran_1,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->angsuran_2,0,',','.') ?></td>
                  </tr>
                  <?php $no = $no + 1; ?>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
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

                    <td align="center" width="130">
                      <b>Biaya Lunas di Depan</b>
                    </td>

                    <td align="center" width="130">
                      <b>Total Biaya Angsuran</b>
                    </td>

                    <td align="center" width="130">
                      <b>Angsuran 1</b>
                    </td>

                    <td align="center" width="130">
                      <b>Angsuran 2</b>
                    </td>
                  </tr>
                </thead>
                <tbody id="listView2">
                  <?php $no = 1; ?>
                  <?php foreach ($biaya2 as $x) { ?>
                  <tr id="del<?= $x->a->id ?>">
                    <td><?= $no ?></td>
                    <td>
                      <button class="btn btn-primary btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-edit cursor iconCrud" data-toggle="modal" data-target="#Edit" onclick="updated(<?= $x->a->id ?>, '<?= $x->a->program_id ?>', '<?= $x->a->biaya_kursus ?>', '<?= $x->a->biaya_kursus_angsuran ?>', '<?= $x->a->angsuran_1 ?>', '<?= $x->a->angsuran_2 ?>')"></i>  
                      </button>

                      <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->a->id ?>, '<?= $x->b->nm_program_studi ?>')"></i>  
                      </button>
                      <?php if ($x->a->actived === 'Y') { ?>
                      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-power-off cursor text-success iconCrud" id="text<?= $x->a->id ?>" onclick="status(<?= $x->a->id ?>, 'N')"></i> 
                      </button>
                      <span class="label bg-green" id="status<?= $x->a->id ?>">active</span>
                      <?php } else { ?>
                      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-power-off cursor text-danger iconCrud" id="text<?= $x->a->id ?>" onclick="status(<?= $x->a->id ?>, 'Y')"></i> |
                      </button>
                      <span class="label bg-red" id="status<?= $x->a->id ?>">not active</span>
                      <?php } ?>
                    </td>
                    <td><?= $x->b->nm_program_studi ?></td>
                    <td>Rp. <?= number_format($x->a->biaya_kursus,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->biaya_kursus_angsuran,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->angsuran_1,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->angsuran_2,0,',','.') ?></td>
                  </tr>
                  <?php $no = $no + 1; ?>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">
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

                    <td align="center" width="130">
                      <b>Biaya Lunas di Depan</b>
                    </td>

                    <td align="center" width="130">
                      <b>Total Biaya Angsuran</b>
                    </td>

                    <td align="center" width="130">
                      <b>Angsuran 1</b>
                    </td>

                    <td align="center" width="130">
                      <b>Angsuran 2</b>
                    </td>
                  </tr>
                </thead>
                <tbody id="listView3">
                  <?php $no = 1; ?>
                  <?php foreach ($biaya3 as $x) { ?>
                  <tr id="del<?= $x->a->id ?>">
                    <td><?= $no ?></td>
                    <td>
                      <button class="btn btn-primary btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-edit cursor iconCrud" data-toggle="modal" data-target="#Edit" onclick="updated(<?= $x->a->id ?>, '<?= $x->a->program_id ?>', '<?= $x->a->biaya_kursus ?>', '<?= $x->a->biaya_kursus_angsuran ?>', '<?= $x->a->angsuran_1 ?>', '<?= $x->a->angsuran_2 ?>')"></i>  
                      </button>

                      <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->a->id ?>, '<?= $x->b->nm_program_studi ?>')"></i>  
                      </button>
                      <?php if ($x->a->actived === 'Y') { ?>
                      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-power-off cursor text-success iconCrud" id="text<?= $x->a->id ?>" onclick="status(<?= $x->a->id ?>, 'N')"></i> 
                      </button>
                      <span class="label bg-green" id="status<?= $x->a->id ?>">active</span>
                      <?php } else { ?>
                      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-power-off cursor text-danger iconCrud" id="text<?= $x->a->id ?>" onclick="status(<?= $x->a->id ?>, 'Y')"></i> |
                      </button>
                      <span class="label bg-red" id="status<?= $x->a->id ?>">not active</span>
                      <?php } ?>
                    </td>
                    <td><?= $x->b->nm_program_studi ?></td>
                    <td>Rp. <?= number_format($x->a->biaya_kursus,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->biaya_kursus_angsuran,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->angsuran_1,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->angsuran_2,0,',','.') ?></td>
                  </tr>
                  <?php $no = $no + 1; ?>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.tab-pane -->
          </div>
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- nav-tabs-custom -->
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
                <label>Term</label>
                <select class="form-control" name="term">
                  <option>- Pilih Term -</option>
                  <option value="REGULER (12 sesi = 1 level)">REGULAR (12 sesi = 1 level)</option>
                  <option>INTENSIVE (22 sesi = 2 level)</option>
                  <option>Spesial Program</option>
                </select>
              </div>

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
                <label>Biaya Lunas di Depan</label>
                <input type="text" name="biaya_kursus" class="form-control 1">
              </div>

              <div class="form-group">
                <label>Total Biaya Angsuran</label>
                <input type="text" name="biaya_kursus_angsuran" class="form-control 1">
              </div>

              <div class="form-group">
                <label>Angsuran 1</label>
                <input type="text" name="angsuran_1" class="form-control 1">
              </div>

              <div class="form-group">
                <label>Angsuran 2</label>
                <input type="text" name="angsuran_2" class="form-control 1">
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
                <label>Biaya Lunas di Depan</label>
                <input type="text" name="biaya_kursus" class="form-control 1">
              </div>

              <div class="form-group">
                <label>Total Biaya Angsuran</label>
                <input type="text" name="biaya_kursus_angsuran" class="form-control 1">
              </div>

              <div class="form-group">
                <label>Angsuran 1</label>
                <input type="text" name="angsuran_1" class="form-control 1">
              </div>

              <div class="form-group">
                <label>Angsuran 2</label>
                <input type="text" name="angsuran_2" class="form-control 1">
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

$(document).ready(function(){

  $(".1").mask("000.000.000", {reverse:true});

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
        list1();
        list2();
        list3();
        new PNotify({
          title: response.title,
          text: response.text,
          type: response.type
        });
        $('#Tambah').modal('hide');
        $('#Delete').modal('hide');
        $('#Edit').modal('hide');

        $('form[name="program_biaya').trigger("reset");
      }
    });
 
    e.preventDefault();
  });

})();

function list1() {
  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Program-biaya/list1') ?>',
    dataType:'html',
    success: function(response){
      // console.log(response);

      $('#listView1').html(response);
    }
  });
}

function list2() {
  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Program-biaya/list2') ?>',
    dataType:'html',
    success: function(response){
      // console.log(response);

      $('#listView2').html(response);
    }
  });
}

function list3() {
  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Program-biaya/list3') ?>',
    dataType:'html',
    success: function(response){
      // console.log(response);

      $('#listView3').html(response);
    }
  });
}

function deleted(id, program) {
  $('input#id_delete').val(id);
  $('span#program').text(program);
}


function updated(id, program_id, biaya_kursus, biaya_kursus_angsuran, angsuran_1, angsuran_2) {
  var form = $('form[name="edit_program_biaya"]').attr('action', '<?= $this->url->get('Program-biaya/updated/') ?>' + id);
  form.find('[name="program_id"]').val(program_id);
  form.find('[name="biaya_kursus"]').val(biaya_kursus);
  form.find('[name="biaya_kursus_angsuran"]').val(biaya_kursus_angsuran);
  form.find('[name="angsuran_1"]').val(angsuran_1);
  form.find('[name="angsuran_2"]').val(angsuran_2);
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