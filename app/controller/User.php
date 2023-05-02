<?php
declare (strict_types = 1);

namespace app\controller;

use app\model\User as ModelUser;
use think\facade\View;
use think\Request;



class User  
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        /*
视图中可以使用的函数 ，### 表示占位
{$time|date='Y--m-d H:i:s',###}<br>
{$str|substr=###,0,5|strtoupper}
        */
       
        return  View::fetch(
            "index",
            [
            // 'list'=> ModelUser::order('user_id','DESC')->select(),
            'list'=> ModelUser::order('user_id','DESC')->paginate(5),
        ]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
