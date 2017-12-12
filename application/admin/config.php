<?php
//配置文件
return [
	    'template'	  => [
	        'layout_on'     =>  true,
	        // 模板引擎类型 支持 php think 支持扩展
	        'type'         => 'Think',
	        // 模板路径
	        'view_path'    => __DIR__.'./view/', ////
	        //视图分离  视图根所在路径 
	        //'view_base'=>__DIR__.'/../public/static/',

	        'layout_name'   =>  'layout',                ////

	        'default_template' => 'layout',       // 这里可以切换模块下的默认模板名称
	        // 模板后缀
	        'view_suffix'  => 'html',
	        // 模板文件名分隔符
	        'view_depr'    => DS,
	        // 模板引擎普通标签开始标记
	        'tpl_begin'    => '{',
	        // 模板引擎普通标签结束标记
	        'tpl_end'      => '}',
	        // 标签库标签开始标记
	        'taglib_begin' => '{',
	        // 标签库标签结束标记
	        'taglib_end'   => '}',
	    ],
];