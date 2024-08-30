<?php

require_once '../App.php';
$id= $request->get('id');
if($request->hasRequest($request->post('submit'))){

}else{
    $request->redirect("../edit.php?id=$id");
}

?>