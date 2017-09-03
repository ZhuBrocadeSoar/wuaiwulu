<?php 
/**
*  Geetest配置文件
* @author Tanxu
*/
// 连接数据库 
$conOfMysql = mysqli_connect("localhost", "nitmaker_cn", "nitmaker.cn", "wuaiwuluDB");
if(mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if($result = mysqli_query($conOfMysql, "SELECT * FROM gt3idkey WHERE gt3idkey_index = 1")){
    // 读取成功
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo $row['gt3idkey_id'];
    echo '<br />';
    echo $row['gt3idkey_key'];
    define("CAPTCHA_ID", $row['gt3idkey_id']);
    define("PRIVATE_KEY", $row['gt3idkey_key']);
}else{
    // 读取失败
    printf("Query Faild: %s", mysqli_error());
    define("CAPTCHA_ID", "48a6ebac4ebc6642d68c217fca33eb4d");
    define("PRIVATE_KEY", "4f1c085290bec5afdc54df73535fc361");
    exit();
}

 ?>
