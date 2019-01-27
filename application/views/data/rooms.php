<!-- Header-->
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
            <h1>Rooms</h1>
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
                <a class="nav-item nav-link fa fa-plus" id="nav-home-tab" data-toggle="modal" title="Add Data" href="#addRoom" role="tab" aria-controls="nav-home" aria-selected="true"></a>
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#active" role="tab" aria-controls="nav-profile" aria-selected="false">Active</a>
                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#inactive" role="tab" aria-controls="nav-contact" aria-selected="false">Inactive</a>
                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#unassigned" role="tab" aria-controls="nav-contact" aria-selected="false">Unassigned</a>
              </div>
            </nav>
            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
              <!--ACTIVE -->
              <div class="tab-pane fade show active" id="active" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">

                  <!-- DROPDOWN -->
                  
                  <div class="col-lg-6">
                         <form method="POST" id="formsubmit">
                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <select name="rooms" id="rooms" class="form-control" >
                                                <?php
                                                    foreach($room as $row) { ?>
                                                    <option value="<?php echo $row->room_id ?>"><?php echo $row->room_no ?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                            
                                            <button  style="border-radius: 2px; background-color: #c51e3a; border-color: #c51e3a;" type="button" value="submit" class="btn btn-primary" id="roombut">submit</button>
                                        </div>
                                    </div>
                                </div>
                                                                
                         </form>
                        </div>
                     

                  <!-- DROPDOWN -->
                  <!--TABLE+++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body" >
                          <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th class="time">TIME</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturay</th>
                                <th>Sunday</th>
                              </tr>
                            </thead>
                            <tbody id="room_sched_list">

                            <?php 
                              $times = array("6:00","7:00","8:00","9:00","10:00","11:00","12:00","13:00","14:00","15:00"
                                ,"16:00","17:00","18:00","19:00","20:00");
                              foreach($times as $t){
                                echo ' <tr>
                                <td>'.$t.'</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tr>';
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
                        <div class="card-body" >
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>TIME</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturay</th>
                                <th>Sunday</th>
                              </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  <!--TABLE++++++++++++++++++++++++++++++++++++++++++-->
                  </div>
              </div>
                

              <!--UNASSIGNED -->
              <div class="tab-pane fade" id="unassigned" role="tabpanel" aria-labelledby="nav-home-tab">
              	<div class="row">
                  <!--TABLE+++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body" >
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>TIME</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturay</th>
                                <th>Sunday</th>
                              </tr>
                            </thead>
                            <tbody>
                               
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
  <div class="modal fade" id="addRoom" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Room</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form>
          <div class="modal-body">
            <div class="form-group">
              <div class="alert alert-danger alert-dismissible fade show" align="center" style="display: none;"></div>
            </div>
            <div class="row form-group">
              <div class="col-12 col-md-4"><input type="text" id="room_no" name="room_no" placeholder="Room Number" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" id="room_stat" name="room_stat" placeholder="Room Status" class="form-control">
              </div>
              <div class="col-12 col-md-4"><input type="text" id="room_type" name="room_type" placeholder="Room Type" class="form-control">
              </div>
            </div> 
            <div class="row form-group">
              <div class="col-12 col-md-4">
                  <select data-placeholder="Department" name="dep" id="dep" class="form-control">
                      <?php
                          foreach($dep_list as $row) { ?>
                          <option value="<?php echo $row->department_id ?>"><?php echo $row->department_name ?></option>
                      <?php
                          }
                      ?>
                  </select>
              </div>    
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary-danger" data-dismiss="modal">Cancel</button>
            <button type="button" value="submit" id="btn_room" name="btn_room" class="btn btn-primary">Confirm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!--ADD FACULTY MODAL ++++++++++++++++++++++++++++++++++++++++++++-->

 <form>
            <div class="modal fade" id="confirm_modal">
              <div class="modal-dialog" style="width: 30%">
                <div class="modal-content" style="background-color: #edfafd">
                  <div class="modal-header" style="background-color: #aed9da">
                    <h4><center>Confirmation</center></h4>
                  </div>
                  <div class="modal-body">
                    
                      <div class="container">
                        <div class="row">
                            Are you sure you want to save this data?
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer" style="background-color: #aed9da">
                    <button type="button" class="btn btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" type="button" id="btn_confirm" class="btn btn-primary btn-sm">Confirm</button>
                  </div>
                </div>
              </div>
            </div> 
            </form>