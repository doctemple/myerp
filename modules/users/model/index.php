<?php
function Users_list($conn){
    $sql = "SELECT * FROM users";
    $datas = fetch($conn,$sql);
    return $datas;
    }
?>