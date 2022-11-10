
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Đăng nhập</h1></div>
      		</div>
		</div>
        <!--End Page Title-->

        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                	<div class="mb-4">
                    <?php if (isset($_COOKIE['msg1'])) { ?>
								<div class="alert alert-success">
									<strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
								</div>
							       <?php } ?>
                       <form method="post" action="?act=taikhoan&xuli=dangnhap" id="form1" class="contact-form">
                          <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail">Tài khoản</label>
                                    <input type="text" name="taikhoan" placeholder="" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerPassword">mật khẩu</label>
                                    <input type="password" name="matkhau" placeholder="" id="CustomerPassword" class="" form="form1">
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                              <button type="submit" name="submit"  class="btn mb-3">Đăng nhập</button>
                                <p class="mb-4">
									<a href="#" id="RecoverPassword">Quên mật khẩu</a> &nbsp; | &nbsp;
								    <a href="?act=register" id="customer_register_link">Tạo mới tài khoản</a>
                                </p>
                            </div>
                         </div>
                     </form>
                    </div>
               	</div>
            </div>
        </div>
