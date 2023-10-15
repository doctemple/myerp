<?php
function Suppliers_list($conn){
    $sql = "SELECT * FROM suppliers";
    $datas = fetch($conn,$sql);
    return $datas;
    }
?>