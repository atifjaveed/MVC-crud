<?php
namespace Models;

use lib\database\databaseContract;


class Model implements ModelContract{
    protected static $table;

    protected static function table(){
        $class= explode("\\",get_called_class());
        $class = end($class);
        return strtolower($class);
    }

    protected static function db():databaseContract {
        $class = "\\lib\\database\\".config('database.connection');
        return $class::instance();
    }

    public static function all():array {
        $result = static::db()->all(static::table());
        $return = [];
        foreach ($result as $data) {
            $model = new static;
            $model->fill($data);
            $return[] = $model;
          
        }
        return $return;
    }

  

    public static function find($id)
    {
        $data = static::db()->find(static::table(), $id);
        $return = new static();
        
        $return->fill($data);
        return $return;
    }

    public function save():bool
    {
        return static::db()->save(static::table(), $this->toArray(), $this->id);
    }

    public function delete():bool
    {
        return static::db()->delete(static::table(), $this->id);
    }

    public  function fill(array $data)
    {
        // var_dump($data);
        foreach($data as $key => $value) {
            $this->{$key} = $value;
        }
    }
    public function toArray(): array
    {
        return json_decode(json_encode($this), 1);
    }
}

?>