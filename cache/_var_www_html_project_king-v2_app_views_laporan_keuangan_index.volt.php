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
  <h1>Laporan Tagihan Perbulan</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-server"></i> Laporan Tagihan</li>
    <li class="active">Laporan Tagihan Perbulan</li>
  </ol>
</section>

<section class="content">
  <div class="box">
  	<div class="row">
      <div class="col-xs-6">
      	
        <div class="box-body">
          <form class="form-horizontal" action="<?= $this->url->get('Laporan-keuangan-jumlah-tagihan/filter') ?>" method="POST" data-remote>
      	  	<div class="form-group">
      	  	  <div class="col-md-5">
      	  	  	<select class="form-control" name="years">
      	  	  	  <option>- Pilih Tahun -</option>
      	  	  	  <?php for ($i=date('Y')-5; $i < date('Y')+5; $i++) { ?>
                    <?php if ($years == $i){ ?>
                      <option selected=""><?= $i ?></option>
                    <?php } else { ?>
                      <option><?= $i ?></option>
                    <?php } ?>
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
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center" style="width: 5%">No.</th>
                <th class="text-center" style="width: 65%">Bulan</th>
                <th class="text-center" style="width: 10%">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php $TOTAL = 0; ?>
              <?php foreach ($data as $x) { ?>
                <tr>
                  <td><?= $no ?>.</td>
                  <td><?= $x->bulan ?></td>
                  <td class="text-right"><?= number_format($x->jumlah,0,',','.') ?></td>
                </tr>
              <?php $TOTAL = $TOTAL + $x->jumlah; ?>
              <?php $no = $no + 1; ?>
              <?php } ?>
            </tbody>
            <tfoot>
            	<tr>
            		<td colspan="2">Total</td>
	              <td class="text-right"><?= number_format($TOTAL,0,',','.') ?></td>
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