<?php

class DbConnect{

    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
    const DB_DATABASE = 'componentdb';

    public static $conn;

    public static function initialise()
    {
        
	$conn = mysqli_connect(self::DB_HOST, self::DB_USER, self::DB_PASSWORD, self::DB_DATABASE) or die(mysql_error());
        
        self::$conn = $conn;
    }

    public static function close(){
        $conn = null;
    }
}
?>
