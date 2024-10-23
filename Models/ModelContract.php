<?php
namespace Models;
interface  ModelContract{
    public static function all():array;
    public  function fill(array $data);
    public function toArray():array;
    public static function find($id);
    public function save():bool;
    public function delete():bool;

};
?>