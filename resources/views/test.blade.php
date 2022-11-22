@extends('layouts.maintwo')

@section('content')

  <div class="container-fluid">
    <div class="card">
      <div class="card-header d-sm-flex d-block">
        <div class="mr-auto mb-sm-0 mb-3">
          <h4 class="card-title mb-2">User Listing</h4>
          <span>Lorem Ipsum sit amet</span>
        </div>
        <a href="javascript:void(0);" class="btn btn-info light mr-3"><i class="las la-download scale3 mr-2"></i>Import Csv</a>
        <a href="javascript:void(0);" class="btn btn-info">+ Add Customer</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table style-1" id="ListDatatableView">
            <thead>
              <tr>
                <th>#</th>
                <th>CUSTOMER</th>
                <th>COUNTRY</th>
                <th>DATE</th>
                <th>COMPANY NAME</th>
                <th>STATUS</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <h6>1.</h6>
                </td>
                <td>
                  <div class="media style-1">
                    <img src="images/avatar/1.jpg" class="img-fluid mr-2" alt="">
                    <div class="media-body">
                      <h6>John Doe</h6>
                      <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c060304020803092c0b010d0500420f0301">[email&#160;protected]</a></span>
                    </div>
                  </div>
                </td>
                <td>
                  <div>
                    <h6>England</h6>
                    <span>COde:En</span>
                  </div>
                </td>
                <td>
                  <div>
                    <h6 class="text-primary">10/21/2016</h6>
                    <span>Paid</span>
                  </div>
                </td>
                <td>
                  Abbott-Jacobs
                </td>
                <td><span class="badge badge-warning">Pending</span></td>
                <td>
                  <div class="d-flex action-button">
                    <a href="javascript:void(0);" class="btn btn-info btn-xs light px-2">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-danger">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>

                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <h6>2.</h6>
                </td>
                <td>
                  <div class="media style-1">
                    <span class="icon-name mr-2 bgl-success text-success">m</span>
                    <div class="media-body">
                      <h6>Martin Chuaks</h6>
                      <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f895998a8c91969b908d99938bb89f95999194d69b9795">[email&#160;protected]</a></span>
                    </div>
                  </div>
                </td>
                <td>
                  <div>
                    <h6>Indonasia</h6>
                    <span>COde:In</span>
                  </div>
                </td>
                <td>
                  <div>
                    <h6 class="text-primary">05/11/2016</h6>
                    <span>Pending</span>
                  </div>
                </td>
                <td>
                  Loyto-Farik
                </td>
                <td><span class="badge badge-danger">Danger</span></td>
                <td>
                  <div class="d-flex action-button">
                    <a href="javascript:void(0);" class="btn btn-info btn-xs light px-2">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-danger">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>

                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <h6>3.</h6>
                </td>
                <td>
                  <div class="media style-1">
                    <img src="images/avatar/2.jpg" class="img-fluid mr-2" alt="">
                    <div class="media-body">
                      <h6>Oliver Jean</h6>
                      <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1d7271746b786f77787c735d7a707c7471337e7270">[email&#160;protected]</a></span>
                    </div>
                  </div>
                </td>
                <td>
                  <div>
                    <h6>Malesia</h6>
                    <span>COde:Ml</span>
                  </div>
                </td>
                <td>
                  <div>
                    <h6 class="text-primary">08/15/2016</h6>
                    <span>Paid</span>
                  </div>
                </td>
                <td>
                  Uno-Matrics
                </td>
                <td><span class="badge badge-info">Info</span></td>
                <td>
                  <div class="d-flex action-button">
                    <a href="javascript:void(0);" class="btn btn-info btn-xs light px-2">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-danger">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>

                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <h6>4.</h6>
                </td>
                <td>
                  <div class="media style-1">
                    <img src="images/avatar/3.jpg" class="img-fluid mr-2" alt="">
                    <div class="media-body">
                      <h6>John Doe</h6>
                      <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="305a5f585e545f5570575d51595c1e535f5d">[email&#160;protected]</a></span>
                    </div>
                  </div>
                </td>
                <td>
                  <div>
                    <h6>England</h6>
                    <span>COde:En</span>
                  </div>
                </td>
                <td>
                  <div>
                    <h6 class="text-primary">11/05/2016</h6>
                    <span>Paid</span>
                  </div>
                </td>
                <td>
                  Walter-Cummings
                </td>
                <td><span class="badge badge-success">Success</span></td>
                <td>
                  <div class="d-flex action-button">
                    <a href="javascript:void(0);" class="btn btn-info btn-xs light px-2">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-danger">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>

                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <h6>5.</h6>
                </td>
                <td>
                  <div class="media style-1">
                    <span class="icon-name mr-2 bgl-info text-info">p</span>
                    <div class="media-body">
                      <h6>Post Melone</h6>
                      <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="30405f43445d555c5f5e5570575d51595c1e535f5d">[email&#160;protected]</a></span>
                    </div>
                  </div>
                </td>
                <td>
                  <div>
                    <h6>China</h6>
                    <span>COde:Ch</span>
                  </div>
                </td>
                <td>
                  <div>
                    <h6 class="text-primary">10/21/2016</h6>
                    <span>Approved</span>
                  </div>
                </td>
                <td>
                  Abbott-Jacobs
                </td>
                <td><span class="badge badge-danger">Danger</span></td>
                <td>
                  <div class="d-flex action-button">
                    <a href="javascript:void(0);" class="btn btn-info btn-xs light px-2">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-danger">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>

                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <h6>6.</h6>
                </td>
                <td>
                  <div class="media style-1">
                    <img src="images/avatar/5.jpg" class="img-fluid mr-2" alt="">
                    <div class="media-body">
                      <h6>Kevin Mandala</h6>
                      <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7f141a091611121e111b1e131e3f18121e1613511c1012">[email&#160;protected]</a></span>
                    </div>
                  </div>
                </td>
                <td>
                  <div>
                    <h6>Africa</h6>
                    <span>COde:Af</span>
                  </div>
                </td>
                <td>
                  <div>
                    <h6 class="text-primary">10/21/2016</h6>
                    <span>Pending</span>
                  </div>
                </td>
                <td>
                  Abbott-Jacobs
                </td>
                <td><span class="badge badge-danger">Canceled</span></td>
                <td>
                  <div class="d-flex action-button">
                    <a href="javascript:void(0);" class="btn btn-info btn-xs light px-2">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-danger">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>

                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <h6>7.</h6>
                </td>
                <td>
                  <div class="media style-1">
                    <span class="icon-name mr-2 bgl-danger text-danger">m</span>
                    <div class="media-body">
                      <h6>Mc. Kowalski</h6>
                      <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="076d686f6963686247606a666e6b2964686a">[email&#160;protected]</a></span>
                    </div>
                  </div>
                </td>
                <td>
                  <div>
                    <h6>England</h6>
                    <span>COde:En</span>
                  </div>
                </td>
                <td>
                  <div>
                    <h6 class="text-primary">10/21/2016</h6>
                    <span>Paid</span>
                  </div>
                </td>
                <td>
                  Abbott-Jacobs
                </td>
                <td><span class="badge badge-warning">Pending</span></td>
                <td>
                  <div class="d-flex action-button">
                    <a href="javascript:void(0);" class="btn btn-info btn-xs light px-2">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-danger">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>

                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <h6>8.</h6>
                </td>
                <td>
                  <div class="media style-1">
                    <img src="images/avatar/7.jpg" class="img-fluid mr-2" alt="">
                    <div class="media-body">
                      <h6>John Doe</h6>
                      <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f19b9e999f959e94b1969c90989ddf929e9c">[email&#160;protected]</a></span>
                    </div>
                  </div>
                </td>
                <td>
                  <div>
                    <h6>England</h6>
                    <span>COde:En</span>
                  </div>
                </td>
                <td>
                  <div>
                    <h6 class="text-primary">10/21/2016</h6>
                    <span>Paid</span>
                  </div>
                </td>
                <td>
                  Dare-Conn
                </td>
                <td><span class="badge badge-warning">Pending</span></td>
                <td>
                  <div class="d-flex action-button">
                    <a href="javascript:void(0);" class="btn btn-info btn-xs light px-2">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-danger">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>

                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <h6>9.</h6>
                </td>
                <td>
                  <div class="media style-1">
                    <span class="icon-name mr-2 bgl-warning text-warning">t</span>
                    <div class="media-body">
                      <h6>Thomas Djons</h6>
                      <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="44302c2b292537202e2b2a37042329252d286a272b29">[email&#160;protected]</a></span>
                    </div>
                  </div>
                </td>
                <td>
                  <div>
                    <h6>England</h6>
                    <span>COde:En</span>
                  </div>
                </td>
                <td>
                  <div>
                    <h6 class="text-primary">10/21/2016</h6>
                    <span>Paid</span>
                  </div>
                </td>
                <td>
                  Abbott-Jacobs
                </td>
                <td><span class="badge badge-info">Info</span></td>
                <td>
                  <div class="d-flex action-button">
                    <a href="javascript:void(0);" class="btn btn-info btn-xs light px-2">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-danger">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>

                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <h6>10.</h6>
                </td>
                <td>
                  <div class="media style-1">
                    <img src="images/avatar/8.jpg" class="img-fluid mr-2" alt="">
                    <div class="media-body">
                      <h6>Chintya Laudia</h6>
                      <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="294a4140475d504845485c4d4048694e44484045074a4644">[email&#160;protected]</a></span>
                    </div>
                  </div>
                </td>
                <td>
                  <div>
                    <h6>England</h6>
                    <span>COde:En</span>
                  </div>
                </td>
                <td>
                  <div>
                    <h6 class="text-primary">10/21/2016</h6>
                    <span>Paid</span>
                  </div>
                </td>
                <td>
                  Abbott-Jacobs
                </td>
                <td><span class="badge badge-danger">Danger</span></td>
                <td>
                  <div class="d-flex action-button">
                    <a href="javascript:void(0);" class="btn btn-info btn-xs light px-2">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-danger">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>

                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <h6>11.</h6>
                </td>
                <td>
                  <div class="media style-1">
                    <img src="images/avatar/1.jpg" class="img-fluid mr-2" alt="">
                    <div class="media-body">
                      <h6>Yonna</h6>
                      <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="255c4a4b4b44654248444c490b464a48">[email&#160;protected]</a></span>
                    </div>
                  </div>
                </td>
                <td>
                  <div>
                    <h6>England</h6>
                    <span>COde:En</span>
                  </div>
                </td>
                <td>
                  <div>
                    <h6 class="text-primary">10/21/2016</h6>
                    <span>Paid</span>
                  </div>
                </td>
                <td>
                  Dare-Conn
                </td>
                <td><span class="badge badge-warning">Pending</span></td>
                <td>
                  <div class="d-flex action-button">
                    <a href="javascript:void(0);" class="btn btn-info btn-xs light px-2">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-danger">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>

                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <h6>12.</h6>
                </td>
                <td>
                  <div class="media style-1">
                    <span class="icon-name mr-2 bgl-success text-success">r</span>
                    <div class="media-body">
                      <h6>Roberto Cr.</h6>
                      <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f2d303d3a2d2b301f38323e3633713c3032">[email&#160;protected]</a></span>
                    </div>
                  </div>
                </td>
                <td>
                  <div>
                    <h6>England</h6>
                    <span>COde:En</span>
                  </div>
                </td>
                <td>
                  <div>
                    <h6 class="text-primary">10/21/2016</h6>
                    <span>Paid</span>
                  </div>
                </td>
                <td>
                  Abbott-Jacobs
                </td>
                <td><span class="badge badge-warning">Pending</span></td>
                <td>
                  <div class="d-flex action-button">
                    <a href="javascript:void(0);" class="btn btn-info btn-xs light px-2">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-danger">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>

                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <h6>13.</h6>
                </td>
                <td>
                  <div class="media style-1">
                    <img src="images/avatar/1.jpg" class="img-fluid mr-2" alt="">
                    <div class="media-body">
                      <h6>Tonni Sblak</h6>
                      <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c4b0abaaaaadb7a6a8a5af84a3a9a5ada8eaa7aba9">[email&#160;protected]</a></span>
                    </div>
                  </div>
                </td>
                <td>
                  <div>
                    <h6>England</h6>
                    <span>COde:En</span>
                  </div>
                </td>
                <td>
                  <div>
                    <h6 class="text-primary">10/21/2016</h6>
                    <span>Paid</span>
                  </div>
                </td>
                <td>
                  Abbott-Jacobs
                </td>
                <td><span class="badge badge-warning">Pending</span></td>
                <td>
                  <div class="d-flex action-button">
                    <a href="javascript:void(0);" class="btn btn-info btn-xs light px-2">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-danger">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>

                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <h6>14.</h6>
                </td>
                <td>
                  <div class="media style-1">
                    <span class="icon-name mr-2 bgl-danger text-danger">k</span>
                    <div class="media-body">
                      <h6>Keanu Repes</h6>
                      <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5d36383c33282f382d382e1d3a303c3431733e3230">[email&#160;protected]</a></span>
                    </div>
                  </div>
                </td>
                <td>
                  <div>
                    <h6>England</h6>
                    <span>COde:En</span>
                  </div>
                </td>
                <td>
                  <div>
                    <h6 class="text-primary">10/21/2016</h6>
                    <span>Paid</span>
                  </div>
                </td>
                <td>
                  Abbott-Jacobs
                </td>
                <td><span class="badge badge-warning">Pending</span></td>
                <td>
                  <div class="d-flex action-button">
                    <a href="javascript:void(0);" class="btn btn-info btn-xs light px-2">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-danger">
                      <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>

                    </a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection
