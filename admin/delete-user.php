<?php
require_once '../config/db.php';
$item = R::load( 'users', $_GET['id'] );

R::trash( $item ); //for one bean

header('Location: users.php');