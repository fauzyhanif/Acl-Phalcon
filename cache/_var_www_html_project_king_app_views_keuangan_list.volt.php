<section class="content animated fadeIn">
  <div class="row">
  <?php foreach ($data as $x) { ?>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <table>
            <tr>
              <td>Program</td>
              <td>: <?= $x->nm_program_studi ?></td>
            </tr>

            <tr>
              <td>Level</td>
              <td>: <?= $x->level ?></td>
            </tr>

            <tr>
              <td>Ket</td>
              <td>: </td>
            </tr>

            <tr>
              <td>Tagihan</td>
              <td>:  Rp. <?= number_format($x->sisa_tagihan,0,',','.'); ?></td>
            </tr>
          </table>
        <!-- <p>asd</p> -->

        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="<?= $this->url->get('Pembayaran/Transaksi/') ?><?= $x->id ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <?php } ?>
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