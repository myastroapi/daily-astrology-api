<?php
class Myastroapi
{
private $_api;
private $_version;
private $_url;
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
$fp=fopen(__DIR__."/__api.txt","W");
$api=trim(fread($fp,1024));
//you should need to check for api key character  
fclose($fp); 
return $api;  
}
}
