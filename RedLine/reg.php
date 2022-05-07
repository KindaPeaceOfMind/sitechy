<?php
    session_start();
    include_once('header.html');
?>
<h2 class="index_title_first">Регистрация</h2>
<form class="profile_form" action="save_user.php" method="post">
    <p>
        <label>Ваш логин:</label><br>
        <input name="login" type="text" size="20" maxlength="20">
    </p>
    <p>
        <label>Ваш пароль:</label><br>
        <input name="password" type="password" size="20" maxlength="25">
    </p>
    <p>
        <label>Ваш email:</label><br>
        <input name="email" type="text" size="20" maxlength="25">
    </p>
    <p>
        <input type="submit" name="submit" value="Зарегистрироваться">
    </p>
</form>
<?php
    include_once('footer.html');
?>