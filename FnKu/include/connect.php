 <?php
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnB version:1.0.4
 * Author: HanFen
 **/
include("FnKu/Conf/DB.php");
$Fn_DBConn = new mysqli( $Host,$DBUser,$DBPwd,$DBName);
if( $Fn_DBConn->connect_errno <> 0 ){
    echo $Fn_DBConn->connect_error;
    die("SQL NO");
}
$Fn_DBConn->query("SET NAMES UTF8");
