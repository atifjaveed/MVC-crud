<?php
namespace lib\database;
 abstract class AbstractDatabase implements databaseContract{
    protected static $instance;
    private function __construct(){
        $this->init();
    }

    public static function instance(){
        return static::$instance ?? static::$instance = new static;
    }
    protected abstract function init();
 }
?>