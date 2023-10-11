<?php 
namespace App\Models;
use App\DB;
class Model{
    static $table;
    public static function all(){
        $db = new DB();
        return $db->all(static::$table, static::class);
    }
    public function save (){
        $fields = get_object_vars($this);
        $db = new DB();
        $db->insert(static::$table, $fields);
    }
}