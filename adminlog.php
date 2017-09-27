<html>
<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>

  </title>
  <link rel="icon" sizes="any" mask href="http://www.cqdulux.cn/img/favicon.ico">
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
</head>
<body class = "container">
  <form action="admin.php" method ="POST" role="form">
  <div class = "col-md-3">
  </div>
  <div class ="col-md-6">
    <br><br><br><br><br>
  <h3 class ="text-muted text-center">多乐士管理员登陆界面</h3><br><br><br>
  <label class = 'col-sm-2 control-label' for="inputSucess"> 用户名：</label>
  <input type = "text" class="form-control" name = "admin" style = "width:400px;"placeholder = "区分大小写"
  <?php
  if(!empty($_COOKIE['admin_name']))
  {
    echo 'value='.$_COOKIE['admin_name'];
  }?> required><br>
  <label class = 'col-sm-2 control-label' > 密码：</label>
  <input type = "text" class="form-control help" name = "password" style = "width:400px;"placeholder = "含有数字英文，区分大小写"
  <?php
  if(!empty($_COOKIE['admin_password']))
  {
    echo 'value='.$_COOKIE['admin_password'];
  }?> required><br><br>
<div class = "col-md-5"></div>
  <input type = "submit" value = "登陆" class="btn btn-primary btn-lg">
  </div>
</form>
</body>
</html>
