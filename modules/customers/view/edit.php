<?php
$filde_head = array('Id', 'Gender', 'First Name', 'Last Name', 'Email', 'Phone', 'Company', 'Tax Number', 'Address', 'Member Type', 'Note', 'Created', 'Updated' );
$add = '<a class="btn btn-primary" href="?customers&add"><i class="fa fa-plus"></i> Add Customers</a>';
echo content(card($add,array2Table(${$comm},$filde_head,true)));
?>