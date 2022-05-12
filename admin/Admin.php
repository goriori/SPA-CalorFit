<?php
session_start();
$path = $_SERVER['DOCUMENT_ROOT'];
include $path . "/controllers/connect.php";
$connect = mysqli_connect('localhost', 'u1665837_admin', 'Qwas1234', 'u1665837_calorfit.ru');
error_reporting(0);
?>
<?
// if ($_SESSION['user']['role'] == 2) {
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
        <?

        $str_search = $_POST['str_search'];
        $search = $_POST['search'];
        if ($search) {
          if ($str_search) {
            $str_get_emails = "SELECT * FROM `orders` WHERE email LIKE '%$str_search%'";
          } else {
            $str_get_emails = "SELECT * FROM `orders`";
          }
        }

        ?>
         

        <div class="admin-panel-text">Панель администратора</div>
        <button class="waves-effect waves-light btn">Изменить пароль</button>
        <a href="../controllers/exit.php"><button class="waves-effect waves-light btn">Выйти</button></a>
        <form method="POST" class="admin_form">
            <input type="text" name="str_search" placeholder="Поиск по почте..." class="admin_input browser-default">
            <input type="submit" name="search" value="Поиск" class="admin_input btn btn-search browser-default">
          </form>
        <table border="1">
          <tr>
            <th>Номер</th>
            <th>Почта</th>
            <!-- <th>Сумма оплаты, руб</th> -->
            <th>Статус оплаты</th>
            <th>Дата</th>
            <th>Отправить повторно</th>
          </tr>
          <?php
           $str_get_emails = "SELECT * FROM `orders` WHERE email LIKE '%$str_search%'";
          $run_get_emails = mysqli_query($connect, $str_get_emails);
          if ($run_get_emails) {
            while ($order = mysqli_fetch_array($run_get_emails)) { ?>
              <tr>
                <td><? echo $order['id']; ?></td>
                <td><? echo $order['email']; ?></td>
                <!-- <td>8 560</td> -->
                <?
                if ($order['status'] == 1) { ?>
                  <td>Оплачено</td>
                <? } else { ?>
                  <td>Не оплачено</td>
                <? }
                ?>
                <td><? echo $order['date']; ?></td>
                <td><a href="/admin/send_again.php?order_id=<? echo $order['id'] ?>">Отправить</a></td>
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

</html><?
        // } else {
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="/css/notfound.css">
  <title>ERROR 404</title>
</head>

<body>
  <div class="wrapper">
    <div class="admin_error center-align red-text">ERROR 404 NOT FOUND</div>
  </div>

</body>

</html>
<?
// }
?>