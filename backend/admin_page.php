<?php
session_start();
$login = $_SESSION['login'];
if (!isset($_SESSION['id']) || !isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Кабинет администратора</title>
  </head>
  <body>
    <nav class="navbar top-fixed navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <a class="btn btn-outline-light" href="unauth.php" role="button">Выйти</a>
    </nav>
              
    <div class="container-fluid">
        <div class="row container-fluid-content">
            <div class="d-flex col-12 col-sm-3 col-lg-2 sidebar flex-column text-center">
                <div><img src="admin.png" alt="admin" class="sidebar-icon"></div>
                <div class="navbar-nav navbar-nav-margin">
                    <a class="nav-item nav-link disabled admin-name" href="#"><?= $login?></a>
                    <a class="nav-item nav-link text-dark" href="#">Сообщения</a>
                    <span class="text-light-grey mb-1">
                        <?php 
                            include "db.php";
                            $month_name = [
                                'января',
                                'февраля',
                                'марта',
                                'апреля',
                                'мая',
                                'июня',
                                'июля',
                                'августа',
                                'сентября',
                                'октября',
                                'ноября',
                                'декабря',
                            ];
                            $new_last_visit = date("d {$month_name[date('n') - 1]} Y G:i (e)");
                            $query = "SELECT last_visit FROM admins WHERE login='$login'";
                            $result = mysqli_query($link, $query);
                            $result_assoc = mysqli_fetch_assoc($result);
                            if ($result_assoc['last_visit'] == '') {
                                echo 'Вы не посещали ранее эту страницу';
                                $query = "UPDATE admins SET last_visit='$new_last_visit' WHERE login='$login'";
                                mysqli_query($link, $query);
                            } else {
                                echo "Последний раз Вы заходили {$result_assoc['last_visit']}";
                                $query = "UPDATE admins SET last_visit='$new_last_visit' WHERE login='$login'";
                                mysqli_query($link, $query);
                            } 
                        ?>
                    </span>
                </div>
            </div>

            <div class="col messages">
                <?php
                    include "db.php";
                    $query = "SELECT * FROM messages;";
                    $result = mysqli_query($link, $query);
                    while ($messages_data = mysqli_fetch_assoc($result)) {
                        $messages[] = $messages_data;
                    }
                    $message_item = [];
                    foreach ($messages as $index => $message) {
                        $message_index = $index + 1;
                        $email = $message['email'];
                        $message_content = $message['message'];
                        $name = $message['full_name'];
                        $date_created = $message['date_created'];
                        // Проверяется, прочитано ли было ранее сообщение + задаётся цвет значка
                        $is_read_check = "SELECT login, message FROM is_read WHERE login='$login' AND message='$message_content'";
                        $is_read_check_assoc = mysqli_fetch_assoc(mysqli_query($link, $is_read_check));
                        $sign_color = ($is_read_check_assoc == NULL) ? "bg-danger" : "bg-success";
                        $message_card = "<div class=\"card mb-2\">" . "<h5 class=\"card-header d-flex align-items-center\"><div class=\"sign badge $sign_color\"> </div>Сообщение №" .
                                        "$message_index от: " . "$email ($name)" . "</h5><div class=\"card-body bg-milky\"><p class=\"card-text\">" . 
                                        "$message_content" . "</p></div><div class=\"card-footer text-muted text-center\">" . "$date_created" .
                                        "</div></div>";
                        $message_item[] = $message_card;
                        if ($sign_color == "bg-danger") {
                            $query_add_message_status = "INSERT INTO is_read (login, message) VALUES ('$login', '$message_content')";
                            mysqli_query($link, $query_add_message_status);
                        }
                    }
                    for ($index = count($message_item) - 1; $index >= 0; $index--) {
                        echo "$message_item[$index]";
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>