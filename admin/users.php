<?php
require_once '../config/db.php';
require_once 'controller/Paginator.php';

$per_page = 10;

$page = ($_GET['page']) ? $_GET['page'] : 1;
$chat = ($_GET['chat']) ? $_GET['chat'] : '';
if(isset($_GET['chat'])){
    $items = R::find( 'users' , ' chat_id = :chat_id ', [ ':chat_id' => $chat ] );
} else {
    $items = R::findAll( 'users' , ' ORDER BY id DESC LIMIT ' . $per_page . ' OFFSET ' . ( ( $page - 1 ) * $per_page ) );
}

$count = R::count( 'users' );
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


<div class="container" style="margin-top: 50px;">
    <div class="row">
        <form action="users.php" method="get">
            <div class="form-row answer">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">ID чату</label>
                    <input type="text" name="chat" class="form-control" id="inputEmail4" placeholder="ID чату" value="<?= $chat;?>">
                </div>
            </div>
        </form>

        <?php if(isset($_GET['chat'])):?>
            <a href="users.php">Всі користувачі</a>
        <?php endif;?>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Chat ID</th>
                        <th scope="col">Right Answers</th>
                        <th scope="col">Answers</th>
                        <th scope="col">Ends?</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(isset($_GET['chat'])){
                    $i = 1;
                } else {
                    $i = $count - (($page - 1) * $per_page);
                }
                foreach ($items as $item):?>
                    <tr>
                        <th scope="row"><?= $i?></th>
                        <td><?= $item->chat_id?></td>
                        <td><?= $item->right?></td>
                        <td><?= $item->answers?></td>
                        <td><?= ($item->ends == 1) ? 'Yes' : 'No'; ?></td>
                        <td style="font-size: 24px;">
                            <a href="update-user.php?id=<?= $item->id?>"><i class="far fa-edit"></i></a>

                            <a href="delete-user.php?id=<?= $item->id?>"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php
                    $i--;
                endforeach;?>
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
