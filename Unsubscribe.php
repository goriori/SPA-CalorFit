<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalortFit</title>
    <link rel="stylesheet" href="/css/unsubscribe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>
<div class="wrapper">
<? include $path . "/components/header.php"; ?>
    <div class="block">
        <div class="text-content white-text">
            <h1>Отказ от подписки</h1>
            <p>-Вы можете найти свою подписку и отменить ее самостоятельно.</p>
            <p>-Уже списанные средства за подписку - НЕ возвращаются согласно нашему договору-оферте.</p>
        </div>
        <form action="">
            <input class="emailInput" type="email" name="email" placeholder="Введите свой Email адрес...">
            <input  class="button" type="submit" name="send">
        </form>
    </div>
    <? include $path . "/components/footer.php"; ?>
</div>
</body>

</html>