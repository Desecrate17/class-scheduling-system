  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
            <h1>Faculty</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li><a href="<?php echo site_url('welcome_admin');?>">Home</a></li>
                  <li><a href="#">Data</a></li>
                  <li><a href="<?php echo site_url('welcome_admin/faculty');?>">Faculty</a></li>
                  <li class="active">
                    <?php foreach ($data as $row) { ?>
                        <?php echo $row->Lastname.', '.$row->Firstname.' '.$row->Middlename[0].'.'; ?>
                    <?php }?></li>
              </ol>
          </div>
      </div>
    </div>
  </div>

<div class="col-md-12">
  <div class="animated fadeIn">
  <div class="card">
    <div class="card-body">
      <div class="mx-auto d-block">
        <img class="mx-auto d-block" src="<?php echo base_url('assets/images/user.png');?>" alt="Card image cap">
        <h5 class="text-sm-center mt-2 mb-1"><?php                                           
          foreach ($data as $row) { ?>
              <?php echo $row->Lastname.', '.$row->Firstname.' '.$row->Middlename[0].'.'; ?>
          <?php
              }?>
        </h5>
        <p class="text-sm-center mt-2 mb-1"> <?php                                          
          foreach ($info as $row) { ?>
              <?php echo $row->PositionName; ?>
          <?php
          }?>
        </p>                                                                                                       
      </div><hr>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-info-circle"></i>
            <strong class="card-title">Professor Information</strong>
          </div>
          <div class="card-body">
            <?php foreach ($info as $row) { ?>
                <h6>Department:</h6><p><?php echo $row->DepartmentName; ?></p>
                <h6>Preferred Time:</h6><p><?php echo $row->PreferredTime; ?></p>
            <?php } ?><h6>Preferred Subjects:</h6>
            <?php foreach ($info2 as $row) { if($row->Status == 'A') { ?>
                <p><?php echo $row->SubjectName; ?></p>
            <?php } } ?>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-sm btn-info" data-target="#editfaculty" data-toggle="modal" data-backdrop="static" title="Edit Information">Edit</button>
            <button type="button" class="btn btn-sm btn-info" data-target="#infosub" data-toggle="modal" data-backdrop="static" title="Add Subject">Add Subject</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
<!-- <div class="col-md-6">
  <div class="animated fadeIn">
  <div class="card">
    <div class="card-body">

      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-info-circle"></i>
            <strong class="card-title">Professor Information</strong>
          </div>
          <div class="card-body">
            <?php foreach ($info as $row) { ?>
                <h6>Department:</h6><p><?php echo $row->DepartmentName; ?></p>
                <h6>Preferred Time:</h6><p><?php echo $row->PreferredTime; ?></p>
            <?php } ?><h6>Preferred Subjects:</h6>
            <?php foreach ($info2 as $row) { if($row->Status == 'A') { ?>
                <p><?php echo $row->SubjectName; ?></p>
            <?php } } ?>

            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                  <a href="#"> <i class="fa fa-envelope-o"></i> Mail Inbox <span class="badge badge-primary pull-right">10</span></a>
              </li>
              <li class="list-group-item">
                  <a href="#"> <i class="fa fa-tasks"></i> Recent Activity <span class="badge badge-danger pull-right">15</span></a>
              </li>
              <li class="list-group-item">
                  <a href="#"> <i class="fa fa-bell-o"></i> Notification <span class="badge badge-success pull-right">11</span></a>
              </li>
              <li class="list-group-item">
                  <a href="#"> <i class="fa fa-comments-o"></i> Message <span class="badge badge-warning pull-right r-activity">03</span></a>
              </li>
            </ul>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-sm btn-info" data-target="#editfaculty" data-toggle="modal" data-backdrop="static" title="Edit Information">Edit</button>
            <button type="button" class="btn btn-sm btn-info" data-target="#infosub" data-toggle="modal" data-backdrop="static" title="Add Subject">Add Subject</button>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  </div>
