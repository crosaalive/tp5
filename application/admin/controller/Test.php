<?php
namespace app\admin\controller;
use think\view;
use think\Config;
use think\Controller;
class Test extends controller
{
    public function index()
    {
        //$this->view->engine->layout("layout");    
        return $this->fetch();

    }
}