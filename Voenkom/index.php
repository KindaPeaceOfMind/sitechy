<?php 
    include('header.html');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">A Bootstrap 5 template for modern businesses</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize responsive mobile-first
                        sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="news_list.php">Новости</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="profile.php">Добавить новость</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" lazyload
                    src="https://avatars.mds.yandex.net/get-altay/920214/2a00000161b1b685c04083afdc7aba7ef7ef/XXL" alt="..." /></div>
        </div>
    </div>
</header>

<div class="container px-4 px-lg-5 py-5">
<div class="row gx-4 gx-lg-5">
<?php
include_once('bd.php');
$result = mysqli_query($db,"SELECT * FROM news LIMIT 0, 6");
while($data = mysqli_fetch_assoc($result))
{
    echo '
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">'.$data['title'].'</h2>
                    <p class="card-text">'.$data['description'].'</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="news.php?id='.$data['id'].'">Читать</a></div>
            </div>
        </div>  
    ';
}
?>
</div></div>
<?php 
    include('footer.html');
?>