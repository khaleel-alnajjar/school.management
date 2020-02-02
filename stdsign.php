<?php
include "head.php";
include "includes/dbcon.php";
 ?>
 <title>تسجيل الطلاب وأولياء الأمور</title>
<form class="signup-form" action="includes/stdsign.php" method="POST">
  <input type="text" name="fname" placeholder="الإسم الأول">
  <input type="text" name="sname" placeholder="الإسم الثاني">
  <input type="text" name="phn" placeholder="رقم ولي الأمر">
  <input type="text" name="uid" placeholder="اسم المستخدم"><br>
  <label for='grade' style='font-family:cursive;'>الصف ؟</label><br>
  <select id='grade' name='class'><?php

for($i=1;$i<=12;$i++){
echo '<option style="font-family:Cursive;">'.$i.''.' '.'الصف </option>';
}
   ?></select>
   <br><br><br><label for='section' style='font-family:cursive;'>الشعبة ؟ </label><br>
     <select id='section' name='sec'>
       <option>1</option>
       <option>2</option>
       <option>3</option>
       <option>4</option>
       <option>5</option>
     </select>
  <br><br>

  <input type="text" name="email" placeholder="البريد الإلكتروني لولي الأمر">
    <br><br><br><label for='teacher' style='font-family:cursive;'>مدرس الصف ؟</label><br>
  <select id='teacher' name='cl_teacher'>
<?php
$sql = "SELECT * FROM `teachers.detail` WHERE 'assigned.class' <> 0";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
  echo "<option value='".$row['email']."'>".$row['firstname'].' '.$row['lastname'].' Sir</option>';
}

?>
  </select>
  <br>
  <input type="password" name="pwd" placeholder="الرقم السري">
  <button type="submit" name="submit" class=".btn">تسجيل</button>
</form>
 <?php
echo "<br><br>";
  ?>
