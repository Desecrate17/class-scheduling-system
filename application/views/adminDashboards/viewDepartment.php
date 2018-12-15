<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="mx-auto d-block">
                <img class="mx-auto d-block" src="<?php echo base_url('assets/images/tup.png');?>" alt="Card image cap">
                <h2 class="text-sm-center mt-2 mb-1">
                    <?php
                                           
                        foreach ($data as $row) {
                    ?>
                        <?php echo $row->department_name; ?>
                    <?php
                        }
                                      
                    ?>
                </h2>
                <p class="text-sm-center mt-2 mb-1">
                    <?php
                                           
                        foreach ($data as $row) {
                    ?>
                        <?php echo $row->department_code; ?>
                    <?php
                        }
                    ?>
                </p>
            </div>
            <hr>

             <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Department Information</strong>
                        </div>
                        <div class="card-body">
                            <h6> Department Head: </h6>
                            <h6> Other Info: </h6>
                                                     
                        </div>
                    </div>
            </div>
          
        </div>
                        
    </div>
</div>