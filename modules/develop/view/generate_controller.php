<?php

$config['md'] = $md?$md:$_REQUEST['module'];
$config['tab'] = 'controller';
$config['fs'] = 'index';
$mdTitle = str_ireplace(' ','',ucwords(str_ireplace('_',' ',$md)));
$config['code'] = '<?php
$id = isset($_REQUEST["id"])?$_REQUEST["id"]:1;
$fts = array('.$fns.');
$form_ft = array('.$filds.');
$form_ty = array('.$field_types.');
$filde_head = array("#",'.$filds.',"");
$field_type = array("no",'.$field_types.',"");
$'.$md.' = '.$mdTitle.'_list($conn);
$'.$mdTitle.'Detail = '.$mdTitle.'_Detail($conn,$id);
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