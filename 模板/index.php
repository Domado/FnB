<?php
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnB version:1.0.4
 * Author: HanFen
 **/
 include('main.php');
?>
    <style>
    .border-comm{
        border-radius:12px;
    }
    </style>
    <style>
    .border-comm-1{
        border-radius:10px;
    }
    </style>
    <!--Post-->
    <form action="save.php" method="post" accept-charset="utf-8">
    <br/>
    <div class="mdui-container">
        <div class="mdui-card border-comm">
            <div class="mdui-row">
            <div class="mdui-container">
                <div class="mdui-row">
                <div class="mdui-col-lg-6">
                  <div class="mdui-textfield">
                      <i class="mdui-icon material-icons">assignment_ind</i>
                      <input class="mdui-textfield-input" name="User" type="User" placeholder="User"/>
                  </div>
                  </div>
                  <div class="mdui-col-lg-6">
                  <div class="mdui-textfield">
                      <i class="mdui-icon material-icons">favorite</i>
                      <input class="mdui-textfield-input" name="QQ" type="QQ" placeholder="QQ"/>
                  </div>
                  </div>
                  </div>
                  <div class="mdui-textfield">
                      <i class="mdui-icon material-icons">keyboard</i>
                      <input class="mdui-textfield-input" name="Message" type="Message" placeholder="Message"/>
                  </div>
                  <br/>
                    <div class="mdui-row mdui-row-gapless">
                      <div class="mdui-col-xs-5"></div>
                      <div class="mdui-col-xs-2">
                                      <input type="submit" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" id="Post" value=" 发 射 ! " />
                      </div>
                      <div class="mdui-col-xs-5"></div>
                    </div>
            </div>
            </div>
        
            <br/>
        </div>
    <script>
        mdui.JQ('#Post').on('click', function () {
          mdui.snackbar({
            message: '赶往发射场中...'
          });
        });
    </script>
    <!--Erro Mgs 
        <script>
    $('#Post').click(function(){
        $.ajax({
          url: 'save.php',
          type: 'POST',
          data: "a=2,
          success: function(){
              window.location.reload();
              alert(data);
//            var data = data;
//            alert(data);
          }
          error: function(){
              var data = data;
              alert(data);
          }
        })
    });
    <script>
function func(){
    $.ajax({
        method:'POST',
        url:'save.php',
        data:{
        },
        success:function(){
            window.location.reload();
        },
        error:function(xhr.responseText){
            mdui.snackbar(xhr.responseText);
        }
    });
}
//$("form").attr('onsubmit','func();return false;')
    </script>-->
        <br/>
        <br/>
        
        <?php
        foreach ( $rows as $row ) {
        ?>
        <div class="mdui-card mdui-hoverable border-comm-1">
              <div class="mdui-card-header">
                <img class="mdui-card-header-avatar" src="https://avatar.dawnlab.me/qq/<?php echo htmlspecialchars($row['QQ']);?>?s=100"/>
                <div class="mdui-card-header-title"><?php echo htmlspecialchars($row['User']);?></div>
                <div class="mdui-card-header-subtitle"><?php echo date("Y/m/d H:i:s",$row['Intime']);?></div>
              </div>
              <div class="mdui-card-content"><?php echo htmlspecialchars($row['Message']);?></div>
        </div>
        <br/>
        <?php
        }
        ?>
        <br/>
        <br/>
    </div>
    </form>
    </body>
</html>
