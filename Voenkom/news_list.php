<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<div class="container px-4 px-lg-5">
<?php
    include('header.html');
    include_once('bd.php');
            // Поверка, есть ли GET запрос
        if (isset($_GET['pageno'])) {
            // Если да то переменной $pageno присваиваем его
            $pageno = $_GET['pageno'];
        } else { // Иначе
            // Присваиваем $pageno один
            $pageno = 1;
        }
        
        // Назначаем количество данных на одной странице
        $size_page = 6;
        // Вычисляем с какого объекта начать выводить
        $offset = ($pageno-1) * $size_page;
        // SQL запрос для получения количества элементов
        $count_sql = "SELECT COUNT(*) FROM `user`";
        // Отправляем запрос для получения количества элементов
        $result = mysqli_query($db, $count_sql);
        // Получаем результат
        $total_rows = mysqli_fetch_array($result)[0];

        // Вычисляем количество страниц
        $total_pages = ceil($total_rows / $size_page);

        // Создаём SQL запрос для получения данных
    $result = mysqli_query($db,"SELECT * FROM news LIMIT $offset, $size_page");
    while($data = mysqli_fetch_assoc($result))
    {
        echo '
            <div class="row gx-5">
                <div class="col-md-6 mb-4">
                    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                        <img src="post-images/'.$data['image'].'" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>
                    <h4><strong>'.$data['title'].'</strong></h4>
                    <p class="text-muted">
                        '.$data['description'].'
                    </p>
                    <button type="button" class="btn btn-primary" 
                        onclick = "window.location.href = `news.php?id='.$data['id'].'`">Читать</button>
                </div>
            </div>
        ';
    }
    echo '<a href="news_list.php?pageno=1">1</a>';
    if($pageno<=2){echo '<a href="news_list.php?pageno='.($pageno-1).'"><</a>';}
    echo '<a>'.$pageno.'</a>';
    if($pageno>=$total_pages-1){echo '<a href="news_list.php?pageno='.($pageno+1).'">></a>';}
    echo '<a href="news_list.php?pageno='.$total_pages.'">'.$total_pages.'</a>';
    
    
    
include('footer.html');
?>
</div>