<?php
$filde_head = array("#",'Id', 'Company English', 'Company Thai', 'Img', 'Birth', 'Tax Identification', 'Elec Identification', 'Mobilephone', 'Workphone', 'Email', 'Chat Line', 'Descript', 'Created At', 'Updated At' ,"");
$field_type = array("no",'id', 'input', 'input', 'input', 'date', 'id', 'id', 'phone', 'phone', 'email', 'input', 'text', 'datetime', 'datetime' ,"");
$companies = Companies_list($conn);
?>