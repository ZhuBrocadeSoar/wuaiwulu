<!DOCTYPE php PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name        : Skeleton
Description : A two-column, fixed-width design with dark color scheme.
Version     : 1.0
Released    : 20130902

Develop by soar
https://brocadesoar.cn
本博客网站样式基于上述开发者(Design by TEMPLATED), 许可证信息见
-->

<!-- SESSION-START -->
<?php
    session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="blog" />
		<meta name="description" content="the blog page" />
		<title id="title_index">吾爱吾庐-博客</title>
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,90" rel="stylesheet" />
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
		<link href="images/favicon.ico" rel="shortcut icon" />
		<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" />< -->
	</head>
	<body>
		<div id="page" class="container">
			<div id="header">
				<div id="logo">
					<a href="https://brocadesoar.cn"><img src="images/logo.png" alt="" height="128" width="128" /></a>
					<h1><a href="https://brocadesoar.cn">soar</a></h1>
					<span>Develop by <a href="https://brocadesoar.cn" rel="nofollow">ZhuBrocadeSoar</a></span>
					<span><p>腹中没有半瓶醋，三分热度写我情。</p><p>文章从来教我改，不敢写一句违心。</p></span>
				</div><!-- id="logo" -->
				<div id="menu">
					<ul>
						<li><a href="https://brocadesoar.cn" accesskey="1" title="">主页</a></li>
						<li><a href="blog.php" accesskey="1" title="">博客</a></li>
						<li class="current_page_item"><a href="bbs.php" accesskey="3" title="">留言</a></li>
						<!-- 
						<li><a href="#" accesskey="4" title="">梯子</a></li>
						<li><a href="#" accesskey="5" title="">传送</a></li>
						-->
						<li><a href="#" accesskey="6" title="">关于</a></li>
						<li><a href="login.php" accesskey="7" title="">登陆</a></li>
					</ul>
				</div><!-- id="menu" -->
			</div><!-- id="header" -->
			<script src="https://apps.bdimg.com/libs/jquery/1.9.1/jquery.js"></script>
			<div id="main">
				<div id="featured">
					<ul class="button">
						<li><a href="bbs.php?contentState=write">写文章</a></li>
					</ul>
					<p>本站尊重您的发言权并且鼓励您对我和我的网站提供意见和建议, 但是出于交流效率和网络安全的考虑, 目前禁止尚未在本站<a href="login.php?contentState=register">注册</a>并<a href="login.php">登陆</a>的匿名用户在本留言版发言</p>
				</div><!-- id="featured" -->
				<div id="copyright">
					<span>
                        <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/" rel="license"><img alt="知识共享许可协议" style="border-width:0"i src="images/88x31.png" /></a>
                        <br />
                        本作品采用<a href="http://creativecommons.org/licenses/by-nc-nd/4.0/" rel="license">知识共享署名-非商业性使用-禁止演绎 4.0 国际许可协议</a>进行许可。
                    </span>
                    <span>
                        Template Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>|Site Build by <a href="https://brocadesoar.cn" rel="nofollow">ZhuBrocadeSoar</a>
                    </span>
                    <span><div style="width:300px;margin:0 auto; padding:20px 0;">
                    浙ICP备17027825号-1<a target=" blank " href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33078302100258" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="images/beianlogo.png" style="float:left;" /><p style="float:left;height:20px;line-height:20px;matgin:0px 0px 0px 5px; color:#939393;">浙公网安备 33078302100258号</p></a>
                    </div></span>
				</div><!-- id="copyright" -->
			</div><!-- id="main" -->
		</div><!-- id="page" -->
	</body>
</html>