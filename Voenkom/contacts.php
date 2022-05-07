<?php
include('header.html');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<section class="py-5 border-bottom">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">Наши адреса</h2>
            <p class="lead mb-0">Адреса всех военных коммисариатов города Хабаровск</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-12">
<?php
include('bd.php');
$result = mysqli_query($db,"SELECT * FROM contacts");

while($data = mysqli_fetch_assoc($result)){
    echo '
        <div class="card mb-4">
            <div class="card-body p-4">
                <div class="d-flex">
                    <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i>
                    </div>
                    <div class="ms-4">
                        <h5>'.$data['title'].'</h5>
                        <p class="mb-1">'.$data['adress'].'<br>'.$data['phone'].'</p>
                    </div>
                </div>
            </div>
        </div>
    ';
}

include('footer.html');
?>


                


            </div>
        </div>
    </div>
</section>