    <header class="header">
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
                            <a href="Unsubscribe.php" class="header__link unsubscribe">Отписаться</a>
                        </li>
                        <li>
                            <a href="Rates.php" class="header__link rates">Тарифы</a>
                        </li>
                        <li>
                            <a href="Treaty.php" class="header__link treaty">Политика<br> конфенденциальности</a>
                        </li>
                        <li>
                            <a href="Treaty.php" class="header__link treatyb">Условия пользования</a>
                            <a href="/" class="header__link">Политика<br> конфенденциальности</a>
                        </li>
                        <li>
                            <a href="/" class="header__link">Условия пользования</a>
                        </li>
                        <li>
                            <a href="Singin.php" class="header__link login">Личный кабинет</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <script src="/js/"></script>
    <script src="/js/burger.js"></script>
    <style>
        @font-face {
            font-family: "Lexend Exa";
            src: url(../fonts/LexendDecaRegular.ttf);
        }

        .header {
            margin-top: 40px;
        }

        .header__list {
            display: flex;
            padding: 0px;
        }

        .header__list li {
            list-style: none;
            margin: 30px 0px 0px 66px;
            text-align: left;
            z-index: 132;
        }

        .index {
            width: 78px;
        }

        .unsubscribe {
            width: 117px;
        }

        .rates {
            width: 80px;
        }

        .treaty {
            width: 210px;
        }

        .treatyb {
            width: 215px;
        }

        .login {
            width: 175px;
        }

        .header__link {
            font-family: 'Lexend Exa';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 25px;
            color: #FFFFFF;
            text-decoration: none;
        }

        .header__body {
            height: 50px;
        }


        .header__burger {
            display: block;
            position: relative;
            width: 40px;
            height: 30px;
            z-index: 4;
            cursor: pointer;
        }

        .header__burger span {
            background-color: #fff;
            position: absolute;
            left: 0;
            width: 100%;
            height: 5px;
            top: 9px;
            margin-top: 4px;
            transition: all 0.3s ease 0s;
            border-radius: 5px;
        }

        .header__burger:after {
            content: '';
            background-color: #fff;
            position: absolute;
            width: 100%;
            height: 5px;
            left: 0;
            transition: all 0.3s ease 0s;
            border-radius: 5px;
        }

        .header__burger:before {
            content: '';
            background-color: #fff;
            position: absolute;
            width: 100%;
            height: 5px;
            left: 0;
            transition: all 0.3s ease 0s;
            border-radius: 5px;
        }

        .header__burger:before {
            top: 0;
        }

        .header__burger:after {
            bottom: 0;
        }

        .header__burger.active span {
            left: 250px;
            transition: 0.5s;
            z-index: 5;
        }

        .header__burger.active:before {
            transform: rotate(45deg);
            top: 7px;
            width: 20px;
            left: 278px;
            transition: 0.5s;
            z-index: 5;
        }

        .header__burger.active:after {
            transform: rotate(-45deg);
            bottom: 7px;
            width: 20px;
            transition: 0.5s;
            left: 278px;
            z-index: 5;
        }

        .header__menu {
            position: absolute;
            top: -100%;
            right: 0;
            width: 315px;
            height: 452px;
            background-color: #231F1F;
            transition: all 0.5s ease 0s;
            border-radius: 0px 0px 0px 10px;
        }

        .header__menu.active {
            top: 0;
        }

        .header__list {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
        }

        .header__list li {
            margin-bottom: 15px;
            margin-left: 80px;

        }
    </style>