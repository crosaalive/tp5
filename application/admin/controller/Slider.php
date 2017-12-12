<?php
namespace app\admin\controller;
use think\view;
use think\Config;
use think\Controller;
class Slider extends controller
{
    public function index()
    {

    	return $this->fetch('index');
    }
}
