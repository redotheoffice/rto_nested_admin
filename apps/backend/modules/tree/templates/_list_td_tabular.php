<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($tree['id'], 'tree_edit', $tree) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <span class="<?php echo $tree->getNode()->isLeaf() ? 'file' : 'folder' ?>">
    <?php echo $tree['name'] ?>
  </span>
</td>
<td class="sf_admin_text sf_admin_list_td_root_id">
  <?php echo $tree['root_id'] ?>
</td>
<td class="sf_admin_text sf_admin_list_td_lft">
  <?php echo $tree['lft'] ?>
</td>
<td class="sf_admin_text sf_admin_list_td_rgt">
  <?php echo $tree['rgt'] ?>
</td>
<td class="sf_admin_text sf_admin_list_td_level">
  <?php echo $tree['level'] ?>
</td>
