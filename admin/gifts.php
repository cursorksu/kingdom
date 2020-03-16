<?php
require_once '../config/db.php';
require_once 'controller/Paginator.php';

$per_page = 10;

$page = ($_GET['page']) ? $_GET['page'] : 1;
$items = R::findAll( 'gifts' , ' ORDER BY id DESC LIMIT ' . $per_page . ' OFFSET ' . ( ( $page - 1 ) * $per_page ) );
$count = R::count( 'gifts' );
$links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;

$Paginator  = new Paginator( $page, $per_page, $count );

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>

<header></header>

<div class="container">
    <div class="row">
        <div class="col-12" style="margin-top: 50px;margin-bottom: 50px;">
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Назва</th>
                    <th scope="col">Роки</th>
                    <th scope="col">Кількість</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($items as $item):?>
                    <tr>
                        <th scope="row"><?= $item->id?></th>
                        <td><?= $item->g_name?></td>
                        <td><?= $item->age; ?></td>
                        <td><?= $item->count?></td>
                        <td style="font-size: 24px;">
                            <a href="update-gifts.php?id=<?= $item->id?>"><i class="far fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>

            <?php echo $Paginator->createLinks( $links, 'pagination pagination-sm' ); ?>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="js/custom.js"></script>

</body>
</html>
