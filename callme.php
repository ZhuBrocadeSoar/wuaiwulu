<?php
    $connToMysql = mysqli_connect("localhost", "nitmaker_cn", "nitmaker.cn", "callme");
    if(mysqli_connect_errno()){
        echo "Error: " . mysqli_connect_error();
    }
    if(isset($_GET['query'])){
        if($_GET['query'] == "seller_list"){
            $retval = mysqli_query($connToMysql, "SELECT COUNT(*) FROM seller_list");
            if(!$retval){
                echo "Error: " . mysqli_error();
            }
            $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
            $resultArray['count'] = $row;
            $retval = mysqli_query($connToMysql, "SELECT name_seller FROM seller_list");
            if(!$retval){
                echo "Error: " . mysqli_error();
            }
            $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
            while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
                $resultArray = array_merge($resultArray, $row);
            }
            echo json_encode($resultArray);
        }
    }
?>
