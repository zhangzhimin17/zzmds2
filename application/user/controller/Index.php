<?php
namespace app\user\controller;

use think\Db;
use think\Controller;

class Index extends Controller{
    public function all(){
        $data = Db::table('users')->select();

        //指派数据到模板
        $this->assign('users', $data);

        //渲染模板，模板在哪里
        return $this->fetch();
    }
}