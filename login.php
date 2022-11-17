<!DOCTYPE html>
<html lang="en">

<?php
require "functions.php";
get_head();
echo ("<body>");
//get_header("home");
?>
<section class="showcase">
  <header>
    <a href="#" class="logo">
      <img src="./img/Islam-ic Artdef.png">
    </a>
    <div class="toggle"></div>
  </header>
  <div class="content">
    <div class="data">
      <form action="register.php" method="post">
        <h1>Login</h1>
        <input type="text" name="user" placeholder="Usuario o correo">
        <input type="password" name="pwd" placeholder="Contraseña">
        <button type="submit">Continuar</button>
      </form>
    </div>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="./img/IMG-0110.jpg">
      </div>
      <div class="mySlides fade">
        <img src="./img/IMG-0236.jpg">
      </div>

      <div class="mySlides fade">
        <img src="./img/IMG-0869.jpg">
      </div>

      <div class="mySlides fade">
        <img src="./img/IMG-1476.jpg">
      </div>

      <div class="mySlides fade">
        <img src="./img/IMG-1479.jpg">
      </div>

      <div class="mySlides fade">
        <img src="./img/IMG-9933.jpg">
      </div>
    </div>
  </div>
  <ul class="social">
    <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
    <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
    <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
  </ul>
</section>
<div class="menu">
  <ul>
    <li>
      <a href="http://localhost/index.php">Home</a>
    </li>
    <li>
      <div class="dropdown">
      <a href="#" class="dropbtn">Obras</a>
      <div class="dropdown-content">
        <a href="#">Fotografía</a>
        <a href="#">Streetwear</a>
        <a href="#">Pintura</a>
        <a href="#">Resto</a>
      </div>
    </div>
    </li>
    <li><a href="#">Tu arte</a></li>
    <li><a href="http://localhost/register.php">Registro</a></li>
    <li><a href="#">Contacto</a></li>
  </ul>
</div>
<?php
// $usuari = $_POST['user'];
// $email = $_POST['email'];
// $pwd = $_POST['pwd'];
?>
</body>
<script src="./main.js"></script>

</html>