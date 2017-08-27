<!DOCTYPE php PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Skeleton 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130902

Develop by ZhuBrocadeSoar
-->

<!-- session和参数检查 -->
<?php
    // session 初始化///////////////////////
    session_start();	
    if(isset($_SESSION['state'])){
        // 已存在session
        $_SESSION['state'] = "1";
    }else{
        // 不存在session，初始化
        $_SESSION['state'] = "1";
    }

    // 检查数据库连接///////////////////////
    // 建立持久的数据库连接
    $_SESSION['conOfMysql'] = mysql_pconnect("localhost", "nitmaker_cn", "nitmaker.cn");
    // 检查连接
    if(!$_SESSION['conOfMysql']){
        die("Could not connect: " . mysql_error());
    }
    mysql_select_db("wuaiwuluDB");

    // 检查GET参数//////////////////////////
    // contentState
    if(isset($_GET['contentState'])){
        // 存在
        if($_GET['contentState'] == "list" || $_GET['contentState'] == "topic"/*合法*/){
            // 值合法，赋值
            $_SESSION['contentState'] = $_GET['contentState'];
        }else{
            // 值不合法，设置默认值
            $_SESSION['contentState'] = "list";
        }
    }else{
        // 不存在，设置默认值
        $_SESSION['contentState'] = "list";
    }
    // 根据contentState决定接下来检查什么参数
    if($_SESSION['contentState'] == "list"){
        // 请求列表页，检查相关参数/////////
        // pageNum
        if(isset($_GET['pageNum'])){
            // 存在
            // 查询数据库获知最大页码
            // pageSize
            if(isset($_GET['pageSize'])){
                // 存在
                if($_GET['pageSize'] > 0){
                    // 合法，赋值
                    $_SESSION['pageSize'] = $_GET['pageSize'];
                }else{
                    // 不合法，设置默认值
                    $_SESSION['pageSize'] = 5;
                }
            }else{
                // 不存在，设置默认值
                $_SESSION['pageSize'] = 5;
            }
            $retval = mysql_query("SELECT COUNT(*) FROM topic", $_SESSION['conOfMysql']);
            if(!$retval){
                die("Could not get list: " . mysql_error());
            }
            $row = mysql_fetch_array($retval, MYSQL_ASSOC);
            $_SESSION['maxPageNum'] = ($row['COUNT(*)'] - $row['COUNT(*)'] % $_SESSION['pageSize']) / $_SESSION['pageSize'] + (($row['COUNT(*)'] % $_SESSION['pageSize'] == 0)?0:1);
            if($_GET['pageNum'] > 0 && $_GET['pageNum'] <= $_SESSION['maxPageNum']/*合法*/){
                // 值合法，赋值
                $_SESSION['pageNum'] =  $_GET['pageNum'];
            }else{
                // 值不合法，设置默认值
                $_SESSION['pageNum'] = 1;
            }
        }else{
            // 不存在，设置默认值
            $_SESSION['pageNum'] = 1;
            // pageSize
            if(isset($_GET['pageSize'])){
                // 存在
                if($_GET['pageSize'] > 0){
                    // 合法，赋值
                    $_SESSION['pageSize'] = $_GET['pageSize'];
                }else{
                    // 不合法，设置默认值
                    $_SESSION['pageSize'] = 5;
                }
            }else{
                // 不存在，设置默认值
                $_SESSION['pageSize'] = 5;
            }
        }
        // maxPageNum
        $retval = mysql_query("SELECT COUNT(*) FROM topic", $_SESSION['conOfMysql']);
        if(!$retval){
            die("Could not get list: " . mysql_error());
        }
        $row = mysql_fetch_array($retval, MYSQL_ASSOC);
        $_SESSION['maxPageNum'] = ($row['COUNT(*)'] - $row['COUNT(*)'] % $_SESSION['pageSize']) / $_SESSION['pageSize'] + (($row['COUNT(*)'] % $_SESSION['pageSize'] == 0)?0:1);
    }else{
        // 请求主题页，检查相关参数
        // topic_index
        if(isset($_GET['topic_index'])){
            // 存在，检查合法性
            // 查询数据库获知最大主题数
            $retval = mysql_query("SELECT COUNT(*) FROM topic", $_SESSION['conOfMysql']);
            if(!$retval){
                die("Could not get list: " . mysql_error());
            }
            $row = mysql_fetch_array($retval, MYSQL_ASSOC);
            $_SESSION['maxTopicIndex'] = $row['COUNT(*)'];
            if($_GET['topic_index'] >= 1 && $_GET['topic_index'] <= $_SESSION['maxTopicIndex']){
                // 合法，赋值
                $_SESSION['topic_index'] = $_GET['topic_index'];
            }else{
                // 不合法，反馈错误信息
                echo 'div class="title"';
                echo '请求的主题不存在(Error Code:-1)';
                echo '</div>';
            }
        }else{
            // 不存在，Error
            echo '<div class="title">';
            echo '请求的主题不存在(Error Code:-2)';
            echo '</div>';
        }
    }
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>吾爱吾庐-博客</title>
<meta name="keywords" content="blog" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="images/favicon.ico" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<a href="http://brocadesoar.cn"><img src="images/logo.png" alt="" height="128" width="128" /></a>
			<h1><a href="http://brocadesoar.cn">soar</a></h1>
			<span>Develop by <a href="http://brocadesoar.cn" rel="nofollow">ZhuBrocadeSoar</a></span>
            <span><p>腹中没有半瓶醋，三分热度写我情，</p><p>文章从来教我改，不敢写一句违心。</p></span>
		</div>
		<div id="menu">
			<ul>
				<li ><a href="http://brocadesoar.cn" accesskey="1" title="">主页</a></li>
				<li class="current_page_item"><a href="blog.php" accesskey="2" title="">博客</a></li>
				<li><a href="#" accesskey="3" title="">留言</a></li>
				<li><a href="#" accesskey="4" title="">梯子</a></li>
			</ul>
		</div>
	</div>
	<div id="main">
        <!--
		<div id="banner">
            <img src="images/aPicWithoutMe.jpg" alt="" class="image-full" height="335" width="250" />
		</div>
		<div id="welcome">
			<div class="title">
				<h2>乐躬耕于陇亩兮，吾爱吾庐</h2>
				<span class="byline">照片沉淀回忆，或喜或忧，你找不到我，时光的那一头，角落里我的一角背影</span>
			</div>
            <p>时间会匆匆流逝，其间发生的，美好的、不好的事物总归会在脑海中渐渐遗忘，尤其是像我一样，获得了遗忘的天赋。若是旅行，可以拿相机记录一些时刻，但大多数情况我没能把握那稍纵即逝的刹那。 写，是一种记录方式，是一种态度，是一种生活情趣，是一种营销手段。我感谢自己有写的欲望和写的勇气，激励自己要不断前进。</p>
			<ul class="actions">
				<li><a href="#" class="button">Etiam posuere</a></li>
			</ul>
		</div>
        -->
        <?php
    if($_SESSION['contentState'] == "list"){
        // 查询列表内容
        $listOffset = ($_SESSION['pageNum'] - 1) * $_SESSION['pageSize'] + "0";
        $listLimit = $_SESSION['pageSize'] + "0";
    	$sql = "SELECT topic_index, topic_date, topic_time, topic_abstract, topic_title FROM topic ORDER BY topic_index DESC LIMIT " . $listOffset . ", " . $listLimit;
        $retval = mysql_query($sql, $_SESSION['conOfMysql']);
        if(!$retval){
            die("Could not get list: " . mysql_error());
        }
        $row = mysql_fetch_array($retval, MYSQL_ASSOC);
        echo '
		<div id="featured">
			<div class="title">
				<h2>欢迎来到我的世界</h2>
				<span class="byline">随笔、日记、转载，生活、技术、扯淡</span>
			</div>
			<ul class="style1">';
        		// <!--动态更新列表-->
        $date_arr_monsname = array("01" => "Jan",
            "02" => "Feb",
            "03" => "Mar",
            "04" => "Apr",
            "05" => "May",
            "06" => "Jun",
            "07" => "Jul",
            "08" => "Aug",
            "09" => "Sep",
            "10" => "Oct",
            "11" => "Nov",
            "12" => "Dec");
        while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
            $date_arr=explode('-', $row['topic_date']);
            echo '
                <li>
                    <p class="date">' . $date_arr_monsname[$date_arr[1]]/*计算显示月份*/ . '<b>' . $date_arr[2]/*计算显示日数*/ .'</b></p>
					<h3><a href="blog.php?contentState=topic&topic_index=' . $row['topic_index'] . '">' . $row['topic_title']/*显示标题*/ . '</a></h3>
					<p>' . $row['topic_abstract']/*显示摘要*/ . '</p>
				</li>';
        }
        echo '
			</ul>
        </div>';
        echo '
        <div id="prevnext" style="text-align:center">';
        ?>
        <?php
        // 打印页码控制器
        echo '<form name="pageNumGet" action="blog.php" method="get">';echo "\n";
        if($_SESSION['pageNum'] == 1){
            // 不打印"上一页"和链接
        }else{
            // 打印"上一页"和链接
            echo '<a href="blog.php?contentState=list&pageNum=';
            echo $_SESSION['pageNum'] - 1;
            echo '&pageSize=';
            echo $_SESSION['pageSize'];
            echo '">';
        	echo '上一页</a>';
        }
        //echo '-第';
        //echo $_SESSION['pageNum'];
        //echo '页-';
        // 下拉列表显示第几页，onchange事件
        //echo '<form name="pageNumGet" action="blog.php" method="get">';echo "\n";
        echo '<input type="hidden" name="contentState" value="list" />';echo "\n";
        echo '<select name="pageNum" onchange="javascript:document.pageNumGet.submit();">';echo "\n";
        for($loopctl = 1; $loopctl <= $_SESSION['maxPageNum']; $loopctl++){
            echo '<option value="' . $loopctl . '" ';
            if($loopctl == $_SESSION['pageNum']){
                echo 'selected="selected" ';
            }
            echo '>';
            echo '-第' . $loopctl . '页-';
            echo '</option>';echo "\n";
        }
        echo '</select>';echo "\n";
        echo '<input type="hidden" name="pageSize" value="' . $_SESSION['pageSize'] . '" />';echo "\n";
        //echo '</form>';echo "\n";
        if($_SESSION['pageNum'] == $_SESSION['maxPageNum']){
            // 不打印"上一页"和链接
        }else{
            // 打印"上一页"和链接
            echo '<a href="blog.php?contentState=list&pageNum=';
            echo $_SESSION['pageNum'] + 1;
            echo '&pageSize=';
            echo $_SESSION['pageSize'];
            echo '">';
            echo '下一页</a>';
        }
        echo '</form>';echo "\n";
        echo '
        </div>
        ';
    }else{
        // 请求的是主题页
        echo '测试topic' . $_GET['topic_index'];
        // 查询数据库获得主题内容
        $sql = "SELECT topic_date, topic_time, topic_text, topic_abstract, topic_comment_list, topic_updown_list, topic_modfiy_list, topic_title FROM topic WHERE topic_index=" . $_SESSION['topic_index'];
        $retval = mysql_query($sql, $_SESSION['conOfMysql']);
        if(!retval){
            die('Could not get list' . mysql_error());
        }
        // 打印框架
        echo '<!--打印框架 -->';echo "\n";
        echo '<div id="featured">';echo "\n";
        echo "\t";echo '<div class="title">';echo "\n";
        echo "\t\t";echo '<h2>' . $row['topic_title'] . '</h2>';echo "\n";
        echo "\t\t";echo '<span class="byline">' . $row['topic_date'] . ' ' . $row['topic_time'] . '</span>';echo "\n";
        echo "\t";echo '</div>';echo "\n";// featured
        echo '</div>';// class="title"
    }
		?>
		<div id="copyright">
			<span><a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="知识共享许可协议" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><br />本作品采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">知识共享署名-非商业性使用-禁止演绎 4.0 国际许可协议</a>进行许可。</span>
			<span>Template Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.|浙ICP备17027825号-1</span>
			<span><div style="width:300px;margin:0 auto; padding:20px 0;">
		 		<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33078302100258" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="images/beianlogo.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">浙公网安备 33078302100258号</p></a>
		 	</div></span>
		</div>
	</div>
</div>
</body>
</html>
