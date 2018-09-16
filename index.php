<?php
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnMB version:1.0.4
 * Author: HanFen
 **/
include("FnKu/Conf/DB.php");
$Fn_DBConn = new mysqli( $Host,$DBUser,$DBPwd,$DBName);
if( $Fn_DBConn->connect_errno <> 0 ){
    echo $Fn_DBConn->connect_error;
    die("SQL NO... (FnKu_E002_SQL)");
}
$Fn_DBConn->query("SET NAMES UTF8");

$sql = "SELECT * FROM FnB_Msg ORDER BY ID DESC";
$mysqli_result = $Fn_DBConn->query($sql);
if( $mysqli_result === false ){
    echo "SQL NO... (FnKu_E002_SQL)";
    exit;
}
$rows = [];
while( $row = $mysqli_result->fetch_array( MYSQLI_ASSOC ) ){
    $rows[] = $row; 
}
require("template/index.php");