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
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>吾爱吾庐</title>
<meta name="keywords" content="index" />
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
				<li class="current_page_item"><a href="http://brocadesoar.cn" accesskey="1" title="">主页</a></li>
				<li><a href="blog.php" accesskey="2" title="">博客</a></li>
                <li><a href="bbs.php" accesskey="3" title="">留言</a></li>
				<li><a href="#" accesskey="4" title="">梯子</a></li>
				<li><a href="#" accesskey="5" title="">传送</a></li>
				<li><a href="#" accesskey="6" title="">关于</a></li>
				<li><a href="login.php" accesskey="7" title="">登陆</a></li>
			</ul>
		</div>
	</div>
	<div id="main">
		<div id="banner">
            <img src="images/aPicWithoutMe.jpg" alt="" class="image-full" height="335" width="250" />
		</div>
		<div id="welcome">
			<div class="title">
				<h2>乐躬耕于陇亩兮，吾爱吾庐</h2>
				<span class="byline">照片沉淀回忆，或喜或忧，你找不到我，时光的那一头，角落里我的一角背影</span>
			</div>
            <p>时间会匆匆流逝，其间发生的，美好的、不好的事物总归会在脑海中渐渐遗忘，尤其是像我一样，获得了遗忘的天赋。若是旅行，可以拿相机记录一些时刻，但大多数情况我没能把握那稍纵即逝的刹那。 写，是一种记录方式，是一种态度，是一种生活情趣，是一种营销手段。我感谢自己有写的欲望和写的勇气，激励自己要不断前进。</p>
			<!--ul class="actions"-->
            <!--ul class="button">
				<li><a href="#" class="actions">Etiam posuere</a></li>
			</ul-->
		</div>
        <!--
		<div id="featured">
			<div class="title">
				<h2>欢迎来到我的世界</h2>
				<span class="byline">随笔、日记、转载，生活、技术、扯淡</span>
			</div>
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
		</div>
        -->
		<div id="copyright">
			<span><a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="知识共享许可协议" style="border-width:0" src="images/88x31.png" /></a><br />本作品采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">知识共享署名-非商业性使用-禁止演绎 4.0 国际许可协议</a>进行许可。</span>
			<span>Template Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.|浙ICP备17027825号-1</span>
			<span><div style="width:300px;margin:0 auto; padding:20px 0;">
		 		<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33078302100258" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="images/beianlogo.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">浙公网安备 33078302100258号</p></a>
		 	</div></span>
		</div>
	</div>
</div>
</body>
</html
