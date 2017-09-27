<?php
header("Content-Type:text/html;charset=utf-8");      //设置头部信息
if(isset($_REQUEST['authcode']))
{
  session_start();
  //strtolower()小写函数
  if(strtolower($_REQUEST['authcode'])== $_SESSION['authcode'])
  {
    echo "验证码错误！";
    exit;
  }
  else{
  $mysqli=mysqli_connect("localhost","root","root","dulbx");
  if(mysqli_connect_errno())
  {
    printf("Connect is failed!");
    exit;
  }
  else
  {
    mysqli_query($mysqli,"set names 'utf8'");
    $all_types="";
    $all_address="";
    $all_address .= $_POST['address'];
    $all_address .= $_POST['specific_address'];
    foreach ($_POST['work_types'] as $value) {
      $all_types .= " ";
      $all_types .= $value;
    }
    $clean_user_name=$_POST['user_name'];
    $clean_user_tel=$_POST['tel_num'];
    $clean_phone_date=$_POST['phone_date'];
    $has_done="未处理";
    $notes="无";
    $sql="INSERT INTO dulux_users(id, user_name, notes, user_address, user_datetime, user_tel, user_type, has_done) VALUES (NULL, '$clean_user_name', '$notes', '$all_address', '$clean_phone_date', '$clean_user_tel', '$all_types', '$has_done')";
    $res=mysqli_query($mysqli,$sql);
  }
  mysqli_close($mysqli);
}
}
else
{
  echo "未输入验证码！";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>预约成功！</title>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
    <link rel="icon" sizes="any" mask href="http://www.cqdulux.cn/img/favicon.ico">
    <link rel="stylesheet" href="index.css" type="text/css">
  </head>
<body class ="container bg-info">
  <img src="img/index_bg.png" class="img-responsive center-block imgs" alt="多乐士焕新服务">
  <div class="col-md-3"></div>
  <div class="col-md-8">
  <div style="font-size:25px;">尊敬的<?php echo $_POST['user_name'] ?>先生/女士：</div>
  <label style="font-size:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($res === TRUE){echo "您已经成功预约！您的基本信息如下：";}else{echo"请勿重复载入此界面！";} ?></h3><br>
<div>
  <table class="table text-center table-condensed" style="font-size:15px;">
    <tbody>
      <tr>
        <td>服务类型</td><td><?php echo $all_types ?></td>
      </tr>
      <tr>
        <td>地址</td>
        <td><?php echo $all_address ?></td>
      </tr>
      <tr>
        <td>联系电话</td>
        <td><?php echo $clean_user_tel ?>
      </tr>
      <tr>
        <td>通话时间</td>
      <td><?php echo $clean_phone_date ?><td>
      </tr>
    </tbody>
  </table>
</div>
  <br>
  <div style="font-size:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;多乐士专业基检师将在预定时间1小时左右与您联系,届时请保证通话畅通！<br></div>
  <br>
  <div class="footer text-center" style="font-size:5px;">
  	<hr style="height:10px;border:none;border-top:8px groove skyblue;">
    <div class="text-center" style="font-size:13px;">联系我们:18696539603&nbsp;&nbsp; 023-67717072</div>
    <img src="img/footer.png" class="img-responsive center-block imgs" alt="多乐士焕新服务">
	  Powered by <a href="http://php.net/">PHP Technologies</a> |
  	<a href="/OnlineJudge/page/contributors">Contributors</a>
  	<br>
  	Copyright &copy; 2016-2017 <a href=https://www.dulux.com.cn/zh>Akzonobel</a>.
  	All rights reserved.
  	<br>
</div>
</div>
</body>
</html>
