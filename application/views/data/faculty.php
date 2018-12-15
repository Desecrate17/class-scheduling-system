<!-- Header-->
<div class="breadcrumbs">
<div class="col-sm-4">
<div class="page-header float-left">
  <div class="page-title">
      <h1>Faculty</h1>
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

                  <a class="nav-item nav-link fa fa-plus" id="nav-home-tab" data-toggle="modal" title="Add Data" href="#addfaculty" role="tab" aria-controls="nav-home" aria-selected="true"></a>
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#active" role="tab" aria-controls="nav-profile" aria-selected="false">Active</a>
                  <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#inactive" role="tab" aria-controls="nav-contact" aria-selected="false">Inactive</a>
                  <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#unassigned" role="tab" aria-controls="nav-contact" aria-selected="false">Unassigned</a>
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
                                  <div class="card-body" >
                                      <table id="bootstrap-data-table" class="table table-hover">
                                          <thead>
                                              <tr>
                                                  <th>ID</th>
                                                  <th>Name</th>
                                                  <th>Position</th>
                                                  <th>Department Code</th>
                                                  <th>Contact</th>
                                                  <th>Status</th>
                                                  <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                             <?php
                                              if ($data!=NULL) {
                                                foreach ($data as $row) {
                                                  if($row->ds == 'A') {
                                                  if($row->fs == 'A') {
                                                  ?>
                                                    <tr>
                                                      <td><center><?php echo $row->prof_id; ?></center></td>
                                                      <td><center><?php echo $row->last_name.', '.$row->first_name.' '.$row->middle_name; ?></center></td>
                                                      <td><center><?php echo $row->position_name; ?></center></td>
                                                      <td><center><?php echo $row->department_name; ?></center></td>
                                                      <td><center><?php echo $row->contact; ?></center></td>
                                                      <td><center><?php echo $row->fs; ?></center></td>
                                                      <td><center>
                                                        <a href="" class="btn btn-sm btn-info" title="Update Profile"><i class="fa fa-edit"></i></a>
                                                        <a href="<?php echo site_url('welcome_admin/viewFaculty/'.$row->prof_id.'');?>" class="btn btn-sm btn-info" title="View Profile"><i class="fa fa-eye"></i></a>
                                                        <a href="<?php echo site_url('welcome_admin/deleteFaculty/'.$row->prof_id.''); ?>" class="btn btn-sm btn-danger" title="Deactivate"><i class="fa fa-trash"></i></a>
                                                      </center></td>
                                                    </tr>
                                                  <?php
                                                }
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
                                                  <th>Name</th>
                                                  <th>Position</th>
                                                  <th>Department Code</th>
                                                  <th>Contact</th>
                                                  <th>Action</th>
                                                  <th>Status</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                             <?php
                                              if ($data!=NULL) {
                                                foreach ($data as $row) {
                                                  if($row->fs == 'D') {
                                                  ?>
                                                    <tr>
                                                      <td><center><?php echo $row->prof_id; ?></center></td>
                                                      <td><center><?php echo $row->last_name.', '.$row->first_name.' '.$row->middle_name; ?></center></td>
                                                      <td><center><?php echo $row->position_name; ?></center></td>
                                                      <td><center><?php echo $row->department_name; ?></center></td>
                                                      <td><center><?php echo $row->contact; ?></center></td>
                                                      <td><center><?php echo $row->fs; ?></center></td>
                                                      <td><center>
                                                        <a href="<?php echo site_url('welcome_admin/viewFaculty/'.$row->prof_id.'');?>" class="btn btn-sm btn-info" title="View Profile"><i class="fa fa-eye"></i></a>
                                                        <a href="<?php echo site_url('welcome_admin/activateFaculty/'.$row->prof_id.''); ?>" class="btn btn-sm btn-success" title="Activate"><i class="fa fa-recycle"></i></a>
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
                    <div class="tab-pane fade" id="unassigned" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="row">
                        <!--TABLE+++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                          <div class="col-md-12">
                              <div class="card">
                                  <div class="card-header">
                                      <strong class="card-title">Data Table</strong>
                                  </div>
                                  <div class="card-body">
                                      <table id="bootstrap-data-table-faculty2" class="table table-hover">
                                          <thead>
                                              <tr>
                                                  <th>ID</th>
                                                  <th>Name</th>
                                                  <th>Position</th>
                                                  <th>Department Code</th>
                                                  <th>Contact</th>
                                                  <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                             <?php
                                              if ($data!=NULL) {
                                                foreach ($data as $row) {
                                                  if($row->ds == 'D') {
                                                  if($row->fs == 'A') {
                                                  ?>
                                                    <tr>
                                                      <td><center><?php echo $row->prof_id; ?></center></td>
                                                      <td><center><?php echo $row->last_name.', '.$row->first_name.' '.$row->middle_name; ?></center></td>
                                                      <td><center><?php echo $row->position_name; ?></center></td>
                                                      <td><center><?php echo $row->department_name; ?></center></td>
                                                      <td><center><?php echo $row->contact; ?></center></td>
                                                      <td><center>
                                                        <a href="" class="btn btn-sm btn-info" title="Update Profile"><i class="fa fa-edit"></i></a>
                                                        <a href="<?php echo site_url('welcome_admin/viewFaculty/'.$row->prof_id.'');?>" class="btn btn-sm btn-info" title="View Profile"><i class="fa fa-eye"></i></a>
                                                        <a href="<?php echo site_url('welcome_admin/deleteFaculty/'.$row->prof_id.''); ?>" class="btn btn-sm btn-danger" title="Deactivate"><i class="fa fa-trash"></i></a>
                                                      </center></td>
                                                    </tr>
                                                  <?php
                                                }
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

<!--ADD FACULTY MODAL ++++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="addfaculty">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Faculty</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal">
          <div class="modal-body">
            <div class="form-group">
              <div class="alert alert-danger" align="center" style="display: none;"></div>
            </div>
            <div class="row form-group">
              <div class="col-12 col-md-4"><input type="text" id="ffname" name="ffname" placeholder="First Name" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" id="fmname" name="fmname" placeholder="Middle Name" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" id="flname" name="flname" placeholder="Last Name" class="form-control">
              </div>
            </div> 
            <div class="row form-group">
              <div class="col-12 col-md-4"><input type="contact" id="fcontact" name="fcontact" placeholder="Contact No." class="form-control"></div>
              <div class="col-12 col-md-4">
                  <select name="fposition" id="fposition" class="form-control" >
                      <?php
                          foreach($position as $row) { ?>
                          <option value="<?php echo $row->position_code ?>"><?php echo $row->position_name ?></option>
                      <?php
                          }
                      ?>
                  </select>
              </div>
              <div class="col-12 col-md-4">
                  <select name="fdepCode" id="fdepCode" class="form-control" >
                      <?php
                          foreach($department as $row) { ?>
                          <option value="<?php echo $row->department_code ?>"><?php echo $row->department_name ?></option>
                      <?php
                          }
                      ?>
                  </select>
              </div>    
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" id="btn_faculty" name="btn_faculty" class="btn btn-primary">Confirm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!--ADD FACULTY MODAL ++++++++++++++++++++++++++++++++++++++++++++-->

<!--EDIT FACULTY MODAL +++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="editfaculty">
  </div>
<!--EDIT FACULTY MODAL +++++++++++++++++++++++++++++++++++++++++++-->