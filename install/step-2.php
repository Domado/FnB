<?php
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnB version:1.0.4
 * Author: HanFen
 **/
 include('main.php');
 ?>
<div class="mdui-progress">
  <div class="mdui-progress-determinate" style="width: 40%;"></div>
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
          <div class="mdui-card-primary-title">检查环境配置</div>
          <div class="mdui-card-primary-subtitle">Check the environment configuration</div>
        </div>
        <div class="mdui-card-content">

<div class="mdui-table-fluid">
  <table class="mdui-table mdui-table-hoverable">
    <thead>
      <tr>
        <th>#</th>
        <th>功能或状态</th>
        <th>最低配置要求/推荐配置要求</th>
        <th>当前配置</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>PHP版本</td>
        <td>5.6及以上/7.0及以上</td>
        <td>
          <b><font color="<?php
            if (version_compare(PHP_VERSION, '5.6.0') >= 0) {
              echo"green";
            } else {
              echo "red";
            }
            ?> ">
              <?= PHP_VERSION?>
            </font>
          </b>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>MySQLi数据库拓展</td>
        <td>支持/支持</td>
        <td>
          <b>
            <?php
            if (function_exists('mysqli_connect')) {
              echo "<font color='green'>支持</font>";
            }else {
              echo "<font color='red'>不支持</font>";
            }
            ?>
          </b>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>配置文件写入</td>
        <td>可选/支持</td>
        <td><b>
            <?php
            if (is_writable("../common/config2.php")) {
              echo "<font color='green'>支持</font>";
            }else {
              echo "<font color='red'>不支持</font>";}
            ?>
          </b>
        </td>
      </tr>

      <tr>
        <td>4</td>
        <td>程序最长运行时间</td>
        <td>15秒及以上/30秒及以上</td>
        <td>
          <b><font color="<?php
            if (ini_get("max_execution_time")>= 15) {
              echo"green";
            } else {
              echo "red";
            }
            ?> ">
              <?= ini_get("max_execution_time")?>秒
            </font>
          </b>
        </td>
      </tr>
    <tr>
      <td>5</td>
      <td>文件上传大小限制：</td>
      <td>1M/5M</td>
      <td>
        <b><font color="<?php
          preg_match_all('/\d+/',ini_get("upload_max_filesize"),$arr);
          $arr = join('',$arr[0]);
          if ($arr>=1) {
            echo"green";
          } else {
            echo "red";
          }
          ?>">
        <?= ini_get("upload_max_filesize") ?></td>
    </tr>
    </tbody>
  </table>
</div>

        </div>
        <div class="mdui-card-actions">
<center>
<a href="step-3.php"class="mdui-btn mdui-ripple mdui-color-grey-200 border-comm" id="btn">下一步</a>&nbsp;<a href="install.php"class="mdui-btn mdui-ripple mdui-color-indigo-a200 border-comm" id="btn">上一步</a></center>
<br/>
        </div>
      </div>
    </div>
  </div>
</body>
</html>