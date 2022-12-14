<div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <a href="?act=view-cate&run=add" class="btn btn-icon btn-success"  title="Thêm danh mục" data-toggle="tooltip" ><i class="fas fa-plus-circle"></i></a>
          <div class="card-header">
            <h4>Danh sách danh mục</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên danh múc</th>
                    <th>Tùy biến</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $key){?>
                  <tr>
                    <td><?=$key['MaDM'] ?></td>
                    <td><?=$key['TenDM'] ?></td>
                    <td>
                      <a class="btn btn-primary btn-action mr-1" href="?act=view-cate&run=edit&id=<?=$key['MaDM']?>" data-toggle="tooltip" title="Sửa"><i
                          class="fas fa-pencil-alt"></i></a>||
                      <a class="btn btn-danger btn-action" href="?act=view-cate&run=delete&id=<?php echo $key['MaDM'] ?>"><i class="fas fa-trash"></i></a>
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
