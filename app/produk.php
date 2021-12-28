
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

    <!-- product -->
    <!-- <div class="row mt-5">
        <div class="col-10 mx-auto mt-3">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <img src="images/produk/cake-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                            <br>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere asperiores quos dignissimos tenetur nostrum, accusantium explicabo. Ullam est ab ipsam beatae fugiat maxime quis minus quidem, accusantium doloremque vero ipsa!</span>
                            <div class="row">
                                <div class="col-6">
                                    <p class="fs-5 text-start text-danger">Rp 35.000</p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-6 text-center ms-4">100 Terjual</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary">Lihat Detail</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success ms-4"><i class="fab fa-whatsapp"></i> Pesan</button>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <img src="images/produk/cake-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                            <br>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere asperiores quos dignissimos tenetur nostrum, accusantium explicabo. Ullam est ab ipsam beatae fugiat maxime quis minus quidem, accusantium doloremque vero ipsa!</span>
                            <div class="row">
                                <div class="col-6">
                                    <p class="fs-5 text-start text-danger">Rp 35.000</p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-6 text-center ms-4">100 Terjual</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary">Lihat Detail</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success ms-4"><i class="fab fa-whatsapp"></i> Pesan</button>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <img src="images/produk/cake-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                            <br>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere asperiores quos dignissimos tenetur nostrum, accusantium explicabo. Ullam est ab ipsam beatae fugiat maxime quis minus quidem, accusantium doloremque vero ipsa!</span>
                            <div class="row">
                                <div class="col-6">
                                    <p class="fs-5 text-start text-danger">Rp 35.000</p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-6 text-center ms-4">100 Terjual</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary">Lihat Detail</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success ms-4"><i class="fab fa-whatsapp"></i> Pesan</button>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <img src="images/produk/cake-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                            <br>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere asperiores quos dignissimos tenetur nostrum, accusantium explicabo. Ullam est ab ipsam beatae fugiat maxime quis minus quidem, accusantium doloremque vero ipsa!</span>
                            <div class="row">
                                <div class="col-6">
                                    <p class="fs-5 text-start text-danger">Rp 35.000</p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-6 text-center ms-4">100 Terjual</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary">Lihat Detail</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success ms-4"><i class="fab fa-whatsapp"></i> Pesan</button>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <img src="images/produk/cake-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                            <br>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere asperiores quos dignissimos tenetur nostrum, accusantium explicabo. Ullam est ab ipsam beatae fugiat maxime quis minus quidem, accusantium doloremque vero ipsa!</span>
                            <div class="row">
                                <div class="col-6">
                                    <p class="fs-5 text-start text-danger">Rp 35.000</p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-6 text-center ms-4">100 Terjual</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary">Lihat Detail</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success ms-4"><i class="fab fa-whatsapp"></i> Pesan</button>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <img src="images/produk/cake-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                            <br>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere asperiores quos dignissimos tenetur nostrum, accusantium explicabo. Ullam est ab ipsam beatae fugiat maxime quis minus quidem, accusantium doloremque vero ipsa!</span>
                            <div class="row">
                                <div class="col-6">
                                    <p class="fs-5 text-start text-danger">Rp 35.000</p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-6 text-center ms-4">100 Terjual</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary">Lihat Detail</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success ms-4"><i class="fab fa-whatsapp"></i> Pesan</button>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <img src="images/produk/cake-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                            <br>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere asperiores quos dignissimos tenetur nostrum, accusantium explicabo. Ullam est ab ipsam beatae fugiat maxime quis minus quidem, accusantium doloremque vero ipsa!</span>
                            <div class="row">
                                <div class="col-6">
                                    <p class="fs-5 text-start text-danger">Rp 35.000</p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-6 text-center ms-4">100 Terjual</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary">Lihat Detail</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success ms-4"><i class="fab fa-whatsapp"></i> Pesan</button>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <img src="images/produk/cake-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                            <br>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere asperiores quos dignissimos tenetur nostrum, accusantium explicabo. Ullam est ab ipsam beatae fugiat maxime quis minus quidem, accusantium doloremque vero ipsa!</span>
                            <div class="row">
                                <div class="col-6">
                                    <p class="fs-5 text-start text-danger">Rp 35.000</p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-6 text-center ms-4">100 Terjual</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary">Lihat Detail</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success ms-4"><i class="fab fa-whatsapp"></i> Pesan</button>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <img src="images/produk/cake-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                            <br>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere asperiores quos dignissimos tenetur nostrum, accusantium explicabo. Ullam est ab ipsam beatae fugiat maxime quis minus quidem, accusantium doloremque vero ipsa!</span>
                            <div class="row">
                                <div class="col-6">
                                    <p class="fs-5 text-start text-danger">Rp 35.000</p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-6 text-center ms-4">100 Terjual</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary">Lihat Detail</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success ms-4"><i class="fab fa-whatsapp"></i> Pesan</button>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <img src="images/produk/cake-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                            <br>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere asperiores quos dignissimos tenetur nostrum, accusantium explicabo. Ullam est ab ipsam beatae fugiat maxime quis minus quidem, accusantium doloremque vero ipsa!</span>
                            <div class="row">
                                <div class="col-6">
                                    <p class="fs-5 text-start text-danger">Rp 35.000</p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-6 text-center ms-4">100 Terjual</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary">Lihat Detail</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success ms-4"><i class="fab fa-whatsapp"></i> Pesan</button>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <img src="images/produk/cake-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                            <br>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere asperiores quos dignissimos tenetur nostrum, accusantium explicabo. Ullam est ab ipsam beatae fugiat maxime quis minus quidem, accusantium doloremque vero ipsa!</span>
                            <div class="row">
                                <div class="col-6">
                                    <p class="fs-5 text-start text-danger">Rp 35.000</p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-6 text-center ms-4">100 Terjual</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary">Lihat Detail</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success ms-4"><i class="fab fa-whatsapp"></i> Pesan</button>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <img src="images/produk/cake-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                            <br>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere asperiores quos dignissimos tenetur nostrum, accusantium explicabo. Ullam est ab ipsam beatae fugiat maxime quis minus quidem, accusantium doloremque vero ipsa!</span>
                            <div class="row">
                                <div class="col-6">
                                    <p class="fs-5 text-start text-danger">Rp 35.000</p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-6 text-center ms-4">100 Terjual</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary">Lihat Detail</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success ms-4"><i class="fab fa-whatsapp"></i> Pesan</button>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end of product -->
    <div class="col-10 mx-auto mt-5">
        <center><h1>Produk</h1></center>
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
            <div class="col">
                    <div class="card h-100">
                        <img src="images/produk/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sponge Cake Pandan Coklat</h5>
                            <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                            <p class="card-text"style="text-align:justify">Sponge cake adalah kue bolu yang mempunyai karakter texture dan remah seperti sponge atau busa. Sponge cake merupakan basic cake untuk membuat aneka macam kue berlapis cream.</p>
                        </div>
                        <div class="card-body">   
                            <div class="row">
                                <div class="col-6">
                                    <p class="fs-5 text-start text-danger">Rp 23.500</p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-6 text-end ">Harga/Slice</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="fs-5 text-start text-danger">Rp 70.000</p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-6 text-end">Harga/Loyang</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-auto mb-2">
                            <button type="button" class="btn btn-success" style="width:250px;"><i class="fab fa-whatsapp"></i> Pesan</button>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"></small>
                        </div>
                    </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/produk/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bolu Gulung Almond Keju</h5>
                        <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                        <p class="card-text"style="text-align:justify">Rasanya yang enak, lembut dan halus membuat bolu gulung banyak disukai dari semua kalangan.  Bolu gulung yang bagus yaitu bisa dilihat dari karakter tebalnya, keempukannya, remahnya yang halus, mudah dan tidak pecah waktu digulung. Memiliki rasa manis yang tidak terlalu manis, ada rasa gurih dari keju dan terdapat sensasi garing karena adanya almond panggang di luarnya.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="fs-5 text-start text-danger">Rp 22.000</p>
                            </div>
                            <div class="col-6">
                                <p class="fs-6 text-end">Harga/Slice</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="fs-5 text-start text-danger">Rp 65.000</p>
                            </div>
                            <div class="col-6">
                                <p class="fs-6 text-end">Harga/Loyang</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto mb-2">
                        <button type="button" class="btn btn-success " style="width:250px;"><i class="fab fa-whatsapp"></i> Pesan</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/produk/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lapis Surabaya</h5>
                            <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                            <p class="card-text"style="text-align:justify">Lapis Surabaya merupakan kue tradisional yang banyak disukai orang, rasanya yang enak, gurih dan lezat, perpaduan antara rasa vanilla dan coklat dengan rasa telur dan butter yang tinggi membuat kue lapis Surabaya mempunyai cita rasa tersendiri.</p>
                    </div>
                    <div class="card-body">   
                        <div class="row">
                            <div class="col-6">
                                <p class="fs-5 text-start text-danger">Rp 15.000</p>
                            </div>
                            <div class="col-6">
                                <p class="fs-6 text-end ">Harga/Slice</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="fs-5 text-start text-danger">Rp 250.000</p>
                            </div>
                            <div class="col-6">
                                <p class="fs-6 text-end">Harga/Loyang</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto mb-2">
                        <button type="button" class="btn btn-success" style="width:250px;"><i class="fab fa-whatsapp"></i> Pesan</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/produk/4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Chiffon Cake Pandan Keju</h5>
                        <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                        <p class="card-text"style="text-align:justify">Chiffon cake adalah cake nya elastis, lembut, empuk dan halus. Bahan yang terbuat dari pandan dan menggunakan pewarna yang terbuat dari bahan-bahan alami. Memiliki rasa yang manis dan gurih karena adanya keju di atasnya.</p>
                    </div>
                    <div class="card-body">   
                        <div class="row">
                            <div class="col-6">
                                <p class="fs-5 text-start text-danger">Rp 24.500</p>
                            </div>
                            <div class="col-6">
                                <p class="fs-6 text-end ">Harga/Slice</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="fs-5 text-start text-danger">Rp 85.000</p>
                            </div>
                            <div class="col-6">
                                <p class="fs-6 text-end">Harga/Loyang</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto mb-2">
                        <button type="button" class="btn btn-success" style="width:250px;"><i class="fab fa-whatsapp"></i> Pesan</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-5">
            <div class="col">
                <div class="card h-100">
                    <img src="images/produk/5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Muffin Coklat</h5>
                        <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                        <p class="card-text"style="text-align:justify">Adalah rotinya yang didalamnya terasa lembut tetapi memiliki tekstur renyah dan garing di bagian atasnya. Memiliki isi rasa coklat di dalamnya dan di atas nya ditaburi dengan potongan coklat.</p>
                    </div>
                    <div class="card-body">   
                        <div class="row">
                            <div class="col-6">
                                <p class="fs-5 text-start text-danger">Rp 10.500</p>
                            </div>
                            <div class="col-6">
                                <p class="fs-6 text-end ">Harga/Pcs</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto mb-2">
                        <button type="button" class="btn btn-success" style="width:250px;"><i class="fab fa-whatsapp"></i> Pesan</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/produk/6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Croissant</h5>
                        <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                        <p class="card-text"style="text-align:justify">Yaitu dikenal dengan bentuknya yang menyerupai bulan. Adonannya dibuat dari puff pastry sehingga ringan, kering, dan buttery dan memiliki rasa yang manis dan gurih. Rasa croissant biasanya manis maupun gurih. Crunchy bila baru saja dikeluarkan dari oven.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="fs-5 text-start text-danger">Rp 10.000</p>
                            </div>
                            <div class="col-6">
                                <p class="fs-6 text-end">Harga/Pcs</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto mb-2">
                        <button type="button" class="btn btn-success" style="width:250px;"><i class="fab fa-whatsapp"></i> Pesan</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/produk/7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Brownies</h5>
                            <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                            <p class="card-text"style="text-align:justify">Brownies memiliki tekstur yang merupakan perpaduan antara cake dan cookies. Memiliki rasa kacang almond dan chocolate chips, keju.</p>
                    </div>
                    <div class="card-body">   
                        <div class="row">
                            <div class="col-6">
                                <p class="fs-5 text-start text-danger">Rp 15.000</p>
                            </div>
                            <div class="col-6">
                                <p class="fs-6 text-end ">Harga/Loyang</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto mb-2">
                        <button type="button" class="btn btn-success" style="width:250px;"><i class="fab fa-whatsapp"></i> Pesan</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/produk/8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pai (pie)</h5>
                        <span class="fw-bold" style="color:#FF8B00;font-size: 12px;" >Produk Terlaris</span>
                        <p class="card-text"style="text-align:justify">Pai adalah makanan produk bakery yang dipanggang terbuat dari beberapa lapisan adonan tipis yang membentuk cangkang dan memiliki isian yang manis atau asin. Berbeda dengan produk bakery lainnya yang umumnya bersifat lembut, pai biasanya memiliki tekstur yang garing. Varian isian tersebut umumnya manis, seperti apel, stroberi, blackberry, cherry, krim, dan custard.</p>
                    </div>
                    <div class="card-body">   
                        <div class="row">
                            <div class="col-6">
                                <p class="fs-5 text-start text-danger">Rp 11.500</p>
                            </div>
                            <div class="col-6">
                                <p class="fs-6 text-end ">Harga/Pcs</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto mb-2">
                        <button type="button" class="btn btn-success" style="width:250px;"><i class="fab fa-whatsapp"></i> Pesan</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product2 -->

    <!-- end of product2 -->

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