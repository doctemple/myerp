<?php
$add = '<a class="btn btn-primary" href="?suppliers&add"><i class="fa fa-plus"></i> Add Suppliers</a>';
echo content(card($add,array2Table(${$comm},$filde_head,true)));
?>