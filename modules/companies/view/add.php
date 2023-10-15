<?php
$add = '<a class="btn btn-primary" href="?companies&add"><i class="fa fa-plus"></i> Add Companies</a>';
echo content(card($add,array2Table(${$comm},$filde_head,true)));
?>