<?php
$comm = "users";
$pri = "id";
$model_src = "modules/{$comm}/model/index.php";
$controller_src = "modules/{$comm}/controller/index.php";
$view_src = "modules/{$comm}/view/index.php";
include_once($model_src);
include_once($controller_src);
include_once($view_src);
?>