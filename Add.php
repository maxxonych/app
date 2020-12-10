<?php
include 'Models/ConnectDB.php';
error_reporting(E_ALL);

class Add extends ConnectDB
{
    public $name;
    public $surname;
    public $patronymic;
    public $email;
    public $address;

    function __construct() {
        $this->name = $_POST['name'];
        $this->surname = $_POST['surname'];
        $this->patronymic = $_POST['patronymic'];
        $this->email = $_POST['email'];
        $this->address = $_POST['address'];
    }
/*
    function check() {
        if (
            $this->name == '' &&
            $this->surname == '' &&
            $this->patronymic == '' &&
            $this->email == '' &&
            $this->address == ''
        ) {
            echo 'Заполните все поля';
        } else {
            echo 'Регистрация прошла успешно';
        }
    }
*/
    function add() {
        $query = $this->connect()->prepare('INSERT INTO users (name, surname, patronymic, email, address) 
                    VALUES
                    (:name, :surname, :patronymic, :email, :address)');
        $query->execute(array(
            ':name' => $this->name,
            ':surname' => $this->surname,
            ':patronymic' => $this->patronymic,
            ':email' => $this->email,
            ':address' => $this->address
        ));
    }
}

$add = new Add();
$add->add();
var_dump($add);
