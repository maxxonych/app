<?php
include 'ConnectDB.php';

class Delete extends ConnectDB
{
    function id() {
        $id = $_GET['id'];
        return $id;
    }
    function del() {
        $del = "DELETE FROM `users` WHERE `id` = ?";
        $query = $this->connect($this->pdo)->prepare($del);
        $query->execute([$this->id()]);
    }
}


header('Location: /index.php');
$del = new Delete();
$del->del();

/*
$id = $_GET['id'];

$del = 'DELETE FROM `users` WHERE `id` = ?';
$query = $connect->prepare($del);
$query->execute([$id]);


header('Location: /index.php');
*/










