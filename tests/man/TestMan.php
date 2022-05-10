<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/TestMan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="../../js/TestMan.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <title>CalorFit</title>
</head>

<body>
    <div class="wrapper" id="test">
        <div class="backarrowImd" v-if="show > 1" v-on:click="show--"></div>
        <header class="header">
            <div class="container">
                <div class="header__body">
                    <div class="header__burger">
                        <span></span>
                    </div>
                    <nav class="header__menu">
                        <ul class="header__list">
                            <li>
                                <a href="../../" class="header__link index">Главная</a>
                            </li>
                            <li>
                                <a href="../../Unsubscribe.php" class="header__link">Отписаться</a>
                            </li>
                            <li>
                                <a href="../../Rates.php" class="header__link">Тарифы</a>
                            </li>
                            <li>
                                <a href="../../Treaty.php" class="header__link">Политика<br> конфенденциальности</a>
                            </li>
                            <li>
                                <a href="../../Treaty.php" class="header__link">Условия пользования</a>
                            </li>
                            <li>
                                <a href="../../Singin.php" class="header__link">Личный кабинет</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Test 1 Man -->
        <div class="test-one Target" v-if="show === 1">
            <div class="block">
                <div class="text-content white-text center-align">
                    <h1>Цель</h1>
                    <p>Какая ваша главная цель?</p>
                </div>
                <div class="buttons white-text ">
                    <div class="one" v-on:click="show++">
                        <p>Похудеть</p>
                        <div class="imgTargetOne"></div>
                    </div>
                    <div class="two" v-on:click="show++">
                        <p>Ускорить рост своих мышц</p>
                        <div class="imgTargetTwo"></div>
                    </div>
                    <div class="three" v-on:click="show++">
                        <p>Начать питаться правильно</p>
                        <div class="imgTargetThree"></div>
                    </div>
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
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
                <div class="slide_2"></div>
            </div>
            <footer class="white-text">
                <div class="logo">CalorFit</div>
                <div class="text-about">
                    <p>
                        Продолжая, вы соглашаетесь с <a href="../../Treaty.php">Условиями использования</a>, <a href="../../Treaty.php">Политикой конфиденциальности</a>, <a href="../../Rates.php">Условиями подписки</a>,
                        <a href="../../Unsubscribe.php">Отписаться от услуги</a>
                        Поддержка: admin@calorfit.ru<br>
                        2021 © All Rights Reserved.
                    </p>
                </div>
            </footer>

        </div>
        <!-- Test 2 Man -->
        <div class="test-two Mass" v-if="show === 2">

            <div class="block center-align">
                <h1 class="target">Желаемый вес</h1>
                <h1 class="question">Хорошо, какой для Вас идеальный вес?</h1>
                <div class="response1">
                    <div class="changeWeight">
                        <div id="pound" class="pound"></div>
                        <div id="kg" class="kg"></div>
                        <div class="changeWeight_text">
                            <font class="pound_text">В фунтах</font>
                            <font class="kg_text">В килограммах</font>
                        </div>
                    </div>
                    <div class="quantity">
                        <input id="input_kg" type="number" class="quantity_text browser-default">
                        <h1 id="quantity">КГ</h1>
                    </div>
                    <button class="continue1" v-on:click="show++">
                        Продолжить
                    </button>
                </div>

            </div>
            <div class="sliders2">
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
                </div>
            </div>
            <footer class="white-text">
                <div class="logo">CalorFit</div>
                <div class="text-about">
                    <p>
                        Продолжая, вы соглашаетесь с <a href="../../Treaty.php">Условиями использования</a>, <a href="../../Treaty.php">Политикой конфиденциальности</a>, <a href="../../Rates.php">Условиями подписки</a>,
                        <a href="../../Unsubscribe.php">Отписаться от услуги</a>
                        Поддержка: admin@calorfit.ru
                        2021 © All Rights Reserved.
                    </p>
                </div>
            </footer>

        </div>
        <!-- Test 3 Man -->
        <div class="test-trhee Phisicparam" v-if="show === 3">

            <div class="block center-align">

                <div class="text-content3 white-text">
                    <h2>Физические параметры</h2>
                    <p class="last-text">
                        Отлично! А как насчет Вашего текущего <br> роста и веса?
                    </p>
                </div>
                <form action="" class="form-phisic">
                    <div class="select-param3">
                        <input type="number" placeholder="Рост(см)" name="height" class="browser-default" v-model="form.heigth" />
                    </div>
                    <p class="error red-text" v-if="form.heigth < 120 || form.height > 220">Не допустимое значение роста</p>
                    <div class="select-param3">
                        <input type="number" placeholder="Текущий вес(кг)" name="mass" class="browser-default" v-model="form.dessiredMass" />
                    </div>
                    <p class=" red-text" v-if="form.dessiredMass < 40 || form.dessiredMass > 150">Не допустимое значение веса</p>
                    <input type="button" value="Продолжить" class="white-text browser-default but" v-on:click="show++">
                </form>

            </div>
            <div class="sliders2">
                <div class="sliders">
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
                </div>
            </div>
            <footer class="white-text">
                <div class="logo">CalorFit</div>
                <div class="text-about">
                    <p>
                        Продолжая, вы соглашаетесь с <a href="../../Treaty.php">Условиями использования</a>, <a href="../../Treaty.php">Политикой конфиденциальности</a>, <a href="../../Rates.php">Условиями подписки</a>,
                        <a href="../../Unsubscribe.php">Отписаться от услуги</a>
                        Поддержка: admin@calorfit.ru
                        2021 © All Rights Reserved.
                    </p>
                </div>
            </footer>

        </div>
        <!-- Test 4 Man -->
        <div class="test-four Age" v-if="show === 4">

            <div class="block">

                <div class="text-content4 white-text center-align">
                    <h2>Возраст</h2>
                    <p class="white-text text-section-two">
                        Сколько Вам лет?
                    </p>
                </div>
                <div class="buttons">
                    <div class="activet">
                        <button v-on:click="show++">18-29</button>
                    </div>
                    <div>
                        <button v-on:click="show++">30-29</button>
                    </div>
                    <div>
                        <button v-on:click="show++">40-49</button>
                    </div>
                    <div>
                        <button v-on:click="show++">50+</button>
                    </div>
                </div>

            </div>
            <div class="sliders2">
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
                </div>
            </div>
            <footer class="white-text">
                <div class="logo">CalorFit</div>
                <div class="text-about">
                    <p>
                        Продолжая, вы соглашаетесь с <a href="../../Treaty.php">Условиями использования</a>, <a href="../../Treaty.php">Политикой конфиденциальности</a>, <a href="../../Rates.php">Условиями подписки</a>,
                        <a href="../../Unsubscribe.php">Отписаться от услуги</a>
                        Поддержка: admin@calorfit.ru
                        2021 © All Rights Reserved.
                    </p>
                </div>
            </footer>

        </div>
        <!-- Test 5 Man -->
        <div class="test-five BodyType" v-if="show === 5">
            <div class="block">
                <div class="text-content5 white-text center-align">
                    <p class="type">Тип Телосложения</p>
                    <p class="type2">Для каждого типа телосложения <br> характерен свой уровень метаболизма</p>
                    <p class="type3">Какое изображение лучше всего соответствует <br> Вашем типу телосложения?</p>
                </div>
                <div class="buttons">
                    <button class="button_panel1" v-on:click="show++">Эктоморф</button>
                    <img src="/images/ectomorph.png" class="img_panel1">
                    <button class="button_panel2" v-on:click="show++">Мезоморф</button>
                    <img src="/images/mesomorph.png" class="img_panel2">
                    <button class="button_panel3" v-on:click="show++">Эндоморф</button>
                    <img src="/images/endomorph.png" class="img_panel3">
                </div>

            </div>
            <div class="sliders2">
                <div class="sliders">
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
            <footer class="white-text">
                <div class="logo">CalorFit</div>
                <div class="text-about">
                    <p>
                        Продолжая, вы соглашаетесь с <a href="../../Treaty.php">Условиями использования</a>, <a href="../../Treaty.php">Политикой конфиденциальности</a>, <a href="../../Rates.php">Условиями подписки</a>,
                        <a href="../../Unsubscribe.php">Отписаться от услуги</a>
                        Поддержка: admin@calorfit.ru
                        2021 © All Rights Reserved.
                    </p>
                </div>
            </footer>

        </div>
        <!-- Test 6 Man -->
        <div class="tes-fix" v-if="show === 6">
            <div class="block">
                <div class="text-content6">
                    <p class="type">Обычный день</p>
                    <p class="type2">Мужчинам требуется более инидивидуальный<br> подход в зависимости от их образа жизни.</p>
                    <p class="type3">Пожалуйста, опишите свой обычный день.</p>
                </div>
                <div class="buttons-typical white-text">
                    <div class="typicalOne" v-on:click="show++">
                        <p>В офисе</p>
                    </div>
                    <div class="typicalOne" v-on:click="show++">
                        <p>Прогулки на улице</p>
                    </div>
                    <div class="typicalOne" v-on:click="show++">
                        <p>Физическая работы</p>
                    </div>
                    <div class="typicalOne" v-on:click="show++">
                        <p>В основном дома</p>
                    </div>
                </div>

            </div>
            <div class="sliders2">
                <div class="sliders">
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
            <footer class="white-text">
                <div class="logo">CalorFit</div>
                <div class="text-about">
                    <p>
                        Продолжая, вы соглашаетесь с <a href="../../Treaty.php">Условиями использования</a>, <a href="../../Treaty.php">Политикой конфиденциальности</a>, <a href="../../Rates.php">Условиями подписки</a>,
                        <a href="../../Unsubscribe.php">Отписаться от услуги</a>
                        Поддержка: admin@calorfit.ru
                        2021 © All Rights Reserved.
                    </p>
                </div>
            </footer>

        </div>
        <!-- Test 7  -->
        <div class="test-seven" v-if="show === 7">
            <div class="block">
                <div class="text-content7">
                    <p class="type">Когда был идеальный вес</p>
                    <p class="type2">Как давно вы были в Вашем <br> идеальном весе?</p>
                </div>
                <div class="wrapp_panel7">
                    <div class="block_img_panel"></div>
                    <div class="block_test_panel">
                        <div class="buttons7">
                            <button class="test_panel1" v-on:click="show++">
                                Больше 1 года <br> назад
                            </button>
                            <button class="test_panel2" v-on:click="show++">
                                Меньше 1 года назад
                            </button>
                            <button class="test_panel3" v-on:click="show++">
                                Больше 3 лет назад
                            </button>
                            <button class="test_panel4" v-on:click="show++">
                                Никогда
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="sliders2">
                <div class="sliders">
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
            <footer class="white-text">
                <div class="logo">CalorFit</div>
                <div class="text-about">
                    <p>
                        Продолжая, вы соглашаетесь с <a href="../../Treaty.php">Условиями использования</a>, <a href="../../Treaty.php">Политикой конфиденциальности</a>, <a href="../../Rates.php">Условиями подписки</a>,
                        <a href="../../Unsubscribe.php">Отписаться от услуги</a>
                        Поддержка: admin@calorfit.ru
                        2021 © All Rights Reserved.
                    </p>
                </div>
            </footer>

        </div>
        <!-- Test 8 Man -->
        <div class="test-eigth" v-if="show === 8">
            <div class="block">
                <div class="text-content8">
                    <p class="type">Привычки</p>
                    <p class="type3">Выберите привычки, которые соотвествуют Вашему<br> образу жизни</p>
                </div>
                <div class="response">
                    <div class="answer">
                        <div id="answer_1" class="answer_1">🌙Я мало сплю</div>
                        <div id="answer_2" class="answer_2">🍹Я люблю сладкие напитки</div>
                        <div id="answer_3" class="answer_3">🍕Я ем на ночь</div>
                        <div id="answer_4" class="answer_4">
                            🍫Я не могу<br />
                            перестать есть<br />
                            сладкое
                        </div>
                        <div id="answer_5" class="answer_5">✅Я ем много <br />соленого</div>
                        <div id="answer_6" class="answer_6">❌Ничего из перечисленного</div>
                    </div>
                    <button id="continue" class="continue" v-on:click="show++">Продолжить</button>
                </div>

            </div>
            <div class="sliders2">
                <div class="sliders">
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
            <footer class="white-text">
                <div class="logo">CalorFit</div>
                <div class="text-about">
                    <p>
                        Продолжая, вы соглашаетесь с <a href="../../Treaty.php">Условиями использования</a>, <a href="../../Treaty.php">Политикой конфиденциальности</a>, <a href="../../Rates.php">Условиями подписки</a>,
                        <a href="../../Unsubscribe.php">Отписаться от услуги</a>
                        Поддержка: admin@calorfit.ru
                        2021 © All Rights Reserved.
                    </p>
                </div>
            </footer>


        </div>
        <!-- Test 9 Man -->
        <div class="test-nine" v-if="show === 9">
            <div class="block">
                <div class="text-content9">
                    <p class="type">Фитнес</p>
                    <p class="type2">Учитывая то, что Вы хотите придти к весу в {{form.mass}}кг. <br> Ваша физическая активность играет большую <br> роль!</p>
                    <p class="type3">Насколько вы физически активны?</p>
                </div>
                <div class="wrapp_panel">
                    <div class="block_img_panel9"></div>
                    <div class="block_test_panel9">
                        <div class="buttons">
                            <button class="test_panel1" v-on:click="show++">
                                Практически нет активности
                            </button>
                            <button class="test_panel2" v-on:click="show++">
                                Фитнес 1-2раза в неделю
                            </button>
                            <button class="test_panel3" v-on:click="show++">
                                Фитнес 3-5 раз в неделю
                            </button>
                            <button class="test_panel4" v-on:click="show++">
                                Фитнес 5-7 раз в неделю
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sliders2">
                <div class="sliders">
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
            <footer class="white-text">
                <div class="logo">CalorFit</div>
                <div class="text-about">
                    <p>
                        Продолжая, вы соглашаетесь с <a href="../../Treaty.php">Условиями использования</a>, <a href="../../Treaty.php">Политикой конфиденциальности</a>, <a href="../../Rates.php">Условиями подписки</a>,
                        <a href="../../Unsubscribe.php">Отписаться от услуги</a>
                        Поддержка: admin@calorfit.ru
                        2021 © All Rights Reserved.
                    </p>
                </div>
            </footer>

        </div>
        <!-- Test 10 -->
        <div class="test-ten" v-if="show === 10">
            <div class="block">
                <div class="text-content10">
                    <p class="type">Энергия</p>
                    <p class="type2">Остаетесь ли вы энергичными в течение дня?</p>
                </div>
                <div class="box_panel">
                    <div class="buttons">
                        <button class="button_panel1" v-on:click="show++">Мой уровень энергии <br> не меняется</button>
                        <button class="button_panel2" v-on:click="show++">У меня упадок сил перед <br> приемом пищи</button>
                        <button class="button_panel3" v-on:click="show++">Я чувствую сонливость <br> после обеда</button>
                    </div>
                </div>
            </div>
            <div class="sliders2">
                <div class="sliders">
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
            <footer class="white-text">
                <div class="logo">CalorFit</div>
                <div class="text-about">
                    <p>
                        Продолжая, вы соглашаетесь с <a href="../../Treaty.php">Условиями использования</a>, <a href="../../Treaty.php">Политикой конфиденциальности</a>, <a href="../../Rates.php">Условиями подписки</a>,
                        <a href="../../Unsubscribe.php">Отписаться от услуги</a>
                        Поддержка: admin@calorfit.ru
                        2021 © All Rights Reserved.
                    </p>
                </div>
            </footer>

        </div>
        <!-- Test 11 Man -->
        <div class="test-eleven" v-if="show === 11">
            <div class="block">
                <div class="text-content11 center-align ">
                    <h2 class="dream white-text " id="dream">Сон</h2>
                    <p class=" type2 silver-text">
                        Достаточное количество сна необходимо для<br> того, чтобы похудеть
                    </p>
                    <p class="  white-text text-section-two">Сколько вы обычно спите?</p>
                </div>
                <div class="buttonsDream">
                    <div class="left">
                        <div class="butt">
                            <button class="active" v-on:click="show++">
                                <div class="image-clock"></div>
                                <p>Меньше 5 часов</p>
                            </button>
                        </div>
                        <div class="butt">
                            <button class="active" v-on:click="show++">
                                <div class="image-clock"></div>
                                <p>7-8 часов</p>
                            </button>
                        </div>
                    </div>
                    <div class="right">
                        <div class="butt">
                            <button class="active" v-on:click="show++">
                                <div class="image-clock"></div>
                                <p>5-6 часов</p>
                            </button>
                        </div>
                        <div class="butt">
                            <button class="active" v-on:click="show++">
                                <div class="image-clock"></div>
                                <p>Больше 8 часов</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sliders2">
                <div class="sliders">
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
            <footer class="white-text">
                <div class="logo">CalorFit</div>
                <div class="text-about">
                    <p>
                        Продолжая, вы соглашаетесь с <a href="../../Treaty.php">Условиями использования</a>, <a href="../../Treaty.php">Политикой конфиденциальности</a>, <a href="../../Rates.php">Условиями подписки</a>,
                        <a href="../../Unsubscribe.php">Отписаться от услуги</a>
                        Поддержка: admin@calorfit.ru
                        2021 © All Rights Reserved.
                    </p>
                </div>
            </footer>

        </div>
        <!-- Test 12 Man -->
        <div class="testtwelwe" v-if="show === 12">
            <div class="block">
                <div class="text-content12">
                    <p class="type">Потребление воды</p>
                    <p class="type2">Поддержание водного баланса поможет Вам<br> быстрее достичь результатов.</p>
                    <p class="type3">Хорошо, какой Ваш идеальный вес?</p>
                </div>
                <div class="changeWeight2">
                    <div id="pound" class="pound"></div>
                    <div id="kg" class="kg"></div>
                    <div class="changeWeight_text">
                        <font class="pound_text">В унциях</font>
                        <font class="kg_text">В литрах</font>
                    </div>
                </div>
                <div class="buttonsWater">
                    <div class="left">
                        <div>
                            <button class="active2" v-on:click="show++">
                                <p>☕Только кофе или чай</p>
                            </button></router-link>
                        </div>
                        <div>
                            <button class="active2" v-on:click="show++">
                                <p class="Stack">💧2-5 стаканов(0,5-1,5)</p>
                            </button>
                        </div>
                    </div>
                    <div class="right">
                        <div>
                            <button class="active2" v-on:click="show++">
                                <p>💧Меньше 2 стаканов(0,5л)</p>
                            </button>
                        </div>
                        <div>
                            <button class="active2" v-on:click="show++">
                                <p class="Stack">💧Больше 6 стаканов</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sliders2">
                <div class="sliders">
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
            <footer class="white-text">
                <div class="logo">CalorFit</div>
                <div class="text-about">
                    <p>
                        Продолжая, вы соглашаетесь с <a href="../../Treaty.php">Условиями использования</a>, <a href="../../Treaty.php">Политикой конфиденциальности</a>, <a href="../../Rates.php">Условиями подписки</a>,
                        <a href="../../Unsubscribe.php">Отписаться от услуги</a>
                        Поддержка: admin@calorfit.ru
                        2021 © All Rights Reserved.
                    </p>
                </div>
            </footer>

        </div>
        <!-- Test 13 Man -->
        <div class="test-13" v-if="show === 13">
            <div class="block">
                <div class="text-content13 white-text center-align">
                    <h2>Мотивация</h2>
                    <p>Близко ли Вам приведенной<br>
                        ниже утверждение?
                    </p>
                </div>
                <div class="information-motivation white-text center-align">
                    <p>
                        Мне часто требуется внешняя мотивация, чтобы продолжать что-либо делать. Я могу легко сдаться, когда испытываю стресс
                    </p>
                </div>
                <div class="buttonsMotivation center-align">
                    <button v-on:click="show++">Да</button>
                    <button v-on:click="show++">Нет</button>
                </div>
            </div>
            <div class="sliders2">
                <div class="sliders">
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
            <footer class="white-text">
                <div class="logo">CalorFit</div>
                <div class="text-about">
                    <p>
                        Продолжая, вы соглашаетесь с <a href="../../Treaty.php">Условиями использования</a>, <a href="../../Treaty.php">Политикой конфиденциальности</a>, <a href="../../Rates.php">Условиями подписки</a>,
                        <a href="../../Unsubscribe.php">Отписаться от услуги</a>
                        Поддержка: admin@calorfit.ru<br />
                        2021 © All Rights Reserved.
                    </p>
                </div>
            </footer>

        </div>
        <!-- Test 14 Man -->
        <div class="test-14" v-if="show === 14">
            <div class="block">
                <div class="text-content14 white-text center-align">
                    <h2>Поведение</h2>
                    <p class="white-text text-section-two">
                        Близко ли Вам приведенной ниже утверждение?
                    </p>
                </div>
                <div class="information-motivation white-text center-align">
                    <p>
                        Боюсь, что у меня не будет времени заниматься тем, что мне нравится, потому что тренировки и планирование питания будут занимать все мое время.
                    </p>
                </div>
                <div class="buttonsMotivation center-align">
                    <button id="LoadingMan" v-on:click="show++">Да</button>
                    <button id="LoadingMan" v-on:click="show++">Нет</button>
                </div>
            </div>
            <div class="sliders2">
                <div class="sliders">
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
            <footer class="white-text">
                <div class="logo">CalorFit</div>
                <div class="text-about">
                    <p>
                        Продолжая, вы соглашаетесь с <a href="../../Treaty.php">Условиями использования</a>, <a href="../../Treaty.php">Политикой конфиденциальности</a>, <a href="../../Rates.php">Условиями подписки</a>,
                        <a href="../../Unsubscribe.php">Отписаться от услуги</a>
                        Поддержка: admin@calorfit.ru
                        2021 © All Rights Reserved.
                    </p>
                </div>
            </footer>
        </div>

        <!-- loadingresult -->
        <div class="loading__svg" v-if="show === 15">
            <div class="block loadingCenter">
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
        </div>
        <!-- Page Pay -->
        <div class="pay" v-if="show === 16">
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
                            <input type="checkbox" />
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

                    <button type="submit" name="submit">Получить</button>
                </form>
                <footer>
                    Нажимая на кнопку, Вы соглашаетесь с
                    <a href="../../Treaty.php">политикой конфиденциальности</a> ,<a href="../../Treaty.php">условиями использования</a>
                    и <a href="../../Rates.php">действующими тарифами сервиса</a> , даете свое согласие на
                    обработку персональных данных и на получение рекламных материалов,
                    осознаете возмездный характер оказываемых услуг.
                </footer>
            </div>
        </div>
    </div>


    <script src="../../../js/burger.js"></script>





    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script>
        var togle = new Vue({
            el: '#test',
            data: {
                show: 1,


                form: {
                    mass: '',
                    dessiredMass: '',
                    finalMass: '',
                    heigth: ''
                },
            },
            methods: {
                CalculateWeight: function(mass, dessiredMass) {
                    this.form.finalMass = mass - dessiredMass
                }
            }
        })
    </script>
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