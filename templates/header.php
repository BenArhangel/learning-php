<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Мой блог' ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="icon" href="https://img.icons8.com/officel/16/blog.png" alt="blog"/>
    <link rel="stylesheet" href="/www/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
   
<script src="www/styling/script.js"> </script>

</head>
<body class="body">
    <div class="navbar">
        
    <div class="logo-container">
        <header  class="logo">
            Мой Блог
        </header>

    </div>
        

        <div class="links " id="links-no-display">
            <a class="home" href="/www/index.php/main">ГЛАВНАЯ</a>
            <a class="link" href="/about-me">ОБО МНЕ</a>
            <a class="link two-words" href="/www/articles/create">СОЗДАТЬ СТАТЬЮ</a>
    <?php if (!empty($user)) { ?>
        <a class="link two-words" href="/www/users/account">ЛИЧНЫЙ КАБИНЕТ</a> <?php } ?>
    
</div>
     
            <div class="regLogIn">
            

                    <?php if(!empty($user)){ echo 'Привет, ' ?><a class="hello-user" href="/www/users/account"><?=  $user->getNickname()?></a> <?= '' ?>
                    
                         <a class="login" href="/www/users/logout">Выйти</a><?php } ?>
                 <?php if (empty($user)){?><a class="login" href="/www/users/authorization">ВОЙТИ</a>
                    <a class="register" href="/www/users/register">РЕГИСТРАЦИЯ</a> <?php } ?>

            </div>
                    <div class="nav-menu">
                        <div class="stripe"></div>
                        <div class="stripe"></div>

                        <div class="stripe"></div>

                    </div>
                </div>
            
    
                

