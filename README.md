# Bit.ly API


## Class uses




```php

<?php 

define("BITLY_TOKEN", "YOUR_TOKEN");

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

```

## Contact
<a href="mailto:contactmestoness@gmail.com">Use this address to contact me</a>
## Author
Mestoness (Ahmet Baki Memiş)

## <a href="https://github.com/mestoness/bitly-api-php/blob/master/LICENSE">Lıcence</a>
