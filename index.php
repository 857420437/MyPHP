<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */
define('hanxinyu',realpath('/'));
define('CORE',IMOOC.'/core');
define('APP',IMOOC.'/app');

define('DEBUG',true);

if (DEBUG){
    ini_set('display_error','on');
}else{
    ini_set('display_error','off');
}

include CORE.'/commom/function.php';
p(IMOOC);