<!-- Header-->
<div class="animated fadeIn">
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
            <h1>Your Subject List</h1>
        </div>
      </div>
    </div>
  </div>


  <div class="content mt-3">
    <div class="row">
     <div class="card-body col-6">
        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Subject List</th>
              </tr>
            </thead>
            <tbody>
              <?php
               if ($subjects!=NULL) {
                 foreach ($subjects as $row) {
                    ?> 
              <tr>
                <td><center><?php echo $row->subject_name; ?> </center></td>
              </tr>
               <?php
                       }
                     }
                  ?>
              </tbody>
         </table>
     </div>

      <div class="card-body col-6">

        <form class="form-horizontal" >
          <div class="modal-body">
            <div class="form-group">
              <div class="alert alert-danger" align="center" style="display: none;"></div>
            </div>  
            <div class="row form-group">    
              <div class="col-12 col-md-4">
                  <select name="sub_list[]" id="selectmenu" multiple>
                      <?php
                          foreach($choice as $row) {
                            if($row->status == 'A') { 
                              ?>
                                <option value="<?php echo $row->subject_code ?>"><?php echo $row->subject_name ?></option>
                              <?php
                            }
                          }
                      ?>
                  </select>
              </div>    
            </div>
          </div>
          <div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" id="btn_add_sub" name="btn_faculty" class="btn btn-primary">Confirm</button>
          </div>
        </form>
      </div>
    </div>

  </div>
