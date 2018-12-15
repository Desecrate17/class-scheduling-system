<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <div class="mx-auto d-block">
        <img class="mx-auto d-block" src="<?php echo base_url('assets/images/user.png');?>" alt="Card image cap">
        <h5 class="text-sm-center mt-2 mb-1"><?php                                           
          foreach ($data as $row) { ?>
              <?php echo $row->last_name.', '.$row->first_name.' '.$row->middle_name; ?>
          <?php
              }?>
        </h5>
        <p class="text-sm-center mt-2 mb-1"> <?php                                          
          foreach ($data as $row) { ?>
              <?php echo $row->contact; ?>
          <?php
          }?>
        </p>                                                                                                       
      </div><hr>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-info-circle"></i>
            <strong class="card-title">Professor Information</strong>
            <button type="button" class="btn btn-sm btn-info" data-target="#editfaculty" data-toggle="modal" data-backdrop="static">Edit</button><span class="fa fa-pencil"></span>
        </div>
        <div class="card-body">
        <?php foreach ($info as $row) { ?>
            <h6>Position:</h6><p><?php echo $row->position_name; ?></p>
            <h6>Department:</h6><p><?php echo $row->department_name; ?></p>
            <h6>Subjects:</h6><p><?php echo $row->subject_name; ?></p>
            <h6>Prefered Time:</h6><p><?php echo $row->prefered_time; ?></p>
        <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--EDIT FACULTY MODAL +++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="editfaculty">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><strong>Edit Faculty <?php echo $data[0]->prof_id;?></strong></h5>
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
              <div class="col-12 col-md-4"><input type="text" value="<?php echo $data[0]->first_name;?>" id="ffname_upd" name="ffname" placeholder="First Name" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" value="<?php echo $data[0]->middle_name;?>" id="fmname_upd" name="fmname" placeholder="Middle Name" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" value="<?php echo $data[0]->last_name;?>" id="flname_upd" name="flname" placeholder="Last Name" class="form-control">
              </div>
            </div> 
            <div class="row form-group">
              <div class="col-12 col-md-4"><input type="contact" value="<?php echo $data[0]->contact;?>" id="fcontact_upd" name="fcontact" placeholder="Contact No." class="form-control"></div>
              <div class="col-12 col-md-4">
                  <select name="fposition" id="fposition_upd" class="form-control">
                      <option name="fposition" id="fposition" value="<?php echo $data[0]->prof_id;?>"><?php echo $info[0]->position_name;?></option>
                      <?php
                          foreach($position as $row) { ?>
                          <option value="<?php echo $row->position_code ?>"><?php echo $row->position_name ?></option>
                      <?php
                          }
                      ?>
                  </select>
              </div>
              <div class="col-12 col-md-4">
                  <select name="fdepCode" id="fdepCode_upd" class="form-control" >
                      <option value="<?php echo $data[0]->prof_id;?>"><?php echo $info[0]->department_name;?></option>
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
            <input type="hidden" name="prof_id" id="profid" value="<?php echo $data[0]->prof_id;?>">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" id="btnupd_faculty" name="btn_faculty" class="btn btn-primary">Confirm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!--EDIT FACULTY MODAL +++++++++++++++++++++++++++++++++++++++++++-->