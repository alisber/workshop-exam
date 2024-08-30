<?php


class MySql{
    private $host ="localhost" , $userName = "root" , $password = "" , $db_name = "online_shop";
    protected $conn;
    public function __construct(){
        $this->conn = mysqli_connect($this->host , $this->username , $this->password , $this->db_name);
    }
}



















?>