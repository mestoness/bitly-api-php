<?php 

define("BITLY_TOKEN", "YOU_TOKEN");

require_once 'class.bitly-api.php';

use mestoness\bitly;

$shorter=bitly::shorter("https://github.com/mestoness/IPinfo/");

echo $shorter->link;
//https://bit.ly/2RaUfnp


echo $shorter->long_url;
//https://github.com/mestoness/IPinfo/


echo $shorter->created_at;
//2021-04-30T14:56:52+0000
?>