<?
$path = $_SERVER['DOCUMENT_ROOT'];
session_start(); ?>
<?
$connect = mysqli_connect('localhost', 'u1665837_admin', 'Qwas1234', 'u1665837_calorfit.ru');
$login = $_POST['login'];
$password = $_POST['password'];
if ($_POST['send']) {
  $str_auth_user = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";
  $run_auth_user = mysqli_query($connect, $str_auth_user);
  $count_user = mysqli_num_rows($run_auth_user);
  if ($count_user == 1) {
    $out_user = mysqli_fetch_array($run_auth_user);
    $_SESSION['user'] = ["login" => $out_user['login'], "role" => $out_user['role']];
    header("location: admin/Admin.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="/css/singin.css">
  <title>CalorFit</title>
</head>

<body>
  <div class="wrapper">
  <? include $path . "/components/burger.php"; ?>
    <header>
      <div class="container">
        <div class="logo">
          <p class="white-text">CalorFit</p>
        </div>
      </div>
     
    </header>
    <div class="block">
      <h1>Вход в аккаунт</h1>
      <form action="" method="POST">
        <label for="login">Login</label><br>
        <input type="text" name="login" id="login" class="information-input browser-default" required><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" class="information-input browser-default" required><br>
        <input type="submit" name="send" class="button-form">
      </form>
    </div>
    <? include $path . "/components/footer.php"; ?>
  </div>
  <script src="../js/burger.js"></script>
  <script>
    window.replainSettings = {
      id: 'ba050b03-40aa-4aa5-a1a3-2eaf87139cb2'
    };
    (function(u) {
      var s = document.createElement('script');
      s.async = true;
      s.src = u;
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    })('https://widget.replain.cc/dist/client.js');
  </script>
</body>

</html>