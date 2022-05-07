<?php
    session_start();
    include_once('header.html');

    if (empty($_SESSION['login']) or empty($_SESSION['id'])){
        include('login.html');//не авторизован
    }else{
        include('profile.html');//авторизован
    }

    include_once('footer.html');
?>
