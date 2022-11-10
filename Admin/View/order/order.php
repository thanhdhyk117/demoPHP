<div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Thông tin đươn </h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                  <tr>
                    <th>Tên khách hàng</th>
                    <th>Ngày đặt đơn</th>
                    <th>Tổng tiền</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Trạng thái</th>
                    <th>Tùy biến</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($data!=0) { ?>
                  <?php foreach($data as $row){ ?>
                  <tr>
                    <td><?=$row['NguoiNhan']?></td>
                    <td><?=$row['NgayLap']?></td>
                    <td>$ <?=$row['TongTien']?></td>
                    <td><?=$row['DiaChi']?></td>
                    <td><?=$row['SDT']?></td>
                    <td><?php if($row['TrangThai']==0){
                      echo 'Unapproved';
                      }else{
                        echo 'Approved';
                        }?></td>
                    <td>
                      <?php if($row['TrangThai']==0){ ?>
                      <a class="btn btn-success btn-action mr-1" data-toggle="tooltip" href="?act=order&run=acp&id=<?= $row['MaHD'] ?>" title="Xác nhận"><i
                          class="fas fa-check"></i></a>
                        <?php } ?>
                        <?php if($row['TrangThai']==1){ ?>
                        <a class="btn btn-warning btn-action mr-1" data-toggle="tooltip" href="?act=order&run=unacp&id=<?= $row['MaHD'] ?>" title="Chưa xác nhận"><i
                            class="fas fa-times"></i></a>
                          <?php } ?>
                      <a class="btn btn-info btn-action mr-1" data-toggle="tooltip" href="?act=order&run=detail&id=<?= $row['MaHD'] ?>" title="Chi tiết"><i
                          class="fas fa-info-circle"></i></a>
                      <a class="btn btn-danger btn-action" data-toggle="tooltip" href="?act=order&run=delete&id=<?= $row['MaHD'] ?>" title="Xóa"
                        data-confirm="Bạn có chắc không? Không thể hoàn tác hành động này. Bạn có muốn tiếp tục?"
                        data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php } ?>
              <?php }else {
                  echo '<div class="card-header">
                    <h4>Không có đơn hàng</h4>
                  </div>';
              }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
