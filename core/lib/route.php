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
    public function __construct()
    {
        //
        /**
         * 1.隐藏index.php
         * 2.获取URL 参数部分
         * 3/返回对应控制器和方法
         */
        p($_SERVER);
    }
}