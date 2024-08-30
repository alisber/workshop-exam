<?php

require_once '../App.php';
if($request->hasRequest($request->post('submit'))){

$name = $request->post('name');
$desc = $request->post('desc');
$price = $request->post('price');
$img = $request->file('img');
$img = new Img($img);
$result = $product->addProduct($name , $desc , $price , $img->new_name);
if($result){
    $img->upload();
    $request->redirect("../index.php");
}

}else{
    $request->redirect("../index.php");
}

?>