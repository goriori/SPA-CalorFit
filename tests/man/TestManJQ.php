<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="../../js/TestMan.js"></script>
    <script src="../../js/burger.js"></script>
    <link rel="stylesheet" href="/css/TestManTest.css">
    <title>CalorFit</title>
</head>

<body>
    <div class="wrapper">
        <img onclick="vectorBack()" class="vectorImg" src="../../images/backarrowM.png">
        <header class="header">
            <div class="container">
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
                                <a href="#" class="header__link">Политика<br> конфенденциальности</a>
                            </li>
                            <li>
                                <a href="#" class="header__link">Условия пользования</a>
                            </li>
                            <li>
                                <a href="/Singin.php" class="header__link">Личный кабинет</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="block" style="display: block;">
            <div class="block-textst">
                <h2>Цель</h2>
                <p>Какая Ваша главная цель?</p>
            </div>
            <div class="buttonsst">
                <div class="leftst">
                    <button class="buttonst" onclick="test()">
                        <p class="onest">Похудеть</p>
                        <div class="img-onest"></div>
                    </button>
                    <button class="buttonst" onclick="test()">
                        <p class="twost">Ускорить рост своих мышц</p>
                        <div class="img-twost"></div>
                    </button>
                    <button class="buttonst" onclick="test()">
                        <p class="threest">Убрать лишние килограммы</p>
                        <div class="img-threest"></div>
                    </button>
                </div>
            </div>
            <div class="sliders">
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
            </div>
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
                        <font onclick="changeWeightLeft()" class="pound_text1">В фунтах</font>
                        <font onclick="changeWeightRight()" class="kg_text1">В килограммах</font>
                    </div>
                </div>
                <div class="quantity1">
                    <input id="input_kg" class="browser-default" type="number" min="45" max="300" autocomplete="off">
                    <h1 id="quantity1">КГ</h1>
                </div>
                <button class="continue1" onclick="test2()">Продолжить</button>
            </div>
            <div class="ellipse1">
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
            </div>
        </div>
        <!-- test2 -->
        <div class="container-block2">
            <div class="text-content2">
                <h2>Физические параметры</h2>
                <p class="last-text2">
                    Отлично! А как насчет Вашего текущего роста и веса?
                </p>
            </div>
            <div class="select-param2">
                <input id="height" type="number" autocomplete="off" placeholder="Рост(см)" class="browser-default">
            </div>
            <div class="select-param2">
                <input id="weight" type="number" autocomplete="off" placeholder="Текущий вес(кг)" class="browser-default">
            </div>
            <div class="btn2" onclick="test3()">Продолжить</div>
            <div class="sliders">
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
            </div>
        </div>
        <!-- test3 -->
        <div class="gran3">
            <div class="text-content3">
                <h2>Возраст</h2>
                <p class="text-section-two3">Сколько Вам лет?</p>
            </div>
            <div class="buttons3">
                <div class="active3">
                    <button class="button3" onclick="test4()">18-29</button>
                </div>
                <div>
                    <button class="button3" onclick="test4()">30-29</button>
                </div>
                <div>
                    <button class="button3" onclick="test4()">40-49</button>
                </div>
                <div>
                    <button class="button3" onclick="test4()">50+</button>
                </div>
            </div>
            <div class="sliders3">
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
            </div>
        </div>
        <!-- test4 -->
        <div class="test4">
            <div class="target4">Тип телосложения</div>
            <div class="note4">Для каждого типа телосложения характерен свой уровень метаболизма</div>
            <div class="question4">Какое изображение лучше всего соответствует Вашем типу телосложения?</div>
            <div class="response4">
                <div class="answer4">
                    <div class="girl1" onclick="test5()">
                        <p>Эктоморф</p>
                        <img src="../../images/ectomorph.png">
                    </div>
                    <div class="girl2" onclick="test5()">
                        <p>Мезоморф</p>
                        <img src="../../images/mesomorph.png">
                    </div>
                    <div class="girl3" onclick="test5()">
                        <p>Эндоморф</p>
                        <img src="../../images/endomorph.png">
                    </div>
                </div>
            </div>
            <div class="ellipse4">
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
            </div>
        </div>
        <!-- test5 -->
        <div class="gran5">
            <div class="text-content5">
                <h2>Обычный день</h2>
                <p class="text-section-one5">
                    Мужчинам требуется более индивидуальный подход в зависимости от их
                    образа жизни.
                </p>
                <p class="dark-text5">
                    Пожалуйста, опишите свой обычный день.
                </p>
            </div>
            <div class="buttons5">
                <div class="active5" onclick="test6()">
                    <button>В офисе</button>
                </div>
                <div onclick="test6()">
                    <button>Прогулки на улице</button>
                </div>
                <div onclick="test6()">
                    <button>Физическая работы</button>
                </div>
                <div onclick="test6()">
                    <button>В основном дома</button>
                </div>
            </div>
            <div class="sliders5">
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
            </div>
        </div>
        <!-- test6 -->
        <div class="panel6">
            <p class="type6">Когда был идеальный вес</p>
            <p class="type26">Как давно вы были в Вашем <br>идеальном весе?</p>
            <div class="wrapp_panel6">
                <div class="block_img_panel6"></div>
                <div class="block_test_panel6">
                    <div class="buttons6">
                        <button class="test_panel1" onclick="test7()">Больше 1 года <br>назад
                        </button>
                        <button class="test_panel2" onclick="test7()">Меньше 1 года назад
                        </button>
                        <button class="test_panel3" onclick="test7()">Больше 3 лет назад
                        </button>
                        <button class="test_panel4" onclick="test7()">Никогда</button>
                    </div>
                </div>
            </div>
            <div class="ellipse6">
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
            </div>
        </div>
        <!-- test7 -->
        <div class="test7">
            <div class="target7">Привычки</div>
            <div class="question7">Выберите привычки, которые соотвествуют Вашему образу жизни</div>
            <div class="response7">
                <div class="answer7">
                    <div id="answer_1" class="answer_1" onclick="answer_1()">🌙Я мало сплю</div>
                    <div id="answer_2" class="answer_2" onclick="answer_2()">🍹Я люблю сладкие напитки</div>
                    <div id="answer_3" class="answer_3" onclick="answer_3()">🍕Я ем на ночь</div>
                    <div id="answer_4" class="answer_4" onclick="answer_4()">🍫Я не могу<br> перестать есть<br> сладкое</div>
                    <div id="answer_5" class="answer_5" onclick="answer_5()">✅Я ем много <br>соленого</div>
                    <div id="answer_6" class="answer_6" onclick="answer_6()">❌Ничего из перечисленного</div>
                </div>
                <button id="continue" class="continue7" onclick="test8()">Продолжить</button>
            </div>
            <div class="ellipse7">
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
            </div>
        </div>
        <!-- test8 -->
        <div class="panel8">
            <p class="type8">Фитнес</p>
            <p class="type2">
                Учитывая то, что Вы хотите набрать (n)кг. <br />
                Ваша физическая активность играет большую <br />
                роль!
            </p>
            <p class="type3">Насколько вы физически активны?</p>

            <div class="wrapp_panel8">
                <div class="block_img_panel8"></div>
                <div class="block_test_panel8">
                    <div class="buttons8">
                        <button class="test_panel18" onclick="test9()">
                            Практически нет активности
                        </button>
                        <button class="test_panel28" onclick="test9()">
                            Фитнес 1-2раза в неделю
                        </button>
                        <button class="test_panel38" onclick="test9()">
                            Фитнес 3-5 раз в неделю
                        </button>
                        <button class="test_panel48" onclick="test9()">
                            Фитнес 5-7 раз в неделю
                        </button>
                    </div>
                </div>
            </div>
            <div class="ellipse8">
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
            </div>
        </div>
        <!-- test9 -->
        <div class="panel9">
            <p class="type9">Энергия</p>
            <p class="type29">Остаетесь ли вы энергичными в течение дня?</p>
            <div class="box_panel9">
                <div class="buttons9">
                    <button class="button_panel19" onclick="test10()">
                        <p>
                            Мой уровень энергии<br />
                            не меняется
                        </p>
                    </button>
                    <button class="button_panel29" onclick="test10()">
                        <p>
                            У меня упадок сил<br />
                            перед приемом пищи
                        </p>
                    </button>
                    <button class="button_panel39" onclick="test10()">
                        <p>
                            Я чувствую сонливость<br />
                            после обеда
                        </p>
                    </button>
                </div>
            </div>
            <div class="ellipse9">
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
            </div>
        </div>
        <!-- test9.1 -->
        <div class="gran9-1">
            <div class="target9-1">
                <h2>Сон</h2>
                <p class="description9-1">
                    Достаточное количество сна <br />необходимо для того, чтобы похудеть
                </p>
                <p class="qustion9-1">Сколько вы обычно спите?</p>
            </div>
            <div class="buttons9-1">
                <div class="left9-1">
                    <div class="butt9-1" onclick="test9_1()">
                        <button class="active9-1">
                            <div class="image-clock9-1"></div>
                            <p>Меньше 5 часов</p>
                        </button>
                    </div>
                    <div class="butt9-1" onclick="test9_1()">
                        <button class="active9-1">
                            <div class="image-clock9-1"></div>
                            <p>7-8 часов</p>
                        </button>
                    </div>
                </div>
                <div class="right9-1" onclick="test9_1()">
                    <div class="butt9-1">
                        <button class="active9-1">
                            <div class="image-clock9-1"></div>
                            <p>5-6 часов</p>
                        </button>
                    </div>
                    <div class="butt" onclick="test9_1()">
                        <button class="active9-1">
                            <div class="image-clock9-1"></div>
                            <p>Больше 8 часов</p>
                        </button>
                    </div>
                </div>
            </div>
            <div class="sliders9-1">
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_1"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
            </div>
        </div>
        <footer>
            <!-- test10 -->
            <div class="container-block10">
                <div class="text-content white-text10">
                    <h2>Потребление воды</h2>
                    <p class="silver10">
                        Поддержание водного баланса поможет Вам <br> быстрее достичь результатов.
                    </p>
                    <p class="last-text10">Хорошо, какой Ваш идеальный вес?</p>
                </div>
                <div class="changeWeight10">
                    <div id="pound10" class="pound10"></div>
                    <div id="kg10" class="kg10"></div>
                    <div class="changeWeight_text10">
                        <font class="pound_text10" onclick="pound_text10()">В унциях</font>
                        <font class="kg_text10" onclick="kg_text10()">В литрах</font>
                    </div>
                </div>
                <div class="buttons10">
                    <div class="left10">
                        <div>
                            <button class="active10" onclick="test11()">
                                <p>☕Только кофе или чай</p>
                            </button>
                        </div>
                        <div>
                            <button class="active10" onclick="test11()">
                                <p class="Stack10">💧2-5 стаканов(0,5-1,5л)</p>
                            </button>
                        </div>
                    </div>
                    <div class="right10">
                        <div>
                            <button class="active10" onclick="test11()">
                                <p class="Stack10_1">💧Меньше 2 стаканов(0,5л)</p>
                            </button>
                        </div>
                        <div>
                            <button class="active10" onclick="test11()">
                                <p>💧Больше 6 стаканов</p>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="sliders10">
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_2"></div>
                    <div class="slide_2"></div>
                    <div class="slide_2"></div>
                    <div class="slide_2"></div>
                </div>
            </div>
            <!-- test11 -->
            <div class="gran11">
                <h2>Мотивация</h2>
                <p class="white-text11">
                    Близко ли Вам приведенное ниже утверждение?
                </p>
                <div class="buttons11">
                    <div class="active11">
                        <p>
                            Мне часто требуется внешняя мотивация, чтобы продолжать что-либо
                            делать. Я могу легко сдаться, когда испытываю стресс
                        </p>
                    </div>
                    <div class="form11">
                        <button class="btn11" onclick="test12()">Да</button>
                        <button class="btn11" onclick="test12()">Нет</button>
                    </div>
                </div>
                <div class="sliders11">
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_2"></div>
                    <div class="slide_2"></div>
                    <div class="slide_2"></div>
                </div>
            </div>
            <!-- test12 -->
            <div class="gran12">
                <h2>Поведение</h2>
                <p class="white-text11">
                    Близко ли Вам приведенное ниже утверждение?
                </p>
                <div class="buttons11">
                    <div class="active11">
                        <p>
                            Боюсь, что у меня не будет времени заниматься тем, что мне нравится, потому что тренировки и планирование питания будут занимать все мое время.
                        </p>
                    </div>
                    <div class="form11">
                        <button class="btn11" onclick="test13()">Да</button>
                        <button class="btn11" onclick="test13()">Нет</button>
                    </div>
                </div>
                <div class="sliders11">
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_2"></div>
                    <div class="slide_2"></div>
                </div>
            </div>
            <!-- test13 -->
            <div class="test13">
                <div class="question13">Овощи</div>
                <div class="target13">
                    Отметьте овощи, которые Вы хотите включить в Ваш план питания
                </div>
                <div class="changes13">
                    <div class="change_1" onclick="change_1()">😋Брокколи</div>
                    <div class="change_2" onclick="change_2()">🍄Грибы</div>
                    <div class="change_3" onclick="change_3()">✅Горох</div>
                    <div class="change_4" onclick="change_4()">✅Кабачок</div>
                    <div class="change_5" onclick="change_5()">🥔Картофель</div>
                    <div class="change_6" onclick="change_6()">🍅Помидоры</div>
                    <div class="change_7" onclick="change_7()">​✅Шпинат</div>
                    <div class="change_8" onclick="change_8()">🌶Перец</div>
                </div>
                <div class="continue13" onclick="test14()">Продолжить</div>
                <div class="ellipse13">
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_2"></div>
                </div>
            </div>
            <!-- test14 -->
            <div class="test14">
                <div class="question13">Продукты</div>
                <div class="target13">
                    Отметьте продукты, которые Вы хотите включить в Ваш план питания
                </div>
                <div class="changes13">
                    <div class="change_1" onclick="change_1()">🥑Авокадо</div>
                    <div class="change_2" onclick="change_2()">🥛Йогурт</div>
                    <div class="change_3" onclick="change_3()">🍱Тофу</div>
                    <div class="change_4" onclick="change_4()">🥜Арахисовое
                        масло</div>
                    <div class="change_5" onclick="change_5()">🥚Яйца</div>
                    <div class="change_6" onclick="change_6()">🍚Творог</div>
                    <div class="change_7" onclick="change_7()">​​🥗​Оливки</div>
                    <div class="change_8" onclick="change_8()">🌰Орехи</div>
                </div>
                <div class="continue13" onclick="test15()">Продолжить</div>
                <div class="ellipse13">
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                </div>
            </div>
            <!-- test15 -->
            <div class="test15">
                <div class="question13">Мясо</div>
                <div class="target13">
                    Отметьте виды мяса, которые Вы хотите <br> включить в Ваш план питания
                </div>
                <div class="changes15">
                    <div id="change_1" class="change_1" onclick="meat_1()">🍗Индейка</div>
                    <div id="change_2" class="change_2" onclick="meat_2()">🐄Говядина</div>
                    <div id="change_3" class="change_3" onclick="meat_3()">🐷Свинина</div>
                    <div id="change_4" class="change_4" onclick="meat_4()">🐟Рыба</div>
                    <div id="change_5" class="change_5" onclick="meat_5()">🐔Курица</div>
                    <div id="change_6" class="change_6" onclick="meat_6()">❌Никакой</div>
                </div>
                <div class="continue15" onclick="LoadTest()">Продолжить</div>
                <div class="ellipse15">
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                    <div class="slide_1"></div>
                </div>
            </div>
            <!-- Loading... -->
            <div class="loading__svg">
                <svg class="progressbar" viewBox="0 0 62 80">
                    <circle class="progressbar__track" cx="31" cy="31"></circle>
                    <circle class="progressbar__thumb" cx="31" cy="31"></circle>
                    <text x="32" y="33" class="progressbar__percent" text-anchor="middle" dominant-baseline="middle">
                        <tspan>0</tspan>%
                    </text>
                    <text x="32" y="66" class="progressbar__info" text-anchor="middle">
                        <tspan>Загрузка...</tspan>
                    </text>
                </svg>
            </div>
            <!-- endLoading -->
            <!-- Результаты опроса -->
            <div class="result">
                <div class="text-content white-text ">
                    <p id="head-1">Предворительные данные</p>
                    <p id="head-2">Исходя из пройденного вами теста:</p>
                </div>
                <div class="information-test">
                    <div class="block-index">
                        <p>Индекс вашей массы тела:<h1 id="IndexYour"></h1></p>
                    </div>
                    <div class="block-index">
                        <p>Ваш вес является:<h1 id="WeightYour"></h1></p>
                    </div>
                    <div class="block-index">
                        <p>Ваш идеальный вес:<h1 id="GoodWeight"></h1></p>
                    </div>
                    <div class="block-index">
                        <p>Вес к которому вы хотите придти:<h1 id="WeightWant"></h1></p>
                    </div>
                </div>
                <div class="information-users">
                    <p class="user-head">3 из 4</p>
                    <p id="peoples">Похожих людей пришли к нужному весу с нашей программой</p>
                </div>
                <div class="infromation-next">
                    <p class="white-text">Получить индивидуальный план вашего питания</p>
                    <button class="rec" onclick="receive()">Получить</button>
                </div>
            </div>
            <!-- конец опроса -->
            <div class="pay">
                <div class="content">
                    <div class="name">
                        <span>Оплатите <span class="ping1">вашу</span> первую<br />
                            <span class="ping2">покупку</span></span>
                    </div>
                    <div class="blockPay">
                        <span class="middle"><b>Тариф <s>850.00</s> Р н.</b></span>
                        <div>
                            <span class="ping1 high">1 Р</span><span class="high">*</span><span class="small">/ 1-aя неделя</span>
                        </div>
                        <span class="middle">После 1-ой недели. <span class="blua middle">850</span> Р+<span class="blua middle">200</span>
                            Р <br />калькулятор каллорий.</span>
                    </div>
                    <form class="pay-form" method="POST" action="send.php">
                        <div class="approval">
                            <input type="email" name="email" placeholder="Введите свой e-mail адрес">
                            <label>
                                <input id="pay_checkbox" type="checkbox">
                                <span class="middle">Согласен c подключением платной<br />
                                    подписки стоимостью <span class="blua">1</span> Р <br />за первые
                                    <span class="blua">7 дней</span> доступа<br />
                                    после <span class="blua">1-ой недели</span> с подключенной<br />
                                    карты автоматически списывается <span class="blua">850</span> Р. +
                                    <br /><span class="blua">200</span> Р / неделя калькулятор
                                    калорий<br />
                                    согласно <a href="#">тарифу</a></span>
                            </label>
                        </div>
                        <button class="pay-submit" type="submit" name="submit">Получить</button>
                    </form>
                    <footer>
                        Нажимая на кнопку, Вы соглашаетесь с
                        <a href="#">политикой конфиденциальности</a> ,<a href="#">условиями использования</a>
                        и <a href="#">действующими тарифами сервиса</a> , даете свое согласие на
                        обработку персональных данных и на получение рекламных материалов,
                        осознаете возмездный характер оказываемых услуг.
                    </footer>
                </div>
            </div>

            <div class="text-btn">
                <h1 class="logo">CalorFit</h1>
                <p class="about">
                    Продолжая, вы соглашаетесь с <a href="#">Условиями использования</a>,
                    <a href="#">Политикой конфиденциальности</a>,
                    <a href="#">Условиями подписки</a>,
                    <a href="#">Отписаться от услуги</a> <br />Поддержка:
                    admin@calorfit.ru <br>2021 © All Rights Reserved.
                </p>
            </div>

        </footer>
    </div>
</body>

</html>