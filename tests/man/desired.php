<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="css/desired.css">
	<title>Desured</title>
  </head>
  <body>
	    <div class="wrapper">
    <HeaderMain />
    <div class="test">
      <h1 class="target">Желаемый вес</h1>
      <h1 class="question">Хорошо, какой Ваш идеальный вес?</h1>
      <div class="response">
        <div class="changeWeight">
          <div id="pound" class="pound"></div>
          <div id="kg" class="kg"></div>
          <div class="changeWeight_text">
            <font class="pound_text">В фунтах</font>
            <font class="kg_text">В килограммах</font>
          </div>
        </div>
        <div class="quantity">
          <input
            type="text"
            class="quantity_text"
            v-model.trim="mass"
            @change="setAge($event.target.value)"
          />
          <h1 id="quantity">КГ</h1>
        </div>
        <transition name="slide-fade">
          <p class="error red-text" v-if="!$v.mass.between">
            Недопустимые значения веса
          </p>
        </transition>
        <router-link to="/test/phisicparam" active-class="active" tag="a">
          <button
            class="continue"
            :disabled="!$v.mass.between || !$v.mass.required"
          >
            Продолжить
          </button></router-link
        >
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