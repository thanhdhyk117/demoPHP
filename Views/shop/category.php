<!--Sidebar-->
<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
    <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
    <div class="sidebar_tags">
        <!--Categories-->
        <div class="sidebar_widget categories filter-widget">
              <div class="widget-title"><h2>Danh mục</h2></div>
              <div class="widget-content">
                  <ul class="sidebar_categories">
                    <?php    $i = 1; foreach ($data_chitietDM as $row) { ?>
                      <li class="level1 sub-level"><a href="#;" class="site-nav"><?= $data_danhmuc[$i-1]['TenDM'] ?></a>
                        <ul class="sublinks">
                          <?php foreach ($row as $value) { ?>
                            <li class="level2"><a href="?act=shop&sp=<?= $value['MaDM'] ?>&loai=<?= $value['TenLSP'] ?>" class="site-nav"><?= $value['TenLSP'] ?></a></li>
                            <?php } ?>
                          </ul>
                      </li>
                      <?php $i++;
                    } ?>
                  </ul>
              </div>
          </div>
          <!--Categories-->
          <!--Price Filter-->
          <div class="sidebar_widget filterBox filter-widget">
              <div class="widget-title">
                <h2>Price</h2>
              </div>
              <form action="index.php?act=shop" method="post" class="price-filter">
                  <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                      <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                      <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                  </div>
                  <div class="row">
                      <div class="col-6">
                        <p class="no-margin"><input type="text" id="amount" readonly  /></p>
                        <input type="hidden" id="amount1" name="shop" />
                      </div>
                      <div class="col-6 text-right margin-25px-top">
                          <button class="btn btn-secondary btn--small">Lọc</button>
                      </div>
                  </div>
              </form>
          </div>
          <!--End Price Filter-->
          <!--Size Swatches-->

          <!--End Size Swatches-->
          <!--Color Swatches-->
  
          <!--End Color Swatches-->
          <!--Brand-->
          <div class="sidebar_widget filterBox filter-widget">
              <div class="widget-title"><h2>Nhãn hiệu</h2></div>
              <ul>
                <?php for($i=0;$i<4;$i++) {?>
                  <li>
                    <input type="checkbox" value="pagini" id="check5">
                    <label for="check5"><span><span></span></span><a href="?act=shop&sp=1&loai=<?=$data_loaisp[$i]['TenLSP']?>"><?=$data_loaisp[$i]['TenLSP']?></a></label>
                  </li>
                  <?php } ?>
              </ul>
          </div>
          <!--End Brand-->
          <!--Popular Products-->
<div class="sidebar_widget">
            <div class="widget-title"><h2>Sản phẩm phổ biến</h2></div>
<div class="widget-content">
                  <div class="list list-sidebar-products">
                    <div class="grid">

                      <?php if(isset($data_noibat)){ ?>
                      <div class="grid__item">
                        <div class="mini-list-item">
                          <div class="mini-view_image">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image" src="assets/<?=$data_noibat['HinhAnh1']?>" alt="" />
                              </a>
                          </div>
                          <div class="details"> <a class="grid-view-item__title" href="#"><?=$data_noibat['TenSP']?></a>
                            <div class="grid-view-item__meta"><span class="product-price__price"><span class="money"><?=$data_noibat['DonGia']?> đ</span></span></div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                    </div>
                  </div>
              </div>
</div>
          <!--End Popular Products-->
          <!--Banner-->
          <div class="sidebar_widget static-banner">
            <img src="assets/images/side-banner-2.jpg" alt="" />
          </div>
          <!--Banner-->
          <!--Information-->
          <div class="sidebar_widget">
              <div class="widget-title"><h2>Thông tin</h2></div>
              <div class="widget-content"><p>Sử dụng văn bản này để chia sẻ thông tin về thương hiệu của bạn với khách hàng. Mô tả sản phẩm, chia sẻ thông báo hoặc chào mừng khách hàng đến với cửa hàng của bạn.</p></div>
          </div>
          <!--end Information-->
          <!--Product Tags-->
          <div class="sidebar_widget">
            <div class="widget-title">
              <h2>Thẻ sản phẩm</h2>
            </div>
            <div class="widget-content">
              <ul class="product-tags">
                <li><a href="#" title="Show products matching tag $100 - $400">1tr</a></li>
                <li><a href="#" title="Show products matching tag $400 - $600">1tr - 2tr</a></li>
                <li><a href="#" title="Show products matching tag $600 - $800">2tr - 5tr</a></li>
                <li><a href="#" title="Show products matching tag Above $800">>5tr</a></li>
                
              </ul>
              <span class="btn btn--small btnview">Xem tất cả</span> </div>
          </div>
          <!--end Product Tags-->
      </div>
  </div>
  <!--End Sidebar-->
