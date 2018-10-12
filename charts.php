<?php

  require 'vendor/autoload.php';
  $config = [
    'host' => 'localhost',
    'port' => '8123',
    'username' => 'default',
    'password' => ''
  ];
  $db = new ClickHouseDB\Client($config);
  if($db->ping){
    $statement = $db->select('Select useragent, count(useragent) as count  from users group by useragent');
    $array=$statement->rows();
    $js[]=array('Useragent','Count');
	    foreach($array as $element){
        $js[]=array($element['useragent'],(int)$element['count']);
      }
    $json= json_encode($js); 
    include "charts.html";
?>
