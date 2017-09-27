<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
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
  <link rel="stylesheet" href="index.css" type="text/css">
  <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="container bg-info for_font">
  <img src="img/index_bg.png" class="img-responsive center-block imgs" alt="多乐士焕新服务">
  <form action="back.php" method ="POST" role="form">
    <div class="col-md-3">
    </div>
<div class="col-md-6">
  <div class="text-center text-muted"style="font-size:25px;"> 重庆多乐士焕新服务</div>
<div >
  <p>
    <label class="col-sm-3 control-label glyphicon glyphicon-user text-muted" >  姓名：</label>
    <input type="text" id="get_name" class="form-control"  name="user_name" style="width:200px;" pattern="[\u4e00-\u9fa5]{2,5}" placeholder="请输入真实姓名" required><br>
    <label class="col-sm-3 control-label glyphicon glyphicon-phone text-muted">  电话：</label>
    <input type="text" class="form-control" name="tel_num" style="width:300px;"placeholder="电话号码一共11位，座机需加上023区号"
    pattern ="[0-9]{11}" required><br>
  </p>
</div>
<div class="btn-group">
  <p>
    <label class="col-sm-6 control-label glyphicon glyphicon-th-list text-muted" for="inputSuccess"> 您的焕新服务选择（可多选）：</label><br><br>
    <div class="btn-group"data-toggle="buttons">
    <label class="control-label btn btn-info" for="inputSuccess"><input type="checkbox" name="work_types[]" value="墙面焕新" checked> 墙面焕新</label><br><br><br>
    <label class=" control-label btn btn-info" for="inputSuccess"> <input type="checkbox" name="work_types[]" value="厨房焕新">厨房焕新</label><br><br><br>
    <label class=" control-label btn btn-info" for="inputSuccess"> <input type ="checkbox" name="work_types[]" value="卫生间焕新">卫生间焕新 </label><br><br><br>
  </div>
  </p>
</div>
<div>
  <p>
  <label class=" control-label text-muted" > 请准确输入您的地址：</label><br><br>
    <select name="address" class="form-control"  "text-muted">
      <option value="南岸区">南岸区</option>
      <option value="江北区">江北区</option>
      <option value="渝北区">渝北区</option>
      <option value="巴南区">巴南区</option>
      <option value="九龙坡区">九龙坡区</option>
      <option value="沙坪坝区">沙坪坝区</option>
      <option value="北碚区">北碚区</option>
      <option value="大渡口区">大渡口区</option>
      <option value="渝中区">渝中区</option>
    </select>
  </p>
</div>
<div>
    <label class=" control-label glyphicon glyphicon-home text-muted" for="inputSuccess"> 具体地址(请具体到门牌号)：</label><br>
    <p>
    <textarea class="form-control" name="specific_address"  required></textarea>
  </p>
  <p>
    <label class=" control-label glyphicon glyphicon-calendar text-muted"  for="exampleInputName2"> 我们将在预约完成后与您进行电话沟通以了解更多情况，请您确定一个联系时间：</label><br>
    <input type="datetime-local" class="form-control" name="phone_date" required><br>
    <label class="control-label text-muted glyphicon glyphicon-barcode">验证码:</label>
   <img id="captcha_img" border='1' src='./captcha.php?r=echo rand(); ?>' style="width:100px; height:30px" />
      <a href="javascript:void(0)" onclick="document.getElementById('captcha_img').src='./captcha.php?r='+Math.random()">换一个?</a>
      <input type="text" name='authcode' class= value='' required/></p>
  </p>
<div class="col-md-3"></div>
<div class="col-md-3">
<input type="submit" value ="准备开始你的焕新之旅！" class="btn btn-primary btn-lg">
</div>
<br>
<br>
<br>
<div class="footer text-center" style="font-size:8px;">
  <hr style="height:10px;border:none;border-top:8px groove skyblue;">
  <div class="text-center"style="font-size:13px;">联系我们:18696539603&nbsp;&nbsp; 023-67717072</div>
  <img src="img/footer.png" class="img-responsive center-block imgs" alt="多乐士焕新服务">
  Powered by <a href="http://php.net/">PHP Technologies</a> |
  <a href="/OnlineJudge/page/contributors">Contributors</a>
  <br>
  Copyright &copy; 2016-2017 <a href=https://www.dulux.com.cn/zh>Akzonobel</a>.
  All rights reserved.
  <br>
</div>
</div>
</div>
</form>
</body>
</html>
