<?php $no = 1; ?>
<?php foreach ($biaya2 as $x) { ?>
<tr id="del<?= $x->a->id ?>">
  <td><?= $no ?></td>
  <td>
    <button class="btn btn-primary btn-flat"  id="buttonCrudGroupMenu">
      <i class="fa fa-edit cursor iconCrud" data-toggle="modal" data-target="#Edit" onclick="updated(<?= $x->a->id ?>, '<?= $x->a->program_id ?>', '<?= $x->a->biaya_kursus ?>', '<?= $x->a->biaya_kursus_angsuran ?>', '<?= $x->a->angsuran_1 ?>', '<?= $x->a->angsuran_2 ?>')"></i>  
    </button>

    <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
      <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->a->id ?>, '<?= $x->b->nm_program_studi ?>')"></i>  
    </button>
    <?php if ($x->a->actived === 'Y') { ?>
    <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
      <i class="fa fa-power-off cursor text-success iconCrud" id="text<?= $x->a->id ?>" onclick="status(<?= $x->a->id ?>, 'N')"></i> 
    </button>
    <span class="label bg-green" id="status<?= $x->a->id ?>">active</span>
    <?php } else { ?>
    <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
      <i class="fa fa-power-off cursor text-danger iconCrud" id="text<?= $x->a->id ?>" onclick="status(<?= $x->a->id ?>, 'Y')"></i> |
    </button>
    <span class="label bg-red" id="status<?= $x->a->id ?>">not active</span>
    <?php } ?>
  </td>
  <td><?= $x->b->nm_program_studi ?></td>
  <td>Rp. <?= number_format($x->a->biaya_kursus,0,',','.') ?></td>
  <td>Rp. <?= number_format($x->a->biaya_kursus_angsuran,0,',','.') ?></td>
  <td>Rp. <?= number_format($x->a->angsuran_1,0,',','.') ?></td>
  <td>Rp. <?= number_format($x->a->angsuran_2,0,',','.') ?></td>
</tr>
<?php $no = $no + 1; ?>
<?php } ?>