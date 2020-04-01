<?php

class PDOConnection
{
   private static $host = 'localhost';
   private static $dbName = 'curriculum_vitae';
   private static $login = 'root';
   private static $password = '-----';
   public static $dbConnection = null;

   public static function getSqlConnection()
   {

      if (static::$dbConnection === null) {
         static::$dbConnection = new PDO('mysql:host=' . static::$host . ';dbname=' . static::$dbName . ';charset=utf8',
            static::$login,
            static::$password,
            [
               PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
               PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
         );
      }
      return static::$dbConnection;
   }

}