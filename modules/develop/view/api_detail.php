<?php

$config['md'] = $md?$md:$_REQUEST['module'];
$config['tab'] = 'api';
$config['fs'] = 'detail';
$config['code'] = '<?php
$id = $_REQUEST["id"];
$datas = '.$mdTitle.'_'.ucfirst($config['fs']).'($conn,$id);

echo json_encode($datas,JSON_UNESCAPED_UNICODE);
?>';

$config['file_src'] = "modules/{$md}/{$config['tab']}/{$config['fs']}.php";

echo PreOpen("Code");  
echo MakeAICode($config);
SaveToFile("Save to file",$config['file_src'],$config['code'],$md,$config['tab'],$config['fs']);
echo PreClose(); 

echo bo($config['file_src']);
MakeAIFile($config);
echo p();
TestBT("Preview",$md,$config['fs'],1);
echo bc();
?>  