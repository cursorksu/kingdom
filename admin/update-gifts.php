<?php
require_once '../config/db.php';

$item = R::load( 'gifts', $_GET['id'] );

if(!$item){
    header('Location: gifts.php');
}

if(isset($_POST) && !empty($_POST)){
    $item->g_name = $_POST["g_name"];
    $item->age = $_POST["age"];
    $item->count = $_POST["count"];

    R::store( $item );

    header('Location: gifts.php');
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
                        <label for="">Назва</label>
                        <input id = "g_name" name="g_name" type="text" class="text form-control" placeholder="Ім'я та фамілія" required value="<?= $item->g_name?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="">Роки</label>

                        <input id = "age" name="age" type="text" class="text form-control" placeholder="Адреса проживання" required value="<?= $item->age?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="">Кількість</label>

                        <input id = "count" name="count" type="tel" class="text form-control" placeholder="Кількість" value="<?= $item->count?>">
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
