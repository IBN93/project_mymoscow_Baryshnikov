<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {
    header('Location: admin_page.php');
    exit;
}

if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error == 0) {
        $error_text = '<div class="text-danger text-center mb-2">Неверная комбинация email и пароля.</div>';
    }
}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Войти в запись администратора</title>
    </head>
    <body>
        <div class="container">
            <h2 class="text-center">Войти в кабинет администратора</h2>
            <div class="row container-with-icon">
                <div class="col"></div>
                <img src="admin.png" alt="admin">
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col-10 col-sm-6 col-md-4">
                    <form action="auth.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleInputPassword1">Пароль:</label>
                            <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <?php echo isset($error_text) ? $error_text : '';?>
                        <div class="row justify-content-center"><button type="submit" class="btn btn-primary">Войти</button></div>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>