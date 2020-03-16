<?php
require_once '../config/db.php';
$item = R::load( 'users', $_GET['id'] );

$item_g = R::load( 'gifts', $item->gift_id );
$item_g->count++;

$id_g = R::store( $item_g );

R::trash( $item ); //for one bean

header('Location: index.php');