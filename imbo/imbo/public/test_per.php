<?php

$parameter = $_SERVER['QUERY_STRING'];
$path =  $_GET['a'];

$regex_test = '#^/users/(?<user>[a-z0-9_-]{1,})/images/(?<imageIdentifier>[A-Za-z0-9_-]{1,255})(\.(?<extension>gif|jpg|png))?$#';
$match = [];

#echo $regex_test;
#echo '<br/>';
#echo $path ;
#echo '<br/>';
#echo $match;
#echo '<br/>';

preg_match ($regex_test, $path, $match); 

if ($match) {
echo 'co du lieu';
	#echo $match;
}
else {
        echo 'NoData';
}
?>
