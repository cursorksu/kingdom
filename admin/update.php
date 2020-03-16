<?php
require_once '../config/db.php';

$item = R::load( 'users', $_GET['id'] );

if(!$item){
    header('Location: index.php');
}

if(isset($_POST) && !empty($_POST)){
    $item->name = $_POST["name"];
    $item->address = $_POST["address"];
    $item->email = $_POST["email"];
    $item->phone = $_POST["phone"];
    $item->can_be = (int)$_POST["license"];
    $item->gift_id = $_POST["gift"];

    R::store( $item );

    header('Location: index.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Create</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">


</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12" style="margin-top: 50px;">
            <form action="<?= $_SERVER['REQUEST_URI']?>" method="post">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="">Ім'я та фамілія</label>
                        <input id = "name" name="name" type="text" class="text form-control" placeholder="Ім'я та фамілія" required value="<?= $item->name?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="">Адреса проживання</label>

                        <input id = "address" name="address" type="text" class="text form-control" placeholder="Адреса проживання" required value="<?= $item->address?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="">Контактний телефон</label>

                        <input id = "phone" name="phone" type="tel" class="text form-control" placeholder="Контактний телефон" value="<?= $item->phone?>">
                    </div>
                </div>
                <div class="form-row answer">
                    <div class="form-group col-md-12">
                        <label for="">Електронна адерса</label>

                        <input id = "email" name="email" type="email" class="text form-control" placeholder="Електронна адерса" value="<?= $item->email?>">
                    </div>
                </div>
                <div class="form-row answer">
                    <div class="form-group col-md-12">
                        <label for="">Дитина може бути присутня на святі в зазначену дату</label>

                        <input id = "can_be" name="license" type="text" class="text form-control" placeholder="Дитина може бути присутня на святі в зазначену дату" value="<?= $item->can_be?>">
                    </div>
                </div>
                <div class="form-row answer">
                    <div class="form-group col-md-12">
                        <label for="">ID подарунка</label>

                        <input id = "gift" name="gift" type="text" class="text form-control" placeholder="ID подарунка" value="<?= $item->gift_id?>">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Змінити</button>
            </form>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="js/custom.js"></script>

</body>
</html>
