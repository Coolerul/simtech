<?php
  require 'vendor/autoload.php';
  header('Access-Control-Allow-Credentials: true');
  header('Access-Control-Allow-Origin: http://yourways.ru');
 
  $config = [
    'host' => 'localhost',
    'port' => '8123',
    'username' => 'default',
    'password' => ''
    ];
  $db = new ClickHouseDB\Client($config);
  
  if(isset($_POST)&&$db->ping()){

	    $stat = $db->insert('users',
        [
          [$_POST['useragent'],date("Y-m-d h:m:s")]
        ],
        ['useragent', 'DateTime']
      );

  }
?>
