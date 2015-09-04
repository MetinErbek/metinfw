<?php
class welcome extends fwmetin{
	
function __construct(){
parent::__construct();

//echo "Merhaba Dünya ";//.$this->requestUrl;	
$this->model("firstmodel");
echo $this->firstmodel->git();

//$this->firstmodel->git();
}	
	
}

?>