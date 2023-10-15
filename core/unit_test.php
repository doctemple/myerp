<?php
session_start();
header('Content-Type: Application/json; charset=utf8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

include("../core/config.php");
include_once('../controllers/conn.php');
include_once('../models/company.php');

Print SQL2Json($conn,"SELECT * FROM companies");

?>