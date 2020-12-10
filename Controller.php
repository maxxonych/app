<?php
include 'Models/ConnectDB.php';

error_reporting(E_ALL);

class Controller extends ConnectDB {

    function includeDB() {
        $sql = ('SELECT * FROM users ORDER BY id DESC');
        $query = $this->connect()->query($sql);
        $users = $query->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
}
$controllerSQL = new Controller();
$users = $controllerSQL->includeDB();

//print_r($users);




