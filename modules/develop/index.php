<?php
// DEFINE VARIABLE
$comm = "develop";
if(isset($_REQUEST['module']) && $_REQUEST['module'] != ''){
    $md = $_REQUEST['module'];
}else{
    $md = '';
}
Debug($_REQUEST);
Info($_SESSION);
// USING MVC 
include_once("modules/{$comm}/model/index.php");

$modules = getModules($conn);

if($md!=''){
include_once("modules/{$comm}/controller/gencode.php");
include_once("modules/{$comm}/controller/index.php");
    $model_src = "modules/{$md}/model";
    $controller_src = "modules/{$md}/controller";
    $view_src = "modules/{$md}/view";
    $api_src = "modules/{$md}/api";

    if (!file_exists($model_src) && !is_dir($model_src)) {
        mkdir($model_src, 0777, true);
    }

    if (!file_exists($controller_src) && !is_dir($controller_src)) {
        mkdir($controller_src, 0777, true);
    }

    if (!file_exists($view_src) && !is_dir($view_src)) {
        mkdir($view_src, 0777, true);
    }

    if (!file_exists($api_src) && !is_dir($api_src)) {
        mkdir($api_src, 0777, true);
    }

    include_once("modules/{$comm}/view/function.php");  
    include_once("modules/{$comm}/view/generate.php");  

}else{
       include_once("modules/{$comm}/view/start.php");   
}

?>