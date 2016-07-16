<?php

class Db {

    private static $db;

    private function __construct() {
        
    }

    /**
     * 
     * @return MyMysqli
     */
    static function get() {
        if (self::$db === null) {
            self::$db = new MyMysqli("localhost", "root", "", "db_shop");
        }
        return self::$db;
    }

}
