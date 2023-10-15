<?php
$config['md'] = $md?$md:$_REQUEST['module'];
$config['tab'] = 'model';
$config['fs'] = 'index';
$config['code'] = '<?php
function '.$mdTitle.'_list($conn){
    $sql = "SELECT * FROM '.$md.'";
    $datas = fetch($conn,$sql);
    return $datas;
    }

function '.$mdTitle.'_Add($conn){
    $sql = "'.$insert.'";
    $datas = Query($conn,$sql);
    return $datas;
}

function '.$mdTitle.'_Detail($conn,$'.$pri.'){
    $sql = "'.$detail.'";
    $datas = fetch($conn,$sql);
    return $datas[0];
}

function '.$mdTitle.'_Edit($conn,$'.$pri.'){
    $sql = "'.$update.'";
    $datas = Query($conn,$sql);
    return $datas;
}

function '.$mdTitle.'_Delete($conn,$'.$pri.'){
    $sql = "'.$delete.'";
    $datas = fetch($conn,$sql);
    return $datas;
}
?>';

$config['file_src'] = "modules/{$md}/{$config['tab']}/{$config['fs']}.php";

echo PreOpen("Code");  
echo MakeAICode($config);
SaveToFile("Save to file",$config['file_src'],$config['code'],$md,$config['tab'],$config['fs']);
echo PreClose(); 

echo bo($config['file_src']);
MakeAIFile($config);
echo bc();
?>