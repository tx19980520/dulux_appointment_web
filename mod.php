<?php
$mysqli=mysqli_connect("localhost","root","root","dulbx");
mysqli_query($mysqli,"set names 'utf8'");
if(mysqli_connect_errno())
{
  printf("Connect is failed!");
  exit();
}
else{
  $search= $_GET['id'];
  $sql="SELECT * FROM `dulux_users` WHERE `id` = $search";
  $res=mysqli_query($mysqli,$sql);
  if($res)
  {
    $tmpArray=mysqli_fetch_array($res, MYSQLI_ASSOC);
  }
  else{
    echo "数据库有炸了hhh";
  }
}
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    多乐士焕新服务预约
  </title>
  <!-- Bootstrap -->
  <link rel="icon" sizes="any" mask href="http://www.cqdulux.cn/img/favicon.ico">
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
</head>
<body class="container">
  <form action="modback.php" method ="POST" role="form">
    <div class="col-md-3">
    </div>
<div class="col-md-6">
  <h1 class="text-center text-muted"> 重庆多乐士焕新服务预约修改</h1>
<div >
  <p>
    <label class="col-sm-3 control-label glyphicon glyphicon-lock text-muted" >  ID：</label>
    <input type="text" class="form-control" name="new_id" style="width:300px;" value=<?php echo $tmpArray['id']?> required disabled="true"><br>
    <label class="col-sm-3 control-label glyphicon glyphicon-user text-muted" >  姓名：</label>
    <input type="text" id="get_name" class="form-control"  name="new_user_name" style="width:200px;" pattern="[\u4e00-\u9fa5]{2,5}"placeholder="请输入真实姓名" value=<?php echo $tmpArray['user_name']?>  required><br>
    <label class="col-sm-3 control-label glyphicon glyphicon-phone text-muted">  电话：</label>
    <input type="text" class="form-control" name="new_tel_num" style="width:300px;"placeholder="电话号码一共11位，座机需加上023区号"
    pattern ="[0-9]{11}"  value=<?php echo $tmpArray['user_tel']?> required><br>
  </p>
</div>
<div>
  <p>
    <label class="col-sm-6 control-label glyphicon glyphicon-th-list text-muted" for="inputSuccess"> 您的焕新服务选择（可多选）：</label><br><br>
    <input type="text" name ="new_type" value =<?php echo $tmpArray['user_type']?> required>
  </p>
</div>
<div>
  <p>
  <label class=" control-label text-muted" > 用户地址：</label><br><br>
  <input type="text" name ="new_address" value =<?php echo $tmpArray['user_address']?> required>
  </p>
</div>
  <p class=“text-muted”>
    <label class=" control-label glyphicon glyphicon-calendar text-muted"  for="exampleInputName2"> 电话联系时间：</label><br>
    <?php echo "原定时间：".$tmpArray['user_datetime']; ?><br>
    <input type="datetime-local" class="form-control" name="new_phone_date" value=<?php echo $tmpArray['user_datetime']?> required><br>
  </p>
  <p>
    <label class=" control-label glyphicon glyphicon-ok text-muted"  for="exampleInputName2"> 处理状态：</label><br>
    <input type="text" class="form-control" name="new_has_done" value=<?php echo $tmpArray['has_done']?> required><br>
  </p>
  <p>
    <label class=" control-label glyphicon glyphicon-tag text-muted"  for="exampleInputName2"> 备注：</label><br>
    <input type="text" class="form-control" name="new_notes" value=<?php echo $tmpArray['notes']?> required><br>
  </p>
  <div class ="col-md-4"></div>
  <div class="col-md-3">
  <input type="submit" value ="提交修改" class="btn btn-primary btn-lg ">
  </div>
</div>
<div class="col-md-3"></div>
<br>
<br>
<br>
</html>
