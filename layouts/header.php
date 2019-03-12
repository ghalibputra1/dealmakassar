<header id="header" class="header clearfix">
    <div class="container">
        <div class="row">
                <div class="col-lg-4">
                    <div id="logo" class="logo float-left">
                        <a href="index.php" rel="home">
                            <img src="<?php echo base_url."images/" ?>logo.png" alt="image">
                        </a>
                    </div>
                    <div class="btn-menu">
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-2">
                    <div class="nav-wrap">
                        <nav id="mainnav" class="mainnav float-left">
                            <ul class="menu">
                                <li class="home">
                                    <a href="index.php">Home</a>
                                </li>
                                <li><a href="listing-grid.php">Deals</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" href="#popup_login"><i class="fa fa-user"></i> Sign in</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" href="#"><i class="fa fa-user-plus"></i> Register</a>
                                    <ul class="submenu">
                                        <li>
                                            <a data-toggle="modal" href="#popup_register_merc"><i class="fas fa-store-alt"></i>
                                                As a Merchant</a>
                                        </li>
                                        <li>
                                            <a data-toggle="modal" href="#popup_register_user"><i class="fa fa-user-plus"></i>
                                                As a User</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul><!-- /.menu -->
                        </nav><!-- /.mainnav -->

                        <div class="button-addlist float-right">
                            <button type="button" class="flat-button" onclick="location.href='addlisting.php'">Add Deal</button>
                        </div>
                    </div><!-- /.nav-wrap -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
    </div>
</header>