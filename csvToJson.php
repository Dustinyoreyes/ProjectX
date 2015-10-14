
<?php

$file= "/wamp/www/ProjectX/userfile/data3.csv";
$csv= file_get_contents($file);
$array = array_map("str_getcsv", explode("\n", $csv));
$json = json_encode($array);
print_r($json);


?>