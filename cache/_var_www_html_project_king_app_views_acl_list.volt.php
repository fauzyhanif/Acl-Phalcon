<?php foreach ($acl as $x) { ?>
  <tr id="del<?= $x->id ?>">
    <td>
      <button class="btn btn-primary btn-flat" style="padding: 4px 4px 0px 4px">
        <i class="fa fa-edit cursor" style="font-size:18px;" data-toggle="modal" data-target="#Tambah" onclick="updated('<?= $x->id ?>', '<?= $x->url ?>', '<?= $x->controller ?>', '<?= $x->action ?>', '<?= $x->except ?>')"></i> 
      </button>

      <button class="btn btn-danger btn-flat" style="padding: 4px 4px 0px 4px">
        <i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->id ?>, '<?= $x->url ?>')"></i>
      </button> 

      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
        <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'N')"></i>
      </button>

      <?php if ($x->actived === 'Y') { ?>
      <span class="label bg-green" id="status<?= $x->id ?>">active</span>
      <?php } else { ?>
      <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'Y')"></i> 

      <span class="label bg-red" id="status<?= $x->id ?>">not active</span>
      <?php } ?>
    </td>
    <td align="center"><?= $x->id ?></td>

    <td align="center">
    <?php if (!empty($x->icon)) { ?>
      <i class="fa <?= $x->icon ?>"></i></td>
    <?php } ?>
    
    <td><?= $x->url ?></td>
    <?php foreach ($usergroup as $ug) { ?>
    <td align="center">
      <input type="checkbox" id="check" class="flat-blue" value="<?= $x->id ?>,<?= $ug->id ?>"
      <?php if ($this->isIncluded($ug->id, $this->Helpers->usergroup($x->usergroup))) { ?>
      checked="true" 
      <?php } ?>
      >
    </td>
    <?php } ?>
    <td style="padding: 0px;"><div ondblclick="return except(this)" style="padding: 10px;" acl="<?= $x->id ?>"><?= $x->except ?></div></td>
  </tr>
<?php } ?>