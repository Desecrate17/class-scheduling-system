                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="mx-auto d-block" src="<?php echo base_url('assets/images/user.png');?>" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1">
                                        <?php
                                           
                                            foreach ($data as $row) {
                                        ?>
                                            <?php echo $row->last_name.' '.$row->first_name.' '.$row->middle_name; ?>
                                        <?php
                                            }
                                      
                                        ?>
                                    </h5>
                                    <p class="text-sm-center mt-2 mb-1">
                                         <?php
                                           
                                            foreach ($data as $row) {
                                        ?>
                                            <?php echo $row->contact; ?>
                                        <?php
                                            }
                                        ?>
                                    </p>
                                   
                                       

                                       
                                </div>
                                <hr>

                                 <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong class="card-title">Professor Information</strong>
                                                </div>
                                                <div class="card-body">
                                                     <?php
                                                        foreach ($info as $row) {
                                                            ?>
                                                                <h6>Position:</h6><p><?php echo $row->position_name; ?></p>
                                                                <h6>Department:</h6><p><?php echo $row->department_name; ?></p>
                                                                <h6>Subjects:</h6><p><?php echo $row->subject_name; ?></p>
                                                                <h6>Prefered TIme:</h6><p><?php echo $row->prefered_time; ?></p>
                                                            <?php
                                                                }
                                                      
                                                        ?>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>