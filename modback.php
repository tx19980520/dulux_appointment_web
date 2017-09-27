<?php
session_start();
$mysqli=mysqli_connect("localhost","root","1234512345qwe$","dulbx");
mysqli_query($mysqli,"set names 'utf8'");
if(mysqli_connect_errno())
{
  printf("Connect is failed!");
  exit;
}
else {
  $tmp_id = $_POST['new_id'];
  $id=$_POST['new_id'];
  $all_types=$_POST['new_type'];
  $all_address=$_POST['new_address'];
  $clean_user_name=mysqli_real_escape_string($mysqli,$_POST['new_user_name']);
  $clean_user_tel=mysqli_real_escape_string($mysqli,$_POST['new_tel_num']);
  $clean_phone_date=mysqli_real_escape_string($mysqli,$_POST['new_phone_date']);
  $has_done=$_POST['new_has_done'];
  $notes=$_POST['new_notes'];
  $sql="UPDATE dulux_users SET id='$id',user_name='$clean_user_name',user_tel='$clean_user_tel',user_address='$all_address',user_datetime='$clean_phone_date',user_type='$all_types',has_done='$has_done',notes='$notes' WHERE id='$tmp_id'";
  $res=mysqli_query($mysqli,$sql);
}
mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    修改成功！
  </title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
    <link rel="icon" sizes="any" mask href="http://www.cqdulux.cn/img/favicon.ico">
</head>
<body class ="container">
  <br>
  <br>
  <br>
  <br>
  <div class="text-center">
    <h2>修改成功</h2><br>
    <a href="http://106.15.225.249/adminlog.php">返回</a>
  </div>
</body>
</html>
