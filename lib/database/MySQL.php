<?php
namespace lib\database;
class MySQL extends AbstractDatabase{
    private $db;

    protected function init(){
        $config =config('database.mysql');
        $this->db = mysqli_connect($config['host'],$config['username'],$config['password'],$config['database']);
        if(!$this->db){
            echo "connection failed";
        }
    }

    public function all( string $table):array
    {
        $sql = "SELECT * FROM {$table}";
        $result = $this->db->query($sql);
        $return= [];
        while($row = $result->fetch_assoc()){
            $return[] = $row;
        }
        return $return;
    }

    public function find(string $table, $id): array
    {
        
        $result = $this->db->query("SELECT * FROM {$table} WHERE id='{$id}'");
            return $result->fetch_assoc();  

    } 

    public function save(string $table, array $data, $id=null): bool
    {
        // var_dump($table);
        if($id) {
            $fields = "";
            foreach ($data as $key => $value) {
                $fields .= "{$key} = '{$value}',";
            }
            $fields = substr($fields, 0, -1);
            $result = $this->db->query("UPDATE {$table} SET {$fields} WHERE id='{$id}'");
            return true;
        }else {
            unset($data['id']);
            $keys = "`".implode("`, `", array_keys($data))."`";
            $values = "'".implode("', '", array_values($data))."'";
            //die("INSERT INTO {$table} ({$keys}) VALUES ({$values})");
            $result = $this->db->query("INSERT INTO {$table} ({$keys}) VALUES ({$values})");
            return true;
        }
    }   
    public function delete(string $table, $id): bool
    {
        $result = $this->db->query("DELETE FROM {$table} WHERE id='{$id}'");
        return true;
    }  
};
?>