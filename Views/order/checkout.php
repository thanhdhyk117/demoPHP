    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Thanh toán</h1></div>
      		</div>
		</div>
        <!--End Page Title-->

        <div class="container">
        	<div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="customer-box returning-customer">
                        <h3><i class="icon anm anm-user-al"></i> Phản hồi của khách hàng? <a href="#customer-login" id="customer" class="text-white text-decoration-underline" data-toggle="collapse">Ấn để đăng nhập</a></h3>
                        <div id="customer-login" class="collapse customer-content">
                            <div class="customer-info">
                                <p class="coupon-text">Khách hàng cũ? Nếu bạn đã mua sắm với chúng tôi trước đây, vui lòng nhập thông tin chi tiết của bạn vào ô bên dưới. Nếu bạn là khách hàng mới, vui lòng tiếp tục Thanh toán &amp; Vận chuyển.</p>
                                <form>
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputEmail1">Địa chỉ Email <span class="required-f">*</span></label>
                                            <input type="email" class="no-margin" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputPassword1">Mật khẩu <span class="required-f">*</span></label>
                                            <input type="password" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-check width-100 margin-20px-bottom">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value=""> Ghi nhớ!
                                                </label>
                                                <a href="#" class="float-right">Quên mật khẩu?</a>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Xác nhận</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="customer-box customer-coupon">
                        <h3 class="font-15 xs-font-13"><i class="icon anm anm-gift-l"></i> Bạn có phiếu giảm giá? <a href="#have-coupon" class="text-white text-decoration-underline" data-toggle="collapse">Chọn vào đây để nhập mã</a></h3>
                        <div id="have-coupon" class="collapse coupon-checkout-content">
                            <div class="discount-coupon">
                                <div id="coupon" class="coupon-dec tab-pane active">
                                    <p class="margin-10px-bottom">Nhập mã phiếu giảm giá của bạn nếu bạn có.</p>
                                    <label class="required get" for="coupon-code"><span class="required-f">*</span> Mã giảm giá</label>
                                    <input id="coupon-code" required="" type="text" class="mb-3">
                                    <button class="coupon-btn btn" type="submit">Áp dụng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row billing-fields">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                    <div class="create-ac-content bg-light-gray padding-20px-all">
                        <form action="?act=checkout&xuli=oder" method="post">
                            <fieldset>
                                <h2 class="login-title mb-3">Chi tiết thanh toán</h2>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-firstname">Họ<span class="required-f">*</span></label>
                                        <input name="firstname" value="<?php echo $_SESSION['login']['Ho']  ?>" id="input-firstname" type="text">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-lastname">Tên <span class="required-f">*</span></label>
                                        <input name="NguoiNhan" value="<?php echo $_SESSION['login']['Ten']  ?>" id="input-lastname" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                        <input name="Email" value="<?php echo $_SESSION['login']['Email']  ?>" id="input-email" type="email">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-telephone">Số điện thoại <span class="required-f">*</span></label>
                                        <input name="SDT" value="<?php echo $_SESSION['login']['SDT']  ?>" id="input-telephone" type="tel">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-address-1">Địa chỉ <span class="required-f">*</span></label>
                                        <input name="DiaChi" value="<?php echo $_SESSION['login']['DiaChi']  ?>" id="input-address-1" type="text">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-postcode">Mã bưu điện <span class="required-f">*</span></label>
                                        <input name="postcode" value="" id="input-postcode" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-zone">Mã<span class="required-f">*</span></label>
                                        <select name="zone_id" id="input-zone">
                                            <option value=""> --- Vui lòng chọn địa chỉ --- </option>
                                            <option value="55000">Da Nang</option>
                                            <option value="53100">HoChiMinh</option>
                                            <option value="51000">HaNoi</option>
                                            <option value="59096">QuangBinh</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="form-group form-check col-md-12 col-lg-12 col-xl-12">
                                        <label class="form-check-label padding-15px-left">
                                            <input type="checkbox" class="form-check-input" value=""><strong>Tạo mới tài khoản?</strong>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                        <label for="input-company">Ghi chú <span class="required-f">*</span></label>
                                        <textarea class="form-control resize-both" rows="3"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="order-button-payment">
                              <input type="submit" name="" value="Đặt hàng" class="btn">
                            </div>
                        </form>
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
                                            <td><?=number_format($count,1) * 0.1?> đ</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right">Tổng tiền</td>
                                            <td><?=number_format($count,1) * 1.1?> đ</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <hr />

                        <div class="your-payment">
                            <h2 class="payment-title mb-3">Phương thức thanh toán</h2>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div id="accordion" class="payment-section">
                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="card-link" data-toggle="collapse" href="#collapseOne">Chuyển khoản trực tiếp </a>
                                            </div>
                                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán. Đơn đặt hàng của bạn sẽ không được chuyển cho đến khi tiền đã hết trong tài khoản của chúng tôi.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">Thanh toán khi nhận hàng</a>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">Khách hàng thanh toán cho cửa hàng sau khi nhận được hàng</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
