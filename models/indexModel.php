<?php
class indexModel{
    public $db;
     
    public function CheckUserLogin($username,$password){

        $query= "SELECT  count(*) FROM usuarios WHERE username='{$username}' AND password='{$password}'";
        $stmt=$this->db->prepare($query)->execute();
        print_r($stmt);exit;
        return $stmt;
    }

    public function UserRegister($username,$password){
        $query="INSERT INTO usuarios (username,password) VALUES ('".$username."','".$password."')";
        $stmt=$this->db->query($query);
        return 1;
    }
}