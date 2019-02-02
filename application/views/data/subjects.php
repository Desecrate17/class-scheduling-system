<!-- Header-->
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
            <h1>Subjects</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li><a href="<?php echo site_url('welcome_admin');?>">Home</a></li>
                  <li><a href="#">Data</a></li>
                  <li class="active">Subjects</li>
              </ol>
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
                  <a class="nav-item nav-link fa fa-plus" id="nav-home-tab" data-toggle="modal" href="#addsubjects" role="tab" aria-controls="nav-home" aria-selected="true"></a>
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#active" role="tab" aria-controls="nav-profile" aria-selected="false">Active</a>
                  <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#inactive" role="tab" aria-controls="nav-contact" aria-selected="false">Inactive</a>
                </div>
              </nav>
                <div class="tab-content pl-3 pt-2" id="nav-tabContent">

                  <!--ACTIVE -->
                  <div class="tab-pane fade show active" id="active" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                      <!--TABLE+++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                              <table id="bootstrap-data-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Subject</th>
                                    <th>Descriptive Title</th>
                                    <th>Department</th>
                                    <th>Hours</th>
                                    <th>Units</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    if ($subjects!=NULL) {
                                      foreach ($subjects as $row) {
                                        if($row->Status == 'A') {
                                          if($row->SubjectType == 'Lecture') {
                                        ?>
                                          <tr>
                                            <td><center><?php echo $row->SubjectID; ?></center></td>
                                            <td><center><?php echo $row->SubjectCode; ?></center></td>
                                            <td><center><?php echo $row->SubjectName; ?></center></td>
                                            <td><center><?php echo $row->DepartmentName; ?></center></td>
                                            <td><center><?php echo $row->LecHours; ?></center></td>
                                            <td><center><?php echo $row->LecUnits; ?></center></td>
                                            <td><center><?php echo $row->SubjectType; ?></center></td>
                                            <td><center>
                                              <button href="#editsubjects" data-toggle="modal" id="editsub" value="<?php echo $row->SubjectID;?>" class="btn btn-sm btn-info" title="Update Subject"><i class="fa fa-edit"></i></button>
                                              <a href="<?php echo site_url('welcome_admin/deleteSubject/'.$row->SubjectID.''); ?>" class="btn btn-sm btn-danger" title="Deactivate"><i class="fa fa-trash"></i></a>
                                            </center></td>
                                          </tr>
                                        <?php
                                        }
                                        else{ ?>
                                          <tr>
                                            <td><center><?php echo $row->SubjectID; ?></center></td>
                                            <td><center><?php echo $row->SubjectCode; ?></center></td>
                                            <td><center><?php echo $row->SubjectName; ?></center></td>
                                            <td><center><?php echo $row->DepartmentName; ?></center></td>
                                            <td><center><?php echo $row->LabHours; ?></center></td>
                                            <td><center><?php echo $row->LabUnits; ?></center></td>
                                            <td><center><?php echo $row->SubjectType; ?></center></td>
                                            <td><center>
                                              <button href="#editsubjects" data-toggle="modal" id="editsub" value="<?php echo $row->SubjectID;?>" class="btn btn-sm btn-info" title="Update Subject"><i class="fa fa-edit"></i></button>
                                              <a href="<?php echo site_url('welcome_admin/deleteSubject/'.$row->SubjectID.''); ?>" class="btn btn-sm btn-danger" title="Deactivate"><i class="fa fa-trash"></i></a>
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

                  <!--INACTIVE -->
                  <div class="tab-pane fade" id="inactive" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                      <!--TABLE+++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                              <table id="bootstrap-data-table-faculty" class="table table-striped table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Subject</th>
                                    <th>Descriptive Title</th>
                                    <th>Department</th>
                                    <th>Hours</th>
                                    <th>Units</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    if ($subjects!=NULL) {
                                      foreach ($subjects as $row) {
                                        if($row->Status == 'D') {
                                          if($row->SubjectType == 'Lecture') {
                                        ?>
                                          <tr>
                                            <td><center><?php echo $row->SubjectID; ?></center></td>
                                            <td><center><?php echo $row->SubjectCode; ?></center></td>
                                            <td><center><?php echo $row->SubjectName; ?></center></td>
                                            <td><center><?php echo $row->DepartmentName; ?></center></td>
                                            <td><center><?php echo $row->LecHours; ?></center></td>
                                            <td><center><?php echo $row->LecUnits; ?></center></td>
                                            <td><center><?php echo $row->SubjectType; ?></center></td>
                                            <td><center>
                                              <a href="<?php echo site_url('welcome_admin/activateSubject/'.$row->SubjectID.''); ?>" class="btn btn-sm btn-success" title="Activate"><i class="fa fa-recycle"></i></a>
                                            </center></td>
                                          </tr>
                                        <?php
                                        }
                                        else{
                                          ?>
                                          <tr>
                                            <td><center><?php echo $row->SubjectID; ?></center></td>
                                            <td><center><?php echo $row->SubjectCode; ?></center></td>
                                            <td><center><?php echo $row->SubjectName; ?></center></td>
                                            <td><center><?php echo $row->DepartmentName; ?></center></td>
                                            <td><center><?php echo $row->LabHours; ?></center></td>
                                            <td><center><?php echo $row->LabUnits; ?></center></td>
                                            <td><center><?php echo $row->SubjectType; ?></center></td>
                                            <td><center>
                                              <a href="<?php echo site_url('welcome_admin/activateSubject/'.$row->SubjectID.''); ?>" class="btn btn-sm btn-success" title="Activate"><i class="fa fa-recycle"></i></a>
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
  

<!--ADD SUBJECTS MODAL ++++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="addsubjects" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form class="form-horizontal">
            <div class="modal-header" style="background-color: #c51e3a; border-color: #c51e3a;">
                <h5 class="modal-title" id="scrollmodalLabel" style="color:white;">Add Subjects</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="alert alert-danger" align="center" style="display: none;"></div>
                </div>
            <div class="row form-group">
              <div class="col-12 col-md-4"><input type="text" id="subcode" name="subcode" placeholder="Subject Code" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" id="subname" name="subname" placeholder="Subject Name" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" id="units" name="units" placeholder="No. of units" class="form-control">
              </div>
            </div> 
            <div class="row form-group">
              <div class="col-12 col-md-4"><input type="contact" id="hrs" name="hrs" placeholder="No. of hrs" class="form-control"></div>
              <div class="col-12 col-md-4">
                <select name="type" id="type" class="form-control">
                  <option value="Laboratory">Laboratory</option>
                  <option value="Lecture">Lecture</option>
                </select>
              </div>

              <div class="col-12 col-md-4">
                <select name="department" id="dep" class="form-control" >
                      <?php
                          foreach($department as $row) { ?>
                          <option value="<?php echo $row->DepartmentCode ?>"><?php echo $row->DepartmentName ?></option>
                      <?php
                          }
                      ?>
                  </select>
              </div>


            </div>
          </div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" id="btn_subject" name="submit" class="btn btn-primary">Confirm</button>
            </div>
          </form>
    </div>
  </div>
</div>
<!--ADD SUBJECTS MODAL ++++++++++++++++++++++++++++++++++++++++++++-->


<!--EDIT SUBJECTS MODAL ++++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="editsubjects" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form class="form-horizontal">
            <div class="modal-header" style="background-color: #c51e3a; border-color: #c51e3a;">
                <h5 class="modal-title" id="scrollmodalLabel" style="color:#fff">Edit Subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="alert alert-danger" align="center" style="display: none;"></div>
                </div>
                <div class="row form-group">
              <div class="col-12 col-md-4"><input type="text" id="subcode" name="subcode" placeholder="Subject Code" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" id="subname" name="subname" placeholder="Subject Name" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" id="units" name="units" placeholder="No. of units" class="form-control">
              </div>
            </div> 
            <div class="row form-group">
              <div class="col-12 col-md-4"><input type="contact" id="hrs" name="hrs" placeholder="No. of hrs" class="form-control"></div>
              <div class="col-12 col-md-4"><input type="contact" id="type" name="type" placeholder="Subject Type" class="form-control"></div>
              <div class="col-12 col-md-4"><input type="contact" id="dep" name="type" placeholder="Department" class="form-control"></div>

            </div>
          </div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" id="btn_subject" name="submit" class="btn btn-primary">Confirm</button>
            </div>
          </form>
    </div>
  </div>
</div>
<!--EDIT SUBJECTS MODAL ++++++++++++++++++++++++++++++++++++++++++++-->

