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

mysql\> 
