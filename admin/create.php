<?php
require_once '../config/db.php';


if(isset($_POST) && !empty($_POST) && $_POST['type'] != ''){
    $item = R::dispense( 'questions' );

    $item->query = $_POST["query"];
    $item->answer = json_encode($_POST["answer"]);
    $item->answer_type = $_POST["type"];
    $item->second_type = $_POST["second_type"];
    $item->q_number = $_POST["q_number"];
    if(isset($_POST["keyboard"])){
        $k_array = [];

        foreach ($_POST["keyboard"] as $key){
            $k_array[] = implode(';', $key);
        }

        $item->keyboard = implode('|', $k_array);
    }

    $id = R::store( $item );

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
        <div class="col-12">
            <form action="create.php" method="post">
                <div class="form-row type">
                    <div class="form-group col-md-12">
                        <label for="type">Тип</label>
                        <select class="form-control" id="type" name="type">
                            <option value="" disabled selected>- Виберіть тип -</option>
                            <option value="text">Текстове</option>
                            <option value="answer">Питання</option>
                            <option value="not_quest">Не квестове</option>

                        </select>
                    </div>
                </div>

                <div class="form-row answer">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Номер питання</label>
                        <input type="text" name="q_number" class="form-control" id="inputEmail4" placeholder="Номер питання">
                    </div>
                </div>

                <div class="form-row text answer not_quest" style="display: none;">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Запит</label>
                        <input type="text" name="query" class="form-control" id="inputEmail4" placeholder="Запит">
                    </div>
                </div>
                <div class="form-row text answer not_quest" style="display: none;">
                    <div class="form-group col-md-12">
                        <label for="textarea">Відповідь</label>
                        <div class="textareas">
                            <textarea class="form-control" id="textarea" rows="5" name="answer[]" style="margin-bottom: 15px;"></textarea>
                        </div>
                        <a href="#" id="addAnswer">Добавити ще відповідь</a>
                        <a href="#" id="delAnswer">Видалити останню відповідь</a>
                    </div>
                </div>
                <div class="form-row answer not_quest" style="display: none;">
                    <div class="form-group col-md-12">
                        <label for="inputAddress">Клавіатура (через кому - це один рядок, а через крапку з комою наступний)</label>
                        <div class="keyRow" style="margin-bottom: 20px;" data-row="1">
                            <h3>Ряд 1</h3>
                            <input type="text" class="form-control" name="keyboard[1][]" id="inputAddress" placeholder="Клавіатура" style="margin-bottom: 10px;">
                            <a href="#" id="addBttn">Добавити ще кнопку</a>
                            <a href="#" id="delBttn">Видалити останню кнопку</a>
                        </div>
                        <a href="#" id="addRow">Добавити ще рядок</a>
                        <a href="#" id="delRow">Видалити останній рядок</a>
                    </div>
                </div>



                <div class="form-row type">
                    <div class="form-group col-md-12">
                        <label for="second_type">Тип</label>
                        <select class="form-control" id="second_type" name="second_type">
                            <option value="" disabled selected>- Виберіть тип -</option>
                            <option value="last">Останнє</option>
                            <option value="right">Правильне</option>
                            <option value="right_end" <?= ($second_type == 'right_end') ? 'selected' : ''?>>Правильне і останнє</option>

                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Добавити</button>
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
