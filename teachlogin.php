<?php
include  'head.php';
 ?>
    <title>حساب المدرس</title>

  <body>

<section class="body">
  <form action="includes/teachlogin.php" method="POST">

<div class="login-box">
<h1>دخول</h1><br>
  <div class="textbox">
    <i class="fa fa-user"></i>
    <input type="text" name="uid" placeholder="اسم المستخدم / الإيميل">
  </div>
  <div class="textbox">
    <i class="fa fa-lock"></i>
    <input type="password" name="pwd" placeholder="كلمة السر">
  </div>

  <button type="submit"class="btn" name="submit">دخول  <i class="fas fa-sign-in-alt fa-1.2g"></i></button>

      </div>
</form>
</section>

  </body>

