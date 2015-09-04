<?php


require("config.php");

class fwmetin{
	
var $server_name="";
var $controllers_path="",$requestUrl="";
function __construct(){

$this->requestUrl=$_SERVER["REQUEST_URI"];	

}
function model($modeladi){
$modelFileDirectory=MODEL_PATH."/".$modeladi.".php";
try{
if(file_exists($modelFileDirectory)){
require_once($modelFileDirectory);	
$this->$modeladi=new $modeladi();
}else{
require("errors/404.php");
exit();
	
}




}catch(Exception $e){
echo $e;	
}
}




}





?>