<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="css/habit.css">
	<title>Dream</title>
  </head>
  <body>
   <div class="wrapper">
    <HeaderMain />
    <div class="test">
      <div class="target">Привычки</div>
      <div class="question">
        Выберите привычки, которые соотвествуют Вашему образу жизни
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
        <router-link to="/test/fitness" tag="a" active-class="active"><button id="continue" class="continue">Продолжить</button></router-link>
      </div>
      <div class="ellipse">
        <div class="elliplse_1"></div>
        <div class="elliplse_1"></div>
        <div class="elliplse_1"></div>
        <div class="elliplse_1"></div>
        <div class="elliplse_1"></div>
        <div class="elliplse_1"></div>
        <div class="elliplse_1"></div>
        <div class="elliplse_1"></div>
        <div class="elliplse_1"></div>
        <div class="elliplse_0"></div>
        <div class="elliplse_0"></div>
        <div class="elliplse_0"></div>
        <div class="elliplse_0"></div>
        <div class="elliplse_0"></div>
        <div class="elliplse_0"></div>
        <div class="elliplse_0"></div>
        <div class="elliplse_0"></div>
        <div class="elliplse_0"></div>
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
</body>
</html>