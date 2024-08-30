<?php
require_once 'MySql.php';
class Product extends MySql{
    public function getAll(){
        $query = "SELECT * FROM products";
        $result = mysqli_query($this->conn , $query);
        $products = [];
        if (!empty($result)){
            $products = mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
        return $products;
    }

    public function getOne($id){
        $query = "SELECT * FROM products where `id`=$id";
        $result = mysqli_query($this->conn , $query);
        $products = [];
        if (!empty($result)){
            $products = mysqli_fetch_assoc($result);
        }
        return $products;
    }

    public function addProduct($name , $desc , $price , $img){
        $query = "INSERT INTO products(`name`,`desc`,`price`,`img`) values('$name' , '$desc' , '$price' , '$img')";
        $result = mysqli_query($this->conn , $query);
        if($result){
            return true;
        }
        return false;
    }
    public function updateProduct($name , $desc , $price , $img , $id){
        $query = "UPDATE products set `name`='$name' , `desc`='$desc' , `price`='$price' , `img`='$img' where `id`=$id";
        $result = mysqli_query($this->conn , $query);
        if($result){
            return true;
        }
        return false;
    }
    public function delete($id){
        $query = "DELETE FROM products WHERE `id`=$id";
        $result = mysqli_query($this->conn , $query);
        if($result){
            return true;
        }
        return false;
    }
}

?>