<?php
class Myastroapi
{
protected $_api;
protected $_version;
protected $_url;
function __construct()
{
//add your api key here
$key=$this->initapikeyfromfile();
$this->_api=$key;
//no need to change below it is recommanded
$this->_version="1.0";
$this->_url="http://service.kundalimilan.online/api/version.php";
}
private function initapikeyfromfile()
{
 if(!file_exists(__DIR__."/__api.txt"))
{
throw new Exception("Some important file is missing");	
}	 
$fp=fopen(__DIR__."/__api.txt","r");
$api=trim(fread($fp,1024));
//you should need to check for api key character  
fclose($fp); 
return $api;  
}
}
