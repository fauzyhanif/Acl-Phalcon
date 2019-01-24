<?php $no = 1; ?>
<?php foreach ($users as $x) { ?>
<tr id="del<?= $x->id ?>">
  <td><?= $no ?></td>
  <td>

    <button class="btn btn-primary btn-flat"  id="buttonCrudGroupMenu">
      <i class="fa fa-edit cursor iconCrud" data-toggle="modal" data-target="#Tambah" onclick="updated(<?= $x->id ?>)"></i>
    </button>

    <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
      <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->id ?>, '<?= $x->username ?>')"></i> 
    </button>

    <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
      <i class="fa fa-power-off cursor text-success iconCrud"  id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'N')"></i> 
    </button>
    <?php if ($x->actived === 'Y') { ?>
    <span class="label bg-green" id="status<?= $x->id ?>">active</span>
    <?php } else { ?>
    <i class="fa fa-power-off cursor text-danger iconCrud"  id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'Y')"></i> |
    <span class="label bg-red" id="status<?= $x->id ?>">not active</span>
    <?php } ?>
  </td>
  <td><?= $x->name ?></td>
  <td><?= $x->username ?></td>
  <td><?= $x->email ?></td>
</tr>
<?php $no = $no + 1; ?>
<?php } ?>