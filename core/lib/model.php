<?php
/**
 * Created by PhpStorm.
 * User: hanxinyu
 * Date: 2018/1/18
 * Time: 下午3:23
 */
namespace core\lib;
class model extends \PDO
{
    public function __construct(){
        $dsn = 'mysql:host=localhost;dbname=test';
        $username = 'root';
        $passwd = '';
        try{
            parent::__construct($dsn,$username,$passwd);
        }catch (\PDOException $e){
            p($e->getMessage());
        }
    }
}