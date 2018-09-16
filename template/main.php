<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width">
        <title>萌萌哒留言板</title>
        <link rel="stylesheet" href="template/static/css/mdui.min.css">
        <script src="template/static/js/mdui.min.js"></script>
    </head>
    <body class="mdui-drawer-body-left mdui-appbar-with-toolbar  mdui-theme-primary-indigo mdui-theme-accent-pink">
   <!--工具栏-->
    <header class="mdui-appbar mdui-appbar-fixed">
      <div class="mdui-toolbar mdui-color-theme">
        <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#main-drawer', swipe: true}"><i class="mdui-icon material-icons">menu</i></span>
        <a href="" class="mdui-typo-title">FnB 1.0.4</a>
        <a href="" class="mdui-typo-title"></a>
        <div class="mdui-toolbar-spacer"></div>
        <a href="index.php" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>
        <a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">more_vert</i></a>
      </div>
    </header>
    
    <div class="mdui-drawer mdui-color-grey-50" id="main-drawer">
      <div class="mdui-list" mdui-collapse="{accordion: true}" style="margin-bottom: 76px;">
        <div class="mdui-collapse-item mdui-collapse-item-open">
          <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-blue">near_me</i>
            <div class="mdui-list-item-content">GO GO!</div>
            <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
          </div>
          <div class="mdui-collapse-item-body mdui-list">
    	  
            <a href="index.php">
              <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">&#xe88a;</i>
                <div class="mdui-list-item-content">首  页</div>
              </li>
            </a>
            
            <a href="ClassSchedule.php">
                <li class="mdui-list-item mdui-ripple">
                    <i class="mdui-list-item-icon mdui-icon material-icons">&#xe8b0;</i>
                    <div class="mdui-list-item-content">课程表</div>
              </li>
            </a>
            
            <a href="ClassSchedule.php">
                <li class="mdui-list-item mdui-ripple">
                    <i class="mdui-list-item-icon mdui-icon material-icons">&#xe86d;</i>
                    <div class="mdui-list-item-content">同学录</div>
              </li>
            </a>
    		
    		<a>
    		  <li class="mdui-list-item mdui-ripple" mdui-dialog="{target:'#about_FnMB'}">
				<i class="mdui-list-item-icon mdui-icon material-icons">info_outline</i>
				<div class="mdui-list-item-content">关  于</div>
			  </li>
			</a>
			
          </div>
        </div>
      </div>
    </div>
    
          <div class="mdui-dialog" id="about_FnMB">
            <div class="mdui-dialog-title">关于 FnB </div>
            <div class="mdui-dialog-content">
            <blockquote>
				<p>FnB 1.0.4 (Bate 1)</p>
				<footer>© Copyright 2018 by FnTie All rights are reserved.</footer>
			</blockquote>
            </div>
            <div class="mdui-dialog-actions">
              <button class="mdui-btn mdui-ripple" mdui-dialog-close>知 道 啦 !</button>
            </div>
          </div>
          