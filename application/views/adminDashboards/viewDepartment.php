	<div class="col-md-12">
	    <div class="card">
	        <div class="card-body">
	            <div class="mx-auto d-block">
	                <img class="mx-auto d-block" src="<?php echo base_url('assets/images/tup.png');?>" alt="Card image cap">
	                <h2 class="text-sm-center mt-2 mb-1">
	                    <?php foreach ($data as $row) { ?>
	                        <?php echo $row->department_name; ?> Department
	                    <?php
	                        } ?>
	                </h2>
	                <p class="text-sm-center mt-2 mb-1">
	                    <?php foreach ($data as $row) { ?>
	                        <?php echo $row->department_code; ?>
	                    <?php
	                        } ?>
	                </p>
	            </div><hr>
	             <div class="col-md-12">
	                <div class="card">
	                    <div class="card-header">
	                        <i class="fa fa-info-circle"></i>
	                        <strong class="card-title">Department Information</strong>
	                        <button type="button" class="btn btn-sm btn-info" data-target="#editdepartment" data-toggle="modal" data-backdrop="static">Edit</button><span class="fa fa-pencil"></span>
	                    </div>
	                    <div class="card-body">
	                	<?php foreach($data as $row){ ?>
		                    <h6> Department Dean: </h6><p><?php echo $row->department_name; ?></p>
		                    <h6> Department Head: </h6><p><?php echo $row->department_name; ?></p>
	                	<?php } ?>
	                    </div>
	                </div>
	            </div>         
	        </div>                        
	    </div>
	</div>

<!--EDIT FACULTY MODAL +++++++++++++++++++++++++++++++++++++++++-->
  <div class="modal fade" id="editdepartment">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><strong>Edit Department <?php echo $data[0]->department_name;?></strong></h5>
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
              <label class="col-md-12">Department Name</label>
              <div class="col-12 col-md-12"><input type="text" value="<?php echo $data[0]->department_name;?>" id="ddepname_upd" name="ddepname_upd" placeholder="First Name" class="form-control">
              </div>  
            </div>
            <div class="row form-group">
              <label class="col-md-12">Department Code</label> 
              <div class="col-12 col-md-12"><input type="text" value="<?php echo $data[0]->department_code;?>" id="ddepcode_upd" name="ddepcode_upd" placeholder="First Name" class="form-control">
              </div>         
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="ddep_id" id="ddep_id" value="<?php echo $data[0]->department_id;?>">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" id="btnupd_department" name="btn_faculty" class="btn btn-primary">Confirm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!--EDIT FACULTY MODAL +++++++++++++++++++++++++++++++++++++++++++-->