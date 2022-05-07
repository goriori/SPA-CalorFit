<!DOCTYPE html>
<html>
<script>
function myFunction() {
    var element = document.getElementById("answer_1");
   element.classList.toggle("mystyle");
}
function myFunction2() { 
  var element = document.getElementById("answer_2");
   element.classList.toggle("mystyle");
  }
  function myFunction3() { 
  var element = document.getElementById("answer_3");
   element.classList.toggle("mystyle");
  }
  function myFunction4() { 
  var element = document.getElementById("answer_4");
   element.classList.toggle("mystyle");
  }
  function myFunction5() { 
  var element = document.getElementById("answer_5");
   element.classList.toggle("mystyle");
  }
  function myFunction6() { 
  var element = document.getElementById("answer_6");
   element.classList.toggle("mystyle");
  }
  function myFunction7() { 
  var element = document.getElementById("answer_7");
   element.classList.toggle("mystyle");
  }
  function myFunction8() { 
  var element = document.getElementById("answer_8");
   element.classList.toggle("mystyle");
  }
</script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css%22%3E">
    <link rel="stylesheet" type="text/css" href="../../css/testM/Product.css">
    <title>Product</title>
  </head>
  <body>
  <div class="wrapper">
    <div class="gran">
      <div class="question">Продукты</div>
      <div class="target">
        Отметье продукты, которые Вы хотите включить в Ваш план питания
      </div>
      <div class="buttons">
          <div>
        <button onclick="myFunction()" id="answer_1">🥑Авокадо</button>
        <button onclick="myFunction2()" id="answer_2" >🥛Йогурт</button>
      </div>
        <div>
        <button onclick="myFunction3()" id="answer_3" >🍱Тофу</button>
        <button onclick="myFunction4()" id="answer_4" >🥜Арахисовое масло</button>
      </div>
      <div>
        <button onclick="myFunction5()" id="answer_5" >🥚Яйца</button>
        <button onclick="myFunction()" id="answer_6" class="answer_6">🍚Творог</button>
      </div>
      <div>
        <button onclick="myFunction()" id="answer_7" class="answer_7">​🥗​Оливки</button>
        <button onclick="myFunction()" id="answer_8" class="answer_8">🌰Орехи</button>
      </div>
      </div>
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