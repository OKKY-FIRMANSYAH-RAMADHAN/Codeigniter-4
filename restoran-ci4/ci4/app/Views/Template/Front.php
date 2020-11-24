<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title><?= $judul ?></title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url()?>/assets/front/images/favicon.png">
    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/front/css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/front/css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/front/css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/front/css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/front/css/themify-icons.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/front/css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/front/css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/front/css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/front/css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/front/css/slicknav.min.css">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/front/css/reset.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/front/style.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/front/css/responsive.css">



</head>

<body class="js">

    <?php
    $jml_keranjang = 0;
    foreach ($cart as $key => $value) {
        $jml_keranjang = $jml_keranjang + $value['qty'];
    }
    ?>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->


    <!-- Header -->
    <header class="header shop">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><a href="<?= base_url()?>"><img src="<?= base_url()?>/assets/front/images/logo.png"
                                            alt="logo"></a></li>

                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <!-- Top Right -->
                        <div class="right-content">
                            <ul class="list-main">
                                <?php if (!empty(session()->get('namapelanggan'))) :?>
                                <li><i class="ti-reload"></i> <a href="<?= base_url('historypembelian')?>">History
                                        Pembelian</a></li>
                                <li><i class="ti-credit-card"></i> <a href="<?= base_url('statuspembayaran')?>">Status
                                        Pembayaran</a></li>
                                <li><i class="ti-shopping-cart"></i> <a href="<?= base_url('keranjang')?>">Keranjang
                                        [<?= $jml_keranjang ?>]</a>
                                </li>
                                <li><i class="ti-user"></i> <a><?= session()->get('namapelanggan') ?></a></li>
                                <li><i class="ti-back-right"></i><a href="<?= base_url('logout')?>">Logout</a></li>
                                <?php else :?>
                                <li><i class="ti-shopping-cart"></i> <a href="<?= base_url('keranjang')?>">Keranjang
                                        [<?= $jml_keranjang ?>]</a>
                                </li>
                                <li><i class="ti-user"></i> <a href="#">Guest</a></li>
                                <li><i class="ti-power-off"></i><a href="<?= base_url('login')?>">Login</a></li>
                                <?php endif;?>
                            </ul>
                        </div>
                        <!-- End Top Right -->
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--/ End Header -->

    <?= $this->renderSection('content') ?>

    <!-- Start Shop Services Area -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Gratis Pengiriman</h4>
                        <p>Order Diatas Rp. 500.000</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Pengembalian Gratis</h4>
                        <p>Jika Makanan Bermasalah</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Pembayaran Yang Aman</h4>
                        <p>100% Pembayaran Aman</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Harga Terbaik</h4>
                        <p>Kualitas Terjamin</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services Area -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close"
                            aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <!-- Product Slider -->
                            <div class="product-gallery">
                                <div class="quickview-slider-active">
                                    <div class="single-slider">
                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                    </div>
                                </div>
                            </div>
                            <!-- End Product slider -->
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="quickview-content">
                                <h2>Flared Shift Dress</h2>
                                <div class="quickview-ratting-review">
                                    <div class="quickview-ratting-wrap">
                                        <div class="quickview-ratting">
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="#"> (1 customer review)</a>
                                    </div>
                                    <div class="quickview-stock">
                                        <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                    </div>
                                </div>
                                <h3>$29.00</h3>
                                <div class="quickview-peragraph">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum
                                        ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui
                                        nemo ipsum numquam.</p>
                                </div>
                                <div class="size">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <h5 class="title">Size</h5>
                                            <select>
                                                <option selected="selected">s</option>
                                                <option>m</option>
                                                <option>l</option>
                                                <option>xl</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <h5 class="title">Color</h5>
                                            <select>
                                                <option selected="selected">orange</option>
                                                <option>purple</option>
                                                <option>black</option>
                                                <option>pink</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled"
                                                data-type="minus" data-field="quant[1]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="quant[1]" class="input-number" data-min="1"
                                            data-max="1000" value="1">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number" data-type="plus"
                                                data-field="quant[1]">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="btn">Add to cart</a>
                                    <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                    <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                                </div>
                                <div class="default-social">
                                    <h4 class="share-now">Share:</h4>
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Footer Top -->
        <!-- End Footer Top -->
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="left">
                                <p>Copyright © 2020 Okky Firmansyah - All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="right">
                                <img src="<?= base_url()?>/assets/front/images/payments.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /End Footer Area -->

    <!-- Jquery -->
    <script src="<?= base_url()?>/assets/front/js/jquery.min.js"></script>
    <script src="<?= base_url()?>/assets/front/js/jquery-migrate-3.0.0.js"></script>
    <script src="<?= base_url()?>/assets/front/js/jquery-ui.min.js"></script>
    <!-- Popper JS -->
    <script src="<?= base_url()?>/assets/front/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?= base_url()?>/assets/front/js/bootstrap.min.js"></script>
    <!-- Color JS -->
    <script src="<?= base_url()?>/assets/front/js/colors.js"></script>
    <!-- Slicknav JS -->
    <script src="<?= base_url()?>/assets/front/js/slicknav.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="<?= base_url()?>/assets/front/js/owl-carousel.js"></script>
    <!-- Magnific Popup JS -->
    <script src="<?= base_url()?>/assets/front/js/magnific-popup.js"></script>
    <!-- Waypoints JS -->
    <script src="<?= base_url()?>/assets/front/js/waypoints.min.js"></script>
    <!-- Countdown JS -->
    <script src="<?= base_url()?>/assets/front/js/finalcountdown.min.js"></script>
    <!-- Nice Select JS -->
    <script src="<?= base_url()?>/assets/front/js/nicesellect.js"></script>
    <!-- Flex Slider JS -->
    <script src="<?= base_url()?>/assets/front/js/flex-slider.js"></script>
    <!-- ScrollUp JS -->
    <script src="<?= base_url()?>/assets/front/js/scrollup.js"></script>
    <!-- Onepage Nav JS -->
    <script src="<?= base_url()?>/assets/front/js/onepage-nav.min.js"></script>
    <!-- Easing JS -->
    <script src="<?= base_url()?>/assets/front/js/easing.js"></script>
    <!-- Active JS -->
    <script src="<?= base_url()?>/assets/front/js/active.js"></script>
</body>

</html>