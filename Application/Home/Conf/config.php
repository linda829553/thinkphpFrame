<?php
return array(
	//'配置项'=>'配置值'
	// 添加数据库配置信息
	'DB_TYPE'=>'mysql',// 数据库类型
	'DB_HOST'=>'127.0.0.1',// 服务器地址
	'DB_NAME'=>'thinkphp',// 数据库名
	'DB_USER'=>'root',// 用户名
	'DB_PWD'=>'',// 密码
	'DB_PORT'=>3306,// 端口
	'DB_PREFIX'=>'think_',// 数据库表前缀
	'DB_CHARSET'=>'utf8',// 数据库字符集
	'DEFAULT_CHARSET'=>'utf8', // 模板字符集


	'URL_ROUTER_ON'   => true, //开启路由
	'URL_ROUTE_RULES' => array( //定义路由规则 
	    'edit/:id'    => 'Form/edit',
	    'read/:id'    => 'Form/read',
	    'new/:year\d/:month\d'  => 'News/archive',
	),
);