<!-- top-header -->
<div class="header-most-top">
    <p>ECOMERCIAL Offer Zone Top Deals & Discounts</p>
</div>
<!-- //top-header -->
<!-- header-bot-->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <!-- header-bot-->
        <div class="col-md-4 logo_agile">
            <h1>
                <a href="index.php?act=Index">
                    <span>E</span>comercial
                    <span>S</span>hoppy
                    <a href="index.php?act=Index"><img src="<?php echo $public ?>/images/logo2.png" alt=" "></a>
                </a>
            </h1>
        </div>
        <!-- header-bot -->

        <div class="col-md-13 header" style="margin-top:20px;">

            <ul>

                <?php if (isset($_SESSION['MaTaiKhoan']) == false) { ?>

                    <li>

                        <a href="index.php?act=Login">
                            <span class="fa fa-unlock-alt"></span> Sign In </a>
                    </li>
                    <li>
                        <a href="index.php?act=Register">
                            <span class="fa fa-pencil-square-o"></span> Sign Up </a>
                    </li>

                <?php } else { ?>
                    <li>
                        <a href="index.php?act=Account">
                            <span class="fa fa-pencil-square-o"> </span> <?php echo $_SESSION['TenHienThi'] ?></a>
                    </li>
                    <li>
                        <a href="inc/XLLogout.php">
                            <span class="fa fa-pencil-square-o"></span> Log out </a>
                    </li>
                    <li>
                        <a href="index.php?act=Checkout">
                            <i class="fa fa-cart-arrow-down" style="color:orangered; size: 100px;"></i> </a>
                    </li>

                <?php } ?>
            </ul>
        </div>
        <!-- //header lists
            <! search -->

        <div class="agileits_search" style="margin-left: 400px;margin-top:-50px;">
            <form action="#" method="post">
           
                <input name="Search" type="search" placeholder="How can we help you today?" required="" style="width:400px;">
                <button type="submit" class="btn btn-default" aria-label="Left Align">
                    <span class="fa fa-search" aria-hidden="true"> </span>
                </button>
           
            </form> 
        </div>
        <!-- //search -->
        <!-- cart details -->
        <div class="top_nav_right" style="margin-top:-65px;">
            <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                <form action="#" method="post" class="last">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="display" value="1">
                    <button class="w3view-cart" type="submit" name="submit" value="">
                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
        <!-- //cart details -->
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
</div>

<!-- shop </div>locator (popup) -->
<!-- Button trigger modal(shop-locator) -->
<div id="small-dialog1" class="mfp-hide">
</div>
<!-- //shop locator (popup) -->


<!-- //Modal2 -->
<!-- //signup Model -->
<!-- //header-bot -->
<!-- <div class="container">
	</br>
		</div> -->
<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Big
                        <span>Save</span>
                    </h3>
                    <p>Get flat
                        <span>10%</span> Cashback
                    </p>
                    <a class="button2" href="product.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item2">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Healthy
                        <span>Saving</span>
                    </h3>
                    <p>Get Upto
                        <span>30%</span> Off
                    </p>
                    <a class="button2" href="products.php">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item3">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Big
                        <span>Deal</span>
                    </h3>
                    <p>Get Best Offer Upto
                        <span>20%</span>
                    </p>
                    <a class="button2" href="product.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item4">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Today
                        <span>Discount</span>
                    </h3>
                    <p>Get Now
                        <span>40%</span> Discount
                    </p>
                    <a class="button2" href="product.html">Shop Now </a>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- //banner -->