<?php
/**
 * Created by PhpStorm.
 * User: hanxinyu
 * Date: 2018/1/18
 * Time: 下午3:23
 */
namespace core\lib;
use core\lib\conf;
class model extends \PDO
{
    public function __construct(){
        $database = conf::all('database');
        try{
            parent::__construct($database['DSN'],$database['USERNAME'],$database['PASSWD']);
        }catch (\PDOException $e){
            p($e->getMessage());
        }
    }
}