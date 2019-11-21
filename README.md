# daily-astrology-api
this is unofficial daily astrology api for public use. it is also used by http://www.myastro.online

this library is standalone so no need to download extra package to work.

<h2>Installation: </h2>
Just download and unzip file then require 'Myastro.php' and you have done.


<h2>Configuration</h2>
you do not need too much to configure this library. just open Myastroapi.php and put your api key in <br/>
<code>$this->_api="your api key";</code>

<h2>Uses</h2>
Call function <code>$this->getdaily();</code> and you have done;

<h2>Example:</h2>
<code>
require "Myastro.php";<br/>
$api=new Myastro();<br/>
$data=$api->getdaily();<br/>
print_r($data);<br/>
</code>
it will return array of today daily api by rashi or sign.<br/>

<h2>Api Key</h2>
you can get your api by Email on: suryarashicalculator@gmail.com in following format<br/>
Subject: Api key github<br/>
Name:......<br/>
Website:.....<br/>
Api Request Per day:....<br/>
I need api key for daily astrology on github.<br/>

 
