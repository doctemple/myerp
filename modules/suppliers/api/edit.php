<?php
$id = $_REQUEST['id']; $gender = $_REQUEST['gender']; $first_name = $_REQUEST['first_name']; $last_name = $_REQUEST['last_name']; $email = $_REQUEST['email']; $phone = $_REQUEST['phone']; $company = $_REQUEST['company']; $tax_number = $_REQUEST['tax_number']; $address = $_REQUEST['address']; $note = $_REQUEST['note']; $created = $_REQUEST['created']; $updated = $_REQUEST['updated']; 
$datas = Suppliers_Edit($conn);

echo json_encode($datas,JSON_UNESCAPED_UNICODE);
?>