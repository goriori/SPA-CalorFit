<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../js/TestWoman.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/css/TestWoman.css">
    <title>CalorFit</title>
</head>

<body>
    <div class="wrapper">
        <div class="block">
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
                </div>
                <div class="rightst">
                    <button class="buttonst" onclick="test()">
                        <p class="threest">Убрать лишние килограммы</p>
                        <div class="img-threest"></div>
                    </button>
                    <button class="buttonst" onclick="test()">
                        <p class="fourst">Начать правильно питаться</p>
                        <div class="img-fourst"></div>
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
                    <input id="input_kg" type="text1" onchange="checked_kg()" autocomplete="off">
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
                <input id="height" type="number" placeholder="Рост(см)" class="browser-default">
            </div>
            <div class="select-param2">
                <input id="weight" type="number" placeholder="Текущий вес(кг)" class="browser-default">
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
            <div class="question4">Выберите привычки, которые соотвествуют Вашему образу жизни</div>
            <div class="response4">
                <div class="answer4">
                    <div class="girl1" onclick="test5()">
                        <p>Прямоуго<br>льник</p>
                        <img src="../../images/woman/girl1.png">
                    </div>
                    <div class="girl2" onclick="test5()">
                        <p>песочные<br>часы</p>
                        <img src="../../images/woman/girl2.png">
                    </div>
                    <div class="girl3" onclick="test5()">
                        <p>груша</p>
                        <img src="../../images/woman/girl3.png">
                    </div>
                    <div class="girl4" onclick="test5()">
                        <p>яблоко</p>
                        <img src="../../images/woman/girl4.png">
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
            <p class="type26">Как давно вы были в Вашем идеальном весе?</p>
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
                <div class="continue15" onclick="названиеФункции()">Продолжить</div>
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
            <div class="text-btn center-align">
            <footer>
                <h1 class="logo">CalorFit</h1>
                <p class="about">
                    Продолжая, вы соглашаетесь с <a href="#">Условиями использования</a>,
                    <a href="#">Политикой конфиденциальности</a>,
                    <a href="#">Условиями подписки</a>,
                    <a href="#">Отписаться от услуги</a> <br />Поддержка:
                    admin@meallforme.ru <br>2021 © All Rights Reserved.
                </p>
            </div>
        </footer>
    </div>
</body>

</html>