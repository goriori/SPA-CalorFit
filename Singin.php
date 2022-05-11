<? $path = $_SERVER['DOCUMENT_ROOT'] ?>
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

    <header>
      <div class="container">
        <div class="logo">
          <p class="white-text">CalorFit</p>
        </div>

      <div class="container_head">
      <div class="logo">CalorFit</div>

        <div class="header__body">
          <div class="header__burger">
            <span></span>
          </div>
          <nav class="header__menu">
            <ul class="header__list">
              <li>
                <a href="/" class="header__link index">Главная</a>
              </li>
              <li>
                <a href="Unsubscribe.php" class="header__link unsubscribe">Отписаться</a>
              </li>
              <li>
                <a href="Rates.php" class="header__link rates">Тарифы</a>
              </li>
              <li>

                <a href="#" class="header__link">Политика<br> конфенденциальности</a>
              </li>
              <li>
                <a href="#" class="header__link">Условия пользования</a>


                <a href="Treaty.php" class="header__link treaty">Политика<br> конфенденциальности</a>
              </li>
              <li>
                <a href="Treaty.php" class="header__link treatyb">Условия пользования</a>

                <a href="/" class="header__link">Политика<br> конфенденциальности</a>
              </li>
              <li>
                <a href="/" class="header__link">Условия пользования</a>

              </li>
              <li>
                <a href="Singin.php" class="header__link login">Личный кабинет</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <div class="block">
      <h1>Вход в аккаунт</h1>
      <form action="">
        <label for="login">Login</label><br>
        <input type="text" name="login" id="login" class="information-input browser-default" required><br>
        <label for="password">Password</label><br>
        <input type="passwrod" name="password" id="password" class="information-input" required><br>
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