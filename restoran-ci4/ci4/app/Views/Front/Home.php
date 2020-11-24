<?= $this->extend('Template/Front') ?>
<?= $this->section('content') ?>

<!-- Slider Area -->
<section class="hero-slider">
    <!-- Single Slider -->
    <div class="single-slider">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-9 offset-lg-3 col-12">
                    <div class="text-inner">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="hero-text">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Single Slider -->
</section>
<!--/ End Slider Area -->

<!-- Start Most Popular -->
<div class="product-area most-popular section">
    <div class="container">
        <?php if (session()->getFlashdata('pesan') != null) { ?>
        <div class="alert alert-success">
            <center><?= session()->getFlashdata('pesan'); ?><center>
        </div>
        <?php } ?>
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Menu Terbaru</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    <!-- Start Single Product -->
                    <?php foreach ($terbaru as $key => $value) : ?>
                    <div class="single-product">
                        <div class="product-img">
                            <a>
                                <img class="default-img" style="height:180px; width:250px;"
                                    src="<?= base_url('/upload/' . $value['gambar'] . '') ?>" alt="#">
                                <img class="hover-img" style="height:180px; width:250px;"
                                    src="<?= base_url('/upload/' . $value['gambar'] . '') ?>" alt="#">
                                <span class="out-of-stock">New</span>
                            </a>
                            <div class="button-head">
                                <div class="product-action-2">
                                    <a title="Add to cart"
                                        href="<?= base_url('tambah-ke-keranjang/' . $value['idmenu']) ?>">Tambah Ke
                                        Keranjang</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html"><?= $value['menu'] ?></a></h3>
                            <div class="product-price">
                                <span>Rp. <?= number_format($value['harga'], 0, ',', '.')  ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Most Popular Area -->

<!-- Start Product Area -->
<div class="product-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Daftar Menu</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-info">
                    <div class="nav-main">
                        <!-- Tab Nav -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#all"
                                    role="tab">Semua
                                    Kategori</a></li>
                            <?php foreach ($kategori as $key => $value) : ?>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                    href=".kategori-<?= $value['idkategori'] ?>"
                                    role="tab"><?= $value['kategori'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                        <!--/ End Tab Nav -->
                    </div>
                    <div class="tab-content" id="myTabContent">

                        <!-- Start Single Tab -->
                        <div class="tab-pane fade show active" id="all" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    <?php foreach ($menu as $key => $value) : ?>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-6">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a>
                                                    <img class="default-img" style="height:180px; width:250px;"
                                                        src="<?= base_url('/upload/' . $value['gambar'] . '') ?>"
                                                        alt="#">
                                                    <img class="hover-img" style="height:180px; width:250px;"
                                                        src="<?= base_url('/upload/' . $value['gambar'] . '') ?>"
                                                        alt="#">
                                                </a>
                                                <div class="button-head">
                                                    <div class="product-action-2">
                                                        <a class="text-center" title="Add to cart"
                                                            href="<?= base_url('tambah-ke-keranjang/' . $value['idmenu']) ?>">Tambah
                                                            Ke Keranjang</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="text-center"><a><?= $value['menu'] ?></a>
                                                </h3>
                                                <div class="product-price text-center">
                                                    <span>Rp. <?= number_format($value['harga'], 0, ',', '.')  ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Tab -->
                        <!-- Start Single Tab -->
                        <?php foreach ($kategori as $key => $value) : ?>
                        <div class="tab-pane fade kategori-<?= $value['idkategori'] ?>" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    <?php foreach ($menu as $key => $data) : ?>
                                    <?php if ($data['idkategori'] === $value['idkategori']) : ?>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-6">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="<?= base_url('productdetail/index' . $data['idmenu']) ?>">
                                                    <img class="default-img" style="height:180px; width:250px;"
                                                        src="<?= base_url('/upload/' . $data['gambar'] . '') ?>"
                                                        alt="#">
                                                    <img class="hover-img" style="height:180px; width:250px;"
                                                        src="<?= base_url('/upload/' . $data['gambar'] . '') ?>"
                                                        alt="#">
                                                </a>
                                                <div class="button-head">
                                                    <div class="product-action-2">
                                                        <a title="Add to cart"
                                                            href="<?= base_url('tambah-ke-keranjang/' . $data['idmenu']) ?>">Tambah
                                                            Ke Keranjang</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="text-center"><a><?= $data['menu'] ?></a>
                                                </h3>
                                                <div class="product-price text-center">
                                                    <span>Rp. <?= number_format($data['harga'], 0, ',', '.')  ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif ?>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Tab -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Area -->

<?= $this->endSection() ?>