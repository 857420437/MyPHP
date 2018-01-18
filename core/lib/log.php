<?php
/**
 * Created by PhpStorm.
 * User: hanxinyu
 * Date: 2018/1/18
 * Time: 下午5:17
 */
namespace core\lib;
class log
{
    static $class;
    static public function init(){
        $drive = conf::get('DRIVE','log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }

    static public function log($name){
        self::$class->log($name);
    }
}