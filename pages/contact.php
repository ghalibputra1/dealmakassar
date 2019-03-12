<?php include_once('../helper.php')?>
<!DOCTYPE html>
<html lang="en-US">
<?php include_once('../layouts/head.php')?>

<body>
    <!-- Boxed -->
    <div class="boxed">

        <!-- Header -->
        <?php include_once('../layouts/header.php')?>

        <!-- Page title -->
        <div class="page-title parallax parallax1">
            <div class="section-overlay">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="title">Contact</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li> - </li>
                                <li><a href="index.php">Page</a></li>
                                <li> - </li>
                                <li>Contact</li>
                            </ul>
                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->

        <section class="flat-row contact1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section text-center">
                            <h1 class="title">Contact Us</h1>
                            <div class="sub-title">
                                Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem
                                Ipsum ist in der Industrie bereits <br>der Standard Demo-Text seit 1500, als ein
                                unbekannter Schriftsteller
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="iconbox style2 text-center">
                            <div class="box-header">
                                <i class="icon-phone"></i>
                            </div>
                            <div class="box-content">
                                <div class="box-title">+61 3 8376 6284</div>
                                <ul>
                                    <li>+61 3 8887 6284</li>
                                    <li>+61 3 8777 6222</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="iconbox style2 text-center">
                            <div class="box-header">
                                <i class="icon-map"></i>
                            </div>
                            <div class="box-content">
                                <div class="box-title">PO Box 16122 Collins Street</div>
                                <ul>
                                    <li>West Victoria 8007 Australia</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="iconbox style2 text-center">
                            <div class="box-header">
                                <i class=" icon-envelope"></i>
                            </div>
                            <div class="box-content">
                                <div class="box-title">themflat@gmail.com</div>
                                <ul>
                                    <li>design.tf@gmail.com</li>
                                    <li>marketer.tf@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flat-row contact2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <form id="contactform" method="post" action="./contact/contact-process.php" novalidate="novalidate"
                            class="form-info">
                            <p class="input-info"><input type="text" name="name" id="name" value="" placeholder="Your Name"
                                    required="required"></p>
                            <p class="input-info"><input type="text" name="email" id="email" value="" placeholder="E-mail"
                                    required="required"></p>
                            <p class="input-info"><input type="text" name="phone" id="phone" value="" placeholder="Telephone"
                                    required="required"></p>
                            <p class="textarea-info clearfix"><textarea id="message-contact" name="message" placeholder="Message"
                                    required="required"></textarea></p>
                            <p class="submit-info">
                                <button type="submit" class="flat   -button">Send now</button></p>
                        </form>
                    </div>
                    <div class="col-lg-8">
                        <div class="flat-maps">
                            <div class="maps" style="width: 100%; height: 420px; "></div>
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
    <script src="<?php echo base_url."javascript/"?>"?>jquery.min.js"></script>
    <script src="<?php echo base_url."javascript/"?>tether.min.js"></script>
    <script src="<?php echo base_url."javascript/"?>bootstrap.min.js"></script>
    <script src="<?php echo base_url."javascript/"?>jquery.easing.js"></script>
    <script src="<?php echo base_url."javascript/"?>jquery-waypoints.js"></script>
    <script src="<?php echo base_url."javascript/"?>jquery-validate.js"></script>
    <script src="<?php echo base_url."javascript/"?>gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUIc2-TTbn2IGJ4W0_0ePkv3xBvA_2sCM&region=GB"></script>
    <script src="<?php echo base_url."javascript/"?>jquery.cookie.js"></script>
    <script src="<?php echo base_url."javascript/"?>parallax.js"></script>
    <script src="<?php echo base_url."javascript/"?>smoothscroll.js"></script>

    <script src="<?php echo base_url."javascript/"?>main.js"></script>
</body>

</html>