<?php

class zhou21
{
   private static $ins;
   private static $db;
   private function __construct($dbfname)
   {
       link($host,$dbname,$name,$password)=$dbfname;
       self::$db = new PDO('mysql:host=$host;dbname=$dbname', '$name', '$passwod');
   }

    private function __clone()
   {

   }

    public static function sef(...$dbfname)
   {

   }
}
$dbfname=[127.0.0.1,xue,root,root];

new zhou21(...$dbfname);