
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContentCreation</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="/js/playerjs.js" type="text/javascript"></script>
</head>

<body>

<aside class="sidebar-menu">
    <div class="sidebar-menu__header">
        <img src="/img/menu-cut.png" alt="Меню" class="sidebar-menu__menu-icon">
        <img src="/img/logo.png" alt="Content Creation" class="logo">
    </div>
    <div class="sidebar-menu__user-info">
        <img src="/img/avatar.png" alt="Аватар" class="sidebar-menu__user-avatar">
        <div class="sidebar-menu__user-wrapper">
            <?php if($_SESSION['id'] == ""): ?>
            <div class="sidebar-menu__user-name">Гость</div>
            <div class="sidebar-menu__subs"></div>
            <a href="/login" class="sidebar-menu__exit-button">Войти</a>
            <?php endif; ?>
            <?php if(isset($_SESSION['id'])): ?>
            <div class="sidebar-menu__user-name"><?=$_SESSION['login']?></div>
            <div class="sidebar-menu__subs"><?=$_SESSION['subs']?></div>
            <a href="main/exitfor" class="sidebar-menu__exit-button">Выйти</a>
            <?php endif; ?>
        </div>
    </div>
    <nav class="nav">
        <a href="/" id="home" class="nav__item">Главная</a>
        <a href="/subs" id="subs" class="nav__item">Подписки</a>
        <a href="/channel" id="my-channel" class="nav__item">Мой канал</a>
        <h3 class="nav__title">Библиотека</h3>
        <a href="/history" id="history" class="nav__item">История</a>
        <a href="/channels" id="channels" class="nav__item">Каналы</a>
        <a href="/music" id="music" class="nav__item">Музыка</a>
        <h3 class="nav__title">Библиотека</h3>
        <a href="" id="theme" class="nav__item">Светлая тема</a>
        <?php if ($_SESSION['login']): ?>
        <a href="http://contentcreation/settings" id="settings" class="nav__item">Настройки</a>
        <form action="/upload" enctype="multipart/form-data" method="post" class="nav__item" id="upload">
            <label for="video" class="nav__label">Загрузить файл</label>
            <input type="file" name="video" id="video" class="nav__file-input">
        </form>
        <?php endif; ?>
    </nav>
</aside>
<?php include 'app/views/'.$content; ?>

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
</body>

</html>