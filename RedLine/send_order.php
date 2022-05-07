<?php
session_start();
include_once('bd.php');
include_once('header.html');

if(empty($_SESSION['login']) or empty($_SESSION['id'])){
  echo 'Ошибка авторизации';
}else{
  $type = $_POST['type'];
  $title = $_POST['title'];
  $description = $_POST['description'];

  $addOrder = mysqli_query($db,"INSERT INTO orders (type,title,description)
  VALUES ('$type','$title', '$description')");

  $orderId = mysqli_insert_id($db);
  $userId = $_SESSION['id'];

  $addOrderInfo = mysqli_query($db,"INSERT INTO order_info (user_id,order_id,status)
  VALUES ('$userId','$orderId','В ожидании')");

  $addImages = mysqli_query($db,"INSERT INTO images (order_id,path) 
  VALUES ('$orderId','')");
	
  if($addOrder and $addOrderInfo and $addImages){
    echo '<h2>Вы успешно отправили заявку.</h2> <br>Мы свяжемся с вами когда заявка будет рассмотрена. <br>При желании вы можете прикрепить дополнительные изображения к заявке <a href="profile.php">на странице профиля</a> <br>или отправить их  к нам на почту info@redline.com.';
  }
}
?>
<?php
 include_once('footer.html');
?>