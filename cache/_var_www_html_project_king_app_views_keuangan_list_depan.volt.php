<section class="content animated fadeIn">
  <div class="row">
    <div class="col-md-12" >
      <div class="box box-danger" style="width: 40%; margin: 80px auto;">
        <div class="box-header">
          <h1 class="box-title">Kategori</h1>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
      	  <form action="<?= $this->url->get('Pembayaran/filter') ?>" method="post">
      	  	<div class="form-group">
      	  	 <select class="form-control" name="program">
      	  	  <option value="">- Pilih Program Studi -</option>
              <?php foreach ($program as $x) { ?>
                <option value="<?= $x->id ?>"><?= $x->nm_program_studi ?></option>
              <?php } ?>
      	  	 </select>
      	  	</div>

      	  	<div class="form-group">
      	  	 <select class="form-control" name="level">
      	  		 <option value="">- Pilih level -</option>
      	  		 <option value="1">Level 1</option>
      	  		 <option value="2">Level 2</option>
      	  		 <option value="3">Level 3</option>
      	  	 </select>
      	  	</div>
      	  	<div >
          	  <button type="submit" class="btn btn-primary btn-flat" style="width: 100%">Filter</button>
          	</div>
      	  </form>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
$(function () {
  $('#example1').DataTable({
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
      	// console.log(response)
      	var string = '';
      	for (var x in response) {
      		string += '<tr>';
      		string += '<td>'+response[x].nip+'</td>';
      		string += '<td>'+response[x].name+'</td>';
      		string += '<td class="text-center"><a href="Pendaftaran/Pembayaran/'+response[x].nip+'" class="btn btn-primary btn-xs btn-flat">ya</a></td>';
      		string += '<tr>';
      	}
      	$('#list').html(string);
      }
    });
 
    e.preventDefault();
  });

})();
</script>