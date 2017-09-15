<div class="panel box box-primary">
	<div class="box-header with-border">
	  <h4 class="box-title">
	    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
	      PEMBAYARAN
	    </a>
	  </h4>
	</div>
	<div id="collapseTwo" class="panel-collapse collapse">
	  <div class="box-body">

	    <div class="form-group" style="margin-bottom: 0px">
	      <h4 class="col-sm-1"></h4>
	      <h4 class="col-sm-2 ">Biaya Lunas di Depan</h4>

	      <div class="col-sm-8">
	        <h4 id="biaya_depan"></h4>
	      </div>
	    </div>

	    <div class="form-group" style="margin-bottom: 0px">
	      <h4 class="col-sm-1"></h4>
	      <h4 class="col-sm-2 ">Biaya Total Biaya Angsuran</h4>

	      <div class="col-sm-8">
	        <h4 id="biaya_angsuran"></h4>
	      </div>
	    </div>

	    <div class="form-group" style="margin-bottom: 0px">
	      <h4 class="col-sm-1"></h4>
	      <h4 class="col-sm-2 ">Angsuran 1</h4>

	      <div class="col-sm-8">
	        <h4 id="angsuran_1"></h4>
	      </div>
	    </div>

	    <div class="form-group">
	      <h4 class="col-sm-1"></h4>
	      <h4 class="col-sm-2 ">Angsuran 2</h4>

	      <div class="col-sm-8">
	        <h4 id="angsuran_2"></h4>
	      </div>
	    </div>

	    <div class="form-group">
	      <label class="col-sm-1"></label>
	      <label class="col-sm-2 ">Total Bayar</label>

	      <div class="col-sm-8">
	        <input type="text" class="form-control 1 bayar2">
	      </div>
	    </div>

	    <div class="form-group">
	      <label class="col-sm-1"></label>
	      <label class="col-sm-2 ">Guna Membayar</label>

	      <div class="col-sm-8">
	        <input type="text" class="form-control" name="keterangan">
	      </div>
	    </div>

	    
	  </div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $(".1").mask("000.000.000", {reverse:true});
}); 
</script>
