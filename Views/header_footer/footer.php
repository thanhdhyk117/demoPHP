</div>
<!--End Body Content-->
<!--Footer-->
<footer id="footer" class="footer-4">
    <div class="newsletter-section">
        <div class="container">
            <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                        <div class="display-table">
                            <div class="display-table-cell footer-newsletter">
                                <div class="section-header text-center">
                                    <label class="h2"><span>Đăng ký để nhận </span>tin tức mới</label>
                                </div>
                                <form class="subcribe-from" action="?act=sub" method="post">
                                    <div class="input-group">
                                        <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Địa chỉ email" required>
                                        <span class="input-group__btn">
                                            <button type="submit" class="btn newsletter__submit" name="commit" id="swal"><span class="newsletter__submit-text--large">Đăng ký</span></button>
                                        </span>
                                    </div>
                                  </form>
                                  <script type="text/javascript">
                                  $(document).ready(function(){
                                    $('#swal').on("click",function (e){
                                      e.preventDefault();
                                      const Toast = Swal.mixin({
                                        toast: true,
                                        position: 'top-end',
                                        showConfirmButton: false,
                                        timer: 1200,
                                        timerProgressBar: true,
                                        didOpen: (toast) => {
                                          toast.addEventListener('mouseenter', Swal.stopTimer)
                                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                                        }
                                      })
                                      Toast.fire({
                                        icon: 'success',
                                        title: 'Subscribe !'
                                      }).then(function(){
                                        $('.subcribe-from').submit();
                                            });
                                    });
                                  });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="site-footer">
        <div class="container">
            <hr>
        </div>
    </div>
</footer>

</div><!--End layout-boxed-->
<span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
<?php require_once('./Views/product-detail/hide.php'); ?>
<?php require_once('./Views/quickview.php'); ?>
<?php require_once('./Views/newlester.php'); ?>
