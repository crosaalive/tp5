<?php
namespace app\portal\controller;
use think\Controller;
use think\config;
use think\view;
use think\Request;

class Index extends Controller
{
      public function index(request $request)
    {
    	echo input('id')."____<br>";	
    	$this->assign('id',Request::instance()->param('id'));
    	
    	// dump(Config::get());
    	$cityName = $request->controller();
        $this->assign('city',$this->city($cityName));
    	$this->assign('ceshi','momoda');
    	return $this->fetch('index');
    }

    protected function city($name)
    {
        //	和$name这个城市相关的处理
         return '当前控制器名字：' . $name;
    }
}
