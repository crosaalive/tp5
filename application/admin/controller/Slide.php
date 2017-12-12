<?php
namespace app\admin\controller;
use think\view;
use think\Config;
use think\Controller;
class Slide extends controller
{
    public function index()
    {
        //echo Config::get('model_name');
         // $this->view->engine->layout("layout");    
    	return $this->fetch('index');
    }
}
