<?php
function Customers_list($conn){
    $sql = "SELECT * FROM customers";
    $datas = fetch($conn,$sql);
    return $datas;
    }
?>