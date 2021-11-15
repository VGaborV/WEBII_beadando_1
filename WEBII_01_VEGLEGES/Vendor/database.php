<?php
class Database {
    
    public static $host = "localhost";
    public static $dbname = "vizvezetek";
    public static $username = "root";
    public static $password = "";

    public static function connect() {
            $pdo = new PDO('mysql:host=localhost;dbname=vizvezetek', 'vizvezetek', 'vizvezetek123');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
    }

    public static function query($query, $params = array()) {
            $statement = self::connect()->prepare($query);
            $statement->execute($params);

            if (explode(' ', $query)[0] == 'SELECT') {
            $data = $statement->fetchAll();
            return $data;
            }
    }

}
?>