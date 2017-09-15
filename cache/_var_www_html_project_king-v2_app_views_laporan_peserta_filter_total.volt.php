<div class="col-xs-12">
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
            <td><?= $x->status_mulai ?></td>
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

<script>
  $(function () {
    $('#example1').DataTable({
      "ordering": false,
    });
  });
</script>