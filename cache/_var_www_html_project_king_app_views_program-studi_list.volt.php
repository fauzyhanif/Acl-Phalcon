<?php $no = 1; ?>
  <?php foreach ($data as $x) { ?>
  <tr id="groupdel<?= $x->id ?>">
    <td><?= $no ?></td>
    <td>
      <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
        <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#groupDelete" onclick="deletedGroup(<?= $x->id ?>, '<?= $x->menu_group ?>')"></i>  
      </button>
      <?php if ($x->actived === 'Y') { ?>
      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
        <i class="fa fa-power-off cursor text-success iconCrud" id="grouptext<?= $x->id ?>" onclick="statusGroup(<?= $x->id ?>, 'N')"></i> 
      </button>
      <span class="label bg-green" id="groupstatus<?= $x->id ?>">active</span>
      <?php } else { ?>
      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
        <i class="fa fa-power-off cursor text-danger iconCrud" id="grouptext<?= $x->id ?>" onclick="statusGroup(<?= $x->id ?>, 'Y')"></i> |
      </button>
      <span class="label bg-red" id="groupstatus<?= $x->id ?>">not active</span>
      <?php } ?>
    </td>
    <td><?= $x->nm_program_studi ?></td>
  </tr>
  <?php $no = $no + 1; ?>
<?php } ?>