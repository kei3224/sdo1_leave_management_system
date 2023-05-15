<h1 class="h3 mb-0 text-gray-800">Dashboard
  <!-- <?php echo $_settings->info('name') ?> -->
</h1>

<hr class="bg-light">
<?php if ($_settings->userdata('type') != 3): ?>

  <div class="row">
    <!-- <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-light elevation-1"><i class="fas fa-file-alt"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Pending Applications</span>
          <span class="info-box-number text-right">
            <?php
            $pending = $conn->query("SELECT * FROM `leave_applications` where date_format(date_start,'%Y') = '" . date('Y') . "' and date_format(date_end,'%Y') = '" . date('Y') . "' and status = 0 ")->num_rows;
            echo number_format($pending);
            ?>
            <?php ?>
          </span>
        </div>
        
      </div>
      
    </div> -->
    <!-- /.col -->
    <!-- <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-building"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Total Departments</span>
          <span class="info-box-number text-right">
            <?php
            $department = $conn->query("SELECT id FROM `department_list` ")->num_rows;
            echo number_format($department);
            ?>
          </span>
        </div>
      </div>
    </div> -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <!-- <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-lightblue elevation-1"><i class="fas fa-th-list"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Total Designations</span>
          <span class="info-box-number text-right">
            <?php
            $designation = $conn->query("SELECT id FROM `designation_list`")->num_rows;
            echo number_format($designation);
            ?>
          </span>
        </div>
      </div>
    </div> -->

    <!-- <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-purple elevation-1"><i class="fas fa-list"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Total Type of Leave</span>
          <span class="info-box-number text-right">
            <?php
            $leave_types = $conn->query("SELECT id FROM `leave_types` where status = 1 ")->num_rows;
            echo number_format($leave_types);
            ?>
          </span>
        </div>
      </div>
    </div> -->
  </div>


  <!--New Design-->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-outline card-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                Pending Applications</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <span class="info-box-number text-right">
                  <?php
                  $pending = $conn->query("SELECT * FROM `leave_applications` where date_format(date_start,'%Y') = '" . date('Y') . "' and date_format(date_end,'%Y') = '" . date('Y') . "' and status = 0 ")->num_rows;
                  echo number_format($pending);
                  ?>
                  <?php ?>
                </span>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-file-alt fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-outline card-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Total Departments</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <span class="info-box-number text-right">
                  <?php
                  $department = $conn->query("SELECT id FROM `department_list` ")->num_rows;
                  echo number_format($department);
                  ?>
                </span>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-building fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-outline card-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                Total Designations</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <span class="info-box-number text-right">
                  <?php
                  $designation = $conn->query("SELECT id FROM `designation_list`")->num_rows;
                  echo number_format($designation);
                  ?>
                </span>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-th-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
              </div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Pending Requests Card Example -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-outline card-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Total Type of Leave</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <span class="info-box-number text-right">
                  <?php
                  $leave_types = $conn->query("SELECT id FROM `leave_types` where status = 1 ")->num_rows;
                  echo number_format($leave_types);
                  ?>
                </span>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-outline card-secondary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                Number of Employees</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <span class="info-box-number text-right">
                  <?php
                  $users = $conn->query("SELECT id FROM `users` where `type` = '3' ")->num_rows;
                  echo number_format($users);
                  ?>
                </span>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-lg-5 mb-3">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Today's Applications</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <span class="info-box-number text-right">
                  <?php
                  $today = $conn->query("SELECT * FROM `leave_applications` WHERE DATE(`date_start`) = DATE(NOW())");
                  if ($today->num_rows > 0) {
                    echo number_format($today->num_rows);
                  } else {
                    echo "no data available";
                  }
                  ?>
                </span>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar-week fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-lg-5 mb-3">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Weekly Applications</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <span class="info-box-number text-right">
                  <?php
                  // fetch weekly application counts
                  $sql = "SELECT YEARWEEK(date_start, 1) AS week, COUNT(*) AS count
                          FROM leave_applications
                          WHERE YEAR(date_start) = YEAR(CURDATE())
                          GROUP BY YEARWEEK(date_start, 1)
                          ORDER BY YEARWEEK(date_start, 1) ASC";
                  $result = $conn->query($sql);

                  // check if data is available
                  if ($result->num_rows > 0) {
                    $total = 0;
                    while ($row = $result->fetch_assoc()) {
                      $total += $row['count'];
                    }
                    echo number_format($total);
                  } else {
                    echo "no data available";
                  }
                  ?>
                </span>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar-week fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-lg-5 mb-3">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Monthly Applications</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <span class="info-box-number text-right">
                  <?php
                  $query = "SELECT MONTH(date_start) AS month, COUNT(*) AS count 
                            FROM leave_applications 
                            WHERE YEAR(date_start) = YEAR(CURDATE()) 
                            GROUP BY MONTH(date_start) 
                            ORDER BY MONTH(date_start)";
                  $result = $conn->query($query);
                  if ($result->num_rows > 0) {
                    $total = 0;
                    while ($row = $result->fetch_assoc()) {
                      $total += $row['count'];
                    }
                    echo number_format($total);
                  } else {
                    echo "no data available";
                  }
                  ?>
                </span>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar-week fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-xl-8 col-lg-7">
        <!-- Area Chart -->
        <div class="card shadow card-outline card-primary mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Leave Chart</h6>
          </div>
          <div class="card-body pt-4">
            <div class="chart-area" style="height: 300px">
              <canvas id="myAreaChart"></canvas>
            </div>
            <hr>
            The above data is maybe not updated. To update, please referesh the web page.
          </div>
        </div>
      </div>

      <!-- Donut Chart -->
      <div class="col-xl-4 col-lg-5">
        <div class="card shadow card-outline card-primary mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body pt-4">
            <div class="chart-pie" style="height: 282px">
              <canvas id="myPieChart"></canvas>
            </div>
            <hr>
            The above data is maybe not updated. To update, please referesh the web page.
          </div>
        </div>
      </div>
    </div>

  <?php else: ?>
    <div class="row">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card card-outline card-danger shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                  Pending Applications</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                  <span class="info-box-number text-right">
                    <?php
                    $pending = $conn->query("SELECT * FROM `leave_applications` where date_format(date_start,'%Y') = '" . date('Y') . "' and date_format(date_end,'%Y') = '" . date('Y') . "' and status = 0 and user_id = '{$_settings->userdata('id')}' ")->num_rows;
                    echo number_format($pending);
                    ?>
                    <?php ?>
                  </span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-file-alt fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card card-outline card-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary  text-uppercase mb-1">
                  Upcoming Leave</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                  <span class="info-box-number text-right">
                    <?php
                    $upcoming = $conn->query("SELECT * FROM `leave_applications` where date(date_start) > '" . date('Y-m-d') . "' and status = 1 and user_id = '{$_settings->userdata('id')}' ")->num_rows;
                    echo number_format($upcoming);
                    ?>
                    <?php ?>
                  </span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-file-alt fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>