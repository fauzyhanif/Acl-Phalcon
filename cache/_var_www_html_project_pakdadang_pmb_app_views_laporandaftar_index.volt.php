<style>
.cursor:hover{
  cursor: pointer;
  color: #ccc;
}
</style>
<section class="content-header animated fadeIn">
  <h1>Laporan per Jurusan</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-home"></i> Home</li>
    <li>Laporan</li>
    <li class="active">Laporan per Jurusan</li>
  </ol>
</section>

<section class="content animated fadeIn">
  <div class="row" style="margin-bottom: 30px">
    <div class="col-md-8">
        <div class="form-group">
          <div class="col-md-8">
          <select class="form-control" name="sesi" onchange="getIPL(this.value);">
            <option value="">Pilih Sesi Pendaftaran</option>
            <?php foreach ($sesi as $s) { ?>
              <option value="<?= $s->id ?>"><?= $s->nama_sesi ?></option>
            <?php } ?>
          </select>
          </div>
        </div>
        
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-body">
          <table class="table table-bordered">
            <tr>
              <th class="text-center" style="width: 10px">No</th>
              <th class="text-center">Nama Jurusan</th>
              <th class="text-center" style="width: 60px">Total</th>
              <th class="text-center" style="width: 60px">L</th>
              <th class="text-center" style="width: 60px">P</th>
            </tr>
            <tr id="data">
              
            </tr>
            
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
function getIPL(id){
   $.ajax({
       type: "POST",
       url: "searchjurusan",
       dataType : 'json',
       data: "id="+id,
       success: function(result){
       	// console.log(result);
        $("#data").html(result);
       }
     });
}
</script>	
