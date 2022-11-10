<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Cập nhật tài khoản</h4>
        </div>
        <div class="card-body">
          <form class="" action="?act=view-acc&run=edit" method="post">
          <input type="hidden" name="MaND" value="<?=$data['MaND']?>">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Họ</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="Ho" value="<?=$data['Ho']?>" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tên</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="Ten" value="<?=$data['Ten']?>" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tên đăng nhập</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="TaiKhoan" value="<?=$data['TaiKhoan']?>" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" value="<?=$data['Email']?>" name="Email">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Địa chỉ</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" value="<?=$data['DiaChi']?>" name="DiaChi">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Số điện thoại</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" value="<?=$data['SDT']?>" name="SDT">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mật khẩu</label>
            <div class="col-sm-12 col-md-7">
              <input type="password" class="form-control" value="<?=$data['MatKhau']?>" name="MatKhau">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Xác nhận mật khẩu</label>
            <div class="col-sm-12 col-md-7">
              <input type="password" class="form-control" value="<?=$data['MatKhau']?>" name="CheckMatKhau">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Giới tính</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control selectric" value="<?=$data['GioiTinh']?>" name="GioiTinh">
                <option value="Male">Nam</option>
                <option value="Female">Nữ</option>
                <option value="Orther">Khác</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Tạo mới tài khoản</button>
            </div>
          </div>
        </form>
        </div>

      </div>
    </div>
  </div>
</div>
