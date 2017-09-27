<?php
$mysqli=mysqli_connect("localhost","root","1234512345qwe","admins");
if(mysqli_connect_errno())
{
  printf("Connect is failed! here");
  exit;
}
else{
  $uadmin = addslashes($_POST['admin']);
  $sqlquery = mysqli_query($mysqli,"SELECT * FROM `admins` WHERE `admin_names`="."'$uadmin'");
  while($row=mysqli_fetch_array($sqlquery))
  {
    $dbusername=$row['admin_names'];
    $dbpassword=$row['admin_password'];
  }
if(is_null($dbusername))
{
  echo "用户名或密码错误！";
  echo "<a href='adminlog.php'>返回</a>";
  exit;
}
elseif($dbpassword==$_POST['password']&&$dbusername==$_POST['admin'])
  {
    setcookie("admin_name",$dbusername,time()+3600);
    setcookie("admin_password",$dbpassword,time()+3600);
  }
else
{
  echo "密码或用户名错误！";
  echo "<a href='adminlog.php'>返回</a>";
  exit;
}
}

?>
<!DOCTYPE hmtml>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" sizes="any" mask href="http://www.cqdulux.cn/img/favicon.ico">
  <title>
    多乐士焕新服务预约名单
  </title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
</head>
<body class="container">
  <div class ="col-md-1"></div>
  <div class="col-md-10">
    <div class="table-responsive">
      <table class ="table">
        <caption class="text-center">多乐士焕新服务预约表</caption>
        <thead>
      <tr>
        <th>id</th>
        <th>姓名</th>
        <th>电话</th>
        <th>地址</th>
        <th>通电时间</th>
        <th>焕新方式</th>
        <th>处理状态</th>
        <th>备注</th>
        <th>处理</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $mysqli=mysqli_connect("localhost","root","1234512345qwe","dulbx");
      mysqli_query($mysqli,"set names 'utf8'");
      if(mysqli_connect_errno())
      {
        printf("Connect is failed!");
        exit();
      }
      else {
        $sql="SELECT * FROM `dulux_users` ORDER BY `dulux_users`.`has_done` DESC";
        $res=mysqli_query($mysqli,$sql);
      }
      if(!$res)
      {
        echo"我们的数据库连接出现了问题！请尽快联系web工程师！";
        exit;
      }
      else{
        while($newArray=mysqli_fetch_array($res, MYSQLI_ASSOC))
        {
          $result[] =$newArray;
        }
      }
      ?>
      <?php
foreach($result as $Array){
?>
      <tr>
        <td><?php echo $Array['id'] ?></td>
        <td><?php echo $Array['user_name']?></td>
        <td><?php echo $Array['user_tel']?></td>
        <td><?php echo $Array['user_address']?></td>
        <td><?php echo $Array['user_datetime']?></td>
        <td><?php echo $Array['user_type']?></td>
        <td><?php echo $Array['has_done']?></td>
        <td><?php echo $Array['notes']?></td>
        <td><a href="mod.php?id=<?php echo $Array['id'] ?>">編輯</a></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
    </div>
  </div>
  <div class="col-md-1"></div>
  <?php  mysqli_free_result($res);
    mysqli_close($mysqli);?>
</body>
