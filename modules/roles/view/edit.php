<?php
$filde_head = array('Id', 'Role', 'Name', 'Created', 'Updated' );
$add = '<a class="btn btn-primary" href="?roles&add"><i class="fa fa-plus"></i> Add Roles</a>';
echo content(card($add,array2Table(${$comm},$filde_head,true)));
?>