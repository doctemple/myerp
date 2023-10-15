<?php
function Companies_list($conn){
    $sql = "SELECT * FROM companies";
    $datas = fetch($conn,$sql);
    return $datas;
    }
function Companies_Add($conn){
    $sql = "INSERT INTO users (id, company_english, company_thai, img, birth, tax_identification, elec_identification, mobilephone, workphone, email, chat_line, descript, created_at, updated_at ) VALUES ('$id', '$company_english', '$company_thai', '$img', '$birth', '$tax_identification', '$elec_identification', '$mobilephone', '$workphone', '$email', '$chat_line', '$descript', '$created_at', '$updated_at' )";
    $datas = Query($conn,$sql);
    return $datas;
}
function Companies_Detail($conn){
    $sql = "SELECT  id,  company_english,  company_thai,  img,  birth,  tax_identification,  elec_identification,  mobilephone,  workphone,  email,  chat_line,  descript,  created_at,  updated_at FROM users WHERE  id = '$id' AND  company_english = '$company_english' AND  company_thai = '$company_thai' AND  img = '$img' AND  birth = '$birth' AND  tax_identification = '$tax_identification' AND  elec_identification = '$elec_identification' AND  mobilephone = '$mobilephone' AND  workphone = '$workphone' AND  email = '$email' AND  chat_line = '$chat_line' AND  descript = '$descript' AND  created_at = '$created_at' AND  updated_at = '$updated_at' ORDER BY id ASC";
    $datas = fetch($conn,$sql);
    return $datas;
}
function Companies_Update($conn){
    $sql = "UPDATE users SET  id = '$id',  company_english = '$company_english',  company_thai = '$company_thai',  img = '$img',  birth = '$birth',  tax_identification = '$tax_identification',  elec_identification = '$elec_identification',  mobilephone = '$mobilephone',  workphone = '$workphone',  email = '$email',  chat_line = '$chat_line',  descript = '$descript',  created_at = '$created_at',  updated_at = '$updated_at'  WHERE  id = '$id' AND  company_english = '$company_english' AND  company_thai = '$company_thai' AND  img = '$img' AND  birth = '$birth' AND  tax_identification = '$tax_identification' AND  elec_identification = '$elec_identification' AND  mobilephone = '$mobilephone' AND  workphone = '$workphone' AND  email = '$email' AND  chat_line = '$chat_line' AND  descript = '$descript' AND  created_at = '$created_at' AND  updated_at = '$updated_at' ORDER BY id ASC";
    $datas = fetch($conn,$sql);
    return $datas;
}
function Companies_Delete($conn){
    $sql = "DELETE users WHERE  id = '$id' AND  company_english = '$company_english' AND  company_thai = '$company_thai' AND  img = '$img' AND  birth = '$birth' AND  tax_identification = '$tax_identification' AND  elec_identification = '$elec_identification' AND  mobilephone = '$mobilephone' AND  workphone = '$workphone' AND  email = '$email' AND  chat_line = '$chat_line' AND  descript = '$descript' AND  created_at = '$created_at' AND  updated_at = '$updated_at' ";
    $datas = fetch($conn,$sql);
    return $datas;
}
?>