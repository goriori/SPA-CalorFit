<? $path = $_SERVER['DOCUMENT_ROOT'] ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalorFit</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="/css/rates.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <div class="wrapper">

        <div class="logoMobile white-text">CalorFit</div>
        <? include $path . "/components/burger.php"; ?>

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
                            <a href="rates.php" class="header__link rates">Тарифы</a>
                        </li>
                        <li>
                            <a href="treaty.php" class="header__link treaty">Политика<br> конфенденциальности</a>
                        </li>
                        <li>
                            <a href="treaty.php" class="header__link treatyb">Условия пользования</a>
                        </li>
                        <li>
                            <a href="singin.php" class="header__link login">Личный кабинет</a>
                        </li>
                    </ul>
                    </nav>
                </div>
            </div>

    <? include $path . "/components/burger.php"; ?>

        <div class="block-gran">
            <div class="text-content white-text">
                <h1>Тарифы</h1>
                <p class="two">
                    Пожалуйста, ознакомьтесь с действующим тарифным планом сервиса по разработке плана питания.
                </p>
                <p class="two">
                    Cтоимость услуги составляет 1 (один) рубль за получение начального плана питания.
                </p>
                <p id="twoId" class="two">
                    В дальнейшем через неделю использования сервиса взимается комиссия сервиса в размере 850 (Восемьсот пятьдесят) рублей за пролонгирование плана питания на 7 дней.
                </p>
                <p class="two">
                    В дальнейшем через неделю использования сервиса взимается комиссия сервиса в размере 200 (двухсот) рублей за пролонгирование услуги "калькулятор калорий" на 7 дней.
                </p>
            </div>
        </div>
        <footer>
            <div class="about">
                <h2 class="logo">CalorFit</h2>
                Продолжая, вы соглашаетесь с <a href="Treaty.php">Условиями использования</a>,
                <a href="Treaty.php">Политикой<br />
                    конфиденциальности</a>, <a href="Rates.php">Условиями подписки</a><br />
                <a href="Unsubscribe.php">Отписаться от услуги</a><br />
                Поддержка: admin@calorfit.ru<br />
                2022 © All Rights Reserved.
            </div>
        </footer>
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