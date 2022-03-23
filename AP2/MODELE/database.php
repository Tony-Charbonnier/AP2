<?php

 define("HOST","db5006827330.hosting-data.io");
 define("DB_NAME","dbs5636967");
 define("USER","dbu1598136");
 define("PASS","Chipie@78" );

 try{
  $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
  $db->setAttribute(PDO::ERRMODE_EXCEPTION, 'ATTR_ERRMODE');
}catch(PDOException $e){
  echo $e;
 }