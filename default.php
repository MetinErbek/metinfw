<?php



$requestUrl=$_SERVER["REQUEST_URI"];

$url=split('/',$requestUrl);

$projectName=$url[1];
$controllerName=$url[3];
$metodName=$url[4];
$param=array();
//echo $controllername;
$proje=$_SERVER["DOCUMENT_ROOT"]."/".$projectName;
$controllers=$proje."/project/controllers";
$views=$proje."/project/views";
$models=$proje."/project/models";

define('PROJECT_NAME',$projectName);
define('CONTROLLER_PATH',$controllers);
define('MODEL_PATH',$models);
define('VIEW_PATH',$views);



require_once("/cekirdek/fw.php");
require_once($controllers."/".$controllerName.".php");

new $controllerName();




?>