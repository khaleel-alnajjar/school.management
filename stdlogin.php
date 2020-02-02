<?php
include 'head.php';
 ?>
 <title>تسجيل دخول الطلاب وأولياء الأمور</title>
 <form class="down"action="includes/stdlogin.php" method="POST">
   <div class="login-box">
     <h1>دخول</h1>
     <div class="textbox">
        <i class="fa fa-user"></i>
        <input type="text" name="suid" placeholder="اسم المستخدم / الإيميل">
     </div>
     <div class="textbox">
       <i class="fa fa-lock"></i>
       <input type="password" name="spwd" placeholder="كلمة السر">
     </div>
     <button type="submit" name="submit" class="loggg">الدخول  <i class="fas fa-sign-in-alt"></i></button>
      <p> <a href="stdsign.php">أنشأ حساب جديد من هنا.</a> </p>
   </div>

 </form>


