<?php
    session_start();
    include_once('header.html');
?>

<script>
function CloseEdit(){
    el = event.currentTarget.parentNode;
    el.childNodes[1].onclick = OpenEdit;
    el.childNodes[1].innerHTML = 'Добавить/удалить изображение';
    el.childNodes[3].outerHTML = '';
    let images = el.parentNode.childNodes[7].childNodes;
    let arrToSend = '';
    let order_id = el.parentNode.id;
    for(let i = 2; i<images.length-1; i++){
        images[i].onmouseover = '';
        images[i].onmouseout = '';
        images[i].onclick = ImgFocuser;
        arrToSend += images[i].src.slice(25) +',';
    }
    Fetcher('imgEdit.php',{path:arrToSend.slice(0,-1),id:order_id});
}
async function Fetcher(url,bodyData) {
await fetch(url, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(bodyData)
})
    .then((result) => result.ok === true ? result : false)
    .then((data) => console.log("Success", data))
    .catch(error => console.error("Error", error));
}

  
function OpenEdit(){
    el = event.currentTarget.parentNode;
    el.childNodes[1].onclick = CloseEdit;
    el.childNodes[1].innerHTML = 'Сохранить';
    let images = el.parentNode.childNodes[7].childNodes;
    for(let i = 2; i<images.length-1; i++){
        images[i].onmouseover = ()=>{images[i].style.filter= 'invert(1)'};
        images[i].onmouseout = ()=>{images[i].style.filter= ''};
        images[i].onclick = DeleteImage;
    }

    let form = document.createElement('form');
    form.action="/imgUpload.php";
    form.method="post";
    form.enctype="multipart/form-data";
    el.appendChild(form);

    let input1 = document.createElement('input');
    input1.type = "file";
    input1.name = "file[]";
    input1.multiple = true;
    form.appendChild(input1);

    let input2 = document.createElement('input');
    input2.style.display='none';
    input2.name = 'order_id';
    input2.type = "text";
    input2.value = event.currentTarget.parentNode.parentNode.id;
    form.appendChild(input2);

    let input3 = document.createElement('input');
    input3.type = "submit";
    input3.value = "Отправить";
    form.appendChild(input3);
}
function DeleteImage(){
    event.currentTarget.outerHTML='';
}
function ImageAdder(str){
    if(str==''){return str}
    let mass = str.split(',');
    str='';



    for(let i = 0; i<mass.length; i++){
        str += '<img class="imgNum'+i+'" onclick="ImgFocuser(this)" src="userfiles/'+mass[i]+'">'
    }
    return str;
};
</script>
<?php
if (empty($_SESSION['login']) or empty($_SESSION['id'])){
    echo ('<p class="index_title_first">Авторизация</p>
        <form class="profile_form" action="testreg.php" method="post"><p>
                <label>Ваш логин:</label><br>
                <input name="login" type="text" size="15" maxlength="15">
            </p>
            <p>
                <label>Ваш пароль:<br></label>
                <input name="password" type="password" size="15" maxlength="15">
            </p>
            <p>
                <input type="submit" name="submit" value="Войти"><br>
                <a href="reg.php">Зарегистрироваться</a> 
            </p>
        </form><br>');
}else{
    echo '<p class="index_title_first"> Приветствуем, '.$_SESSION['login'].
    '. <a style="font-size:24px;" href="exit.php"> Выход</a></p>
    <p class="index_title_2">Ваши заказы:</p><br><div>';
    include_once('bd.php');
    $userId = $_SESSION['id'];

    $result = mysqli_query($db,"SELECT * FROM order_info
        JOIN orders ON order_info.order_id = orders.id
        JOIN images ON images.order_id = orders.id
        WHERE order_info.user_id = '$userId'
    ");
    while($data = mysqli_fetch_assoc($result)){
        echo '
            <div id="'.$data['id'].'" class="orders">
                <div class="index_title_2 orderEditor">
                    <p onclick="OpenEdit()">Добавить/удалить изображение</p>
                </div>
                <p class="index_title_first">'.$data['title'].'</p>
                <table>
                    <tr>
                        <td>Задача: '.$data['type'].'</td>
                        <td>Дата начала работ: '.$data['start_time'].'</td>
                    </tr>
                    <tr>
                        <td>Статус заявки: '.$data['status'].'</td>
                        <td>Дата предположительного конца работ: '.$data['end_time'].'</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding: 20px;">Описание заявки: '.$data['description'].'</td>
                    </tr>
                </table>
                <div class="order_images">
                    <script>
                        document.write(ImageAdder("'.$data['path'].'"))
                    </script>
                </div>
            </div>';
    }
    echo '</div>';
}
?>
<script>
    function ImgFocuser(){
        obj = event.currentTarget;
        if(obj.style.animationName != 'img_focus'){
            obj.style.animation = 'img_focus 1s both 1';
            return
        }

        if(obj.style.animationDirection == 'normal'){
            obj.style.animation = '';
            obj.offsetHeight;//reflow //пере-рендер
            obj.style.animation = 'img_focus 1s both 1 reverse'
        }else{
            obj.style.animation = '';
            obj.offsetHeight;//reflow //пере-рендер
            obj.style.animation = 'img_focus 1s both 1 normal';
        }
    };
</script>
<style>
    @keyframes img_focus {
        0%{
            object-fit: contain;
            min-width: 0vw;
            max-width: 333px;
            height: 300px;
        }
        100%{
            width: calc(100vw - 170px);
            max-width: 1480px;
            height: auto;
        }
        
    }
</style>
<?php
    include_once('footer.html');
?>