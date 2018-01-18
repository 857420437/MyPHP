<?php

namespace core;
class imooc
{
    public static $classMap = array();

    static public function run()
    {
        p('ok');
        $route = new \core\lib\route();
    }

    static public function load($class)
    {
        //自动加载类库
        if (isset($classMap[$class])) {
            return true;
        } else {
            $class = str_replace('\\','/',$class);
            $file = IMOOC . '/' . $class . '.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }
}