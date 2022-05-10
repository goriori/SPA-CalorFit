<? $path = $_SERVER['DOCUMENT_ROOT'] ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CalorFit</title>
  <link rel="stylesheet" href="/css/index.css">
  <script src="js/home.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="container">
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
                <a href="Unsubscribe.php" class="header__link">Отписаться</a>
              </li>
              <li>
                <a href="Rates.php" class="header__link">Тарифы</a>
              </li>
              <li>
                <a href="Treaty.php" class="header__link">Политика<br> конфенденциальности</a>
              </li>
              <li>
                <a href="Treaty.php" class="header__link">Условия пользования</a>
              </li>
              <li>
                <a href="Singin.php" class="header__link">Личный кабинет</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <div class="content">
      <p class="white-text center-align">Давайте составим <br />Ваш профиль</p>
    </div>
    <div class="imageTest">

      <!-- <div class="Man">
        <h1 class="white-text">МУЖЧИНА</h1>
        <div class="imageman"></div>
      </div>
      <div class="Woman">
        <h1 class="white-text">ЖЕНЩИНА</h1>
        <a href="tests/woman/TestWoman.php">
          <div class="imagewoman"></div>
        </a>
      </div> -->

        <div class="Man">
          <h1 class="white-text">МУЖЧИНА</h1>
          <a href="/tests/man/TestManJQ.php"><div class="imageman"></div></a>
        </div>
        <div class="Woman">
          <h1 class="white-text">ЖЕНЩИНА</h1>
          <a href="tests/woman/TestWoman.php"><div class="imagewoman"></div></a>
        </div>
    </div>
    <? include $path . "/components/footer.php"; ?>
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