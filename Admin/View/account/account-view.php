        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="buttons">
                </div>
                <div class="card">
                  <a href="?act=view-acc&run=add-acc" class="btn btn-icon btn-success"  title="Thêm tài khoản" data-toggle="tooltip" ><i class="fas fa-user-plus"></i></a>
                  <div class="card-header">
                    <h4>Danh sách tài khoản</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Họ và tên</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Tên đăng nhập</th>
                            <th>Tùy biến</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($data as $value){ ?>
                          <tr>
                            <td><?=$value['MaND']?></td>
                            <td><?=$value['Ho']?> <?=$value['Ten']?></td>
                            <td><?=$value['SDT']?></td>
                            <td><?=$value['Email']?></td>
                            <td><?=$value['TaiKhoan']?></td>
                            <td>
                              <a class="btn btn-primary btn-action mr-1" href="?act=view-acc&run=edit-acc&id=<?=$value['MaND']?>" data-toggle="tooltip" title="Sửa"><i
                                  class="fas fa-pencil-alt"></i></a>
                              <a class="btn btn-danger btn-action" href="?act=view-acc&run=delete&id=<?= $value['MaND'] ?>" data-toggle="tooltip" title="Xóa"
                                data-confirm="Bạn có muốn xóa tài khoản <?= $value['TaiKhoan'] ?> không?"
                                data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                            </td>
                          </tr>
                        <?php }?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
