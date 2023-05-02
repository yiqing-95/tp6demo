<?php

namespace app\controller;

use app\BaseController;

use think\facade\View;
use think\Request;

class Chat extends BaseController
{
    public function index($name = 'chat')
    {
        // 在控制器中临时关闭layout功能
//        View::config(['layout_on'=> false]);
        return  View::fetch(
            "index",
            [

            ]);
    }

}