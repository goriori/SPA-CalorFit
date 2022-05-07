<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css%22%3E">
    <link rel="stylesheet" type="text/css" href="../../css/testM/Phisicparam.css">
    <title>PhisicParam</title>
  </head>
  <body>
  <div class="wrapper">
    <HeaderMain/>
    <div class="gran">
      <div class="text-content white-text">
        <h2>Физические параметры</h2>
        <p class="last-text">
          Отлично! А как насчет Вашего текущего <br> роста и веса?
        </p>
      </div>

      <div class="select-param">
        <input
          type="number"
          placeholder="Рост(см)"
          name="height"
          v-model.trim="heigth"
        />
      </div>
      <transition name="slide-fade">
        <p class="error red-text" v-if="!$v.heigth.between">
          Данные параметры являются недопустимыми
        </p>
      </transition>
      <transition name="slide-fade">
        <p class="error red-text" v-if="!$v.heigth.required">
          Данное поле является обязательным
        </p>
      </transition>
      <div class="select-param">
        <input
          type="number"
          placeholder="Текущий вес(кг)"
          name="mass"
          v-model.trim="mass"
        />
      </div>
      <transition name="slide-fade">
        <p class="error red-text" v-if="!$v.mass.between">
          Данные параметры являются недопустимыми
        </p>
      </transition>
      <transition name="slide-fade">
        <p class="error red-text" v-if="!$v.mass.required">
          Данное поле является обязательным
        </p>
      </transition>
    <input type="submit" value="Продолжить" class="white-text" >
      <div class="sliders">
        <div class="one"></div>
        <div class="one"></div>
        <div class="one"></div>
        <div class="two"></div>
        <div class="two"></div>
        <div class="two"></div>
        <div class="two"></div>
      </div>
    <footer>
    <div class="about">
      Продолжая, вы соглашаетесь с <a href="#">Условиями использования</a>,
      <a href="#"
        >Политикой<br />
        конфиденциальности</a
      >, <a href="#">Условиями подписки</a><br />
      <a href="#">Отписаться от услуги</a><br />
      Поддержка: admin@meallforme.ru<br />
      2021 © All Rights Reserved.
    </div>
  </footer>
  </div>
</body>
</html>