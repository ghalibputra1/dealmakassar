<?php include_once('../helper.php')?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<?php include_once('../layouts/head.php')?>

<body>
    <!-- Boxed -->
    <div class="boxed">

        <section class="flat-row profile bg-theme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="flat-user profile">
                            <a href="user.php" class="edit" title="">Back to profile <i class="fa fa-backward"></i></a>
                            <ul class="info">
                                <li><a href="#" title=""><i class="fa fa-user"></i>BASIC INFOMATION</a></li>
                                <li><a href="#" title=""><i class="fa fa-link"></i>ON THE WEB</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="flat-tabs style2" data-effect="fadeIn">
                            <ul class="menu-tab clearfix">
                                <li class="active"><a href="#"><i class="ion-navicon-round"></i>(3) Listings</a></li>
                                <li class=""><a href="#"><i class="ion-chatbubbles"></i>(3) Reviews</a></li>
                            </ul><!-- /.menu-tab -->

                            <div class="content-tab listing-user profile">
                                <div class="content-inner active">
                                    <div class="basic-info">
                                        <h5>Basic Infomation</h5>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="upload-img">
                                                    <form action="/file-upload" class="dropzone" id="my-awesome-dropzone">

                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <form method="post" action="#" class="form-profile">
                                                    <p class="input-info">
                                                        <label>Your name*</label>
                                                        <input type="text" name="name" id="name">
                                                    </p>
                                                    <p class="input-info">
                                                        <label>Your Phone Numbers*</label>
                                                        <input type="text" name="phone" id="phone">
                                                    </p>
                                                    <p class="input-info">
                                                        <label>Your Phone Numbers*</label>
                                                        <input type="text" name="email" id="email">
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="on-web">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5>On the web</h5>
                                            </div>
                                            <div class="col-md-8">
                                                <ul class="add-section">
                                                    <li class="twitter"><i class="fa fa-twitter-square twitter"></i><span>Twitter</span><a
                                                            href="https://twitter.com/" title="">https://twitter.com/</a><i
                                                            class="fa fa-minus-circle float-right"></i></li>
                                                    <li class="face"><i class="fa fa-facebook-square face"></i><span>Facebook</span><a
                                                            href="https://www.facebook.com/" title="">https://www.facebook.com/</a><i
                                                            class="fa fa-minus-circle float-right"></i></li>
                                                    <li class="youtube"><i class="fa fa-youtube-square youtube"></i><span>Youtube</span><i
                                                            class="fa fa-minus-circle float-right"></i></li>
                                                    <li class="add"><a href="#" class="add">Add new section</a><a href="#"
                                                            title="" class="float-right"><i class="fa fa-plus-circle "></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="update-button text-center">
                                        <button type="button" class="flat-button" onclick="location.href='#'">Update
                                            Profile</button>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="author-review content-listing">
                                        <div class="comments-area">
                                            <ol class="comment-list">
                                                <li class="comment">
                                                    <article class="comment-body clearfix">
                                                        <div class="comment-author">
                                                            <img src="images/services/c1.png" alt="image">
                                                        </div><!-- .comment-author -->
                                                        <div class="comment-text">
                                                            <div class="comment-metadata">
                                                                <h5><a href="#">Shaya Hill </a><span>on San Angelo
                                                                        Restaurants</span></h5>
                                                                <p class="day">12/01/2017</p>
                                                                <div class="flat-start">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                </div>
                                                            </div><!-- .comment-metadata -->
                                                            <div class="comment-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                                    nostrud exercitation ullamco </p>
                                                            </div><!-- .comment-content -->
                                                        </div><!-- /.comment-text -->
                                                    </article><!-- .comment-body -->
                                                </li><!-- #comment-## -->
                                                <li class="comment">
                                                    <article class="comment-body clearfix">
                                                        <div class="comment-author">
                                                            <img src="images/services/c2.png" alt="image">
                                                        </div><!-- .comment-author -->
                                                        <div class="comment-text">
                                                            <div class="comment-metadata">
                                                                <h5><a href="#">Alex Poole </a><span>on Grand Prairie
                                                                        Restaurants</span></h5>
                                                                <p class="day">12/01/2017</p>
                                                                <div class="flat-start">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                </div>
                                                            </div><!-- .comment-metadata -->
                                                            <div class="comment-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                                    nostrud exercitation ullamco </p>
                                                            </div><!-- .comment-content -->
                                                        </div><!-- /.comment-text -->
                                                    </article><!-- .comment-body -->
                                                </li><!-- #comment-## -->
                                                <li class="comment">
                                                    <article class="comment-body clearfix">
                                                        <div class="comment-author">
                                                            <img src="images/services/c3.png" alt="image">
                                                        </div><!-- .comment-author -->
                                                        <div class="comment-text">
                                                            <div class="comment-metadata">
                                                                <h5><a href="#">Anthony Jones </a><span>on San Antonio
                                                                        Restaurants</span></h5>
                                                                <p class="day">12/01/2017</p>
                                                                <div class="flat-start">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                </div>
                                                            </div><!-- .comment-metadata -->
                                                            <div class="comment-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                                    nostrud exercitation ullamco </p>
                                                            </div><!-- .comment-content -->
                                                        </div><!-- /.comment-text -->
                                                    </article><!-- .comment-body -->
                                                </li><!-- #comment-## -->
                                            </ol><!-- .comment-list -->
                                        </div>
                                    </div>
                                </div>
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
        <div class="modal fade flat-popupform" id="popup_register_merc">
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
                                    required="required"><i class="fa fa-envelope-o"></i></span>
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
                                    required="required"><i class="fa fa-envelope-o"></i></span>
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
    <script src="<?php echo base_url."javascript/"?>jquery.min.js"></script>
    <script src="<?php echo base_url."javascript/"?>tether.min.js"></script>
    <script src="<?php echo base_url."javascript/"?>bootstrap.min.js"></script>
    <script src="<?php echo base_url."javascript/"?>jquery.easing.js"></script>
    <script src="<?php echo base_url."javascript/"?>jquery-waypoints.js"></script>
    <script src="<?php echo base_url."javascript/"?>dropzone.js"></script>
    <script src="<?php echo base_url."javascript/"?>jquery.cookie.js"></script>
    <script src="<?php echo base_url."javascript/"?>parallax.js"></script>
    <script src="<?php echo base_url."javascript/"?>smoothscroll.js"></script>

    <script src="<?php echo base_url."javascript/"?>main.js"></script>
</body>

</html>