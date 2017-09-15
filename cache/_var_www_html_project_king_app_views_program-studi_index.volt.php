<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Data Master Program Studi</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn bg-navy btn-flat btn-block" data-toggle="modal" data-target="#Tambah">
              <i class="fa fa-plus-circle"></i> Tambah
            </button>
          </div>
        </div>
        <div class="box-body">
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
                    <i class="fa fa-edit cursor iconCrud" data-toggle="modal" data-target="#Tambah" onclick="updated(<?= $x->id ?>, '<?= $x->nm_program_studi ?>')"></i>  
                  </button>

                  <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
                    <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->id ?>, '<?= $x->nm_program_studi ?>')"></i>  
                  </button>
                  <?php if ($x->actived === 'Y') { ?>
                  <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                    <i class="fa fa-power-off cursor text-success iconCrud" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'N')"></i> 
                  </button>
                  <span class="label bg-green" id="groupstatus<?= $x->id ?>">active</span>
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
<script>
$(function () {
  $('#table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
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
  $('form[name="program_studi"]').find('[name="nm_program_studi"]').val('');
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
</script>