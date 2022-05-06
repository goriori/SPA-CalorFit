<? $path = $_SERVER['DOCUMENT_ROOT'] ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
  <div class="wrapper">
    <div class="block-one">
      <div class="container">
        <? include $path . "/components/header.php"; ?>
      </div>
      <div class="content">
        <p class="white-text center-align">Давайте составим <br />Ваш профиль</p>
      </div>
      <div class="imageTest">
        <div class="Man">
          <h1 class="white-text">МУЖЧИНА</h1>
          <div class="imageman"></div>
        </div>
        <div class="Woman">
          <h1 class="white-text">ЖЕНЩИНА</h1>
          <div class="imagewoman"></div>
        </div>
      </div>
      <? include $path . "/components/footer.php"; ?>
    </div>
  </div>
  </div>


</body>

</html>