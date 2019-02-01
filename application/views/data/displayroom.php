
<div class="cd-schedule loading">
  <div class="timeline">
    <?php 
      $times = array("06:00","06:30","07:00","07:30","08:00","08:30","09:00","09:30","10:00","10:30","11:00","11:30","12:00","12:30","13:00","13:30","14:00","14:30","15:00","15:30","16:00","16:30","17:00","17:30","18:00","18:30","19:00","19:30","20:00"); ?>                            
      <?php foreach($times as $t){ ?>
        <ul>
          <li><span><?php echo $t ?></span></li>
        </ul>
      <?php }
      ?>
  </div> <!-- .timeline -->

  <div class="events">
    <ul>
      <li class="events-group">
        <div class="top-info"><span>Monday</span></div>
         <ul>
              <?php
               foreach($hey as $h){ 
                  if($h->SchedDays=="monday")
                { ?>
                  <li class="single-event" data-start="<?php echo $h->SchedTime; ?>" data-end="<?php echo $h->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                    <a href="#0">
                      <em class="event-name"><?php echo $h->SubjectName;?></em>
                    </a>
                  </li>
                <?php }
                  }
                    ?>
            </ul>
      </li>

      <li class="events-group">
        <div class="top-info"><span>Tuesday</span></div>
         <ul>
              <?php
               foreach($hey as $h){ 
                  if($h->SchedDays=="tuesday")
                { ?>
                  <li class="single-event" data-start="<?php echo $h->SchedTime; ?>" data-end="<?php echo $h->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                    <a href="#0">
                      <em class="event-name"><?php echo $h->SubjectName;?></em>
                    </a>
                  </li>
                <?php }
                  }
                    ?>
            </ul>
      </li>

      <li class="events-group">
        <div class="top-info"><span>Wednesday</span></div>
            <ul>
              <?php
               foreach($hey as $h){ 
                  if($h->SchedDays=="wednesday")
                { ?>
                  <li class="single-event" data-start="<?php echo $h->SchedTime; ?>" data-end="<?php echo $h->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                    <a href="#0">
                      <em class="event-name"><?php echo $h->SubjectName;?></em>
                    </a>
                  </li>
                <?php }
                  }
                    ?>
            </ul>

      </li>

      <li class="events-group">
        <div class="top-info"><span>Thursday</span></div>
          <ul>
              <?php
               foreach($hey as $h){ 
                  if($h->SchedDays=="thursday")
                { ?>
                  <li class="single-event" data-start="<?php echo $h->SchedTime; ?>" data-end="<?php echo $h->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                    <a href="#0">
                      <em class="event-name"><?php echo $h->SubjectName;?></em>
                    </a>
                  </li>
                <?php }
                  }
                    ?>
            </ul>
      </li>

      <li class="events-group">
        <div class="top-info"><span>Friday</span></div>
        <ul>
              <?php
               foreach($hey as $h){ 
                  if($h->SchedDays=="friday")
                { ?>
                  <li class="single-event" data-start="<?php echo $h->SchedTime; ?>" data-end="<?php echo $h->SchedEnd; ?>" data-content="event-abs-circuit" data-event="event-1">
                    <a href="#0">
                      <em class="event-name"><?php echo $h->SubjectName;?></em>
                    </a>
                  </li>
                <?php }
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
