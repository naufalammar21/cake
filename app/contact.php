
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/main.css" rel="stylesheet">
    <title>Landing Page</title>
  </head>
  <body>
    <!-- navigation -->
    <?php
    include('header.php');
    ?>
    <!-- End Of navigation -->

    <!-- carousel -->
    <?php
    include('carousel.php')
    ?>
    <!--End Of carousel -->

    <!-- halaman contact -->
    <div class="section mt-5">
        <p class="fs-1 text-center fw-bold">Kontak Kami</p>
        <div class="container">
            <div class="row">
                <div class="col-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3880147515674!2d106.67352851471736!3d-6.3437691954092745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5ab3d01e03b%3A0xb98f4c27e24202ec!2sInstitut%20Teknologi%20Indonesia!5e0!3m2!1sid!2sid!4v1640714853584!5m2!1sid!2sid" width="600" height="275" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-6">
                    <ul class="fa-ul">
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Ruko the prominence BLok 38F No. 17 alam sutera tangerang selatan. </span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">amoracake&bakeryid@.com</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">021-5594-8802</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fab fa-whatsapp"></i></span><span class="ms-2">081281078804</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fab fa-facebook"></i></span><span class="ms-2">Amoracake&bakery.id</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fab fa-twitter"></i></span><span class="ms-2">Amoracake&bakery.id</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fab fa-youtube"></i></span><span class="ms-2">Amoracake&bakery.id</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir halaman contact -->

    <!-- formulir -->
    <div class="section mt-5"style="background: url('images/contact/peta.png');">
        <div class="col-10 mx-auto mt-5">
            <div class="fs-1 text-center text-white">Kirim Pesan</div>
            <form action="helpers/mail.php" method="POST">
            <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Nama">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" name="handphone" id="exampleFormControlInput1" placeholder="Nomor Telepon">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"placeholder="Alamat"></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <textarea class="form-control" name="messages" id="exampleFormControlTextarea1" rows="3"placeholder="Pesan"style="height:250px"></textarea>
                        </div>
                    </div>
            </div>
                    <div class="row">
                        <div class="col-1 mx-auto mb-1">
                            <button type="submit" name="submit" class="btn btn-danger"style="margin-left:7px">Kirim</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
    
    <!-- akhir formulir -->

    

    
    <!-- footer -->
    <?php
        include('footer.php');
    ?>
    <!-- End footer -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>