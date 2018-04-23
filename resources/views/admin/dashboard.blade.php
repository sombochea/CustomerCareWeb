@extends("layouts.content")

@section("title", "Dashboard")

@section("block-content")

  <!-- Statistic row -->
  <div class="row">

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
      <div class="card-box noradius noborder bg-default">
        <i class="fa fa-file-text-o float-right text-white"></i>
        <h6 class="text-white text-uppercase m-b-20">All Called</h6>
        <h1 class="m-b-20 text-white counter">1,587</h1>
        <span class="text-white">Today 15 New</span>
      </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
      <div class="card-box noradius noborder bg-warning">
        <i class="fa fa-bar-chart float-right text-white"></i>
        <h6 class="text-white text-uppercase m-b-20">Visitors</h6>
        <h1 class="m-b-20 text-white counter">250</h1>
        <span class="text-white">Bounce rate: 25%</span>
      </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
      <div class="card-box noradius noborder bg-info">
        <i class="fa fa-user-o float-right text-white"></i>
        <h6 class="text-white text-uppercase m-b-20">Users</h6>
        <h1 class="m-b-20 text-white counter">120</h1>
        <span class="text-white">25 New Users</span>
      </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
      <div class="card-box noradius noborder bg-danger">
        <i class="fa fa-bell-o float-right text-white"></i>
        <h6 class="text-white text-uppercase m-b-20">Alerts</h6>
        <h1 class="m-b-20 text-white counter">58</h1>
        <span class="text-white">5 New Alerts</span>
      </div>
    </div>

  </div>
  <!-- end Statistic row -->

  <!-- Chart JS -->
  <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
      <div class="card mb-3">
        <div class="card-header">
          <h3>
            <i class="fa fa-line-chart"></i> Product Sold</h3>
        </div>

        <div class="card-body">
          <canvas id="lineChart"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      <!-- end card-->
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
      <div class="card mb-3">
        <div class="card-header">
          <h3>
            <i class="fa fa-bar-chart-o"></i> All Mom</h3>
        </div>

        <div class="card-body">
          <canvas id="pieChart"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      <!-- end card-->
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
      <div class="card mb-3">
        <div class="card-header">
          <h3>
            <i class="fa fa-bar-chart-o"></i> Top Sources</h3>
        </div>

        <div class="card-body">
          <canvas id="doughnutChart"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      <!-- end card-->
    </div>

  </div>
  <!-- end row -->

  <div class="row">

    <!-- Data Table -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
      <div class="card mb-3">
        <div class="card-header">
          <h3>
            <i class="fa fa-users"></i> Top Customers</h3>
        </div>

        <div class="card-body">

          <table id="example1" class="table table-bordered table-responsive-xl table-hover display">
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
      <!-- end card-->
    </div>

    <!-- Tasks Progress -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-3">
      <div class="card mb-3">
        <div class="card-header">
          <h3>
            <i class="fa fa-phone"></i> Calling Progress</h3>
        </div>

        <div class="card-body">

          <p class="font-600 m-b-5">Task 1
            <span class="text-primary pull-right">
              <b>95%</b>
            </span>
          </p>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-xs bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95"
              aria-valuemin="0" aria-valuemax="95"></div>
          </div>

          <div class="m-b-20"></div>

          <p class="font-600 m-b-5">Task 3
            <span class="text-info pull-right">
              <b>75%</b>
            </span>
          </p>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-xs bg-info" role="progressbar" style="width: 78%" aria-valuenow="75"
              aria-valuemin="0" aria-valuemax="75"></div>
          </div>
          <div class="m-b-20"></div>

          <p class="font-600 m-b-5">Task 5
            <span class="text-warning pull-right">
              <b>68%</b>
            </span>
          </p>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-xs bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68"
              aria-valuemin="0" aria-valuemax="68"></div>
          </div>

          <div class="m-b-20"></div>

          <p class="font-600 m-b-5">Task 7
            <span class="text-danger pull-right">
              <b>55%</b>
            </span>
          </p>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-xs bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55"
              aria-valuemin="0" aria-valuemax="55"></div>
          </div>

          
        </div>
        <div class="card-footer small text-muted">Updated today at 11:59 PM</div>
      </div>
      <!-- end card-->
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-3">
      <div class="card mb-3">
        <div class="card-header">
          <h3>
            <i class="fa fa-envelope-o"></i> Latest messages</h3>
        </div>

        <div class="card-body">

          <div class="widget-messages nicescroll" style="height: 400px;">
            <a href="#">
              <div class="message-item">
                <div class="message-user-img">
                  <img src="assets/images/avatars/avatar2.png" class="avatar-circle" alt="">
                </div>
                <p class="message-item-user">John Doe</p>
                <p class="message-item-msg">Hello. I want to buy your product</p>
                <p class="message-item-date">11:50 PM</p>
              </div>
            </a>
            <a href="#">
              <div class="message-item">
                <div class="message-user-img">
                  <img src="assets/images/avatars/avatar5.png" class="avatar-circle" alt="">
                </div>
                <p class="message-item-user">Ashton Cox</p>
                <p class="message-item-msg">Great job for this task</p>
                <p class="message-item-date">14:25 PM</p>
              </div>
            </a>
            <a href="#">
              <div class="message-item">
                <div class="message-user-img">
                  <img src="assets/images/avatars/avatar6.png" class="avatar-circle" alt="">
                </div>
                <p class="message-item-user">Colleen Hurst</p>
                <p class="message-item-msg">I have a new project for you</p>
                <p class="message-item-date">13:20 PM</p>
              </div>
            </a>
            <a href="#">
              <div class="message-item">
                <div class="message-user-img">
                  <img src="assets/images/avatars/avatar10.png" class="avatar-circle" alt="">
                </div>
                <p class="message-item-user">Fiona Green</p>
                <p class="message-item-msg">Nice to meet you</p>
                <p class="message-item-date">15:45 PM</p>
              </div>
            </a>
            <a href="#">
              <div class="message-item">
                <div class="message-user-img">
                  <img src="assets/images/avatars/avatar2.png" class="avatar-circle" alt="">
                </div>
                <p class="message-item-user">Donna Snider</p>
                <p class="message-item-msg">I have a new project for you</p>
                <p class="message-item-date">15:45 AM</p>
              </div>
            </a>
            <a href="#">
              <div class="message-item">
                <div class="message-user-img">
                  <img src="assets/images/avatars/avatar5.png" class="avatar-circle" alt="">
                </div>
                <p class="message-item-user">Garrett Winters</p>
                <p class="message-item-msg">I have a new project for you</p>
                <p class="message-item-date">15:45 AM</p>
              </div>
            </a>
            <a href="#">
              <div class="message-item">
                <div class="message-user-img">
                  <img src="assets/images/avatars/avatar6.png" class="avatar-circle" alt="">
                </div>
                <p class="message-item-user">Herrod Chandler</p>
                <p class="message-item-msg">Hello! I'm available for this job</p>
                <p class="message-item-date">15:45 AM</p>
              </div>
            </a>
            <a href="#">
              <div class="message-item">
                <div class="message-user-img">
                  <img src="assets/images/avatars/avatar10.png" class="avatar-circle" alt="">
                </div>
                <p class="message-item-user">Jena Gaines</p>
                <p class="message-item-msg">I have a new project for you</p>
                <p class="message-item-date">15:45 AM</p>
              </div>
            </a>
            <a href="#">
              <div class="message-item">
                <div class="message-user-img">
                  <img src="assets/images/avatars/avatar2.png" class="avatar-circle" alt="">
                </div>
                <p class="message-item-user">Airi Satou</p>
                <p class="message-item-msg">I have a new project for you</p>
                <p class="message-item-date">15:45 AM</p>
              </div>
            </a>
            <a href="#">
              <div class="message-item">
                <div class="message-user-img">
                  <img src="assets/images/avatars/avatar10.png" class="avatar-circle" alt="">
                </div>
                <p class="message-item-user">Brielle Williamson</p>
                <p class="message-item-msg">I have a new project for you</p>
                <p class="message-item-date">15:45 AM</p>
              </div>
            </a>
          </div>

        </div>
        <div class="card-footer small text-muted">Updated today at 11:59 PM</div>
      </div>
      <!-- end card-->
    </div>

  </div>

@endsection()