<?php
require_once 'config/db.php';
//var_dump($_POST);

if(isset($_POST) && !empty($_POST)){
    $item = R::dispense( 'users' );

    $item->name = $_POST["name"];
    $item->address = $_POST["address"];
    $item->email = $_POST["email"];
    $item->phone = $_POST["phone"];
    $item->can_be = (int)$_POST["license"];
    $item->gift_id = $_POST["gift"];

    $item_g = R::load( 'gifts', $_POST["gift"] );
    if($item_g->count > 0){
        $item_g->count--;
    }

    $id_g = R::store( $item_g );
    $id = R::store( $item );

//    header('Location: /');

    $json = array(
        'id' => $id,
        'name' => $_POST["name"],
        'gift' => $item_g->g_name . ' ' . $item_g->age,
        'count' => $item_g->count,
    );

    echo json_encode($json);
}