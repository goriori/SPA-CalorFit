<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/age.css">
	<title>Age</title>
  </head>
  <body>
	 <div class="wrapper">
    <div class="gran">
      <div class="text-content white-text">
        <h2>Возраст</h2>
        <p class="white-text text-section-two">
          Сколько Вам лет?
        </p>
      </div>
      <div class="buttons">
        <div class="active">
        <router-link to="/test/bodytype" active-class="active" tag="a"> <button>18-29</button></router-link> 
        </div>
        <div>
          <router-link to="/test/bodytype" active-class="active" tag="a"> <button>30-29</button></router-link> 
        </div>
        <div>
           <router-link to="/test/bodytype" active-class="active" tag="a"><button>40-49</button></router-link> 
        </div>
        <div>
          <router-link to="/test/bodytype" active-class="active" tag="a"> <button>50+</button></router-link> 
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
</body>
</html>