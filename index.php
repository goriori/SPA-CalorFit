<? $path = $_SERVER['DOCUMENT_ROOT'] ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CalorFit</title>
  <link rel="stylesheet" href="/css/index.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
  <div class="wrapper">
    <div class="block-one">
      <div class="head">
        <div class="logo">CalorFit</div>
        <header class="header">
          <div class="container">
            <div class="header__body">
              <div class="header__burger">
                <span class="spanTest"></span>
              </div>
              <nav class="header__menu">
                <ul class="header__list">
                  <li>
                    <a href="/" class="header__link">Главная</a>
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
      </div>
     
        <!-- <header class="header">
          <div class="container">
            <div class="header__body">
              <div class="header__burger">
                <span></span>
              </div>
              <nav class="header__menu">
                <ul class="header__list">
                  <li>
                    <a href="#" class="header__link">Главная</a>
                  </li>
                  <li>
                    <a href="#" class="header__link">Отписаться</a>
                  </li>
                  <li>
                    <a href="Rates.php" class="header__link">Тарифы</a>
                  </li>
                  <li>
                    <a href="#" class="header__link">Политика<br> конфенденциальности</a>
                  </li>
                  <li>
                    <a href="#" class="header__link">Условия пользования</a>
                  </li>
                  <li>
                    <a href="#" class="header__link">Личный кабинет</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </header> -->
      

      <div class="container">
        <? include $path . "/components/header.php"; ?>
      </div>

      <div class="content">
        <p class="white-text center-align">Давайте составим <br />Ваш профиль</p>
      </div>
      <div class="imageTest">
        <a href="#"><div class="Man">
          <h1 class="white-text">МУЖЧИНА</h1>
          <div class="imageman"></div>
        </div></a>
        <a href="/tests/woman/TestWoman.php"><div class="Woman">
          <h1 class="white-text">ЖЕНЩИНА</h1>
          <div class="imagewoman"></div>
        </div></a>
      </div>
      <? include $path . "/components/footer.php"; ?>
  
    </div>
  </div>
  </div>
  <script src="../js/burger.js"></script>
 
     
    </div>
  </div>
  </div>



</body>

</html>