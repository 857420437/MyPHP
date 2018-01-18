<?php
/**
 * Created by PhpStorm.
 * User: hanxinyu
 * Date: 2018/1/18
 * Time: 上午10:13
 */
namespace core\lib;
class route
{
    public $ctrl;
    public $action;
    public function __construct()
    {
        //
        /**
         * 1.隐藏index.php
         * 2.获取URL 参数部分
         * 3/返回对应控制器和方法
         */
        if (isset($_SERVER['REQUEST_URI'])&&$_SERVER['REQUEST_URI']!='/'){
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/',trim($path,'/'));
            if (isset($patharr[0])){
                $this->ctrl = $patharr[0];
            }
            if (isset($patharr[1])){
                $this->action = $patharr[1];
            }else{
                $this->action = 'index';
            }
        }else{
            $this->ctrl = 'index';
            $this->ctrl = 'index';
        }
    }
}