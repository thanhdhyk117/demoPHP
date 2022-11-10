<div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <a href="?act=view-product&run=add-product" class="btn btn-icon btn-success"  title="Thêm sản phẩm" data-toggle="tooltip" ><i class="fas fa-cart-plus"></i></a>
          <div class="card-header">
            <h4>Sản phẩm</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Hình ảnh</th>
                    <th>Trạng thái</th>
                    <th>Tùy biến</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $value){ ?>
                  <tr>
                    <td><?=$value['MaSP']?></td>
                    <td><?=$value['TenSP']?></td>
                    <td><?=$value['DonGia']?> $</td>
                    <td><?=$value['SoLuong']?></td>
                    <td><img alt="image" class="mr-3 rounded-circle" width="50" src="../assets/<?=$value['HinhAnh1']?>"></td>
                    <td><?php if($value['TrangThai']==1){
                      echo 'Show On';
                      }else{
                        echo 'Show Off';
                        }?></td>
                    <td>
                      <a class="btn btn-primary btn-action mr-1" href="?act=view-product&run=edit-prod&id=<?=$value['MaSP']?>" data-toggle="tooltip" title="Sửa"><i
                          class="fas fa-pencil-alt"></i></a>
                      <a class="btn btn-danger btn-action" href="?act=view-product&run=delete&id=<?= $value['MaSP'] ?>" data-toggle="tooltip" title="Xóa"
                        data-confirm="Bạn có chắc không? | Không thể hoàn tác hành động này. Bạn có muốn tiếp tục?"
                        data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
