<?php include_once('../helper.php') ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<?php include_once('../layouts/head.php') ?>
<body class="header_sticky"> 
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
                        <h1 class="title">Services</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li> - </li>   
                             <li><a href="index.php">Page</a></li> 
                             <li> - </li>                         
                            <li>Services</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <section class="flat-row services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="iconbox text-center">
                        <div class="box-header">
                            <i class="ti-settings"></i>
                        </div>
                        <div class="box-content">
                            <div class="box-title">Business Services 1</div>    
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="iconbox text-center">
                        <div class="box-header">
                            <i class="ti-shopping-cart-full"></i>
                        </div>
                        <div class="box-content">
                            <div class="box-title">Business Services 2</div>    
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="iconbox text-center">
                        <div class="box-header">
                            <i class="ti-layers-alt"></i>
                        </div>
                        <div class="box-content">
                            <div class="box-title">Business Services 3</div>    
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="iconbox text-center">
                        <div class="box-header">
                            <i class="ti-palette"></i>
                        </div>
                        <div class="box-content">
                            <div class="box-title">Business Services 4</div>    
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="iconbox text-center">
                        <div class="box-header">
                            <i class="ti-announcement"></i>
                        </div>
                        <div class="box-content">
                            <div class="box-title">Business Services 5</div>    
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="iconbox text-center">
                        <div class="box-header">
                            <i class="ti-printer"></i>
                        </div>
                        <div class="box-content">
                            <div class="box-title">Business Services 6</div>    
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> 
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
                            <span class="input-login icon-form"><input type="text" placeholder="Your Name*" name="email" required="required"><i class="fa fa-user"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="Password*" name="password" required="required"><i class="fa fa-lock"></i></span>
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
                                <button type="button" id="login-button" class=" login-btn effect-button" title="log in">LOG IN</button>
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
                            <span class="input-login icon-form"><input type="text" placeholder="Your Name*" name="name" required="required"><i class="fa fa-user"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="E-mail*" name="email" required="required"><i class="fa fa-envelope-o"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="Password*" name="password" required="required"><i class="fa fa-lock"></i></span>
                             <span class="input-login icon-form"><input type="text" placeholder="Repeat Password*" name="password" required="required"><i class="fa fa-lock"></i></span>
                            <div class="wrap-button signup">
                                <button type="button" id="logup-button" class=" login-btn effect-button" title="log in">LOG UP</button>
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
    <script src="<?php echo base_url."javascript/"?>jquery-countTo.js"></script>  
    <script src="<?php echo base_url."javascript/"?>jquery.cookie.js"></script>
    <script src="<?php echo base_url."javascript/"?>parallax.js"></script>
    <script src="<?php echo base_url."javascript/"?>smoothscroll.js"></script>   

    <script src="<?php echo base_url."javascript/"?>main.js"></script>
</body>
</html>