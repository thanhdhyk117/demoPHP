<div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Chi tiết đơn giá</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Tên sản phẩm</th>
                      <th>Giá</th>
                      <th>Số lượng</th>
                      <th>VAT</th>
                      <th>Tổng tiền</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($data as $detail){ ?>
                    <tr>
                      <td><?=$detail['Ten']?></td>
                      <td><?=$detail['DonGia']?>$</td>
                      <td><?=$detail['SoLuong']?>pcs</td>
                      <td>10%</td>
                      <td><?=number_format(($detail['DonGia'] * $detail['SoLuong']) + ($detail['DonGia'] * $detail['SoLuong'])) ?></td>
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
