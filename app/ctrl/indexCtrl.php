<?php
/**
 * Created by PhpStorm.
 * User: hanxinyu
 * Date: 2018/1/18
 * Time: 下午2:55
 */
namespace app\ctrl;
class indexCtrl extends \core\imooc {
    public function index(){

        $temp = \core\lib\conf::get('CTRL','route');
        print_r($temp);
        $data = 'hello world';
        $title = '视图';
        $this->assign('title',$title);
        $this->assign('data',$data);
        $this->display('index.html');
    }
}