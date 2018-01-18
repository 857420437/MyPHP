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
                unset($patharr[0]);
            }
            if (isset($patharr[1])){
                $this->action = $patharr[1];
                unset($patharr[1]);
            }else{
                $this->action = 'index';
            }
            $count = count($patharr)+2;
            $i = 2;
            $_GET = array();
            while ($i<$count){
                if (isset($patharr[$i+1])) {
                    $_GET[$patharr[$i]] = $patharr[$i + 1];
                }
                $i = $i+2;
            }
            p($_GET);
        }else{
            $this->ctrl = 'index';
            $this->ctrl = 'index';
        }
    }
}