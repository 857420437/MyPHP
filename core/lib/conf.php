<?php
/**
 * Created by PhpStorm.
 * User: hanxinyu
 * Date: 2018/1/18
 * Time: 下午4:39
 */

namespace core\lib;
class conf
{
    static public $conf = array();

    static public function get($name, $file)
    {
        /**
         *
         */
        if (isset(self::$conf[$file])) {
            return self::$conf[$file][$name];
        } else {
            $path = IMOOC . '/core/config/' . $file . '.php';
            if (is_file($path)) {
                $conf = include $path;
                if (isset($conf[$name])) {
                    self::$conf[$file] = $conf;
                    return $conf[$name];
                } else {
                    throw new \Exception('没有这个配置项' . $name);
                }
            } else {
                throw new \Exception('找不到配置文件' . $file);
            }
        }

    }

    public static function all($file){
        if (isset(self::$conf[$file])) {
            return self::$conf[$file];
        } else {
            $path = IMOOC . '/core/config/' . $file . '.php';
            if (is_file($path)) {
                $conf = include $path;
                self::$conf[$file] = $conf;
                return $conf;
            } else {
                throw new \Exception('找不到配置文件' . $file);
            }
        }
    }
}