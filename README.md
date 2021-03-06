# wuaiwulu

This code is developing for my blog site.

### Something
Template from [templated.co/privy](https://templated.co/privy) and there has a [license](https://github.com/ZhuBrocadeSoar/wuaiwulu/blob/master/LicenseOfTemplated.txt) about it.

# Develop Logs

### Database On Mysql

mysql\> USE wuaiwuluDB;

mysql\> DESC topic;

| Field					| Type				| Null	| Key	| Default	| Extra				|	
|-----------------------|-------------------|-------|-------|-----------|-------------------|
| topic\_index			| int(10) unsigned	| NO	| PRI	|			| auto\_increment	|	
| topic\_date			| date				| NO	|		|			|					|	
| topic\_time			| time				| NO	|		|			|					| 	
| topic\_text			| text				| YES	|		|			|					|	
| topic\_abstract		| mediumtext		| YES	|		|			|					|	
| topic\_comment\_list	| text				| YES	|		|			|					|	
| topic\_updown\_list	| text				| YES	|		|			|					|	
| topic\_modfiy\_list	| text				| YES	|		|			|					|	
| topic\_title	        | tinytext          | NO    |       |           |                   |
			
mysql\> DESC user;

| Field             | Type              | Null  | Key   | Default	| Extra             |
|-------------------|-------------------|-------|-------|-----------|-------------------|
| user\_index       | int(10) unsigned	| NO	| PRI	|           | auto\_increment	|
| user\_date        | date              | NO    |       |           |                   |
| user\_time        | time              | NO    |       |           |                   |
| user\_username	| tinytext          | NO    |       |           |                   |
| user\_password    | char(40)          | NO    |       |           |                   |
| user\_email       | tinytext          | NO    |       |           |                   |
| user\_group       | char(10)          | NO    |       |           |                   |

mysql\> DESC gt3idkey;

| Field           | Type     | Null | Key | Default | Extra             |
|-----------------|----------|------|-----|---------|-------------------|
| gt3idkey\_index | int(11)  | NO   | PRI | NULL    | auto\_increment	|
| gt3idkey\_id    | char(32) | NO   |     | NULL    |                   |
| gt3idkey\_key   | char(32) | NO   |     | NULL    |                   |

### Codes Stats
	
2017-08-24-00:12 创建了数据表 topic ，接下来的任务是调试代码尝试数据库的连接，并在数据表中（通过终端）插入合适的测试用数据，插入数据后尝试实现动态读取列表中某页的5条博文并按照预定的样式显示到前端，并且实现翻页按钮。在动态列表内容页实现后，尝试动态主题内容页的获取和显示，再之后尝试markdown编辑器的嵌入和使用来完成网站初步的博客功能。在这之间或之后，需要实现用户登陆功能使显示内容按用户的不同而不同。在之后开发用户注册和邮箱验证功能，在之后实现管理员审核、管理用户的功能。

2017-08-24-22:05 数据表topic结构已更新，如前所示。目前已经完成blog模块的列表内容页的开发。接下来需要在blog模块中实现主题内容页的开发。

2017-08-24-23:37 修改文章链接从GET到POST遇到问题，需要调试

2017-08-25-00:56 将所有链接指向为javascript来提交指定名字的表单，有一个BUG：点击浏览器的“BACK”按钮会报错；

2017-08-25-22:00 已经改为GET传输模式。目前无BUG，下一步实现blog主题内容页。

2017-08-27-01:17 blog-list功能完全开发完毕，接下来开发blog-topic功能，可能需要创建评论列表等信息.

2017-08-27-02:39 blog-topic 正在开发中，下一步继续实现 摘要的带边框显示等:[简单边框css](http://www.w3school.com.cn/tiy/t.asp?f=csse_border-style)、[div](http://www.w3school.com.cn/tiy/t.asp?f=html_div_test)

2017-08-27-23:21 决定暂时不开发评论和赞踩系统，先实现markdown文章发表和正常显示系统.

* 一个composer的绝佳的介绍:[Composer](www.phpcomposer.com), 貌似终于又解决了一次冲突，而且装好了markdown的class，composer

2017-08-28-02:44 创建了数据表user，接下来开发发表文章页和登陆页，“留言页”对于用户"soar"来说会在顶部有一个按钮，该按钮会提交一个GET参数contentState="write"，该参数当且仅当用户为"soar"时有效，该按钮提交目标是"留言页"本身，文件名字定为bbs.php,，缺省参数有: contentState=bbs (注意用户状态userState是SESSION缺省的，只通过POST改变，因此不列表在这里)，此外，注册用户和认证用户的留言功能和所有用户的留言查看功能将延后开发，先完成当下的任务。

2017-08-28-04:48 在bbs.php暂时开放了write借口,不过接下来的任务应该是开发login.php完成用户注册/登陆功能的开发,在这之后开发写文章页面的表单开发,再其后开发blog的topic页,设计到最终的评论等等,不过看起来先开发bbs的留言版也是一种思路吧.

2017-08-29-03:01 完成了登陆页的《注册、登陆须知》.

2017-08-29-03:31 尚未开始login表单的开发，可能需要想好一个样式、找到一个好的验证码系统，今天累了，明天在写吧

2017-09-02-16:29 在设计login表单的时候中途转出去做了个ssl的认证，在腾讯云有个一个brocadesoar.cn的域名认证并安装启用了，另外一个www.brocadesoar.cn的域名没有启用，但是这里可能有点问题，工信部备案中的网站主页地址是www.brocadesoar.cn实际上这个域名会被重写为brocadesoar.cn，目前我们的网站也是安全的拉。

2017-09-03-14:10 安装了gt3-php-sdk，准备接入极验验证，新加了一个数据表用于存储gt3的id和key

2017-09-04-03:15 这一天研究gt3-php-sdk的接入，感觉发现了新大陆，而且我做了一个大胆的决定，我决定重写我的博客，用上AJAX技术，让AJAX做前端渲染，让PHP做后台数据查询，，目的是让我的博客思路清晰符合我预期的样子。重写还是在这个目录下完成，老版本的文档会被命名为old-前缀

2017-09-21-02:55 近两天企图修改标签的id，但是和css定义显然冲突了，需要修改回原来的样子

2017-09-21-04:11 index、blog改建初步ok

2017-11-10 23:48:35 bbs初步改建ok,取消了“梯子”、“传送”模块

### Ideas

2017年8月24日01:14 

* 添加功能页，传送，布置各个平台的链接

* 添加功能页，登陆，编撰《注册/登陆须知》，考虑第三方账号接入等

* 添加功能页，关于，描述本站的原创内容和引用内容

* 功能，ideas笔记

2017年8月24日16:46

* topic添加字段 title

* 提醒提交评论的用户，您不能以任何形式发表任何违反法律法规和道德准则的言论，否则您将承担相应的责任，任何违反法律法规的言论会被登记备案并及时删除，任何用户发表的言论系发表者个人观点、立场，与本站无关。

2017年8月25日10:40

* 应该把“第几页”改为form下拉列表模式。

2017年8月25日10:54

* 该用GET的时候还是得用GET，注意对GET到的数据做安全检查。[问题参考](https://stackoverflow.com/questions/6833914/how-to-prevent-the-confirm-form-resubmission-dialog)

2017年8月27日 02:05 为网站添加一个图标

2017年9月2日 17:43 目前移动端还是丑的很，考虑一下找个新的模板

2017年9月2日 22:51 申请google的reCAPTCHA作为人机挑战工具

2017-11-10 23:49:19 取消“梯子”、“传送”模块


# Refs

* document.getElementById("title\_index").innerHTML="吾爱吾庐-改变标题";
* $("#title\_index").innerHTML="吾爱吾庐-改变标题-AJAX";
