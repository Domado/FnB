<?php
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnMB version:1.0.4
 * Author: HanFen
 **/
include("FnKu/include/input.php");
include("FnKu/include/connect.php");
 ?>
<head>
    <meta charset="UTF-8">
        <title>FnB - Error喵?!</title>
    <link rel="stylesheet" href="template/static/css/mdui.min.css">
    <script src="template/static/js/mdui.min.js"></script>
</head>
<body>
        <div class="mdui-appbar">
          <div class="mdui-toolbar mdui-color-indigo-600">
            <a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">&#xe3e7;</i></a>
            <a href="javascript:;" class="mdui-typo-headline">FnB 1.0.4</a>
            <a href="javascript:;" class="mdui-typo-title"></a>
            <div class="mdui-toolbar-spacer"></div>
            <a href="index.php" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>
          </div>
        </div>
<?php
if(isset($_POST['Message'])&&!empty(trim($_POST['Message']))) {
    $Message = $_POST['Message']; 
}else{
    $notice = "数据不足！";
    header("HTTP/1.1 521 Not Acceptable");
    die('
    <style>
        .border-comm{
        border-radius:12px;
        }
    </style>
    <div class="mdui-progress">
      <div class="mdui-progress-indeterminate"></div>
    </div>
    <br/>
    <br/>
    <div class="mdui-container">
    <div class="mdui-row">
      <div class="mdui-card border-comm">
        <div class="mdui-card-primary">
          <div class="mdui-card-primary-title">错误</div>
          <div class="mdui-card-primary-subtitle">Eeeor!</div>
        </div>
        <div class="mdui-card-content">1.留言内容数据不正确！</div>
        <div class="mdui-card-actions">
          <a href="index.php"class="mdui-btn mdui-ripple mdui-float-right mdui-color-grey-200 border-comm">知 道 了 !</a>
        </div>
      </div>
    </div>
  </div>
    ');
} 

if(isset($_POST['User'])&&!empty(trim($_POST['User']))) {
    $User = $_POST['User']; 
}else{
    $notice = "数据不足！";
    header("HTTP/1.1 521 Not Acceptable");
    die('
    <style>
        .border-comm{
        border-radius:12px;
        }
    </style>
    <div class="mdui-progress">
      <div class="mdui-progress-indeterminate"></div>
    </div>
    <br/>
    <br/>
    <div class="mdui-container">
    <div class="mdui-row">
      <div class="mdui-card border-comm">
        <div class="mdui-card-primary">
          <div class="mdui-card-primary-title">错误</div>
          <div class="mdui-card-primary-subtitle">Eeeor!</div>
        </div>
        <div class="mdui-card-content">1.用户名数据不正确！</div>
        <div class="mdui-card-actions">
          <a href="index.php"class="mdui-btn mdui-ripple mdui-float-right mdui-color-grey-200 border-comm">知 道 了 !</a>
        </div>
      </div>
    </div>
  </div>
    ');
} 

if(isset($_POST['QQ'])&&!empty(trim($_POST['QQ']))) {
    $QQ = $_POST['QQ']; 
}else{
    $notice = "数据不足！";
    header("HTTP/1.1 521 Not Acceptable");
    die('
    <style>
        .border-comm{
        border-radius:12px;
        }
    </style>
    <div class="mdui-progress">
      <div class="mdui-progress-indeterminate"></div>
    </div>
    <br/>
    <br/>
    <div class="mdui-container">
    <div class="mdui-row">
      <div class="mdui-card border-comm">
        <div class="mdui-card-primary">
          <div class="mdui-card-primary-title">错误</div>
          <div class="mdui-card-primary-subtitle">Eeeor!</div>
        </div>
        <div class="mdui-card-content">1.QQ数据不正确！</div>
        <div class="mdui-card-actions">
          <a href="index.php"class="mdui-btn mdui-ripple mdui-float-right mdui-color-grey-200 border-comm">知 道 了 !</a>
        </div>
      </div>
    </div>
  </div>
    ');
} 

$input = new input();

    $is = $input->post( $Message );
#    if( $is == false ){
#        $notice = "留言内容数据不正确！";
#        die("留言内容数据不正确！");
#    }
    $is = $input->post( $User );
#    if( $is == false ){
#        $notice = "用户名数据不正确！";
#        die("用户名数据不正确！");
#    }
    $is = $input->post( $QQ );
#    if( $is == false ){
#        $notice = "QQ数据不正确！";
#        die("QQ数据不正确！");
#    }

$time = time();
$sql = "INSERT INTO FnB_Msg (Message,User,QQ,Intime) values ('{$Message}','{$User}','{$QQ}','{$time}')";
$is = $Fn_DBConn->query($sql);

header("location:index.php");
