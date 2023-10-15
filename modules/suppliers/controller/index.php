<?php
$filde_head = array("#",'Id', 'Gender', 'First Name', 'Last Name', 'Email', 'Phone', 'Company', 'Tax Number', 'Address', 'Note', 'Created', 'Updated' ,"");
$field_type = array("no",'id', 'gender', 'input', 'input', 'email', 'phone', 'input', 'number', 'text', 'text', 'datetime', 'datetime' ,"");
$suppliers = Suppliers_list($conn);
?>