<?php
error_reporting(E_ALL);

require_once 'Controllers/Controller.php';
//require_once 'backend/output.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пользователи</title>
</head>
<body>
    <div class="container-fluid">
        <a style="align-content: end" href="addUser.php">Зарегистрировать нового пользователя</a>
        <? foreach  ($users as $item) { ?>
            <h6>Пользователь № <?echo $item['id'] ?></h6>
            <h6>Имя: <?echo $item['name'] ?></h6>
            <h6>Фамилия: <?echo $item['surname'] ?></h6>
            <h6>Отчество: <?echo $item['patronymic'] ?></h6>
            <h6>Email: <?echo $item['email'] ?></h6>
            <h6>Адрес: <?echo $item['address'] ?></h6>
            <a class="btn btn-primary" href="/Controllers/Delete.php?id=<?echo $item['id'] ?>">Удалить пользователя</a>
        <? } ?>
    </div>
</body>
</html>







