<?php
$config['md'] = $md?$md:$_REQUEST['module'];
$config['tab'] = 'module';
$config['fs'] = 'index';
$config['code'] = '<?php
$comm = "'.$md.'";
$pri = "'.$pri.'";
$model_src = "modules/{$comm}/model/index.php";
$controller_src = "modules/{$comm}/controller/index.php";
$view_src = "modules/{$comm}/view/index.php";
include_once($model_src);
include_once($controller_src);
include_once($view_src);
?>';

$config['file_src'] = "modules/".$md."/index.php";

echo PreOpen("Code");  
echo MakeAICode($config);
SaveToFile("Save to file",$config['file_src'],$config['code'],$md,$config['tab'],$config['fs']);
echo PreClose(); 

echo bo($config['file_src']);
MakeAIFile($config);
echo bc();
?>