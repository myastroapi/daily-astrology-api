<?php
require "Myastroapi.php";
class Myastro extends Myastroapi
{
private $api;
private $url;
private $version;
function __construct()
{
$this->api=$this->_api;
$this->url=$_url;
}
protected function getapi()
{
$init=curl_init();
curl_setopt($init,CURLOPT_URL,trim($this->url));
curl_setopt($init,CURLOPT_POST,TRUE);
curl_setopt($init,CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($init,CURLOPT_POSTFIELDS,["api"=>$this->api,"version"=>$this->version]);
$data=curl_exec($init);
$getinfo=curl_getinfo($data);
$status=$getinfo["http_code"];
curl_close($init);  
if($status==200)
{
return [true,$data];
}
else
{
return [false,$status];
}
}
function getdaily()
{
$data=$this->getapi();
if($data[0])
{
return json_decode($data,true);
}
else
{
return $data[1];
}
}
}
