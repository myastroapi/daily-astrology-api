# daily-astrology-api
this is unofficial daily astrology api for public use. it is also used by http://www.myastro.online

this library is standlone so no need to download extra package to work.

<h2>Installation: </h2>
Just download and unzip file then require 'Myastro.php' and you have done.


<h2>Configuration</h2>
you do not need too much to configure this library. just open Myastroapi.php and put your api key in $this->_api="your api key";

<h2>Uses</h2>
Call function $this->getdaily(); and you have done;

<h2>Example:</h2>
<?php
require "Myastro.php";
$api=new Myastro();
$data=$api->getdaily();
print_r($data);
?>
it will return array of today daily api by rashi or sign.

<h2>Api Key</h2>
you can get your api by Email on: suryarashicalculator@gmail.com in following format
Subject: Api key github
Name:......
Website:.....
Api Request Per day:....
I need api key for daily astrology on github.

 
