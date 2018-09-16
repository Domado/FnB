<?php
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnB version:1.0.4
 * Author: HanFen
 **/
 $stime = microtime(true);
 
 include('main.php');
 
 ?>
 
<div class="mdui-progress">
  <div class="mdui-progress-determinate" style="width: 80%;"></div>
</div>
        <br/>
        <br/>
<style>
.border-comm{
    border-radius:12px;
}
</style>
    <div class="mdui-container">
    <div class="mdui-row">
      <div class="mdui-card border-comm">
        <div class="mdui-card-primary">
          <div class="mdui-card-primary-title">安装数据库</div>
          <div class="mdui-card-primary-subtitle">Install database</div>
        </div>
        <script src="template/static/js/mdui.min.js"></script>
        <div class="mdui-card-content">
    <p>
<?php
/*定义数组1*/
$install = array();
/*把相关信息保存在数组里*/
$install['go_back'] = "<a href='./step-3.php'>返回</a>";
$install['DBName'] = @$_POST['DBName'];//数据库名
$install['Host'] = @$_POST['Host'];//主机地址
$install['DBUser'] = @$_POST['DBUser'];//数据库用户名
$install['DBPwd'] = @$_POST['DBPwd'];//数据库密码
$install['AUser'] = @$_POST['AUser'];//管理员用户名
$install['APwd'] = @$_POST['APwd'];//管理员密码
$install['APwd2'] = @$_POST['APwd2'];//管理员密码确认
$install['AEmail']  = @$_POST['AEmail'];//管理员邮箱
$install['Site_name']  = @$_POST['Site_name'];//管理员邮箱

/*参数预处理*/
if(!$install['DBName'] || !$install['Host'] || !$install['DBUser']){
    die("<b><font color='red'>请填写数据库信息。</font></b>".$install['go_back']);
}
if(!$install['AUser'] || !$install['APwd'] || !$install['APwd2'] || !$install['AEmail']){
    die("<b><font color='red'>请填写管理员信息。</font></b>".$install['go_back']);
}
if(!$install['Site_name']){
    $install['Site_name'] = "萌萌哒FnB";
}
if($install['admin_pawd'] != $install['APwd2']){
    die("<b><font color='red'>管理员密码和确认密码不一致。</font></b>".$install['go_back']);
}
if(strlen($install['APwd'])<6){
    die("<b><font color='red'>管理员密码应大于等于6位。</font></b>".$install['go_back']);
}
$Fn_DBConn = new mysqli($install['Host'],$install['DBUser'],$install['APwd'],$install['DBName']);
if ($$Fn_DBConn->connect_error) {
    die("Connection failed: " . $con->connect_error.$install['go_back']);
}
/*读取SQL文件*/
$sql = explode(';',file_get_contents("install.sql"));
/*执行SQL语句*/
foreach ($sql as $value) {
   $Fn_DBConn->query($value . ';');
}



?>

    </p>
        </div>
        <div class="mdui-card-actions">
        <center>
            <input name="log" type="submit" class="mdui-btn mdui-ripple mdui-color-grey-200 border-comm" value="下一步"/>&nbsp;<a href="step-2.php"class="mdui-btn mdui-ripple mdui-color-indigo-a200 border-comm" id="btn">上一步</a></center>
        </center>
          <br/>
        </div>
      </div>
    </div>
  </div>
  <br/>
  <br/>
</form>
</body>
</html>