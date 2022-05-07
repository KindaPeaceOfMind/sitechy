<?php
include_once('header.html');

if(isset($_POST['login'])){
   $login = $_POST['login']; 
   if ($login == '') { 
      unset($login);
   } 
}
if(isset($_POST['password'])){
   $password=$_POST['password']; 
   if ($password =='') { 
      unset($password);
   } 
}
if (empty($login) or empty($password)){
   exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}
$login = stripslashes($login);
$password = stripslashes($password);

$login = htmlspecialchars($login);
$password = htmlspecialchars($password);

$login = trim($login);
$password = trim($password);

include_once("bd.php");
// проверка на существование пользователя с таким же логином
$result = mysqli_query($db,"SELECT id FROM user WHERE login='$login'");
if(empty($result)){
   exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}
$result2 = mysqli_query($db,"INSERT INTO user (login,password) VALUES ('$login','$password')");
if ($result2){
   echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='profile.php'>Профиль</a>";
}else{
   echo "Ошибка! Вы не зарегистрированы.";
}
?>	
    
<?php
   include_once('footer.html');
?>