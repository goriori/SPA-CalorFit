<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css%22%3E">
    <link rel="stylesheet" type="text/css" href="../../css/testM/Water.css">
    <title>Water</title>
  </head>
<div class="wrapper">
    <HeaderMain />
    <div class="gran">
      <div class="text-content">
        <h2>Потребление воды</h2>
        <p class="silver">
          Поддержание водного баланса поможет Вам быстрее достичь результатов.
        </p>
        <p class="last-text">Хорошо, какой Ваш идеальный вес?</p>
      </div>
      <div class="changeWeight">
        <div id="pound" class="pound"></div>
        <div id="kg" class="kg"></div>
        <div class="changeWeight_text">
          <font class="pound_text">В унциях</font>
          <font class="kg_text">В литрах</font>
        </div>
      </div>
      <div class="buttons">
        <div class="left">
          <div>
           <router-link to="/test/motivation" tag="a"> <button class="active">
              <p>☕Только кофе или чай</p>
            </button></router-link>
          </div>
          <div>
            <router-link to="/test/motivation" tag="a"> <button class="active">
              <p class="Stack">💧2-5 стаканов(0,5-1,5)</p>
            </button></router-link>
          </div>
        </div>
        <div class="right">
          <div>
           <router-link to="/test/motivation" tag="a">  <button class="active">
              <p>💧Меньше 2 стаканов(0,5л)</p>
            </button></router-link>
          </div>
          <div>
           <router-link to="/test/motivation" tag="a">  <button class="active">
              <p class="Stack">💧Больше 6 стаканов</p>
            </button></router-link>
          </div>
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