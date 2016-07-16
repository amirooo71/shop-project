<?php

class MyMysqli extends mysqli {

    /**
     * 
     * @param type $query
     * @return mysqli_result
     * @throws Exception
     */
    public function query($query) {
        $result = parent::query($query);
        if (DEBUG && $result === false) {
            $debug = debug_backtrace();
            echo "DB ERRORE : " . $this->error . "<br>";
            echo "File : " . $debug[0]['file'] . "<br>";
            echo "Line : " . $debug[0]['line'];
            exit;
        }

        return $result;
    }

}
