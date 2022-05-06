<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/TestWoman.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/css/TestWoman.css">
    <title>CalorFit</title>
</head>

<body>
    <div class="wrapper">
        <div class="block">
            <div class="block-text">
                <h2>Цель</h2>
                <p>Какая Ваша главная цель?</p>
            </div>
            <div class="buttons">
                <div class="left">
                    <button class="button" onclick="test()">
                        <p class="one">Похудеть</p>
                        <div class="img-one"></div>
                    </button></router-link>
                    <button class="button" onclick="test()">
                        <p class="two">Ускорить рост своих мышц</p>
                        <div class="img-two"></div>
                    </button>
                </div>
                <div class="right">
                    <button class="button" onclick="test()">
                        <p class="three">Убрать лишние килограммы</p>
                        <div class="img-three"></div>
                    </button>
                    <button class="button" onclick="test()">
                        <p class="four">Начать правильно питаться</p>
                        <div class="img-four"></div>
                    </button>
                </div>
            </div>
            <div class="sliders">
                <div class="slide_1"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
            </div>
        </div>
        <!-- test1 -->
        <div class="test1">
            <h1 class="target1">Желаемый вес</h1>
            <h1 class="question1">Хорошо, какой Ваш идеальный вес?</h1>
            <div class="response1">
                <div class="changeWeight1">
                    <div id="pound1" class="pound1"></div>
                    <div id="kg1" class="kg1"></div>
                    <div class="changeWeight_text1">
                        <font class="pound_text1">В фунтах</font>
                        <font class="kg_text1">В килограммах</font>
                    </div>
                </div>
                <div class="quantity1">
                    <input type="text">
                    <h1 id="quantity1">КГ</h1>
                </div>
                <button class="continue1" onclick="test2()">Продолжить</button>
            </div>
        </div>
        <!-- test2 -->
        <div class="container-block2">
            <div class="text-content white-text2">
                <h2>Физические параметры</h2>
                <p class="last-text2">
                    Отлично! А как насчет Вашего текущего роста и веса?
                </p>
            </div>
            <div class="select-param2">
                <input type="number" placeholder="Рост(см)" class="browser-default">
            </div>
            <div class="select-param2">
                <input type="number" placeholder="Текущий вес(кг)" class="browser-default">
            </div>
            <div class="btn2" onclick="test3()">Продолжить</div>
            <div class="sliders">
                <div class="one"></div>
                <div class="two"></div>
                <div class="two"></div>
                <div class="two"></div>
                <div class="two"></div>
                <div class="two"></div>
                <div class="two"></div>
            </div>
        </div>
        <!-- test3 -->
        <div class="gran">
            <div class="text-content">
                <h2>Возраст</h2>
                <p class="text-section-two">Сколько Вам лет?</p>
            </div>
            <div class="buttons">
                <div class="active">
                    <button>18-29</button>
                </div>
                <div>
                    <button>30-29</button>
                </div>
                <div>
                    <button>40-49</button>
                </div>
                <div>
                    <button>50+</button>
                </div>
            </div>
            <div class="sliders">
                <div class="one"></div>
                <div class="two"></div>
                <div class="two"></div>
                <div class="two"></div>
                <div class="two"></div>
                <div class="two"></div>
                <div class="two"></div>
            </div>
        </div>
        <footer>
            <div class="text-btn center-align">
                <h1 class="logo">CalorFit</h1>
                <p class="about">
                    Продолжая, вы соглашаетесь с <a href="#">Условиями использования</a>,
                    <a href="#">Политикой конфиденциальности</a>,
                    <a href="#">Условиями подписки</a>,
                    <a href="#">Отписаться от услуги</a> <br />Поддержка:
                    admin@meallforme.ru 2021 © All Rights Reserved.
                </p>
            </div>
        </footer>
    </div>
</body>

</html>