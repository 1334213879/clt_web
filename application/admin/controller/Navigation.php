<?php
namespace app\admin\controller;
use think\Db;
use clt\Tree;
use think\facade\Request;
use think\facade\Env;
class Navigation extends Common
{
    // protected $dao, $categorys , $module,$groupId;
    // function initialize()
    // {
    //     parent::initialize();
    //     foreach ((array)$this->module as $rw){
    //         if($rw['type']==1 && $rw['status']==1){
    //             $data['module'][$rw['id']] = $rw;
    //         }
    //     }
    //     $this->module=$data['module'];
    //     $this->assign($data);
    //     unset($data);
    //     $this->dao = db('category');
    //     $this->groupId = Db::name('admin')->where('admin_id',session('aid'))->value('group_id');
    // }
    public function index()
    {
        $na = Db::table('navigation')->select();
  
        $this->assign('na', $na);
        $this->assign('title','导航列表');
        return $this->fetch();
    }

    public function add(){
        // $pid =  input('param.pid');
        //模型列表
        // $module = db('module')->where('status',1)->field('id,title,name')->select();
        // $this->assign('modulelist',$module);

        //父级模型ID
        //父级模型ID
        // if($pid){
        //     $vo['moduleid'] =$this->categorys[$pid]['moduleid'];
        //     $this->assign('module', $vo);
        // }
        $this->assign('title','添加导航显示');
        return $this->fetch();
    }
    public function insert(){
        $data = Request::except('file');
        $insert =[];
        $insert['name'] = $data['name'];
        $insert['status'] =$data['status'];
        $id = db('navigation')->insertGetId($data);
        if($id) {
            $result['msg'] = '添加成功!';
            cache('cate', NULL);
            $result['url'] = url('index');
            $result['code'] = 1;
            return $result;
        }else{
            $result['msg'] = '添加失败!';
            $result['code'] = 0;
            return $result;
        }
    }

    public function edit(){
        $id = input('id');
        $navigation = db('navigation')->find($id);


        $this->assign('navigation', $navigation);
        $this->assign('title','编辑');
        //模版
        return $this->fetch();
    }
    public function naupdate(){
         $data = Request::except('file');
         $updat = [];
         $id = $data['id'];
         $updat['name'] = $data['name'];
         $updat['type'] = $data['type'];

         $msg = Db::table('navigation')
                ->where('id', $id)
                ->update($updat);
        if ($msg) {
            $result['msg'] = '修改成功!';
            $result['url'] = url('index');
            $result['code'] = 1;
            return $result;
        } else {
            $result['msg'] = '修改失败!';
            $result['code'] = 0;
            return $result;
        }
    }

    public function del() {
        $catid = input('param.id');
         // $data = Request::except('file');
        $msg = Db::table('navigation')->delete($catid);
        if ($msg) {
                $result['info'] = '删除成功!';
                $result['url'] = url('index');
                $result['status'] = 1;
                return $result;
        }else{
                $result['msg'] = '删除失败!';
                $result['code'] = 0;
                return $result;

        }
    
    }

    //轮播图
    public function carousel()
    {
        $carousel = Db::table('carousel')->select();
  
        $this->assign('carousel', $carousel);
        $this->assign('title','轮播列表');
        return view('carousel');
    }
    public function carouseladd()
    {
        $this->assign('title','添加导航显示');
        return $this->fetch();
    }
    public function carouselinsert()
    {
        $data = Request::instance()->param();

        $insert =[];
        $insert['name'] = $data['name'];
        $insert['status'] =$data['status'];
        $insert['url'] = $data['avatar'];
        $msg = db('carousel')->insertGetId($insert);
        if ($msg) {
            $result['msg'] = '添加成功!';
            $result['url'] = url('carousel');
            $result['code'] = 1;
            return $result;
        } else {
            $result['msg'] = '添加失败!';
            $result['code'] = 0;
            return $result;
        }
    }
      public function carouseledit(){
        $id = input('id');
        $carousel = db('carousel')->find($id);


        $this->assign('carousel', $carousel);
        $this->assign('title','编辑');
        //模版
        return $this->fetch();
    }
    public function carouselupdate(){
         $data = Request::instance()->param();
         $updat = [];
         $id = $data['id'];
         $updat['name'] = $data['name'];
         $updat['status'] = $data['status'];
         $updat['url'] = $data['avatar'];

         $msg = Db::table('carousel')
                ->where('id', $id)
                ->update($updat);
        if ($msg) {
            $result['msg'] = '修改成功!';
            $result['url'] = url('carousel');
            $result['code'] = 1;
            return $result;
        } else {
            $result['msg'] = '修改失败!';
            $result['code'] = 0;
            return $result;
        }
    }
    public function carouseldel() {
        $catid = input('param.id');
         // $data = Request::except('file');
        $msg = Db::table('carousel')->delete($catid);
        if ($msg) {
                $result['info'] = '删除成功!';
                $result['url'] = url('carousel');
                $result['status'] = 1;
                return $result;
        }else{
                $result['msg'] = '删除失败!';
                $result['code'] = 0;
                return $result;

        }
    
    }
}