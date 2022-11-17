<!--**********************************
            Sidebar start
***********************************-->
<div class="deznav">
  <div class="deznav-scroll">
      <div class="main-profile">
        @php
            $user = DB::table('users')->get()->first();
        @endphp
        <div class="image-bx">
          <img src="images/user.png" alt="">
          <a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
        </div>
        <h5 class="name"><span class="font-w400">Hello,</span> {{$user->name}}</h5>
        <p class="email">{{$user->email}}</p>
      </div>
      <ul class="metismenu" id="menu">
        <li class="nav-label first">Main Menu</li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
              <i class="flaticon-144-layout"></i>
              <span class="nav-text">Dashboard</span>
                </a>
            <ul aria-expanded="false">
              <li><a href="index.html">Dashboard Light</a></li>
              <li><a href="index-2.html">Dashboard Dark</a></li>
            </ul>
            </li>

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
              <i class="flaticon-120-diskette"></i>
              <span class="nav-text">Vehicle</span>
                </a>
            <ul aria-expanded="false">
              <li><a href="/vehicle">All Vehicle List</a></li>
              <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Status</a>
                <ul aria-expanded="false">
                  <li><a href="/vehicleavailable">Available</a></li>
                  <li><a href="/vehiclenotavailable">Not Available</a></li>
                </ul>
            </li>
            </ul>
            </li>

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
              <i class="flaticon-153-user"></i>
              <span class="nav-text">Driver</span>
                </a>
            <ul aria-expanded="false">
              <li><a href="/driver">All Driver List</a></li>
              <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Status</a>
                <ul aria-expanded="false">
                  <li><a href="/driveravailable">Available</a></li>
                  <li><a href="/drivernotavailable">Not Available</a></li>
                </ul>
            </li>  
            </ul>
            </li>

        <li class="nav-label">Vehicle Data</li>
          <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
          <i class="flaticon-092-money"></i>
            <span class="nav-text">Gas Data</span>
          </a>
                      <ul aria-expanded="false">
                        <li><a href="/gas">Overall This Month</a></li>
                      </ul>
                  </li>
        
                  <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <i class="flaticon-381-folder-9"></i>
            <span class="nav-text">Maintenance</span>
          </a>
                      <ul aria-expanded="false">
                          <li><a href="chart-flot.html">Flot</a></li>
                          <li><a href="chart-morris.html">Morris</a></li>
                      </ul>
                  </li>

                  <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-161-alarm"></i>
                    <span class="nav-text">Wreckage</span>
                  </a>
                              <ul aria-expanded="false">
                                  <li><a href="chart-flot.html">Flot</a></li>
                                  <li><a href="chart-morris.html">Morris</a></li>
                              </ul>
                          </li>
              </ul>

      <div class="copyright">
        <p><strong>Zenix Crypto Admin Dashboard</strong> © 2021 All Rights Reserved</p>
        <p class="fs-12">Made with <span class="heart"></span> by DexignZone</p>
      </div>
      
  </div>
</div>
<!--**********************************
          Sidebar end
***********************************-->