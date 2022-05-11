<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include $path . "/controllers/connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>CalorFit</title>
</head>

<body>
  <div class="wrapper">
    <my-burger />
    <div class="container">
      <div class="admin_main">
        <div>Панель администратора</div>
        <button class="waves-effect waves-light btn">Изменить пароль</button>
        <button class="waves-effect waves-light btn">Выйти</button>

        <table border="1">
          <tr>
            <th>Номер</th>
            <th>Почта</th>
            <!-- <th>Сумма оплаты, руб</th> -->
            <th>Статус оплаты</th>
          </tr>
          <?php
          $str_get_emails = "SELECT * FROM `emails`";
          $run_get_emails = mysqli_query($connect, $str_get_emails);
          if ($run_get_emails) {
            while ($email = mysqli_fetch_array($run_get_emails)) { ?>
              <tr>
                <td><? echo $email['id']; ?></td>
                <td><? echo $email['email']; ?></td>
                <!-- <td>8 560</td> -->
                <?
                if ($email['paid'] == 1) { ?>
                  <td>Оплачено</td>
                <? } else { ?>
                  <td>Не оплачено</td>
                <? }
                ?>
              </tr>
          <? }
          }
          ?>

          <!-- <td>1</td>
            <td>email.simple@mail.ru</td>
            <td>8 560</td>
            <td>Оплачено</td> -->
        </table>
      </div>
    </div>
  </div>
</body>

</html>