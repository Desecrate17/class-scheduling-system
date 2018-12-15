<!-- Header-->
<div class="breadcrumbs">
<div class="col-sm-4">
<div class="page-header float-left">
  <div class="page-title">
      <h1>Departments</h1>
  </div>
</div>
</div>
</div>

<div class="content mt-3">
<div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="default-tab">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link fa fa-plus" id="nav-home-tab" data-toggle="modal" title="Add Data" href="#addDepartment" role="tab" aria-controls="nav-home" aria-selected="true"></a>
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#active" role="tab" aria-controls="nav-profile" aria-selected="false">Active</a>
                  <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#inactive" role="tab" aria-controls="nav-contact" aria-selected="false">Inactive</a>
                </div>
              </nav>
                <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="active" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="row">
                        <!--TABLE+++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                          <div class="col-md-12">
                              <div class="card">
                                  <div class="card-header">
                                      <strong class="card-title">Data Table</strong>
                                  </div>
                                  <div class="card-body">
                                      <table id="bootstrap-data-table-faculty" class="table table-hover">
                                          <thead>
                                              <tr>
                                                  <th>ID</th>
                                                  <th>Department Code</th>
                                                  <th>Department</th>
                                                  <th>Status</th>
                                                  <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                             <?php
                                              if ($department!=NULL) {
                                                foreach ($department as $row) {
                                                  if($row->status == 'A') {
                                                  ?>
                                                    <tr>
                                                      <td><center><?php echo $row->department_id; ?></center></td>
                                                      <td><center><?php echo $row->department_code; ?></center></td>
                                                      <td><center><?php echo $row->department_name; ?></center></td>
                                                      <td><center><?php echo $row->status; ?></center></td>
                                                      <td><center>
                                                        <a href="" class="btn btn-sm btn-info" title="Update Department"><i class="fa fa-edit"></i></a>
                                                        <a href="<?php echo site_url('welcome_admin/viewDepartment/'.$row->department_id.'');?>" class="btn btn-sm btn-info" title="View Department"><i class="fa fa-eye"></i></a>
                                                        <a href="<?php echo site_url('welcome_admin/deleteDepartment/'.$row->department_id.''); ?>" class="btn btn-sm btn-danger" title="Deactivate"><i class="fa fa-trash"></i></a>
                                                      </center></td>
                                                    </tr>
                                                  <?php
                                                }
                                              }
                                            }
                                            ?>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                        <!--TABLE++++++++++++++++++++++++++++++++++++++++++-->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="inactive" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="row">
                        <!--TABLE+++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                          <div class="col-md-12">
                              <div class="card">
                                  <div class="card-header">
                                      <strong class="card-title">Data Table</strong>
                                  </div>
                                  <div class="card-body">
                                      <table id="bootstrap-data-table-faculty" class="table table-hover">
                                          <thead>
                                              <tr>
                                                  <th>ID</th>
                                                  <th>Department</th>
                                                  <th>Department Code</th>
                                                  <th>Status</th>
                                                  <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                             <?php
                                              if ($department!=NULL) {
                                                foreach ($department as $row) {
                                                  if($row->status == 'D') {
                                                  ?>
                                                    <tr>
                                                      <td><center><?php echo $row->department_id; ?></center></td>
                                                      <td><center><?php echo $row->department_code; ?></center></td>
                                                      <td><center><?php echo $row->department_name; ?></center></td>
                                                      <td><center><?php echo $row->status; ?></center></td>
                                                      <td><center>
                                                        <a href="<?php echo site_url('welcome_admin/viewDepartment/'.$row->department_id.'');?>" class="btn btn-sm btn-info" title="View Department"><i class="fa fa-eye"></i></a>
                                                        <a href="<?php echo site_url('welcome_admin/activateDepartment/'.$row->department_id.''); ?>" class="btn btn-sm btn-success" title="Activate"><i class="fa fa-recycle"></i></a>
                                                      </center></td>
                                                    </tr>
                                                  <?php
                                                }
                                              }
                                            }
                                            ?>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                        <!--TABLE++++++++++++++++++++++++++++++++++++++++++-->
                        </div>
                    </div>
                </div>

            </div>
          </div>
        </div>
      </div>
     
  </div>
</div> <!-- .content -->
</div>


<!--ADD DEPARTMENT MODAL ++++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="addDepartment">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form class="form-horizontal">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollmodalLabel">Add Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="alert alert-danger" align="center" style="display: none;"></div>
                </div>
                <div class="row form-group">
                    <div class="col-12 col-md-12"><input type="text" id="ddepname" name="ddepname" placeholder="Department Name" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 col-md-12"><input type="text" id="ddepcode" name="ddepcode" placeholder="Department Code" class="form-control">
                    </div>
                </div>
            </div> 
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" id="btn_department" name="btn_department" class="btn btn-primary">Confirm</button>
            </div>
            </form>
    </div>
  </div>
</div>
<!--ADD DEPARTMENT MODAL ++++++++++++++++++++++++++++++++++++++++++++-->


