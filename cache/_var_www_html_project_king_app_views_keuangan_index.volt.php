<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header">
          <h1 class="box-title">Pembayaran</h1>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  	<th width="70">No.</th>
                    <th class="text-center" width="160">Number Student</th>
                    <th class="text-center">Name</th>
                    <th class="text-center" width="100">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
  	              <?php foreach ($result as $x) { ?>
  	              <tr>
  	                <td><?= $no ?>.</td>
  	                <td><?= $x->student_number ?></td>
  	                <td><?= $x->name ?></td>
  	                <td class="text-center"><a href="<?= $this->url->get('Pembayaran/list/') ?><?= $x->student_number ?>" class="btn btn-primary btn-xs btn-flat"><i class="fa fa-fw fa-exchange"></i> Transaksi</a></td>
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