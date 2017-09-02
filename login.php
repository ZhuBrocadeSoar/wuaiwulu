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

<!-- session初始化 -->
<?php
    session_start();
    if(isset($_SESSION['state'])){
        // 已存在session
        $_SESSION['state'] = "1";
    }else{
        // 不存在session，初始化
        $_SESSION['state'] = "1";
        $_SESSION['userState'] = "nameless";
    }
    // 检查数据库连接
    $_SESSION['conOfMysql'] = mysql_pconnect("localhost", "nitmaker_cn", "nitmaker.cn");
    // 检查连接
    if(!$_SESSION['conOfMysql']){
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("wuaiwuluDB");

    // 检查GET参数
    if(isset($_GET['contentState'])){
        // 存在，检查合法性
        if($_GET['contentState'] == "login" || $_GET['contentState'] == "register"){
            // 合法，赋值
            $_SESSION['contentState'] = $_GET['contentState'];
        }else{
            // 不合法，设置默认值
            $_SESSION['contentState'] = "login";
        }
    }else{
        // 不存在，设置默认值
        $_SESSION['contentState'] = "login";
    }
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>吾爱吾庐-登陆</title>
<meta name="keywords" content="login" />
<meta name="description" content="" />
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
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
				<li><a href="http://brocadesoar.cn" accesskey="1" title="">主页</a></li>
				<li><a href="blog.php" accesskey="2" title="">博客</a></li>
                <li><a href="bbs.php" accesskey="3" title="">留言</a></li>
				<li><a href="#" accesskey="4" title="">梯子</a></li>
				<li><a href="#" accesskey="5" title="">传送</a></li>
				<li><a href="#" accesskey="6" title="">关于</a></li>
				<li class="current_page_item"><a href="login.php" accesskey="7" title="">登陆</a></li>
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
				<li><a href="#" class="actions">Etiam posuere</a></li>
-->
		<div id="featured">
			<div class="title">
				<h2>《注册、登陆用户须知》</h2>
				<span class="byline">致力于您读过并读懂本须知</span>
			</div>
            <div id="topic" style="text-align:left">
<p>  本须知不是由精炼的过分准确并且拗口的专业术语组成的，但这并不意味着您可以无视本须知的内容和精神，本站默认您执行“注册”、“登陆”操作意为着您读过并读懂本须知。</p>
<p>  您也许早就厌烦了在各种大大小小的网站注册自己的账号，您不希望在您查阅某些资料的过程中被突如其来的注册、登陆请求打断思路、浪费时间和感情，很荣幸笔者持有这样的观点，同样认为这种用户体验极差的交互方式应该被取缔。</p>
<p>  本站是一个个人博客网站，笔者本意不希望发生过多的尤其是生硬的用户交互操作，比如这种传统的注册、登陆操作。本站不是面向所有互联网用户的社交网站，不关心有多么大的用户群体和访问量，但是，笔者又迫切地希望得到熟人社交圈对笔者的批评和认可，迫切地希望通过本站实现价值的体现和产出。</p>
<p>  因此笔者开通了对文章的评论、赞踩、回复功能，专门开通了一个留言版块，开通了一些福利资源的获取接口。同时为了您合法人道地使用、获取并为之提供保障，限于技术原因，开通了注册、登陆功能，并承诺您的注册、登陆信息将被安全地保护。</p>
<p>  笔者认为无感知的用户识别技术是将来的发展趋势。据笔者所知，大多数平台都支持使用大型网络社交平台账号登陆或绑定其网站。笔者也希望在不久的将来能够在本站接入微信、QQ等大家喜闻乐见的社交账号，更希望互联网技术进一步发展无感知智能时代能早一点到来。</p>
<p style="text-align:right">最后修改于 2017年8月29日03:01，soar</p>
            </div>
            <?php
    if($_SESSION['userState'] != "nameless"){
        // 已经登陆，打印欢迎信息
        // 打印“注册账号需要退出登陆”
        // 打印退出登陆按钮
    }else{
        // 尚未登陆
        if($_SESSION['contentState'] == "login"){
            // 请求的是登陆页
            // 打印登陆表单
            echo "\t\t\t";echo '<div id="loginpage">';echo "\n";
            echo "\t\t\t\t";echo '<a name="loginform"></a>';echo "\n";
            echo "\t\t\t\t";echo '<form action="login.php" method="post">';echo "\n";
            echo "\t\t\t\t\t";echo '<ul>';echo "\n";
            echo "\t\t\t\t\t\t";echo '<li>用户名</li>';echo "\n";
            echo "\t\t\t\t\t\t";echo '<li><input type="text" name="userName" /></li>';echo "\n";
            echo "\t\t\t\t\t\t";echo '<li>密码</li>';echo "\n";
            echo "\t\t\t\t\t\t";echo '<li><input type="password" name="password" /></li>';echo "\n";
            echo "\t\t\t\t\t\t";echo '<li>点击<input type="submit" name="submit" value="登陆" />或<a href="login.php#loginform?contentState=register">注册</a></li>';echo "\n";
            echo "\t\t\t\t\t";echo '</ul>';echo "\n";
            echo "\t\t\t\t";echo '</form>';echo "\n";
            echo "\t\t\t";echo '</div>';echo "\n";
        }else{
            // 请求的是注册页
            // 打印注册表单
            echo "test";
        }
    }
            ?>
        <!--
			<ul class="style1">
				<li class="first">
					<p class="date"><a href="#">Jan<b>05</b></a></p>
					<h3>Amet sed volutpat mauris</h3>
					<p><a href="#">Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Etiam non felis. Donec ut ante.</a></p>
				</li>
				<li>
					<p class="date"><a href="#">Jan<b>03</b></a></p>
					<h3>Sagittis diam dolor amet</h3>
					<p><a href="#">Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie. Donec leo, vivamus fermentum nibh in augue praesent congue rutrum.</a></p>
				</li>
				<li>
					<p class="date"><a href="#">Jan<b>01</b></a></p>
					<h3>Amet sed volutpat mauris</h3>
					<p><a href="#">Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Etiam non felis. Donec ut ante.</a></p>
				</li>
				<li>
					<p class="date"><a href="#">Dec<b>31</b></a></p>
					<h3>Sagittis diam dolor amet</h3>
					<p><a href="#">Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie. Donec leo, vivamus fermentum nibh in augue praesent congue rutrum.</a></p>
				</li>
			</ul>
        -->
		</div>
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
</html
