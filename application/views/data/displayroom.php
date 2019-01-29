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
                              $times = array("06:00:00","07:00:00","08:00:00","09:00:00","10:00:00","11:00:00","12:00:00","13:00:00","14:00:00","15:00:00"
                                ,"16:00:00","17:00:00","18:00:00","19:00:00","20:00:00");
                              $result =0; ?>                            
                                <?php foreach($times as $t){ ?>
                                <tr>
                                  <td><?php echo $t ?></td>
                                   <?php foreach($hey as $h)
                                      { 
                                        if($h->SchedTime==$t&$h->SchedDays=="monday")
                                        { ?>
                                          <td rowspan="<?php echo $h->SubjectHours; ?>" style="background-color: #c51e3a;"> <?php echo $h->SchedName;?></td>
                                    <?php     
                                      $result = 1;
                                        }
                                       
                                      } 
                                     if($result!=1){ ?>
                                    <td></td>                              
                                <?php }
                                  $result=0;
                                  ?>

                                   <?php foreach($hey as $h)
                                      { 
                                        if($h->SchedTime==$t&$h->SchedDays=="tuesday")
                                        { ?>
                                          <td rowspan="<?php echo $h->SubjectHours; ?>" style="background-color: #c51e3a;"> <?php echo $h->SchedName;?></td>
                                    <?php     
                                      $result = 1;
                                        }
                                       
                                      } 
                                     if($result!=1){ ?>
                                    <td></td>                              
                                <?php }
                                  $result=0;
                                  ?>

                                  <?php foreach($hey as $h)
                                      { 
                                        if($h->SchedTime==$t&$h->SchedDays=="wednesday")
                                        { ?>
                                          <td rowspan="<?php echo $h->SubjectHours; ?>" style="background-color: #c51e3a;"> <?php echo $h->SchedName;?></td>
                                    <?php     
                                      $result = 1;
                                        }
                                       
                                      } 
                                     if($result!=1){ ?>
                                    <td></td>                              
                                <?php }
                                  $result=0;
                                  ?>

                                  <?php foreach($hey as $h)
                                      { 
                                        if($h->SchedTime==$t&$h->SchedDays=="thursday")
                                        { ?>
                                          <td rowspan="<?php echo $h->SubjectHours; ?>" style="background-color: #c51e3a;"> <?php echo $h->SchedName;?></td>
                                    <?php     
                                      $result = 1;
                                        }
                                       
                                      } 
                                     if($result!=1){ ?>
                                    <td></td>                              
                                <?php }
                                  $result=0;
                                  ?>

                                  <?php foreach($hey as $h)
                                      { 
                                        if($h->SchedTime==$t&$h->SchedDays=="friday")
                                        { ?>
                                          <td rowspan="<?php echo $h->SubjectHours; ?>" style="background-color: #c51e3a;"> <?php echo $h->SchedName;?></td>
                                    <?php     
                                      $result = 1;
                                        }
                                       
                                      } 
                                     if($result!=1){ ?>
                                    <td></td>                              
                                <?php }
                                  $result=0;
                                  ?>

                                  <?php foreach($hey as $h)
                                      { 
                                        if($h->SchedTime==$t&$h->SchedDays=="saturday")
                                        { ?>
                                          <td rowspan="<?php echo $h->SubjectHours; ?>" style="background-color: #c51e3a;"> <?php echo $h->SchedName;?></td>
                                    <?php     
                                      $result = 1;
                                        }
                                       
                                      } 
                                     if($result!=1){ ?>
                                    <td></td>                              
                                <?php }
                                  $result=0;
                                  ?>

                                  <?php foreach($hey as $h)
                                      { 
                                        if($h->SchedTime==$t&$h->SchedDays=="sunday")
                                        { ?>
                                          <td rowspan="<?php echo $h->SubjectHours; ?>" style="background-color: #c51e3a;"> <?php echo $h->SchedName;?></td>
                                    <?php     
                                      $result = 1;
                                        }
                                       
                                      } 
                                     if($result!=1){ ?>
                                    <td></td>                              
                                <?php }
                                  $result=0;
                                  ?>


                                

                              <?php }
                              ?>       
                             
                            </tbody>