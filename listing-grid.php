<?php include_once('helper.php')?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<!-- Head -->
<?php include_once('layouts/head.php') ?>

<body>
    <!-- Boxed -->
    <div class="boxed">
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

        <div class="bg-white"></div>
        <div class="container">
            <div class="wrap-form">
                <div class="flat-formsearch fsb">
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
        </div>
        <div class="bg-header">
            <img src="images/slides/1.jpg">
        </div>
        <!-- Blog posts -->
        <section class="main-content page-listing-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="flat-select clearfix">
                            <div class="float-left width50 clearfix">
                                <div class="one-three showing">
                                    <p><span>16</span> Found Listings</p>
                                </div>
                                <div class="one-three more-filter">
                                    <ul class="unstyled">
                                        <li class="current"><a href="#" class="title">Filter <i class="fa fa-angle-right"></i></a>
                                            <ul class="unstyled">
                                                <li class="en">
                                                    <input type="checkbox" id="wifi" name="category">
                                                    <label for="wifi">Wifi</label>
                                                </li>
                                                <li class="en">
                                                    <input type="checkbox" id="smoking" name="category">
                                                    <label for="smoking">Smoking allowed</label>
                                                </li>
                                                <li class="en">
                                                    <input type="checkbox" id="onl" name="category">
                                                    <label for="onl">Online Reservation</label>
                                                </li>
                                                <li class="en">
                                                    <input type="checkbox" id="parking" name="category" checked="checked">
                                                    <label for="parking">Parking street</label>
                                                </li>
                                                <li class="en">
                                                    <input type="checkbox" id="event" name="category">
                                                    <label for="event">Events</label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="one-three sortby">
                                    <ul class="unstyled">
                                        <li class="current"><a href="#" class="title">Sort By<i class="fa fa-angle-right"></i></a>
                                            <ul class="unstyled">
                                                <li class="en"><a href="#" title=""><i class="fa fa-caret-right"></i>Terpopuler</a></li>
                                                <li class="en"><a href="#" title=""><i class="fa fa-caret-right"></i>Termurah</a></li>
                                                <li class="en"><a href="#" title=""><i class="fa fa-caret-right"></i>Termahal</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row listing-grid">
                            <div class="col-md-6">
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
                                                <img src="images/merchant.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
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
                                                <img src="images/merchant.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
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
                                                <img src="images/merchant.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
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
                                                <img src="images/merchant.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
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
                                                <img src="images/merchant.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
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
                                                <img src="images/merchant.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
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
                                                <img src="images/merchant.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
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
                                                <img src="images/merchant.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="blog-pagination style2 text-center">
                            <ul class="flat-pagination clearfix">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next">
                                    <a href="#">Next</a>
                                </li>
                            </ul><!-- /.flat-pagination -->
                        </div><!-- /.blog-pagination -->
                    </div><!-- /.col-lg-9 -->
                    <div class="col-lg-3">
                        <div class="sidebar">
                            <div class="widget widget-map">
                                <h5 class="widget-title">Map</h5>
                                <p>Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie.</p>
                                <div class="flat-maps">
                                    <div class="maps" style="width: 100%; height: 359px; "></div>
                                </div>
                            </div>
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <!-- Footer -->
        <?php include_once('layouts/footer.php')?>

        <div class="modal fade flat-popupform" id="popup_login">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body text-center clearfix">
                        <form class="form-login form-listing" action="#" method="post">
                            <h3 class="title-formlogin">Log in</h3>
                            <span class="input-login icon-form"><input type="text" placeholder="Your Name*" name="email"
                                    required="required"><i class="fa fa-user"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="Password*" name="password"
                                    required="required"><i class="fa fa-lock"></i></span>
                            <div class="flat-fogot clearfix">
                                <label class="float-left">
                                    <span class="input-check">
                                        <input type="checkbox" name="check" value="0" checked="">
                                        <span class="remember">Remember me</span>
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
        <div class="modal fade flat-popupform" id="popup_register">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body text-center clearfix">
                        <form class="form-login form-listing" action="#" method="post">
                            <h3 class="title-formlogin">Sign Up</h3>
                            <span class="input-login icon-form"><input type="text" placeholder="Your Name*" name="name"
                                    required="required"><i class="fa fa-user"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="E-mail*" name="email"
                                    required="required"><i class="fa fa-envelope-o"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="Password*" name="password"
                                    required="required"><i class="fa fa-lock"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="Repeat Password*" name="password"
                                    required="required"><i class="fa fa-lock"></i></span>
                            <div class="wrap-button signup">
                                <button type="button" id="logup-button" class=" login-btn effect-button" title="log in">LOG
                                    UP</button>
                            </div>
                        </form>
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
    <script src="<?php echo base_url."javascript/"?>jquery.min.js"></script>
    <script src="<?php echo base_url."javascript/"?>tether.min.js"></script>
    <script src="<?php echo base_url."javascript/"?>bootstrap.min.js"></script>
    <script src="<?php echo base_url."javascript/"?>jquery.easing.js"></script>
    <script src="<?php echo base_url."javascript/"?>jquery-waypoints.js"></script>
    <script src="<?php echo base_url."javascript/"?>bootstrap-slider.min.js"></script>
    <script src="<?php echo base_url."javascript/"?>gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUIc2-TTbn2IGJ4W0_0ePkv3xBvA_2sCM&region=GB"></script>
    <script src="<?php echo base_url."javascript/"?>jquery-countTo.js"></script>
    <script src="<?php echo base_url."javascript/"?>jquery.cookie.js"></script>
    <script src="<?php echo base_url."javascript/"?>parallax.js"></script>
    <script src="<?php echo base_url."javascript/"?>smoothscroll.js"></script>

    <script src="<?php echo base_url."javascript/"?>main.js"></script>
</body>

</html>