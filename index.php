<!-- helper -->
<?php include_once('helper.php') ?>

<!DOCTYPE html>
<html lang="en-US">

<!-- Head -->
<?php include_once('layouts/head.php') ?>

<body>
    <!-- Boxed -->
    <div class="boxed">
        <!-- Image Slider -->
        <div class="container">
            <div id="myCarousel" class="carousel slide absolute" data-ride="carousel" data-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block img-banner" src="images/slides/2.jpg">
                        <img class="d-block img-banner" src="images/slides/2.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-banner" src="images/slides/5.jpg">
                        <img class="d-block img-banner" src="images/slides/5.jpg">
                    </div>
                </div>
                <div class="span-nav">
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Header -->
        <?php include_once('layouts/header.php') ?>
        <!-- Header Background -->
        <div class="bg-header">
            <img src="<?php echo base_url."images/" ?>slides/1.jpg">
        </div>
        <div class="bg-grey"></div>
        <div class="container">
            <div class="wrap-form">
                <div class="flat-formsearch">
                    <form novalidate="" class="search-form clearfix" id="searchform" method="post" action="#">
                        <span class="input-question">
                            <input type="text" placeholder="Apa yang Kamu cari ?" name="question" id="question">
                        </span>
                        <span class="input-location">
                            <input type="text" placeholder="Lokasi" name="location" id="location">
                        </span>
                        <span class="select">
                            <select>
                                <option>Semua Kategori </option>
                                <option>Penginapan & Perjalanan</option>
                                <option>Restoran</option>
                                <option>Kesehatan & Kebugaran</option>
                                <option>Makanan & Kopi</option>
                            </select>
                        </span>
                        <span class="form-submit text-right">
                            <button class="flat-button">Cari <i class="ion-ios-search-strong"></i></button>
                        </span>
                    </form>
                </div>
            </div>
            <div class="flat-row v1">
                <div class="col-md-12" style="position: absolute;">
                    <div class="flat-client" data-item="5" data-nav="true" data-dots="false" data-auto="false">
                        <div class="client">
                            <div class="featured-client">
                                <img src="images/clients/1.jpg" alt="image">
                            </div>
                            <div class="content-client clearfix">
                                <div class="icon">
                                    <img src="images/clients/icon1.png" alt="image">
                                </div>
                                <div class="text">
                                    <h6><a href="listing-grid.php" title="">Hotel & Travel</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <div class="featured-client">
                                <img src="images/clients/2.jpg" alt="image">
                            </div>
                            <div class="content-client clearfix">
                                <div class="icon">
                                    <img src="images/clients/icon2.png" alt="image">
                                </div>
                                <div class="text">
                                    <h6><a href="listing-grid.php" title="">Healthy & fitness</a></h6>

                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <div class="featured-client">
                                <img src="images/clients/3.jpg" alt="image">
                            </div>
                            <div class="content-client clearfix">
                                <div class="icon">
                                    <img src="images/clients/icon3.png" alt="image">
                                </div>
                                <div class="text">
                                    <h6><a href="listing-grid.php" title="">Real Estate</a></h6>

                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <div class="featured-client">
                                <img src="images/clients/1.jpg" alt="image">
                            </div>
                            <div class="content-client clearfix">
                                <div class="icon">
                                    <img src="images/clients/icon4.png" alt="image">
                                </div>
                                <div class="text">
                                    <h6><a href="listing-grid.php" title="">Restaurant</a></h6>

                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <div class="featured-client">
                                <img src="images/clients/1.jpg" alt="image">
                            </div>
                            <div class="content-client clearfix">
                                <div class="icon">
                                    <img src="images/clients/icon1.png" alt="image">
                                </div>
                                <div class="text">
                                    <h6><a href="listing-grid.php" title="">Hotel & Travel</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <div class="featured-client">
                                <img src="images/clients/2.jpg" alt="image">
                            </div>
                            <div class="content-client clearfix">
                                <div class="icon">
                                    <img src="images/clients/icon2.png" alt="image">
                                </div>
                                <div class="text">
                                    <h6><a href="listing-grid.php" title="">Healthy & fitness</a></h6>

                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <div class="featured-client">
                                <img src="images/clients/3.jpg" alt="image">
                            </div>
                            <div class="content-client clearfix">
                                <div class="icon">
                                    <img src="images/clients/icon3.png" alt="image">
                                </div>
                                <div class="text">
                                    <h6><a href="listing-grid.php" title="">Real Estate</a></h6>

                                </div>
                            </div>
                        </div>
                        <div class="client">
                            <div class="featured-client">
                                <img src="images/clients/1.jpg" alt="image">
                            </div>
                            <div class="content-client clearfix">
                                <div class="icon">
                                    <img src="images/clients/icon4.png" alt="image">
                                </div>
                                <div class="text">
                                    <h6><a href="listing-grid.php" title="">Restaurant</a></h6>

                                </div>
                            </div>
                        </div>
                    </div><!-- /.flat-client -->
                </div>
            </div>
        </div>
        <section class="flat-row section-product bg-theme">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section promo-header text-center">
                            <h3 class="title">Temukan Semua Jenis Promo di Sekitar Anda</h3>
                            <div class="sub-title">
                                Semua Promo All Deal di Sekitar Anda
                            </div>
                        </div>
                    </div>
                </div>
                <div>

                    <div class="dropdown float-right pad-10" style="margin-top: 10px;">
                        <button class="btn btn-outline-danger" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Sort By
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Terbaru</a>
                            <a class="dropdown-item" href="#">Terbatas</a>
                            <a class="dropdown-item" href="#">Termurah</a>
                            <a class="dropdown-item" href="#">Termahal</a>
                            <a class="dropdown-item" href="#">Terpopuler</a>
                            <a class="dropdown-item" href="#">Diskon</a>
                        </div>
                    </div>
                    <div class="dropdown pad-10" style="position: absolute; top: 138px; padding-left: 10px;">
                        <button class="btn btn-outline-danger" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Price
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="middle">
                                <p class="pad-10" style="color: rgb(61, 59, 59)">Rp 0-1.500.000</p>
                            </div>
                            <div class="flat-slider pad-10" style="width: 100%;">
                                <div class="ui-slider">
                                    <div>
                                        <a class="ui-slider-range" style="left: 80%"></a>
                                        <a class="ui-slider-handle"></a>
                                        <a class="ui-slider-handle" style="right:20%"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left: 1px; width:100%;">
                    <div class="wrap-flat-product clearfix">
                        <div class="flat-product" onclick="location.href='listing-single.php'">
                            <div class="featured-product">
                                <div>
                                    <img src="images/services/1.jpg" alt="image">
                                    <div class="disc-label">
                                        <span>50%</span>
                                    </div>
                                </div>
                                <div class="time bg-green">
                                    Now Open
                                </div>
                                <div class="rate-product">
                                    <div class="link-review clearfix">
                                        <a href="" class="heart">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <div class="button-product float-left">
                                            <button type="button" class="flat-button" onclick="location.href='#'">restaurant</button>
                                        </div>
                                        <div class="start-review float-right">
                                            <span class="flat-start">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <a href="#" class="review">( 2 reviewers )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-product">
                                <div class="discount">
                                    <span class="brand-color"> <i class="ion-android-cart"></i> 500 sold </span>
                                    <span class="right">
                                        <span class="disc-price">Rp 20.000</span>
                                        <span class="price"> Rp 10.000</span>
                                    </span>
                                </div>
                                <div class="detail-product">
                                    <div class="info-product">
                                        <h6 class="title"><a href="#">Coto Makassar</a></h6>
                                        <p class="merch">Coto Paraikatte</p>
                                    </div>
                                    <div class="tm">
                                        <img src="images/merch-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flat-product" onclick="location.href='listing-single.php'">
                            <div class="featured-product">
                                <div>
                                    <img src="images/services/1.jpg" alt="image">
                                    <div class="disc-label">
                                        <span>50%</span>
                                    </div>
                                </div>
                                <div class="time bg-green">
                                    Now Open
                                </div>
                                <div class="rate-product">
                                    <div class="link-review clearfix">
                                        <a href="" class="heart">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <div class="button-product float-left">
                                            <button type="button" class="flat-button" onclick="location.href='#'">restaurant</button>
                                        </div>
                                        <div class="start-review float-right">
                                            <span class="flat-start">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <a href="#" class="review">( 2 reviewers )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-product">
                                <div class="discount">
                                    <span class="brand-color"> <i class="ion-android-cart"></i> 500 sold </span>
                                    <span class="right">
                                        <span class="disc-price">Rp 20.000</span>
                                        <span class="price"> Rp 10.000</span>
                                    </span>
                                </div>
                                <div class="detail-product">
                                    <div class="info-product">
                                        <h6 class="title"><a href="#">Coto Makassar</a></h6>
                                        <p class="merch">Coto Paraikatte</p>
                                    </div>
                                    <div class="tm">
                                        <img src="images/merch-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flat-product" onclick="location.href='listing-single.php'">
                            <div class="featured-product">
                                <div>
                                    <img src="images/services/1.jpg" alt="image">
                                    <div class="disc-label">
                                        <span>50%</span>
                                    </div>
                                </div>
                                <div class="time bg-green">
                                    Now Open
                                </div>
                                <div class="rate-product">
                                    <div class="link-review clearfix">
                                        <a href="" class="heart">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <div class="button-product float-left">
                                            <button type="button" class="flat-button" onclick="location.href='#'">restaurant</button>
                                        </div>
                                        <div class="start-review float-right">
                                            <span class="flat-start">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <a href="#" class="review">( 2 reviewers )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-product">
                                <div class="discount">
                                    <span class="brand-color"> <i class="ion-android-cart"></i> 500 sold </span>
                                    <span class="right">
                                        <span class="disc-price">Rp 20.000</span>
                                        <span class="price"> Rp 10.000</span>
                                    </span>
                                </div>
                                <div class="detail-product">
                                    <div class="info-product">
                                        <h6 class="title"><a href="#">Coto Makassar</a></h6>
                                        <p class="merch">Coto Paraikatte</p>
                                    </div>
                                    <div class="tm">
                                        <img src="images/merch-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flat-product" onclick="location.href='listing-single.php'">
                            <div class="featured-product">
                                <div>
                                    <img src="images/services/1.jpg" alt="image">
                                    <div class="disc-label">
                                        <span>50%</span>
                                    </div>
                                </div>
                                <div class="time bg-green">
                                    Now Open
                                </div>
                                <div class="rate-product">
                                    <div class="link-review clearfix">
                                        <a href="" class="heart">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <div class="button-product float-left">
                                            <button type="button" class="flat-button" onclick="location.href='#'">restaurant</button>
                                        </div>
                                        <div class="start-review float-right">
                                            <span class="flat-start">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <a href="#" class="review">( 2 reviewers )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-product">
                                <div class="discount">
                                    <span class="brand-color"> <i class="ion-android-cart"></i> 500 sold </span>
                                    <span class="right">
                                        <span class="disc-price">Rp 20.000</span>
                                        <span class="price"> Rp 10.000</span>
                                    </span>
                                </div>
                                <div class="detail-product">
                                    <div class="info-product">
                                        <h6 class="title"><a href="#">Coto Makassar</a></h6>
                                        <p class="merch">Coto Paraikatte</p>
                                    </div>
                                    <div class="tm">
                                        <img src="images/merch-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flat-product" onclick="location.href='listing-single.php'">
                            <div class="featured-product">
                                <div>
                                    <img src="images/services/1.jpg" alt="image">
                                    <div class="disc-label">
                                        <span>50%</span>
                                    </div>
                                </div>
                                <div class="time bg-green">
                                    Now Open
                                </div>
                                <div class="rate-product">
                                    <div class="link-review clearfix">
                                        <a href="" class="heart">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <div class="button-product float-left">
                                            <button type="button" class="flat-button" onclick="location.href='#'">restaurant</button>
                                        </div>
                                        <div class="start-review float-right">
                                            <span class="flat-start">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <a href="#" class="review">( 2 reviewers )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-product">
                                <div class="discount">
                                    <span class="brand-color"> <i class="ion-android-cart"></i> 500 sold </span>
                                    <span class="right">
                                        <span class="disc-price">Rp 20.000</span>
                                        <span class="price"> Rp 10.000</span>
                                    </span>
                                </div>
                                <div class="detail-product">
                                    <div class="info-product">
                                        <h6 class="title"><a href="#">Coto Makassar</a></h6>
                                        <p class="merch">Coto Paraikatte</p>
                                    </div>
                                    <div class="tm">
                                        <img src="images/merch-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flat-product" onclick="location.href='listing-single.php'">
                            <div class="featured-product">
                                <div>
                                    <img src="images/services/1.jpg" alt="image">
                                    <div class="disc-label">
                                        <span>50%</span>
                                    </div>
                                </div>
                                <div class="time bg-green">
                                    Now Open
                                </div>
                                <div class="rate-product">
                                    <div class="link-review clearfix">
                                        <a href="" class="heart">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <div class="button-product float-left">
                                            <button type="button" class="flat-button" onclick="location.href='#'">restaurant</button>
                                        </div>
                                        <div class="start-review float-right">
                                            <span class="flat-start">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <a href="#" class="review">( 2 reviewers )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-product">
                                <div class="discount">
                                    <span class="brand-color"> <i class="ion-android-cart"></i> 500 sold </span>
                                    <span class="right">
                                        <span class="disc-price">Rp 20.000</span>
                                        <span class="price"> Rp 10.000</span>
                                    </span>
                                </div>
                                <div class="detail-product">
                                    <div class="info-product">
                                        <h6 class="title"><a href="#">Coto Makassar</a></h6>
                                        <p class="merch">Coto Paraikatte</p>
                                    </div>
                                    <div class="tm">
                                        <img src="images/merch-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flat-product" onclick="location.href='listing-single.php'">
                            <div class="featured-product">
                                <div>
                                    <img src="images/services/1.jpg" alt="image">
                                    <div class="disc-label">
                                        <span>50%</span>
                                    </div>
                                </div>
                                <div class="time bg-green">
                                    Now Open
                                </div>
                                <div class="rate-product">
                                    <div class="link-review clearfix">
                                        <a href="" class="heart">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <div class="button-product float-left">
                                            <button type="button" class="flat-button" onclick="location.href='#'">restaurant</button>
                                        </div>
                                        <div class="start-review float-right">
                                            <span class="flat-start">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <a href="#" class="review">( 2 reviewers )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-product">
                                <div class="discount">
                                    <span class="brand-color"> <i class="ion-android-cart"></i> 500 sold </span>
                                    <span class="right">
                                        <span class="disc-price">Rp 20.000</span>
                                        <span class="price"> Rp 10.000</span>
                                    </span>
                                </div>
                                <div class="detail-product">
                                    <div class="info-product">
                                        <h6 class="title"><a href="#">Coto Makassar</a></h6>
                                        <p class="merch">Coto Paraikatte</p>
                                    </div>
                                    <div class="tm">
                                        <img src="images/merch-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flat-product" onclick="location.href='listing-single.php'">
                            <div class="featured-product">
                                <div>
                                    <img src="images/services/1.jpg" alt="image">
                                    <div class="disc-label">
                                        <span>50%</span>
                                    </div>
                                </div>
                                <div class="time bg-green">
                                    Now Open
                                </div>
                                <div class="rate-product">
                                    <div class="link-review clearfix">
                                        <a href="" class="heart">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <div class="button-product float-left">
                                            <button type="button" class="flat-button" onclick="location.href='#'">restaurant</button>
                                        </div>
                                        <div class="start-review float-right">
                                            <span class="flat-start">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <a href="#" class="review">( 2 reviewers )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-product">
                                <div class="discount">
                                    <span class="brand-color"><i class="ion-android-cart"></i> 500 sold </span>
                                    <span class="float-right">
                                        <span class="disc-price">Rp 20.000</span>
                                        <span class="price"> Rp 10.000</span>
                                    </span>
                                </div>
                                <div class="detail-product">
                                    <div class="info-product">
                                        <h6 class="title"><a href="#">Coto Makassar</a></h6>
                                        <p class="merch">Coto Paraikatte</p>
                                    </div>
                                    <div class="tm">
                                        <img src="images/merch-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flat-product" onclick="location.href='listing-single.php'">
                            <div class="featured-product">
                                <div>
                                    <img src="images/services/1.jpg" alt="image">
                                    <div class="disc-label">
                                        <span>50%</span>
                                    </div>
                                </div>
                                <div class="time bg-green">
                                    Now Open
                                </div>
                                <div class="rate-product">
                                    <div class="link-review clearfix">
                                        <a href="" class="heart">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <div class="button-product float-left">
                                            <button type="button" class="flat-button" onclick="location.href='#'">restaurant</button>
                                        </div>
                                        <div class="start-review float-right">
                                            <span class="flat-start">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <a href="#" class="review">( 2 reviewers )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-product">
                                <div class="discount">
                                    <span class="brand-color"><i class="ion-android-cart"></i> 500 sold </span>
                                    <span class="float-right">
                                        <span class="disc-price">Rp 20.000</span>
                                        <span class="price"> Rp 10.000</span>
                                    </span>
                                </div>
                                <div class="detail-product">
                                    <div class="info-product">
                                        <h6 class="title"><a href="#">Coto Makassar</a></h6>
                                        <p class="merch">Coto Paraikatte</p>
                                    </div>
                                    <div class="tm">
                                        <img src="images/merch-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="load-more text-center">
                            <button type="button" class="flat-button">Load More</button>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Footer -->
        <?php include_once('layouts/footer.php') ?>

        <!-- Modals -->
        <!-- Log In -->
        <div class="modal fade flat-popupform" id="popup_login">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body text-center clearfix">
                        <form class="form-login form-listing" action="#" method="post">
                            <h3 class="title-formlogin">Log in</h3>
                            <span class="input-login icon-form"><input type="text" placeholder="Your Name or Your merch-logo Name*"
                                    name="email" required="required"><i class="fa fa-user"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="Password*" name="password"
                                    required="required"><i class="fa fa-lock"></i></span>
                            <div class="flat-fogot clearfix">
                                <label class="float-left">
                                    <span class="input-check">
                                        <input type="checkbox" id="rem" name="check" value="0" checked="">
                                        <label for="rem" class="remember">Remember me</label>
                                    </span>
                                </label>
                                <label class="float-right link-register">
                                    <a href="#">Lost your password?</a>
                                </label>
                            </div>
                            <span class="wrap-button">
                                <button type="button" id="login-button" class=" login-btn effect-button" title="log in">LOG
                                    IN</button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Regist As  merch-logo -->
        <div class="modal fade flat-popupform" id="popup_register_merc">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body text-center clearfix col-md-12 row">
                        <form class="form-login form-listing col-md-8" action="#" method="post">
                            <h3 class="title-formlogin text-right">Sign Up</h3>
                            <span class="input-login icon-form"><input type="text" placeholder="Your merch-logo Name*"
                                    name="name" required="required"><i class="fa fa-user"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="E-mail*" name="email"
                                    required="required"><i class="fas fa-envelope"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="Password*" name="password"
                                    required="required"><i class="fa fa-lock"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="Repeat Password*" name="password"
                                    required="required"><i class="fa fa-lock"></i></span>
                            <div class="wrap-button signup text-right">
                                <button type="button" id="logup-button" class=" login-btn effect-button" title="log in">LOG
                                    IN</button>
                            </div>
                        </form>
                        <div class="col-md-4 text-left t-77">
                            <p>
                                Join with is Now!!!
                                Get much benefit and grow up your business
                                with
                                DealMakassar!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Regist As User -->
        <div class="modal fade flat-popupform" id="popup_register_user">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body text-center clearfix col-md-12 row">
                        <form class="form-login form-listing col-md-8" action="#" method="post">
                            <h3 class="title-formlogin text-right">Sign Up</h3>
                            <span class="input-login icon-form"><input type="text" placeholder="Your Name*" name="name"
                                    required="required"><i class="fa fa-user"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="E-mail*" name="email"
                                    required="required"><i class="fas fa-envelope"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="Password*" name="password"
                                    required="required"><i class="fa fa-lock"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="Repeat Password*" name="password"
                                    required="required"><i class="fa fa-lock"></i></span>
                            <div class="wrap-button signup text-right">
                                <button type="button" id="logup-button" class=" login-btn effect-button" title="log in">LOG
                                    IN</button>
                            </div>
                        </form>
                        <div class="col-md-4 text-left t-77">
                            <p>
                                Find many deals in Makassar
                                with
                                DealMakassar
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Go Top -->
        <a class="go-top effect-button">
            <i class="fa fa-angle-up"></i>
        </a>

    </div>

    <!-- Javascript -->
    <script src="<?php echo base_url."javascript/" ?>jquery.min.js"></script>
    <script src="<?php echo base_url."javascript/" ?>tether.min.js"></script>
    <script src="<?php echo base_url."javascript/" ?>bootstrap.min.js"></script>
    <script src="<?php echo base_url."javascript/" ?>jquery.easing.js"></script>
    <script src="<?php echo base_url."javascript/" ?>jquery-waypoints.js"></script>
    <script src="<?php echo base_url."javascript/" ?>jquery-countTo.js"></script>
    <script src="<?php echo base_url."javascript/" ?>owl.carousel.js"></script>
    <script src="<?php echo base_url."javascript/" ?>jquery.cookie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
    <script src="<?php echo base_url."javascript/" ?>parallax.js"></script>
    <script src="<?php echo base_url."javascript/" ?>bootstrap-slider.min.js"></script>
    <script src="<?php echo base_url."javascript/" ?>smoothscroll.js"></script>


    <script src="<?php echo base_url."javascript/" ?>main.js"></script>

    <!-- Revolution Slider -->
    <script src="<?php echo base_url."revolution/" ?>js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url."revolution/" ?>js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo base_url."revolution/" ?>js/slider.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="<?php echo base_url."revolution/" ?>js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo base_url."revolution/" ?>js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?php echo base_url."revolution/" ?>js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo base_url."revolution/" ?>js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo base_url."revolution/" ?>js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php echo base_url."revolution/" ?>js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo base_url."revolution/" ?>js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?php echo base_url."revolution/" ?>js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo base_url."revolution/" ?>js/extensions/revolution.extension.video.min.js"></script>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>

</html>