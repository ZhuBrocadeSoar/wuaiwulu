<!DOCTYPE php PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name        : Skeleton
Description : A two-column, fixed-width design with dark color scheme.
Version     : 1.0
Released    : 20130902

Develop by ZhuBrocadeSoar
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
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
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
                        <li><a href="https://brocadesoar.cn" accesskey="1" title ="">主页</a></li>
                        <li class="current_page_item"><a href="blog.php" accesskey="2" title="">博客</a></li>
                        <li><a href="bbs.php" accesskey="3" title="">留言</a></li>
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
            <script>
    $(document).ready(function(){
        $("div#header").load(function(){
            $("div#featured").style.val("display:none");
        });
    });
            </script>
            <div id="main">
                <div id="featured">
                    <div id="topic_list_title" class="title">
                        <h2>欢迎来到我的世界</h2>
                        <span class="byline">随笔、日记、转载、生活、技术、扯淡</span>
                    </div><!-- id="topic_list_title" -->
                    <div id="topic_title" class="title">
                        <h2>文章的标题标题</h2>
                        <span class="byline">1997-01-03 15:15<span>
                    </div><!-- id="topic_title" -->
                    <ul id="topic_list" class="style1">
                        <li>
                            <p class="date">Jan<b>03</b></p>
                            <h3><a href="blog.php?">文章的标题</a></h3>
                            <p>文章的摘要</p>
                        </li>
                    </ul>
                    <p id="topic_abstract" style="border-style:solid">文章的摘要摘要摘要</p>    
                    <div id="topic_content" style="text-align:left">
                        文章的正文
                    </div><!-- id="topic_abstract" -->
                    <div id="prevnext" style="text-align:center">
                        <form name="pageNumGet" action="blog.php" method="get">
                            <a href="blog.php?">上一页</a>
                            <input type="hidden" name="contentState" value="list" />
                            <select name="pageNum" onchange="javascript:document.pageNumGet.submit();">
                                <option value="1" selected="selected">-第1页-</select>
                            </select>
                            <input type="hidden" name="pageSize" value="5" />
                            <a href="blog.php?">下一页</a>
                        </form>
                    </div><!-- id="prevnext" -->
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
