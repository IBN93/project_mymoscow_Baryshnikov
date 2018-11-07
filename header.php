<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.8, maximum-scale=1.5">
    <link rel="shortcut icon" href="icons/spasskaya-tower.png">
    <title><?php echo $title;?></title>
    <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php echo $headerStyle;?>
</head>
<body>
    <div class="<?php echo $stripe;?>">
        <header <?php echo $headerClass;?>>
            <div class="stripe">
                <div class="brand-logo">
                    <a href="index.php"><img src="icons/spasskaya-tower.png" alt="tower" class="logo"></a>
                    <span class="brand">MyMoscow</span>
                </div>
                <nav class="ref">
                    <a href="<?php echo $navMain;?>">Главная</a>
                    <a href="<?php echo $navOffers;?>">Наши услуги</a>
                    <a href="<?php echo $navAbout;?>">О компании</a>
                    <a href="<?php echo $navContacts;?>">Контакты</a>
                    <a href="<?php echo $navFeedback;?>">Отзывы</a>
                </nav>
                <div class="menu-button">
                    <div class="menu-button-stripe-1"></div>
                    <div class="menu-button-stripe-2"></div>
                    <div class="menu-button-stripe-3"></div>
                </div>
            </div>
            <div class="header-center">
                <h1>Необычная Москва</h1>
                <?php echo $headerCenter;?>
            </div>
            <?php echo $aboutButton;?>
        </header>
    </div>
        <div class="wrapper">