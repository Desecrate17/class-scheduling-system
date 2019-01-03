<!-- Header-->
<div class="animated fadeIn">
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
            <h1>Home</h1>
        </div>
      </div>
    </div>
  </div>


  <div class="content mt-3">
    <div class="col-sm-6 col-lg-3">
      <div class="card text-white bg-flat-color-1">
          <div class="card-body">
              <div class="dropdown float-right">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-users text-light"></i>
                </div>
              </div>
              <h4 class="mb-0">
                  <span class="count"><?php echo " ".$faculty[0]->prof_id; ?></span>
              </h4>
              <p class="text-light">Members online</p>
              <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <div class="text-uppercase font-weight-bold text-light">Faculty</div>
                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
              </div>
              <div class="social-box">
                <ul>
                    <li>
                        <span class="count"><?php echo " ".$faculty_on[0]->prof_id; ?></span>
                        <span>Active</span>
                    </li>
                    <li>
                        <span class="count"><?php echo " ".$faculty_off[0]->prof_id; ?></span>
                        <span>Inactive</span>
                    </li>
                </ul>
              </div>
          </div>
      </div>
    </div>

    <div class="col-sm-6 col-lg-3">
      <div class="card text-white bg-flat-color-2">
          <div class="card-body">
              <div class="dropdown float-right">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-suitcase text-light"></i>
                </div>
              </div>
                <h4 class="mb-0">
                    <span class="count"><?php echo " ".$department[0]->dep_id; ?></span>
                </h4>
              <p class="text-light">Members online</p>
              <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <div class="text-uppercase font-weight-bold text-light">Department</div>
                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
              </div>
              <div class="social-box">
                <ul>
                    <li>
                        <span class="count"><?php echo " ".$department_on[0]->dep_id; ?></span> 
                        <span>Active</span>
                    </li>
                    <li>
                        <span class="count"><?php echo " ".$department_off[0]->dep_id; ?></span>
                        <span>Inactive</span>
                    </li>
                </ul>
              </div>
          </div>
      </div>
    </div>

    <div class="col-sm-6 col-lg-3">
      <div class="card text-white bg-flat-color-3">
          <div class="card-body">
              <div class="dropdown float-right">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-book text-light"></i>
                </div>
              </div>
              <h4 class="mb-0">
                  <span class="count"><?php echo " ".$subjects[0]->sub_id; ?></span>
              </h4>
              <p class="text-light">Members online</p>
              <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <div class="text-uppercase font-weight-bold text-light">Subjects</div>
                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
              </div>
              <div class="social-box">
                <ul>
                    <li>
                        <span class="count"><?php echo " ".$subjects[0]->sub_id; ?></span> 
                        <span>Active</span>
                    </li>
                    <li>
                        <span class="count"><?php echo " ".$subjects[0]->sub_id; ?></span>
                        <span>Inactive</span>
                    </li>
                </ul>
              </div>
          </div>
      </div>
    </div>

    <div class="col-sm-6 col-lg-3">
      <div class="card text-white bg-flat-color-4">
          <div class="card-body">
              <div class="dropdown float-right">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-building text-light"></i>
                </div>
              </div>
              <h4 class="mb-0">
                  <span class="count"><?php echo " ".$rooms[0]->room_id; ?></span>
              </h4>
              <p class="text-light">Members online</p>
              <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <div class="text-uppercase font-weight-bold text-light">Rooms</div>
                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
              </div>
              <div class="social-box">
                <ul>
                    <li>
                        <span class="count"></span> 
                        <span>Active</span>
                    </li>
                    <li>
                        <span class="count"></span>
                        <span>Inactive</span>
                    </li>
                </ul>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>