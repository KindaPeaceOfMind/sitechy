<?php
    include('header.html');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<?php
    if (isset($_GET['id'])) {
        $news_id = $_GET['id'];
    } else {
        $news_id = 1;
    }

    include_once('bd.php');
    $result = mysqli_query($db,"SELECT * FROM news WHERE '$news_id'=id");
    while($data = mysqli_fetch_assoc($result)){
    echo '
        <div class="text-center ">
            <h1>'.$data['title'].'</h1>
            <h2 class="my-2 h5 text-muted">'.$data['description'].'</h2>
            <img src="post-images/'.$data['image'].'" class="img-fluid" />
            <div class="my-4">
                '.$data['content'].'
            </div>
            <a href="javascript:history.go(-1)" class="btn btn-danger">Назад</a>
        </div>
    ';}
?>
<?php
    include('footer.html');
?>