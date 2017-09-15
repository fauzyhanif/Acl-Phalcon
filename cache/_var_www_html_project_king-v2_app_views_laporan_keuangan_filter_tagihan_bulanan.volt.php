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




