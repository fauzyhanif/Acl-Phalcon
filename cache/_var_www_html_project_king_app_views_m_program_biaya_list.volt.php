<?php $no = 1; ?>
  <?php foreach ($biaya as $x) { ?>
  <tr id="del<?= $x->id ?>">
    <td><?= $no ?></td>
    <td>

      <button class="btn btn-primary btn-flat"  id="buttonCrudGroupMenu">
        <i class="fa fa-edit cursor iconCrud" data-toggle="modal" data-target="#Edit" onclick="updated(<?= $x->id ?>, '<?= $x->program_id ?>', '<?= $x->level ?>', '<?= $x->biaya_pendaftaran ?>', '<?= $x->biaya_kursus ?>')"></i>  
      </button>

      <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
        <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->id ?>, '<?= $x->program_id ?>')"></i>  
      </button>
      <?php if ($x->actived === 'Y') { ?>
      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
        <i class="fa fa-power-off cursor text-success iconCrud" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'N')"></i> 
      </button>
      <span class="label bg-green" id="status<?= $x->id ?>">active</span>
      <?php } else { ?>
      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
        <i class="fa fa-power-off cursor text-danger iconCrud" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'Y')"></i> |
      </button>
      <span class="label bg-red" id="status<?= $x->id ?>">not active</span>
      <?php } ?>
    </td>
    <td><?= $x->nm_program_studi ?></td>
    <td align="center"><?= $x->level ?></td>
    <td><?= $x->biaya_pendaftaran ?></td>
    <td><?= $x->biaya_kursus ?></td>
  </tr>
  <?php $no = $no + 1; ?>
  <?php } ?>