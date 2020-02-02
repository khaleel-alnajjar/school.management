<?php
include 'fonts.php';
include 'head.php';

  ?>

    <title>School System</title>

  <body>

<?php
if (isset($_SESSION['uid']) || isset($_SESSION['uid5'])) {
    include 'inside/ever.php';
    include 'inside/home.php';
}elseif (isset($_SESSION['id'])) {
  include 'inside/studentever.php';
  include 'inside/home.php';
}else {
  echo '  <img class="" src=""/>
<h1 class="typewriter">أهلا وسهلا بكم في صفحة المدرسة  </h1>
<form class="form" action="selection.php" method="post">
  <div style="text-align: center;"><button id="continue_btn" style="position:absolute;
  left:39%;height:40px;width:20%;font-size:25px;" type="submit" name="submit"> الدخول <i class="fas fa-angle-double-right fa-1g"></i></button>
</div></form>';
}
 ?>
 <!-- Latest compiled and minified CSS -->