</div> -->
<!--EDIT FACULTY MODAL +++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="editfaculty" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #c51e3a; border-color: #c51e3a;">
          <h5 class="modal-title"><strong>Edit Faculty <?php echo $data[0]->ProfID;?></strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal" >
          <div class="modal-body">
            <div class="form-group">
              <div class="alert alert-danger" align="center" style="display: none;"></div>
            </div>
            <div class="row form-group">
              <div class="col-12 col-md-4"><input type="text" value="<?php echo $data[0]->Firstname;?>" id="ffname_upd" name="ffname" placeholder="First Name" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" value="<?php echo $data[0]->Middlename;?>" id="fmname_upd" name="fmname" placeholder="Middle Name" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" value="<?php echo $data[0]->Lastname;?>" id="flname_upd" name="flname" placeholder="Last Name" class="form-control">
              </div>
            </div> 
            <div class="row form-group">
              <div class="col-12 col-md-4"><input type="contact" value="<?php echo $data[0]->Contact;?>" id="fcontact_upd" name="fcontact" placeholder="Contact No." class="form-control"></div>
              <div class="col-12 col-md-4">
                  <select name="fposition" id="fposition_upd" class="form-control">
                      <option value="<?php echo $info[0]->PositionCode;?>"><?php echo $info[0]->PositionName;?></option>
                      <?php
                          foreach($position as $row) { ?>
                          <option value="<?php echo $row->PositionCode ?>"><?php echo $row->PositionName ?></option>
                      <?php
                          }
                      ?>
                  </select>
              </div>
              <div class="col-12 col-md-4">
                  <select name="fdepCodes" id="fdepCode_upd" class="form-control" >
                      <option value="<?php echo $info[0]->DepartmentCode;?>"><?php echo $info[0]->DepartmentName;?></option>
                      <?php
                          foreach($department as $row) { ?>
                          <option value="<?php echo $row->DepartmentCode ?>"><?php echo $row->DepartmentName ?></option>
                      <?php
                          }
                      ?>
                  </select>
              </div>    
            </div>
            <div class="row form-group">    
              <div class="col-12 col-md-4">
                  <select name="sub_list" id="sub_list" multiple class="form-control">
                      <?php
                          foreach($subjects as $row) { ?>
                          <option value="<?php echo $row->SubjectCode ?>"><?php echo $row->SubjectName ?></option>
                      <?php
                          }
                      ?>
                  </select>
              </div>    
            </div>
          </div>
          <div class="modal-footer" style="background-color: #c51e3a; border-color: #c51e3a;">
            <input type="hidden" name="prof_id" id="profid" value="<?php echo $data[0]->ProfID;?>">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" id="btnupd_faculty" name="btn_faculty" class="btn btn-primary">Confirm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!--EDIT FACULTY MODAL +++++++++++++++++++++++++++++++++++++++++++-->


  <div class="modal fade" id="infosub" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #c51e3a; border-color: #c51e3a;">
          <h5 class="modal-title"><strong>Add Subject <?php echo $data[0]->ProfID;?></strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal" >
          <div class="modal-body">
            <div class="form-group">
              <div class="alert alert-danger" align="center" style="display: none;"></div>
            </div>  
            <div class="row form-group">    
              <div class="col-12 col-md-4">
                  <select name="sub_list[]" id="selectmenu" multiple>
                      <?php
                          foreach($subjects as $row) {
                            if($row->Status == 'A') { 
                              ?>
                                <option value="<?php echo $row->SubjectCode ?>"><?php echo $row->SubjectName ?></option>
                              <?php
                            }
                          }
                      ?>
                  </select>
              </div>    
            </div>
          </div>
          <div class="modal-footer" style="background-color: #c51e3a; border-color: #c51e3a;">
            <input type="hidden" name="prof_id" id="profid" value="<?php echo $data[0]->ProfID;?>">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" id="btn_faculty_sub" name="btn_faculty" class="btn btn-primary">Confirm</button>
          </div>
        </form>
      </div>
    </div>
  </div>

       