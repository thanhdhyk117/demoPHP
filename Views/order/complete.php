<!--Page Title-->
<div class="page section-header text-center">
<div class="page-title">
      <div class="wrapper"><h1 class="page-width">Cảm ơn bạn đã sử dụng sản phẩm của 7octobre</h1></div>
    </div>
</div>
  <!--End Page Title-->

  <div class="container">
    <div class="row billing-fields">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 sm-margin-30px-bottom">
              <div class="create-ac-content bg-light-gray padding-20px-all">
                      <fieldset>
                          <h2 class="login-title mb-3">Hoàn tất đơn hàng</h2>
                          <div class="row">
                              <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                  <label for="input-firstname">Họ <span class="required-f"></span></label>
                                  <input name="firstname" value="<?php echo $_SESSION['login']['Ho']  ?>" id="input-firstname" type="text" readonly="readonly">
                              </div>
                              <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                  <label for="input-lastname">Tên <span class="required-f"></span></label>
                                  <input name="NguoiNhan" value="<?php echo $_SESSION['login']['Ten']  ?>" id="input-lastname" type="text" readonly="readonly">
                              </div>
                          </div>
                          <div class="row">
                              <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                  <label for="input-email">E-Mail <span class="required-f"></span></label>
                                  <input name="Email" value="<?php echo $_SESSION['login']['Email']  ?>" id="input-email" type="email" readonly="readonly">
                              </div>
                              <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                  <label for="input-telephone">Số điện thoại <span class="required-f"></span></label>
                                  <input name="SDT" value="<?php echo $_SESSION['login']['SDT']  ?>" id="input-telephone" type="tel" readonly="readonly">
                              </div>
                          </div>
                      </fieldset>

                      <fieldset>
                          <div class="row">
                              <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                  <label for="input-address-1">Địa chỉ <span class="required-f"></span></label>
                                  <input name="DiaChi" value="<?php echo $_SESSION['login']['DiaChi']  ?>" id="input-address-1" type="text" readonly="readonly">
                              </div>
                              <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                  <label for="input-postcode">Post Code <span class="required-f"></span></label>
                                  <input name="postcode" value="" id="input-postcode" type="text" readonly="readonly">
                              </div>
                          </div>
                          <div class="row">
                              <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                  <label for="input-zone">Mã bưu điện <span class="required-f"></span></label>
                                  <select name="zone_id" id="input-zone" readonly="readonly">
                                      <option value=""> --- Hãy chọn địa chỉ --- </option>
                                      <option value="55000">Đà Nẵng</option>
                                      <option value="53100">Tp. HCM</option>
                                      <option value="51000">Hà Nội</option>
                                      <option value="59096">Thanh Hóa</option>
                                  </select>
                              </div>
                          </div>
                      </fieldset>
                      <fieldset>
                          <div class="row">
                              <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                  <label for="input-company">Ghi chú <span class="required-f"></span></label>
                                  <textarea class="form-control resize-both" rows="3" readonly="readonly"></textarea>
                              </div>
                          </div>
                      </fieldset>
              </div>
          </div>

          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <div class="your-order-payment">
                  <div class="your-order">
                      <h2 class="order-title mb-4">Đơn hàng của bạn</h2>

                      <div class="table-responsive-sm order-table">
                          <table class="bg-white table table-bordered table-hover text-center">
                              <thead>
                                  <tr>
                                      <th class="text-left">Tên sản phẩm</th>
                                      <th>Giá</th>
                                      <th>Size</th>
                                      <th>Qty</th>
                                      <th>Tổng</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php if (isset($_SESSION['sanpham'])) {
                                      foreach ($_SESSION['sanpham'] as $value) { ?>
                                  <tr>
                                      <td class="text-left"><?=$value['TenSP']?></td>
                                      <td><?=$value['DonGia']?></td>
                                      <td>S</td>
                                      <td><?=$value['SoLuong']?></td>
                                      <td><?=$value['ThanhTien']?></td>
                                  </tr>
                                <?php }} ?>
                              </tbody>
                              <tfoot class="font-weight-600">
                                  <tr>
                                      <td colspan="4" class="text-right">VAT </td>
                                      <td>10%</td>
                                  </tr>
                                  <tr>
                                      <td colspan="4" class="text-right">Tổng tiền</td>
                                      <td>$ <?=number_format($count,1)?></td>
                                  </tr>
                              </tfoot>
                          </table>
                      </div>
                  </div>

                  <hr />
              </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
          <div class="order-button-payment">
            <a type="submit" name="" value="Continue Shopping" class="btn" href="?act=home">Tiếp tục mua sắm</a>
          </div>
        </div>
      </div>
  </div>
