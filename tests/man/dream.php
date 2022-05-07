<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="css/desired.css">
	<title>Dream</title>
  </head>
  <body>
    <div class="wrapper"> 
	    <div class="gran">
      <div class="text-content white-text">
        <h2>Сон</h2>
        <p class="text-section-one">
          Достаточное количество сна необходимо для того, чтобы похудеть
        </p>
        <p class="white-text text-section-two">Сколько вы обычно спите?</p>
      </div>
      <div class="buttons">
        <div class="left">
          <div class="butt">
            <router-link to="/test/water" active-class="active" tag="a"
              ><button class="active">
                <div class="image-clock"></div>
                <p>Меньше 5 часов</p>
              </button></router-link
            >
          </div>
          <div class="butt">
            <router-link to="/test/water" active-class="active" tag="a">
              <button class="active">
                <div class="image-clock"></div>
                <p>7-8 часов</p>
              </button></router-link
            >
          </div>
        </div>
        <div class="right">
          <div class="butt">
            <router-link to="/test/water" active-class="active" tag="a">
              <button class="active">
                <div class="image-clock"></div>
                <p>5-6 часов</p>
              </button></router-link
            >
          </div>
          <div class="butt">
            <router-link to="/test/water" active-class="active" tag="a">
              <button class="active">
                <div class="image-clock"></div>
                <p>Больше 8 часов</p>
              </button></router-link
            >
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
</body>
</html>