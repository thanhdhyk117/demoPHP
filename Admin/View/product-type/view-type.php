<div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <a href="?act=view-product&run=add-product" class="btn btn-icon btn-success"  title="Thêm loại sản phẩm   " data-toggle="tooltip" ><i class="fas fa-cart-plus"></i></a>

          <div class="card-header">
            <h4>Xem các thể loại</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th></th>
                    <th>Tên</th>
                    <th></th>
                    <th>Tùy biến</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $value){ ?>
                  <tr>
                    <td><?=$value['MaLSP']?></td>
                    <td></td>
                    <td><?=$value['TenLSP']?></td>
                    <td></td>
                    <td>
                      <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Sửa"><i
                          class="fas fa-pencil-alt"></i></a>
                      <a class="btn btn-danger btn-action" data-toggle="tooltip" href="?act=view-type&run=delete&id=<?= $value['MaLSP'] ?>" title="Delete"
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
