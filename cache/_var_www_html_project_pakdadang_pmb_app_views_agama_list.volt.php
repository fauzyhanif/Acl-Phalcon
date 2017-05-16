<?php $no = 1; ?>
<?php foreach ($agama as $x) { ?>
<tr id="del<?= $x->id ?>">
  <td><?= $no ?></td>
  <td>
    <i class="fa fa-edit cursor" style="font-size:18px;" data-toggle="modal" data-target="#Tambah" onclick="updated('<?= $x->id ?>', '<?= $x->agama ?>')"></i> |
    <i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->id ?>, '<?= $x->agama ?>')"></i> |
    <?php if ($x->actived === 'Y') { ?>
    <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'N')"></i> |
    <span class="label bg-green" id="status<?= $x->id ?>">active</span>
    <?php } else { ?>
    <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'Y')"></i> |
    <span class="label bg-red" id="status<?= $x->id ?>">not active</span>
    <?php } ?>
  </td>
  <td><?= $x->agama ?></td>
</tr>
<?php $no = $no + 1; ?>
<?php } ?>