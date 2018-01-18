<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架.
 */
define('MYPHP',realpath('./'));
define('CORE',MYPHP.'/core');
define('APP',MYPHP.'/app');g

define('DEBUG',true);

if (DEBUG){
    ini_set('display_error','On');
}else{
    ini_set('display_error','Off');
}

include CORE.'/common/function.php';
p(MYPHP);
