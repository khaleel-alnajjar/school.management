<?php
include  'head.php';
 ?>

  <body>
    <section class="main-container">E:\عرس علوية\مجلد جديد ‫‬
    if ($_SESSION['uid5']) {
      echo '<div class="wrapper-main">
        <h2>إضافة مدرس جديد</h2>

        <form class="signup-form"action="includes/teachsignup.php" method="POST">
        <input type="text" name="first" placeholder="First Name"><br>
        <input type="text" name="last" placeholder="Last Name"><br>
        <input type="text" name="uid" placeholder="Username"><br>
        <input type="text" name="email" placeholder="E-mail"><br>
        <input type="password" name="pwd" placeholder="password"><br>
        <input type="text" name="phn" placeholder="phone number"><br>
        <input type="text" name="class" placeholder="assigned class">
        <input type="text" name="section" placeholder="assigned section"><br>
        <button type="submit" name="submit">Register Now</button>
        </form>

      </div>
';
}else {
  echo "<h1>this page is not permitted to you</h1>";
}
?>

     </section>
