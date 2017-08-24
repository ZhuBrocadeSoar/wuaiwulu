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
			
mysql\> 
		
### Codes Stats
	
2017-08-24-00:12 创建了数据表 topic ，接下来的任务是调试代码尝试数据库的连接，并在数据表中（通过终端）插入合适的测试用数据，插入数据后尝试实现动态读取列表中某页的5条博文并按照预定的样式显示到前端，并且实现翻页按钮。在动态列表内容页实现后，尝试动态主题内容页的获取和显示，再之后尝试markdown编辑器的嵌入和使用来完成网站初步的博客功能。在这之间或之后，需要实现用户登陆功能使显示内容按用户的不同而不同。在之后开发用户注册和邮箱验证功能，在之后实现管理员审核、管理用户的功能。

2017-08-24-22:05 数据表topic结构已更新，如前所示。目前已经完成blog模块的列表内容页的开发。接下来需要在blog模块中实现主题内容页的开发。

### Ideas

2017年8月24日01:14 

* 添加功能页，传送，布置各个平台的链接

* 添加功能页，登陆，编撰《注册/登陆须知》，考虑第三方账号接入等

* 添加功能页，关于，描述本站的原创内容和引用内容

* 功能，ideas笔记

2017年8月24日16:46

* topic添加字段 title

* 提醒提交评论的用户，您不能以任何形式发表任何违反法律法规和道德准则的言论，否则您将承担相应的责任，任何违反法律法规的言论会被登记备案并及时删除，任何用户发表的言论系发表者个人观点、立场，与本站无关。
