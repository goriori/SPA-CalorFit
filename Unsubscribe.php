<? $path = $_SERVER['DOCUMENT_ROOT'] ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CalortFit</title>
  <link rel="stylesheet" href="/css/unsubscribe.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body>
  <div class="wrapper">
  <? include $path . "/components/burger.php"; ?>
    <div class="block">
      <div class="text-content white-text">
        <h1>Отказ от подписки</h1>
        <p>-Вы можете найти свою подписку и отменить ее самостоятельно.</p>
        <p>-Уже списанные средства за подписку - НЕ возвращаются согласно нашему договору-оферте.</p>
      </div>
      <form action="">
        <input class="emailInput browser-default" type="email" name="email" placeholder="Введите свой Email адрес...">
        <input class="button" type="submit" name="send" >
      </form>
    </div>

    <footer>
      <div class="about">
        Продолжая, вы соглашаетесь с <a href="Treaty.php">Условиями использования</a>,
        <a href="Treaty.php">Политикой<br />
          конфиденциальности</a>, <a href="Rates.php">Условиями подписки</a><br />
        <a href="Unsubscribe.php">Отписаться от услуги</a><br />
        Поддержка: admin@calorfit.ru<br />
        2021 © All Rights Reserved.
      </div>
    </footer>
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