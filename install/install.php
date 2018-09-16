<?php
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnB version:1.0.4
 * Author: HanFen
 **/
 include('main.php');
 ?>
<div class="mdui-progress">
  <div class="mdui-progress-determinate" style="width: 20%;"></div>
</div>
        <br/>
        <br/>
 <script>
    function check(){
        var chec=document.getElementById("chec");
        if(chec.checked==true){
            document.getElementById("btn").removeAttribute("disabled")
        }else{
            document.getElementById("btn").disabled="disabled"
        }
    }
</script>
<style>
.border-comm{
    border-radius:12px;
}
</style>
    <div class="mdui-container">
    <div class="mdui-row">
      <div class="mdui-card border-comm">
        <div class="mdui-card-primary">
          <div class="mdui-card-primary-title">使用协议</div>
          <div class="mdui-card-primary-subtitle">Use Agreement</div>
        </div>
        <div class="mdui-card-content">
            <h3>感谢您使用 FnB !</h3>
            <br/>
            本程序遵照<a href="http://www.gnu.org/licenses/gpl-3.0.html" target="_blank">GPL3.0协议</a>开放源代码，您可以自由传播和修改，在遵照下面的约束条件的前提下：</p>
            <p>一.用户可以自由地使用及二次发布本软件而不必征得原作者同意。</p>
            <p>二.在二次发布时请务必不要删除这个使用协议。</p>
            <p>三.请<b><font color="red">不要删除软件底部的名称及版权信息</font></b>，二次开发者可保留自己的版权信息。</p>
            <p>四.未经原作者允许禁止商用!</p>
            <p>只要你遵循上述条款规定，您就可以自由使用并传播本源代码。</p>
        </div>
        <div class="mdui-card-actions">
        <center>
            <label class="mdui-checkbox">
              <input type="checkbox" id="chec" onclick="check()"/>
              <i class="mdui-checkbox-icon"></i>
                我已看过并接受 <span id="xieyi" onclick="foo3()">《使用协议》</span>
            </label>
            <a href="step-2.php"class="mdui-btn mdui-ripple mdui-color-grey-200 border-comm" id="btn" disabled>下一步</a>
        </center>
          <br/>
        </div>
      </div>
    </div>
  </div>

</body>
</html>