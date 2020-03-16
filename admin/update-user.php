<?php
require_once '../config/db.php';

$item = R::load( 'users', $_GET['id'] );

if(!$item){
    header('Location: users.php');
}

if(isset($_POST) && !empty($_POST)){
    $item->ends = $_POST["ends"];

    R::store( $item );

    header('Location: index.php');
}

$ends = $item->ends;

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
        <div class="col-12">
            <form action="<?= $_SERVER['REQUEST_URI']?>" method="post">

                <div class="form-row text answer not_quest">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Ends</label>
                        <input type="text" name="ends" class="form-control" id="inputEmail4" placeholder="Ends" value="<?= $ends?>">
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
