restful

资料参考：

http://www.cnblogs.com/luyucheng/p/6048274.html


user表参考
	
	CREATE TABLE `y_user` (
	  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	  `username` varchar(20) NOT NULL DEFAULT '' COMMENT '用户名',
	  `password_hash` varchar(100) NOT NULL DEFAULT '' COMMENT '密码',
	  `password_reset_token` varchar(50) NOT NULL DEFAULT '' COMMENT '密码token',
	  `email` varchar(20) NOT NULL DEFAULT '' COMMENT '邮箱',
	  `auth_key` varchar(50) NOT NULL DEFAULT '',
	  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
	  `created_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
	  `updated_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
	  `access_token` varchar(50) NOT NULL DEFAULT '' COMMENT 'restful请求token',
	  `allowance` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'restful剩余的允许的请求数',
	  `allowance_updated_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'restful请求的UNIX时间戳数',
	  PRIMARY KEY (`id`),
	  UNIQUE KEY `username` (`username`),
	  UNIQUE KEY `access_token` (`access_token`)
	) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

