<?php
$config['md'] = $md?$md:$_REQUEST['module'];
$config['tab'] = 'view';
$config['fs'] = 'add';
$config['code'] = '<?php
$add = '."'".'<a class="btn btn-primary" href="?'.$md.'&add"><i class="fa fa-plus"></i> Add '.ucfirst($md).'</a>'."'".';
echo content(card($add,array2Table(${$comm},$filde_head,true)));
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