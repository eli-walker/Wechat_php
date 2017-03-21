<?php

/**
 * wechat php test
*/

 require "wx_api.php";
 
define("TOKEN", "ww");
$wechatObj = new wechatCallbackapiTest();

if(ISSET($_GET["echostr"]))
{
    $wechatObj->valid();  //验证地址有效性
}else{$wechatObj->responseMsg();}


?>