<?php
/**
 * Created by PhpStorm.
 * User: hanxinyu
 * Date: 2018/1/16
 * Time: 下午5:05
 */
function p($var){
    if (is_bool($var)){
        var_dump($var);
    }else if (is_null($var)){
        var_dump(NULL);
    }else {
        echo "gogooogogogogogog";
    }
}