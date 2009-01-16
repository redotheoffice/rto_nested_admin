<td>
  <input type="checkbox" name="ids[]" value="<?php echo $tree->getPrimaryKey() ?>" class="sf_admin_batch_checkbox" />
  <input type="hidden" id="select_node-<?php echo $tree->getPrimaryKey() ?>" name="newparent[<?php echo $tree->getPrimaryKey() ?>]" />
</td>
