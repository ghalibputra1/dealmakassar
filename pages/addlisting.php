<?php include('../helper.php') ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<?php include_once('../layouts/head.php') ?>

<body>
    <!-- Header -->
    <div class="boxed">

        <!-- Header -->
        <?php include_once('../layouts/header.php') ?>

        <!-- Page title -->
        <div class="page-title parallax parallax1">
            <div class="section-overlay">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="title">Add Deal</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li> - </li>
                                <li><a href="index.php">Page</a></li>
                                <li> - </li>
                                <li>Add Deal</li>
                            </ul>
                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->

        <section class="flat-row flat-note bg-red">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>You need to Log in befor perform this operation</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="note-button float-right">
                            <a data-toggle="modal" href="#popup_login" class="flat-button">LOG IN</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="flat-row addlisting">
            <div class="container">
                <div class="add-filter">
                    <div class="row">
                        <div class="col-lg-2">
                            <h5 class="title-list">Basic Merchant</h5>
                        </div>
                        <div class="col-lg-10 widget-form">
                            <form method="post" action="#" class="filter-form form-addlist">
                                <p class="input-info">
                                    <label class="nhan">Merchant Title*</label>
                                    <input type="text" name="title" id="title">
                                </p>
                                <p class="input-info">
                                    <label class="nhan">Description*</label>
                                    <textarea class="" tabindex="4" name="comment"></textarea>
                                </p>
                                <p class="input-info icon">
                                    <label class="nhan">Categories*</label>
                                    <select class=" dropdown_sort">
                                        <option value="">All Categories</option>
                                        <option value="">Hotel &amp; travel</option>
                                        <option value="">Real Estate</option>
                                        <option value="">Restaurant</option>
                                        <option value="">Healthy &amp; Fitness</option>
                                        <option value="">Food and coffee</option>
                                        <option value="">Drinks</option>
                                    </select>
                                    <i class="fa fa-angle-down"></i>
                                </p>
                            </form>

                            <div class="more-filter">
                                <label class="nhan">More Fillter*</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="flat-check">
                                            <input type="checkbox" id="wifi" name="category" checked="checked">
                                            <label for="wifi">Wifi</label>
                                        </div>
                                        <div class="flat-check">
                                            <input type="checkbox" id="smoking" name="category">
                                            <label for="smoking">Smoking allowed</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="flat-check">
                                            <input type="checkbox" id="onl" name="category" checked="checked">
                                            <label for="onl">Online Reservation</label>
                                        </div>
                                        <div class="flat-check">
                                            <input type="checkbox" id="park" name="category">
                                            <label for="park">Parking street</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="flat-check">
                                            <input type="checkbox" id="event" name="category">
                                            <label for="event">Events </label>
                                        </div>
                                        <div class="flat-check">
                                            <input type="checkbox" id="ele" name="category">
                                            <label for="ele">Elevator in building</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="flat-check">
                                            <input type="checkbox" id="host" name="category">
                                            <label for="host">Host</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-images">
                                <label class="nhan">Gallery</label>
                                <form action="/file-upload" class="dropzone" id="my-awesome-dropzone">

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="info-contact">
                    <div class="row">
                        <div class="col-lg-2">
                            <h5 class="title-list">Infomation</h5>
                        </div>
                        <div class="col-lg-10 profile">
                            <label class="nhan">Contact</label>
                            <form method="post" action="#" class="form-contact row">
                                <div class="col-lg-4">
                                    <p class="input-info">
                                        <input type="text" name="title" placeholder="Phone" required="">
                                    </p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="input-info">
                                        <input type="email" name="title" placeholder="Email" required="">
                                    </p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="input-info">
                                        <input type="text" name="title" placeholder="Website" required="">
                                    </p>
                                </div>
                            </form>
                            <ul class="add-section">
                                <li class="twitter"><i class="fa fa-twitter-square twitter"></i><span>Twitter</span><a
                                        href="https://twitter.com/" title="">https://twitter.com/</a><i class="fa fa-minus-circle float-right"></i></li>
                                <li class="face"><i class="fa fa-facebook-square face"></i><span>Facebook</span><a href="https://www.facebook.com/"
                                        title="">https://www.facebook.com/</a><i class="fa fa-minus-circle float-right"></i></li>
                                <li class="youtube"><i class="fa fa-youtube-square youtube"></i><span>Youtube</span><i
                                        class="fa fa-minus-circle float-right"></i></li>
                                <li class="add"><a href="#" class="add">Add new section</a><a href="#" class="float-right"><i
                                            class="fa fa-plus-circle"></i></a></li>
                            </ul>
                            <div class="open-hour">
                                <label class="nhan">Open Hours*</label>
                                <ul class="list-hour">
                                    <li class="clearfix">
                                        <div class="day">Mon - Sat</div>
                                        <div class="time">
                                            <span class="hour">08</span>
                                            <span class="am">am</span>
                                            <span class="to">to</span>
                                            <span class="hour">05</span>
                                            <span class="am">pm</span>
                                            <a href="#" class="float-right" title=""><i class="fa fa-minus-circle"></i></a>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="day">Day</div>
                                        <div class="time">
                                            <span class="solid">__</span>
                                            <span class="am">am</span>
                                            <span class="to">to</span>
                                            <span class="solid">__</span>
                                            <span class="am">pm</span>
                                            <a href="#" class="float-right"><i class="fa fa-plus-circle"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-accadion">
                    <div class="row">
                        <div class="col-lg-2">
                            <h5 class="title-list">Pricing</h5>
                        </div>
                        <div class="col-lg-10">
                            <div class="flat-accordion">
                                <div class="flat-toggle">
                                    <div class="toggle-title active">Section 1</div>
                                    <div class="toggle-content">
                                        <form method="post" action="#" class="form-profile">
                                            <ul class="list-input">
                                                <li class="clearfix excep">
                                                    <p class="input-info title">
                                                        <input type="text" name="nell" placeholder="Nellara">
                                                    </p>
                                                    <p class="input-info descrip">
                                                        <input type="text" name="late" placeholder="Late evening craving for some comfort food led me to this place">
                                                    </p>
                                                    <p class="input-info pricing">
                                                        <input type="text" name="price" placeholder="7.99">
                                                        <span>IDR</span>
                                                    </p>
                                                    <p class="input-info add-icon">
                                                        <i class="fa fa-minus-circle"></i>
                                                    </p>
                                                </li>
                                                <li class="clearfix">
                                                    <p class="input-info title">
                                                        <input type="text" name="title" placeholder="Title*">
                                                    </p>
                                                    <p class="input-info descrip">
                                                        <input type="text" name="des" placeholder="Description*">
                                                    </p>
                                                    <p class="input-info pricing">
                                                        <input type="text" name="price2" placeholder="Price*">
                                                        <span>IDR</span>
                                                    </p>
                                                    <p class="input-info add-icon">
                                                        <a href="#" title=""><i class="fa fa-plus-circle"></i></a>
                                                    </p>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div><!-- /toggle -->
                                <div class="flat-toggle">
                                    <div class="toggle-title">Section 2</div>
                                    <div class="toggle-content">
                                        <form method="post" action="#" class="form-profile">
                                            <ul class="list-input">
                                                <li class="clearfix">
                                                    <p class="input-info title">
                                                        <input type="text" name="title" placeholder="Title*">
                                                    </p>
                                                    <p class="input-info descrip">
                                                        <input type="text" name="des" id="des" placeholder="Description*">
                                                    </p>
                                                    <p class="input-info pricing">
                                                        <input type="text" name="price2" id="price2" placeholder="Price*">
                                                        <span>IDR</span>
                                                    </p>
                                                    <p class="input-info add-icon">
                                                        <a href="#" title=""><i class="fa fa-plus-circle"></i></a>
                                                    </p>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div><!-- /toggle -->
                            </div> <!-- /.flat-accordion -->
                            <div class="button-addlisting">
                                <button type="button" class="flat-button" onclick="location.href='addlisting.php'">Add
                                    Merchant</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include_once('../layouts/footer.php')?>

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
    <script src="<?php echo base_url."javascript/" ?>jquery.min.js"></script>
    <script src="<?php echo base_url."javascript/" ?>tether.min.js"></script>
    <script src="<?php echo base_url."javascript/" ?>bootstrap.min.js"></script>
    <script src="<?php echo base_url."javascript/" ?>jquery.easing.js"></script>
    <script src="<?php echo base_url."javascript/" ?>jquery-waypoints.js"></script>
    <script src="<?php echo base_url."javascript/" ?>dropzone.js"></script>
    <script src="<?php echo base_url."javascript/" ?>jquery.cookie.js"></script>
    <script src="<?php echo base_url."javascript/" ?>parallax.js"></script>
    <script src="<?php echo base_url."javascript/" ?>smoothscroll.js"></script>

    <script src="<?php echo base_url."javascript/" ?>main.js"></script>
</body>

</html>