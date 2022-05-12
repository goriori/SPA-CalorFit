<header class="header">
    <div class="container__bruger">
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
                    </li>
                    <li>
                        <a href="Singin.php" class="header__link login">Личный кабинет</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<style>
    /* burger */
    .header {
        height: 153px;
        margin-top: 0px;
    }

    .header__list {
        display: flex;
        padding: 0px;
    }

    .header__list li {
        list-style: none;
        margin: 30px 0px 0px 66px;
        text-align: left;
        z-index: 10;
    }

    .index {
        width: 40px;
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
        width: 230px;
    }

    .login {
        width: 200px;
    }

    .header__link {
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 25px;
        color: #FFFFFF;
        text-decoration: none;
    }

    .header__body {
        height: 30px;
        width: 40px;
        float: right;
        margin-right: 255px;
        margin-top: 40px;
    }


    .header__burger {
        display: block;
        position: relative;
        width: 40px;
        right: 0px;
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
        left: 220px;
        transition: 0.5s;
        z-index: 300;
    }

    .header__burger.active:before {
        transform: rotate(45deg);
        top: 7px;
        width: 20px;
        left: 242px;
        transition: 0.5s;
        z-index: 300;
    }

    .header__burger.active:after {
        transform: rotate(-45deg);
        bottom: 7px;
        width: 20px;
        transition: 0.5s;
        left: 242px;
        z-index: 300;
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
        margin-left: 60px;

    }

    .container__burger {
        float: right;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-right: 255px;
        margin-top: 40px;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    @media screen and (max-width:1498px) {
        .container__burger {
            margin-right: 30px;
        }

        .header__burger.active:before {
            transform: rotate(-45deg);
            top: 7px;
            left: -2px;
        }

        .header__burger.active:after {
            transform: rotate(45deg);
            bottom: 7px;
            left: -2px;
        }

        .header__burger.active span {
            left: 2px;
            background-color: white;
        }
    }

    @media screen and (max-width:1292px) {
        .header {
            margin-right: 30px;
        }

        .header__burger.active:before {
            transform: rotate(-45deg);
            top: 7px;
            left: -2px;
        }

        .header__burger.active:after {
            transform: rotate(45deg);
            bottom: 7px;
            left: -2px;
        }

        .header__burger.active span {
            left: 2px;
            background-color: white;
        }

    }

    /* Rates */
    @media screen and (max-width:1292px) {
        .header {
            float: right;
            margin-right: 40px;
            display: flex;
        }

        .header__list {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
            align-items: flex-start;
            flex-wrap: nowrap;
        }

        .header__list li {
            list-style: none;
            margin: 25px 0px 0px 66px;
            text-align: left;
            z-index: 132;
        }

        .index {
            width: 20px;
        }

        .header__link {
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
            position: absolute;
            width: 100%;
            height: 5px;
            left: 0;
            transition: all 0.3s ease 0s;
            border-radius: 5px;
        }

        .header__burger:before {
            content: '';
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
            left: 0px;
            transition: 0.5s;
            z-index: 20;
            background-color: white;
        }

        .header__burger.active:before {
            transform: rotate(-45deg);
            top: 7px;
            width: 20px;
            left: -2px;
            transition: 0.5s;
            z-index: 20;
            background-color: white;
        }

        .header__burger.active:after {
            transform: rotate(45deg);
            bottom: 7px;
            width: 20px;
            transition: 0.5s;
            left: -2px;
            z-index: 20;
            background-color: white;
        }

        .header__menu {
            position: absolute;
            top: -100%;
            right: 0;
            width: 315px;
            height: 452px;
            background-color: #231F1F;
            transition: all 0.5s ease 0s;
            z-index: 3;
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

    }

    @media screen and (max-width:880px) {
        .header__burger {
            margin-right: 0px;
        }

        .container__burger {
            margin-right: 0px;
        }
    }

    @media screen and (max-width:1498px) {
        .container__burger {
            margin-right: 30px;
        }

        .header__burger.active:before {
            transform: rotate(-45deg);
            top: 7px;
            left: -2px;
        }

        .header__burger.active:after {
            transform: rotate(45deg);
            bottom: 7px;
            left: -2px;
        }

        .header__burger.active span {
            left: 2px;
            background-color: white;
        }
        .header__body{
            margin-right:30px;
        }
    }

    @media screen and (max-width:1292px) {
        .header {
            margin-right: 30px;
        }

        .header__body{
            margin-right:10px;
        }

    }
</style>