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
  <h1>Laporan peserta berdasarkan status</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-server"></i> Laporan peserta</li>
    <li class="active">Laporan peserta berdasarkan status</li>
  </ol>
</section>

<section class="content">
  <div class="box">
  	<div class="row">
      <div class="col-xs-6">
      	
        <div class="box-body">
          <form class="form-horizontal" action="<?= $this->url->get('Laporan-peserta-total/filter-total') ?>" method="POST" data-remote>
      	  	<div class="form-group">
      	  	  <div class="col-md-5">
      	  	  	<select class="form-control" name="term">
      	  	  	  <option>- Pilih Term -</option>
      	  	  	  <option>1</option>
      	  	  	  <option>2</option>
      	  	  	  <option>3</option>
      	  	  	  <option>4</option>
      	  	  	</select>
      	  	  </div>

      	  	  <div class="col-md-5">
      	  	  	<select class="form-control" name="years">
      	  	  	  <option>- Pilih Tahun -</option>
      	  	  	  <?php for ($i=date('Y')-5; $i < date('Y')+5; $i++) { ?>
      	  	  	  <option value="<?=$i?>"><?=$i?></option>
      	  	  	  <?php } ?>
      	  	  	</select>
      	  	  </div>

      	  	  <div class="col-md-2">
      	  	  	<button type="submit" class="btn btn-primary btn-flat">Filter</button>
      	  	  </div>
      	    </div>
      	  </form>
		</div>        
      </div>
    </div>

    <div class="row" id="listViewTotal">
      <div class="col-xs-12">

        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center" style="width: 5%">No.</th>
                <th class="text-center" style="width: 65%">Kategori</th>
                <th class="text-center" style="width: 10%">L</th>
                <th class="text-center" style="width: 10%">P</th>
                <th class="text-center" style="width: 10%">Total</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php $TOTAL = 0; ?>
              <?php $L = 0; ?>
              <?php $P = 0; ?>
              <?php foreach ($data as $x) { ?>
              <tr>
                <td><?= $no ?>.</td>
                <td>
                <a href="Laporan-peserta-total/detail/<?= $x->term ?>/<?= $x->years ?>/<?= str_replace(" ", "-", $x->status_mulai) ?>"><?= $x->status_mulai ?></a>
                </td>
                <td class="text-center"><?= $x->L ?></td>
                <td class="text-center"><?= $x->P ?></td>
                <td class="text-center"><?= $x->total ?></td>
              </tr>
              <?php $no = $no + 1; ?>
              <?php $TOTAL = $TOTAL + $x->total; ?>
              <?php $L = $L + $x->L; ?>
              <?php $P = $P + $x->P; ?>
              <?php } ?>
            </tbody>
            <tfoot>
            	<tr>
            		<td colspan="2">Total</td>
            		<td  class="text-center"><?= $L ?></td>
	                <td  class="text-center"><?= $P ?></td>
	                <td  class="text-center"><?= $TOTAL ?></td>
            	</tr>
            </tfoot>
          </table>
        </div><!-- /.box-body -->
      </div>
    </div><!-- /.col -->
  </div><!-- /.row -->  
</section>

<!-- include Js -->
<script type="text/javascript">
  (function() {

  $('form[data-remote]').on('submit', function(e) {
    var form = $(this);
    var url = form.prop('action');

    $.ajax({
      type: 'POST',
      url: url,
      dataType:'html',
      data: form.serialize(),
      success: function(response){
      	// console.log(response);
      	$('#listViewTotal').html(response);
      }
    });
 
    e.preventDefault();
  });

})();
</script>


<script>
  $(function () {
    $('#example1').DataTable({
      "ordering": false,
    });
  });
</script>