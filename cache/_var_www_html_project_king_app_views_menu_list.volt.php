<?php $no = 1; ?>
<?php foreach ($group as $x) { ?>
<tr id="groupdel<?= $x->id ?>">
  <td><?= $no ?></td>
  <td>
    <i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#groupDelete" onclick="deletedGroup(<?= $x->id ?>, '<?= $x->menu_group ?>')"></i> |
    <?php if ($x->actived === 'Y') { ?>
    <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="grouptext<?= $x->id ?>" onclick="statusGroup(<?= $x->id ?>, 'N')"></i> |
    <span class="label bg-green" id="groupstatus<?= $x->id ?>">active</span>
    <?php } else { ?>
    <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="grouptext<?= $x->id ?>" onclick="statusGroup(<?= $x->id ?>, 'Y')"></i> |
    <span class="label bg-red" id="groupstatus<?= $x->id ?>">not active</span>
    <?php } ?>
  </td>
  <td><?= $x->menu_group ?></td>
  <td><?= $x->usergroup ?></td>
</tr>
<?php $no = $no + 1; ?>
<?php } ?>
