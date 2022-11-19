@extends('layouts.main')

@section('title' , 'Vehicle')
@section('heading' , 'Vehicle List')
@section('breadcrumb' , 'Vehicle List')

@section('content')

<div class="container-fluid">
            <!-- Add Project -->
            <div class="modal fade" id="addProjectSidebar">
                  <div class="modal-dialog" role="document">
                        <div class="modal-content">
                              <div class="modal-header">
                                    <h5 class="modal-title">Create Project</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                              </div>
                              <div class="modal-body">
                                    <form>
                                          <div class="form-group">
                                                <label class="text-black font-w500">Project Name</label>
                                                <input type="text" class="form-control">
                                          </div>
                                          <div class="form-group">
                                                <label class="text-black font-w500">Deadline</label>
                                                <input type="date" class="form-control">
                                          </div>
                                          <div class="form-group">
                                                <label class="text-black font-w500">Client Name</label>
                                                <input type="text" class="form-control">
                                          </div>
                                          <div class="form-group">
                                                <button type="button" class="btn btn-primary">CREATE</button>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <p class="mb-0">Your business dashboard template</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
            </ol>
        </div>
    </div>
      <div class="row">
            <div class="col-lg-12 mx-auto">

                <div class="card mt-3">
                    <div class="card-header"> Invoice <strong>01/01/01/2018</strong> <span class="float-right">
                            <strong>Status:</strong> Pending</span> </div>
                    <div class="card-body">
                        <div class="row mb-5">
                            <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <h6>From:</h6>
                                <div> <strong>Webz Poland</strong> </div>
                                <div>Madalinskiego 8</div>
                                <div>71-101 Szczecin, Poland</div>
                                <div>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e68f888089a69183849cc885898bc8968a">[email&#160;protected]</a></div>
                                <div>Phone: +48 444 666 3333</div>
                            </div>
                            <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <h6>To:</h6>
                                <div> <strong>Bob Mart</strong> </div>
                                <div>Attn: Daniel Marek</div>
                                <div>43-190 Mikolow, Poland</div>
                                <div>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="204d4152454b6044414e49454c0e434f4d">[email&#160;protected]</a></div>
                                <div>Phone: +48 123 456 789</div>
                            </div>
                            <div class="mt-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-xs-start">
                                <div class="row align-items-center">
                                                          <div class="col-sm-9"> 
                                                                <div class="brand-logo mb-3">
                                                                      <img class="logo-abbr mr-2" width="50" src="images/logo.png" alt="">
                                                                      <img class="logo-compact" width="110" src="images/logo-text.png" alt="">
                                                                </div>
                                        <span>Please send exact amount: <strong class="d-block">0.15050000 BTC</strong>
                                            <strong>1DonateWffyhwAjskoEwXt83pHZxhLTr8H</strong></span><br>
                                        <small class="text-muted">Current exchange rate 1BTC = $6590 USD</small>
                                    </div>
                                    <div class="col-sm-3 mt-3"> <img src="images/qr.png" alt="" class="img-fluid width110"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        <th>Item</th>
                                        <th>Description</th>
                                        <th class="right">Unit Cost</th>
                                        <th class="center">Qty</th>
                                        <th class="right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="center">1</td>
                                        <td class="left strong">Origin License</td>
                                        <td class="left">Extended License</td>
                                        <td class="right">$999,00</td>
                                        <td class="center">1</td>
                                        <td class="right">$999,00</td>
                                    </tr>
                                    <tr>
                                        <td class="center">2</td>
                                        <td class="left">Custom Services</td>
                                        <td class="left">Instalation and Customization (cost per hour)</td>
                                        <td class="right">$150,00</td>
                                        <td class="center">20</td>
                                        <td class="right">$3.000,00</td>
                                    </tr>
                                    <tr>
                                        <td class="center">3</td>
                                        <td class="left">Hosting</td>
                                        <td class="left">1 year subcription</td>
                                        <td class="right">$499,00</td>
                                        <td class="center">1</td>
                                        <td class="right">$499,00</td>
                                    </tr>
                                    <tr>
                                        <td class="center">4</td>
                                        <td class="left">Platinum Support</td>
                                        <td class="left">1 year subcription 24/7</td>
                                        <td class="right">$3.999,00</td>
                                        <td class="center">1</td>
                                        <td class="right">$3.999,00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5"> </div>
                            <div class="col-lg-4 col-sm-5 ml-auto">
                                <table class="table table-clear">
                                    <tbody>
                                        <tr>
                                            <td class="left"><strong>Subtotal</strong></td>
                                            <td class="right">$8.497,00</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>Discount (20%)</strong></td>
                                            <td class="right">$1,699,40</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>VAT (10%)</strong></td>
                                            <td class="right">$679,76</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>Total</strong></td>
                                            <td class="right"><strong>$7.477,36</strong><br>
                                                <strong>0.15050000 BTC</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection