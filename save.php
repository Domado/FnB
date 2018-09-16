<?php
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnMB version:1.0.3
 * Author: HanFen
 **/
include("FnKu/include/input.php");
include("FnKu/include/connect.php");
$Message = $_POST['Message'];
$User = $_POST['User'];
$QQ = $_POST['QQ'];

$input = new input();

    $is = $input->post( $Message );
    if( $is == false ){
        die("留言内容数据不正确！");
    }
    $is = $input->post( $User );
    if( $is == false ){
        die("用户名数据不正确！");
    }
    $is = $input->post( $QQ );
    if( $is == false ){
        die("QQ数据不正确！");
    }

$time = time();
$sql = "INSERT INTO FnMB_Msg (Message,User,QQ,Intime) values ('{$Message}','{$User}','{$QQ}','{$time}')";
$is = $Fn_DBConn->query($sql);
header("location:index.php");