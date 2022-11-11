<!--Collection Banner-->
<div class="collection-header">
<div class="collection-hero">
      <div class="collection-hero__image"><img data-src="assets/images/cat-women3.jpg" src="assets/images/cat-women3.jpg" alt="Women" title="Women" /></div>
      <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Danh sách</h1></div>
    </div>
</div>
  <!--End Collection Banner-->

  <div class="container">
    <div class="row">
        <!--Sidebar-->

          <?php require_once('category.php'); ?>

          <!--End Sidebar-->
          <!--Main Content-->
          <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
            <div class="category-description">
                <h3>Mô tả danh mục</h3>
                  <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p> -->
              </div>
              <hr>
            <div class="productList">
                <!--Toolbar-->
                  <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Bộ lọc sản phẩm</button>
                <div class="toolbar">
                    <div class="filters-toolbar-wrapper">
                        <div class="row">
                            <div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                <a href="shop-left-sidebar.html" title="Grid View" class="change-view change-view--active">
                                    <img src="assets/images/grid.jpg" alt="Grid" />
                                  </a>
                                  <a href="shop-listview.html" title="List View" class="change-view">
                                    <img src="assets/images/list.jpg" alt="List" />
                                  </a>
                              </div>
                              <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                <span class="filters-toolbar__product-count">Hiển thị: 22</span>
                              </div>
                              <div class="col-4 col-md-4 col-lg-4 text-right">
                                <div class="filters-toolbar__item">
                                    <label for="SortBy" class="hidden">Loại</label>
                                    <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                          <option value="title-ascending" selected="selected">Loại</option>
                                          <option>Sản phẩm bán chạy</option>
                                          <option>A - Z</option>
                                          <option>Z -A</option>
                                          <option>Giá từ thấp tới cao</option>
                                          <option>Giá từ cao tới thấp</option>
                                          <option>Mới đến cũ</option>
                                          <option>Cũ đến mới</option>
                                    </select>
                                    <input class="collection-header__default-sort" type="hidden" value="Thủ công">
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
                  <!--End Toolbar-->
                  
                      <!--End ListView Item-->
                  </div>
              </div>
              <div class="infinitpaginOuter">
                  <div class="infinitpagin">
                      <a href="#" class="btn loadMore">Xem thêm</a>
                  </div>
              </div>
          </div>
          <!--End Main Content-->
      </div>
  </div>
