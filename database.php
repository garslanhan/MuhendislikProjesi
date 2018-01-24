<?php
class Database
{

    private static $cont  = null;
     
    public function __construct() {
        die('Init function is not allowed');
    }
     
    public static function connect()
    {

       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO('mysql:host=localhost;dbname=sql','root','');
           // echo 'baglanıldı database.php';
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
     
    public static function disconnect()
    {
        self::$cont = null;
    }
}

?>