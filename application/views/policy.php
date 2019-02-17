<?php
$policy = '';
foreach($data as $row){
  $policy .= '<div class="col-12 col-md-4">'.
  '<label class="form-control-label col-12">'.$row->policyName.
  '<input name="'.$row->id.'" class="form-control" id="'.$row->id.'" value="'.$row->policyValue.'">'.'</div>';  
  }

?>

  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
            <h1>Policies</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li><a href="<?php echo site_url('welcome_admin');?>">Home</a></li>
                  <li><a href="#">Policy</a></li>
              </ol>
          </div>
      </div>
    </div>
  </div>

  <div class="card-body card-block">
    <div class="card">
      <div class="card-body">
        <div class="form-group">
            <?php echo $policy ?>          
        </div>
      </div>
      <div class="card-footer">

      <button type="button" class="btn btn-outline-info" style="border-radius: 3px;" id="btn_policy" name="btn_policy">Edit</button>
      </div>
    </div>
  </div>

