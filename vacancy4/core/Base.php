<?php

class Base {

    public $db;

    public function __construct()
    {

        try {
           $this->db = new PDO("mysql:host=localhost;dbname=signup;charset=utf8",'root','');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }

        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function selectOne($query) {

        $sql = $this->db->prepare($query);
        $sql->execute();
        $data = $sql->fetch(PDO::FETCH_ASSOC);

        return $data ? $data : [];


    }
}