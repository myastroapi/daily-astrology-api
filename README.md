# daily-astrology-api
this is unofficial daily astrology api for public use. it is also used by <a href='http://www.myastro.online'>Best Astrology website</a>

this library is standalone so no need to download extra package to work.

<h2>Installation: </h2>
Just download and unzip file then require 'Myastro.php' and you have done.


<h2>Configuration</h2>
you do not need too much to configure this library. just open __api.txt file and write your api key there. you have done.
<b>DO NOT REMOVE THIS FILE OTHERWISE LIBRARY WOULD NOT WORK. THIS LIBRARY HIGHLY NEED THIS FILE</b>

<h2>Uses</h2>
Call function <code>$this->getdaily();</code> and you have done;

<h2>Example:</h2>
<code>
require "Myastro.php";<br/>
$api=new Myastro();<br/>
$response=$api->getdaily();<br/>
echo $response->aries->color; 
</code>
it will return object of today daily api by rashi or sign.<br/>
<h2>Reponse object</h2>
After Call function getdaily you would get reponse object for compete
Response object description look at our https://github.com/myastroapi/daily-astrology-api/wiki documentation
<h2>Api Key</h2>
you can get your api by Email on: suryarashicalculator@gmail.com in following format<br/>
Subject: Api key github<br/>
Name:......<br/>
Website:.....<br/>
Api Request Per day:....<br/>
I need api key for daily astrology on github.<br/>

 
