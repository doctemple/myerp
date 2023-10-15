<?php
$filde_head = array('#','Id', 'User', 'Name', 'Type', 'Email', 'Password', 'Created', 'Updated','' );
$add = '<a class="btn btn-primary" href="?users&add"><i class="fa fa-plus"></i> Add Users</a>';
echo content(card($add,array2Table(${$comm},$filde_head,true)));
?>