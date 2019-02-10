    <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
            <h1>Schedules</h1>
        </div>
      </div>
    </div>

    <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li><a href="<?php echo site_url('welcome_admin');?>">Home</a></li>
                  <li><a href="#">Schedule</a></li>
                  <li><a href="<?php echo site_url('welcome_admin/viewSchedbyRoom');?>">View</a></li>
                  <?php if ($room!=NULL){
                   echo '<li class="active">';
                     foreach ($room as $r) {
                        echo $r->RoomNo;
                   echo '</li>';
                 }
               }

                   if ($room==NULL){
                   echo '<li class="active">';
                     foreach ($room as $r) {
                        echo 'Chenelin';
                   echo '</li>';
                 }
                }
              ?>

              </ol>
          </div>
      </div>
    </div>

  <div class="content mt-3">
    <div class="row">
      <div class="col-md-12">
        <div class="navbar-2">
          <?php
              if ($department!=NULL){
                foreach ($department as $d){
                   ?>
                    <div class="dropdown-2">
                     <button class="dropbtn dropdown-toggle"><?php echo $d->DepartmentName; ?>&nbsp;Department</button>
                        <div class="dropdown-content-2">
                          <?php if($d->DepartmentCode=='MATH'){ ?>
                            <div class="dropdown-content-2 force-scroll">
                              <?php
                                if ($math!=NULL){
                                   foreach ($math as $m){
                                   ?>
                                      <a href="<?php echo site_url('welcome_admin/schedule_room/'.$m->RoomID.'');?>"><?php echo $m->RoomNo.' - '.$m->RoomType; ?></a>
                                    <?php
                                  }
                                }
                              ?>
                            </div>
                          <?php } ?>

                          <?php if($d->DepartmentCode=='PHYS'){ ?>
                            <div class="dropdown-content-2 force-scroll">
                              <?php
                                if ($phys!=NULL){
                                   foreach ($phys as $p){
                                   ?>
                                      <a href="<?php echo site_url('welcome_admin/schedule_room/'.$p->RoomID.'');?>"><?php echo $p->RoomNo.' - '.$p->RoomType; ?></a>
                                    <?php
                                  }
                                }
                              ?>
                            </div>
                            
                          <?php } ?>

                          <?php if($d->DepartmentCode=='CHEM'){ ?>
                            <div class="dropdown-content-2 force-scroll">
                              <?php
                                if ($chem!=NULL){
                                   foreach ($chem as $c){
                                   ?>
                                      <a href="<?php echo site_url('welcome_admin/schedule_room/'.$c->RoomID.'');?>"><?php echo $c->RoomNo.' - '.$c->RoomType; ?></a>
                                    <?php
                                  }
                                }
                              ?>
                            </div>
                          <?php } ?>
                      </div>
                    </div>
                <?php
                }
              }
            ?> 

        </div>
      </div>
    </div>
    <div class="row">

    <div class="col-md-12">
            <div class="cd-schedule loading">
              <div class="timeline">
                <?php 
                  $times = array("06:00","07:00","08:00","09:00","10:00","11:00","12:00","13:00","14:00","15:00","16:00","17:00","18:00","19:00","20:00"); ?>
                  <ul>                            
                    <?php foreach($times as $t){ ?>
                        <li><span><?php echo $t ?></span></li>
                    <?php }
                    ?>
                  </ul>
              </div> <!-- .timeline -->

              <div class="events">
                <ul>
                  <li class="events-group">
                    <div class="top-info"><span>Monday</span></div>
                     <ul>
                          <?php
                          if ($sched!=NULL) {
                           foreach($sched as $s){ 
                                if($s->SchedDays=="monday")
                              { ?>
                                <li class="single-event" data-start="<?php echo $s->SchedTime; ?>" data-end="<?php echo $s->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                  <a href="#0">
                                    <em class="event-name"><?php echo $s->SubjectName;?></em>
                                  </a>
                                </li>
                              <?php }
                                }
                              }
                                ?>
                        </ul>
                  </li>

                  <li class="events-group">
                    <div class="top-info"><span>Tuesday</span></div>
                     <ul>
                          <?php
                           if ($sched!=NULL) {
                             foreach($sched as $s){ 
                                if($s->SchedDays=="tuesday")
                              { ?>
                                <li class="single-event" data-start="<?php echo $s->SchedTime; ?>" data-end="<?php echo $s->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                  <a href="#0">
                                    <em class="event-name"><?php echo $s->SubjectName;?></em>
                                  </a>
                                </li>
                              <?php }
                                }
                              }
                                ?>
                        </ul>
                  </li>

                  <li class="events-group">
                    <div class="top-info"><span>Wednesday</span></div>
                        <ul>
                          <?php
                           if ($sched!=NULL) {
                             foreach($sched as $s){ 
                                if($s->SchedDays=="wednesday")
                              { ?>
                                <li class="single-event" data-start="<?php echo $s->SchedTime; ?>" data-end="<?php echo $s->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                  <a href="#0">
                                    <em class="event-name"><?php echo $s->SubjectName;?></em>
                                  </a>
                                </li>
                              <?php }
                                }
                              }
                                  ?>
                        </ul>

                  </li>

                  <li class="events-group">
                    <div class="top-info"><span>Thursday</span></div>
                      <ul>
                          <?php
                          if ($sched!=NULL) {
                           foreach($sched as $s){ 
                              if($s->SchedDays=="thursday")
                            { ?>
                              <li class="single-event" data-start="<?php echo $s->SchedTime; ?>" data-end="<?php echo $s->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                <a href="#0">
                                  <em class="event-name"><?php echo $s->SubjectName;?></em>
                                </a>
                              </li>
                            <?php }
                              }
                            }
                          ?>
                        </ul>
                  </li>

                  <li class="events-group">
                    <div class="top-info"><span>Friday</span></div>
                    <ul>
                          <?php
                           if ($sched!=NULL) {
                             foreach($sched as $s){ 
                                if($s->SchedDays=="friday")
                              { ?>
                                <li class="single-event" data-start="<?php echo $s->SchedTime; ?>" data-end="<?php echo $s->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                  <a href="#0">
                                    <em class="event-name"><?php echo $s->SubjectName;?></em>
                                  </a>
                                </li>
                              <?php }
                                }
                              }
                                ?>
                        </ul>
                  </li>

                  <li class="events-group">
                    <div class="top-info"><span>Saturday</span></div>
                    <ul>
                          <?php
                           if ($sched!=NULL) {
                             foreach($sched as $s){ 
                                if($s->SchedDays=="Saturday")
                              { ?>
                                <li class="single-event" data-start="<?php echo $s->SchedTime; ?>" data-end="<?php echo $s->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                                  <a href="#0">
                                    <em class="event-name"><?php echo $s->SubjectName;?></em>
                                  </a>
                                </li>
                              <?php }
                                }
                              }
                                ?>
                        </ul>
                  </li>

                </ul>
              </div>

              <div class="event-modal">
                <header class="header">
                  <div class="content">
                    <span class="event-date"></span>
                    <h3 class="event-name"></h3>
                  </div>

                  <div class="header-bg"></div>
                </header>

                <div class="body">
                  <div class="event-info"></div>
                  <div class="body-bg"></div>
                </div>
              </div>

              <div class="cover-layer"></div>
            </div> <!-- .cd-schedule -->
          </div>
  </div>
</div>

