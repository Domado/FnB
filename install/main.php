<?php
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnMB version:1.0.4
 * Author: HanFen
 **/
?>
<head>
    <meta charset="UTF-8">
    <title>FnB-安装向导</title>
    <link rel="stylesheet" href="../template/static/css/mdui.min.css">
    <script src="../template/static/js/mdui.min.js"></script>
</head>
<body>
        <div class="mdui-appbar">
          <div class="mdui-toolbar mdui-color-indigo-600">
            <a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">&#xe3e7;</i></a>
            <a href="javascript:;" class="mdui-typo-headline">FnB 1.0.4</a>
            <a href="javascript:;" class="mdui-typo-title">安装向导</a>
            <div class="mdui-toolbar-spacer"></div>
            <a href="install.php" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>
            <a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">&#xe927;</i></a>
          </div>
        </div>
    <?php
    if(file_exists("../FnKu/Conf/Config.php")) {
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
          <div class="mdui-card-primary-title">引导错误</div>
          <div class="mdui-card-primary-subtitle">Erro#001</div>
        </div>
        <div class="mdui-card-content">1.请删除配置文件../FnKu/Conf/Config.php 后才能安装！</div>
        <div class="mdui-card-actions">
          <a href="../"class="mdui-btn mdui-ripple mdui-float-right mdui-color-grey-200 border-comm">知 道 了 !</a>
        </div>
      </div>
    </div>
  </div>
    ');
    }
    ?>