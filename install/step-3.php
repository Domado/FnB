<?php
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnB version:1.0.4
 * Author: HanFen
 **/
 include('main.php');
 ?>
 <div class="mdui-progress">
  <div class="mdui-progress-determinate" style="width: 60%;"></div>
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
          <div class="mdui-card-primary-title">填写安装信息</div>
          <div class="mdui-card-primary-subtitle">Fill in the installation information</div>
        </div>
        <form name="login" action="step-4.php" method="post">
        <script src="template/static/js/mdui.min.js"></script>
        <div class="mdui-card-content">
            <h3>1.数据库信息</h3>
        <!-- 数据库服务器 -->
        <div class="mdui-textfield">
          <i class="mdui-icon material-icons">&#xe894;</i>
          <label class="mdui-textfield-label">数据库服务器 :</label>
          <input class="mdui-textfield-input" type="text" value="localhost" class="form-control" name="Host"/>
        </div>
        <br/>
        <div class="mdui-textfield">
          <i class="mdui-icon material-icons">&#xe85e;</i>
          <label class="mdui-textfield-label">数据库用户名 :</label>
          <input class="mdui-textfield-input" value="" class="form-control" name="DBUser"/>
        </div>
        <br/>
        <div class="mdui-textfield">
          <i class="mdui-icon material-icons">&#xe90d;</i>
          <label class="mdui-textfield-label">数据库密码 :</label>
          <input class="mdui-textfield-input" type="password" value="" class="form-control" name="DBPwd"/>
        </div>
        <br/>
        <div class="mdui-textfield">
          <i class="mdui-icon material-icons">&#xe85d;</i>
          <label class="mdui-textfield-label">数据库名 :</label>
          <input class="mdui-textfield-input" value="" class="form-control" name="DBName"/>
        </div>
        <br/>
        <h3>2.管理员信息</h3>
        <div class="mdui-textfield">
          <i class="mdui-icon material-icons">&#xe851;</i>
          <label class="mdui-textfield-label">管理员用户名 :</label>
              <input class="mdui-textfield-input" value="" class="form-control" name="AUser"/>
        </div>
        <br/>
        <div class="mdui-textfield">
          <i class="mdui-icon material-icons">&#xe90d;</i>
          <label class="mdui-textfield-label">管理员密码 :</label>
          <input class="mdui-textfield-input" type="password" value="" class="form-control" name="APwd"/>
        </div>
        <br/>
        <div class="mdui-textfield">
          <i class="mdui-icon material-icons">&#xe90d;</i>
          <label class="mdui-textfield-label">管理员确认密码 :</label>
          <input class="mdui-textfield-input" type="password" value="" class="form-control" name="APwd2"/>
        </div>
        <br/>
        <div class="mdui-textfield">
          <i class="mdui-icon material-icons">&#xe0be;</i>
          <label class="mdui-textfield-label">管理员邮箱 :</label>
          <input class="mdui-textfield-input" value="" class="form-control" name="AEmail"/>
        </div>
        <br/>
        <h3>3.站点信息</h3>
        <div class="mdui-textfield">
          <i class="mdui-icon material-icons">&#xe894;</i>
          <label class="mdui-textfield-label">站点名称 :</label>
          <input class="mdui-textfield-input" type="text" class="form-control" name="Site_name" value="萌萌哒FnB"/>
        </div>
        <br/>
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