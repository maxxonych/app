<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="logo.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Форма обратной связи</title>
</head>
<body>

  <div class="container">
    <form id="form" method="POST">
      <br>
      <br>
      <input id="name" type="text" name="name" placeholder="Ваше имя" class="form-control"><br>
      <input id="surname" type="text" name="surname"  placeholder="Ваша фамилия" class="form-control"><br>
      <input id="patronymic" type="text" name="patronymic"  placeholder="Ваше отчество" class="form-control"><br>
      <input id="email" type="email" name="email"  placeholder="Ваш email" class="form-control"><br>
      <input id="address" type="text" name="address"  placeholder="Ваш город" class="form-control"><br>

      <button type="submit" id="send" class="btn btn-primary">Отправить</button>
    </form>
      <div id="error"></div>
      <div id="query"></div>
      <a href="index.php">Посмотреть новых пользователей</a>
  </div>
<!--
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script>
          $('#form').submit(function () {
              var str = $(this).serialize();
              $.ajax({
                  type: 'POST',
                  url: 'Add.php',
                  data: str,
                  success: function (html) {
                      $('#query').html(html);
                  }
              });
              return false;
          });

          function show() {
              $.ajax({
                  url: 'Controller.php',
                  cache: false,
                  success: function (html) {
                      $('#query').html(html);
                  }
              })
          }
  </script>
-->

  <!--
  <script src="/Controllers/ajaxPost.js"></script>
  <script src="/Controllers/queryGet.js"></script>
  -->
  <script src="Controllers/queryPOST.js"></script>
  <!--<script src="Controllers/queryGet.js"></script>-->
</body>
</html>
