
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
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-indicators d-flex justify-content-center m-0 ms-3 mb-0">
                    <!-- <i class="fas fa-circle"></i> -->
                    <button style="width: 8px;height: 8px; border-radius: 50%;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button style="width: 8px;height: 8px; border-radius: 50%;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button style="width: 8px;height: 8px; border-radius: 50%;"  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/12/20/5d132de0-4b4d-4b16-a8dd-a08250eb9cbb.jpg.webp?ect=3g" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/7/30/74d32a7f-6a2d-49a3-b325-114de4b055c5.jpg.webp?ect=3g" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/12/20/5fb80e00-e3a6-4fa9-a388-fad2100c0c06.jpg.webp?ect=3g" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Of carousel -->

    <!-- About -->
    <div class="col-10 mx-auto mt-5">
        <div class="row">
            <div class="col-6">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe width="560" height="350" src="https://www.youtube.com/embed/y30plPDtQUM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-6">
                <p class="fs-1 text-center">Tentang Kami</p>
                <p class="fs-6"style="text-indent:2rem;text-align:justify">
                Amora cake & bakery merupakan usaha yang bergerak di industri cake dan bakery. Kami mulai merintis usaha ini sejak tahun 2020. Karena adanya pandemic Covid-19, maka Amora terbentuk karena owner dari Amora cake & bakery mengalami permasalahan dalam pekerjaan lamanya. Sehingga, demi kelangsungan hidup owner dan pihak lain. Maka, Amora cake & bakery mulai di bangun pelan-pelan di setiap harinya dengan menciptakan dan memproduksi produk kue maupun roti yang menggunakan bahan-bahan alami serta memiliki kualitas yang terjamin, memiliki harga yang terjangkau dan mudah ditemukan. 
                Amora cake & bakery lebih mementingkan rasa di setiap gigitan yang masuk ke dalam mulut konsumen, kepuasan konsumen merupakan sumber utama kami agar dapat meningkatkan rasa,kualitas serta pelayanan yang lebih maksimal untuk kedepannya. 
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
            <p class="fs-1 text-center">Visi</p>
                <p class="fs-6">
                Visi kami adalah memberikan kualitas pelayanan terbaik dan variasi produk bakery dengan cita rasa dan keunggulan yang tinggi kepada pelanggan.
                </p>       
            </div>
            <div class="col-6">
                <p class="fs-1 text-center">Misi</p>
                <p class="fs-6"> Adalah sebagai The Easy One Stop Bakery.</p>
                <p class="fs-6">
                Misi diangkat dengan mengutamakan kemudahan dan kenyamanan layanan pelanggan, online dan onsite, dengan produk yang inovatiwf dan beragam dengan mengutamakan cita rasa yang tinggi dan menggugah selera. Pelanggan berharga akan mendapatkan pengalaman berbelanja yang mudah dalam memperoleh produk dan layanan karena fleksibilitas staf terampil kami, membawa kepribadian yang rendah hati dan keinginan untuk melayani yang terbaik.
                </p>
            </div>
        </div>
    </div>
    <!-- end of Bout -->

    <!-- Testimoni-->
    
    <!--Testimoni-->

    <!-- footer -->
    <?php
        include('footer.php');
    ?>
    <!-- End footer -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./js/bootstrap.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>