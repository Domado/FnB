<?php
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnB version:1.0.4
 * Author: HanFen
 **/
 include('main.php');
?>
    <!--Post-->
    <form action="save.php" method="post" accept-charset="utf-8">
    <br/>
    <div class="mdui-container">
        <div class="mdui-card">
        <script src="https://raw.github.com/leizongmin/js-xss/master/dist/xss.js"></script>
        <script>
        var html = filterXSS('<script>alert("xss");</scr' + 'ipt>');
        alert(html);
        </script>
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
                          <input type="submit" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" value=" 发 射 ! " />
                      </div>
                      <div class="mdui-col-xs-5"></div>
                    </div>
            </div>
            </div>
        
            <br/>
        </div>
        <br/>
        <br/>
        
        <?php
        foreach ( $rows as $row ) {
        ?>
        <div class="mdui-card mdui-hoverable">
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