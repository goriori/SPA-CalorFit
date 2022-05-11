<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include $path . "/controllers/connect.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/email.css">
    <title></title>
    <meta name="description" content="">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <? include $path . "/components/header.php" ?>
            <div class="content">
                <div class="content_view">
                    <div class="start">
                        <div>Получите на почту Ваш персональный<br>План питания для Похудения!</div>
                    </div>
                    <div class="center">
                        <?php
                        if (isset($_POST['qemail'])) {
                            $qemail = $_POST['qemail'];
                        }
                        if (isset($_POST['send'])) {
                            $send = $_POST['send'];
                        }
                        if (isset($send)) {
                            if ($send) {
                                if ($qemail) {
                                    $add_email_str = "INSERT INTO `emails` (`id`, `email`, `paid`) VALUES (NULL, '$qemail', '');";
                                    $add_email_run = mysqli_query($connect, $add_email_str);
                                }
                                if ($add_email_run) {
                                    $result = "<div class='succes'>Успешно!</div>";
                                } else {
                                    $result = "<div class='error'>Заполните данные!</div>";
                                }
                            }
                        }
                        ?>
                        <form method="POST">
                            <input autocomplete="off" type="email" name="qemail" class="input" placeholder="Введите свой e-mail адрес"><br>
                            <div>Конфиденциальность и сохранность Ваших данных гарантирована. Мы по электронной почте дляудобного доступа</div>
                            <input name="send" type="submit" class="send" value="Продолжить"><br>
                        </form>
                        <?php
                        if (isset($result)) {
                            echo $result;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <? include $path . "/components/footer.php" ?>
        </div>
    </div>
</body>

</html>