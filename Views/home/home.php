			<!--Home slider-->
            <?php require_once('slide.php'); ?>
            <!--End Home slider-->

            <!--Small Banners-->
            <div class="section imgBanners pt-0">
            	<div class="container">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-6 col-lg-6 pl-0">
                        	<div class="imgBnrOuter">
                                <div class="inner btmright">
                                    <img data-src="assets/images/home3-small-banner1.jpg" src="assets/images/home3-small-banner1.jpg" alt="" class="blur-up lazyload"/>
                                    <div class="ttl"><h5>Bộ sưu tập giày</h5>Giá từ 1.500.000d</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 pr-0">
                        	<div class="imgBnrOuter">
                                <div class="inner btmright">
                                    <img data-src="assets/images/home3-small-banner2.jpg" src="assets/images/home3-small-banner2.jpg" alt="" class="blur-up lazyload"/>
                                    <div class="ttl"><h5>Túi hợp thời trang</h5>Giá từ 1.000.000</div>
                                </div>
                            </div>
                            <div class="imgBnrOuter mt-4">
                                <div class="inner btmright">
                                    <img data-src="assets/images/home3-small-banner3.jpg" src="assets/images/home3-small-banner3.jpg" alt="" class="blur-up lazyload"/>
                                    <div class="ttl"><h5>Phụ kiện</h5>Giá từ 400.000d</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Small Banners-->

            <!--Collection Tab slider-->
            <div class="tab-slider-product section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2 heading-font">Sản phẩm bán chạy</h2>
                            </div>
                            <div class="tabs-listing">
                                <ul class="tabs clearfix">
                                    <li class="active" rel="tab1">Thời trang</li>
                                    <li rel="tab2">Phụ kiện</li>
                                    <li rel="tab3">Giảm giá</li>
                                </ul>
                                <div class="tab_container">

                                  <!--Wmen-->
                                    <div id="tab1" class="tab_content grid-products style3">
                                        <div class="productSlider">

                                          <?php foreach ($data_sanpham1 as $value) {?>

                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                  <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>"><?= $value['TenSP'] ?></a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh1']?>" alt="image" title="<?= $value['TenSP'] ?>">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh2']?>" alt="image" title="<?= $value['TenSP'] ?>">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->

                                                <div class="button-set button-style2">
                                                    <a href="?act=cart&xuli=add&id=<?=$value['MaSP']?>" class="btn cartIcon btn-addto-cart" id="add-cart" type="button" tabindex="0" style="width:100%"><i class="icon anm anm-bag-l"></i></a>
                                                </div>

                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price"><?= number_format($value['DonGia']) ?> $ </span>
                                                    </div>
                                                    <!-- End product price -->
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                          <?php } ?>


                                        </div>
                                    </div>

                                    <!--Men-->

                                    <div id="tab2" class="tab_content grid-products style3">
                                        <div class="productSlider">
                                            <?php foreach ($data_sanpham2 as $value) {?>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>"><?= $value['TenSP'] ?></a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh1']?>" alt="image" title="<?= $value['TenSP'] ?>">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh2']?>" alt="image" title="<?= $value['TenSP'] ?>">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels round"><span class="lbl pr-label1">Men</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->

                                                <div class="button-set button-style2">
                                                    <a href="?act=cart&xuli=add&id=<?=$value['MaSP']?>" class="btn cartIcon btn-addto-cart" type="button" tabindex="0" style="width:100%"><i class="icon anm anm-bag-l"></i></a>
                                                </div>

                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price"><?= number_format($value['DonGia']) ?> $ </span>
                                                    </div>
                                                    <!-- End product price -->
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <!--Sale-->





                                    <div id="tab3" class="tab_content grid-products style3">
                                        <div class="productSlider">
                                          <?php foreach ($data_sanpham3 as $value) {?>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>"><?= $value['TenSP'] ?></a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh1']?>" alt="image" title="<?= $value['TenSP'] ?>">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh2']?>" alt="image" title="<?= $value['TenSP'] ?>">
                                                        <!-- End hover image -->
                                                    </a>
                                                   
                                                </div>
                                                <!-- end product image -->
                                                <div class="button-set button-style2">
                                                    <a href="?act=cart&xuli=add&id=<?=$value['MaSP']?>" class="btn cartIcon btn-addto-cart" type="button" tabindex="0" style="width:100%"><i class="icon anm anm-bag-l"></i></a>
                                                </div>
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                      <span class="price"><?= number_format($value['DonGia']) ?> $ </span>
                                                    </div>
                                                    <!-- End product price -->

                                                    
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Collection Tab slider-->

            <!--Feature Content-->
            <div class="section feature-content">
            	<div class="container">
                	<div class="row">
                    	<div class="feature-row">
                            <div class="col-12 col-sm-12 col-md-6 feature-row__item">
                                <img src="assets/images/anh1.jpeg" title="Fast Fashion Only available at BElle" />
                            </div>
                        	<div class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--left text-left">
                        		<div class="row-text">
                                    <h2 class="h2">Fast Fashion </h2>
                                    <div class="rte-setting featured-row__subtext"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div>
                                    <a href="#" class="btn">Shop Now</a>
                          		</div>
                        	</div>
                      	</div>
                    </div>
                </div>
            </div>
            <!--Feature Content-->

        <!--End Body Content-->
