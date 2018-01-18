<?php
namespace core;
class imooc
{
    public static $classMap = array();
    static public function run()
    {
        p('ok');
        $route = new \core\route();
    }

    static public function load($class)
    {
        //自动加载类库
        $class = str_replace('\\','/',$class);
        if (isset($classMap[$class])){
            return true;
        }
        $file = IMOOC.'/'.$class.'.php';
        if (is_file($file)){
            include $file;
            self::$classMap[$class] = $class;
        }else{
            return false;
        }
    }
}