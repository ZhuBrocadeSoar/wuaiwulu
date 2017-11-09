<?php
$_GET['query'] = "seller_list";
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
            $row = mysqli_fetch_array($retval, MYSQLI_NUM);
            $resultArray['count'] = $row[0];
            $retval = mysqli_query($connToMysql, "SELECT id_seller, name_seller FROM seller_list");
            if(!$retval){
                echo "Error: " . mysqli_error();
            }
            $sellerArray = array();
            $i = '1';
            while($row = mysqli_fetch_array($retval, MYSQLI_NUM)){
                $sellerArray[$i] = array("id" => $row[0], "name" => $row[1]);
                $i++;
            }
            $resultArray['list'] = $sellerArray;
            echo json_encode($resultArray);
        }else if($GET['query'] == "good_list"){
        }
    }
?>

