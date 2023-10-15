<?php

function ReplaceEmptyLine($text){
    return preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $text);
}

//echo Info(SW_Extract($comp[0]));
$mdTitle = str_ireplace(' ','',ucwords(str_ireplace('_',' ',$md)));
$array = getStruct($conn, $md);
$varriable = SW_Extract($array);
$fns = SW_Fns($array);
$filds = SW_Filds($array);
$ftypes = FieldType($conn, $md);
//Debug($ftypes);
$field_types = SW_Types($ftypes);

$pri = getPri($md, $conn);
$select = SW_SQL_Select($md, $array, $pri);
$detail = SW_SQL_Detail($md, $array, $pri);
$insert = SW_SQL_Insert($md, $array, $pri);
$update = SW_SQL_Update($md, $array, $pri);
$delete = SW_SQL_Delete($md, $array, $pri);

?>