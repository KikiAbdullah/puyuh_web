@if (session('alert'))
<div class="alert alert-success">
  {{ session('alert') }}
</div>
@endif

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Puyuh.in</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/css/ionicons.css">
  <link rel="stylesheet" href="../assets/vendors/iconfonts/typicons/src/font/typicons.css">
  <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/css/shared/style.css">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/demo_1/style.css">
  <!-- End Layout styles -->
  <link rel="shortcut icon" href="../assets/images/favicon.ico" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">



  <link rel="stylesheet" type="text/css" href="/pathto/css/sweetalert.css">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="../assets/images/logo.svg" alt="logo" height="80%" /> </a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('home')}}">
          <img src="../assets/images/logo-mini.svg" alt="logo" /> </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="font-weight-light small-text"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                  <p class="font-weight-light small-text"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                  <p class="font-weight-light small-text"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-email-outline"></i>
              <span class="count bg-success">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                  <p class="font-weight-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                  <p class="font-weight-light small-text mb-0"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                  <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
              </div>
              <a class="dropdown-item" href="{{ route('profile') }}">My Profile<i class="dropdown-item-icon ti-dashboard"></i></a>
              <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
              <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
              <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
              <a class="dropdown-item" href="{{ route('logout') }}">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-category">Main Menu</li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home')}}">
              <i class="menu-icon typcn typcn-document-text"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#kandang-tab" aria-expanded="false" aria-controls="kandang-tab">
              <i class="menu-icon typcn typcn-coffee"></i>
              <span class="menu-title">Kandang</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="kandang-tab">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="/produksi">Produksi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/populasi">Populasi</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#pendapatan-tab" aria-expanded="false" aria-controls="pendapatan-tab">
              <i class="menu-icon typcn typcn-coffee"></i>
              <span class="menu-title">Pendapatan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="pendapatan-tab">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="/pendapatanPerhari">Pendapatan Perhari</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/pendapatanPerbulan">Pendapatan Perbulan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/pendapatanBersih">Pendapatan Bersih</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#pengeluaran-tab" aria-expanded="false" aria-controls="pengeluaran-tab">
              <i class="menu-icon typcn typcn-coffee"></i>
              <span class="menu-title">Pengeluaran</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="pengeluaran-tab">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="/pengeluaranHarian">Pengeluaran Perhari</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/pengeluaranPerbulan">Pengeluaran Perbulan</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kas">
              <i class="menu-icon typcn typcn-document-text"></i>
              <span class="menu-title">Kas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/hutang">
              <i class="menu-icon typcn typcn-document-text"></i>
              <span class="menu-title">Hutang</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/gaji">
              <i class="menu-icon typcn typcn-document-text"></i>
              <span class="menu-title">Gaji</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4 col-md-6">
                      <div class="d-flex">
                        <div class="wrapper">
                          <h3 class="mb-0 font-weight-semibold">32,451</h3>
                          <h5 class="mb-0 font-weight-medium text-primary">Telur</h5>
                          <p class="mb-0 text-muted">+14.00(+0.50%)</p>
                        </div>
                        <div class="wrapper my-auto ml-auto ml-lg-4">
                          <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                      <div class="d-flex">
                        <div class="wrapper">
                          <h3 class="mb-0 font-weight-semibold">15,236</h3>
                          <h5 class="mb-0 font-weight-medium text-primary">Populasi</h5>
                          <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                        </div>
                        <div class="wrapper my-auto ml-auto ml-lg-4">
                          <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                      <div class="d-flex">
                        <div class="wrapper">
                          <h3 class="mb-0 font-weight-semibold">Rp. 1.7475.450</h3>
                          <h5 class="mb-0 font-weight-medium text-primary">Pendapatan Bersih Total</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Sales Statistics Overview</h4>
                  <div class="d-flex flex-column flex-lg-row">
                    <p>Lorem ipsum is placeholder text commonly used</p>
                    <ul class="nav nav-tabs sales-mini-tabs ml-lg-auto mb-4 mb-md-0" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="sales-statistics_switch_1" data-toggle="tab" role="tab" aria-selected="true">1D</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="sales-statistics_switch_2" data-toggle="tab" role="tab" aria-selected="false">5D</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="sales-statistics_switch_3" data-toggle="tab" role="tab" aria-selected="false">1M</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="sales-statistics_switch_4" data-toggle="tab" role="tab" aria-selected="false">1Y</a>
                      </li>
                    </ul>
                  </div>
                  <div class="d-flex flex-column flex-lg-row">
                    <div class="data-wrapper d-flex mt-2 mt-lg-0">
                      <div class="wrapper pr-5">
                        <h5 class="mb-0">Total Cost</h5>
                        <div class="d-flex align-items-center">
                          <h4 class="font-weight-semibold mb-0">15,263</h4>
                          <small class="ml-2 text-gray d-none d-lg-block"><b>89.5%</b> of 20,000 Total</small>
                        </div>
                      </div>
                      <div class="wrapper">
                        <h5 class="mb-0">Total Revenue</h5>
                        <div class="d-flex align-items-center">
                          <h4 class="font-weight-semibold mb-0">$753,098</h4>
                          <small class="ml-2 text-gray d-none d-lg-block"><b>10.5%</b> of 20,000 Total</small>
                        </div>
                      </div>
                    </div>
                    <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                  </div>
                  <canvas class="mt-5" height="120" id="sales-statistics-overview"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <div class="wrapper">
                    <h4 class="card-title mb-0">Pengeluaran</h4>
                    <p>Form Pengeluaran Operasional</p>
                    <div class="mb-4" id="net-profit-legend"></div>
                  </div>
                  <form class="forms-sample" method="POST" action="{{ url('api/pengeluaranHarian')}}">
                    @csrf
                    <div class="form-group">
                      <label for="nama_pengeluaran">Nama Pengeluaran</label>
                      <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Pengeluaran">
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga</label>
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                        <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
                      </div>

                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-6">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah">
                          </div>
                          <div class="col-md-6">
                            <label for="satuan">Satuan</label>
                            <input type="text" class="form-control" name="satuan" id="satuan" placeholder="Satuan">
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mr-2" onclick="alert">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body pb-0">
                      <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Total Revenue</h4>
                        <p class="font-weight-semibold mb-0">+1.37%</p>
                      </div>
                      <h3 class="font-weight-medium mb-4">184.42K</h3>
                    </div>
                    <canvas class="mt-n4" height="90" id="total-revenue"></canva>
                  </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body pb-0">
                      <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Transaction</h4>
                        <p class="font-weight-semibold mb-0">-2.87%</p>
                      </div>
                      <h3 class="font-weight-medium">147.7K</h3>
                    </div>
                    <canvas class="mt-n3" height="90" id="total-transaction"></canva>
                  </div>
                </div>
                <div class="col-md-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title mb-0">Market Overview</h4>
                      <div class="d-flex align-items-center justify-content-between w-100">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="dropdown">
                          <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dateSorter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">This Month</button>
                          <div class="dropdown-menu" aria-labelledby="dateSorter">
                            <div class="dropdown-item" id="market-overview_1">Daily</div>
                            <div class="dropdown-item" id="market-overview_2">Weekly</div>
                            <div class="dropdown-item" id="market-overview_3">Monthly</div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex align-items-end">
                        <h3 class="mb-0 font-weight-semibold">$36,2531.00</h3>
                        <p class="mb-0 font-weight-medium mr-2 ml-2 mb-1">USD</p>
                        <p class="mb-0 text-success font-weight-semibold mb-1">(+1.37%)</p>
                      </div>
                      <canvas class="mt-4" height="100" id="market-overview-chart"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Invoice</h4>
                        <a href="#"><small>Show All</small></a>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quod cupiditate esse fuga</p>
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>Invoice ID</th>
                              <th>Customer</th>
                              <th>Status</th>
                              <th>Due Date</th>
                              <th>Amount</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>INV-87239</td>
                              <td>Viola Ford</td>
                              <td>Paid</td>
                              <td>20 Jan 2019</td>
                              <td>$755</td>
                            </tr>
                            <tr>
                              <td>INV-87239</td>
                              <td>Dylan Waters</td>
                              <td>Unpaid</td>
                              <td>23 Feb 2019</td>
                              <td>$800</td>
                            </tr>
                            <tr>
                              <td>INV-87239</td>
                              <td>Louis Poole</td>
                              <td>Unpaid</td>
                              <td>25 Mar 2019</td>
                              <td>$463</td>
                            </tr>
                            <tr>
                              <td>INV-87239</td>
                              <td>Vera Howell</td>
                              <td>Paid</td>
                              <td>27 Mar 2019</td>
                              <td>$235</td>
                            </tr>
                            <tr>
                              <td>INV-87239</td>
                              <td>Allie Goodman</td>
                              <td>Unpaid</td>
                              <td>1 Apr 2019</td>
                              <td>$657</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="d-flex align-items-center pb-2">
                            <div class="dot-indicator bg-danger mr-2"></div>
                            <p class="mb-0">Total Sales</p>
                          </div>
                          <h4 class="font-weight-semibold">$7,590</h4>
                          <div class="progress progress-md">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                          </div>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                          <div class="d-flex align-items-center pb-2">
                            <div class="dot-indicator bg-success mr-2"></div>
                            <p class="mb-0">Active Users</p>
                          </div>
                          <h4 class="font-weight-semibold">$5,460</h4>
                          <div class="progress progress-md">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card average-price-card">
                  <div class="card text-white">
                    <div class="card-body">
                      <div class="d-flex justify-content-between pb-2 align-items-center">
                        <h2 class="font-weight-semibold mb-0">4,624</h2>
                        <div class="icon-holder">
                          <i class="mdi mdi-briefcase-outline"></i>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between">
                        <h5 class="font-weight-semibold mb-0">Average Price</h5>
                        <p class="text-white mb-0">Since last month</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h1 class="card-title mb-4">Website Audience Metrics</h1>
                      <div class="row">
                        <div class="col-5 col-md-5">
                          <div class="wrapper border-bottom mb-2 pb-2">
                            <h4 class="font-weight-semibold mb-0">523,200</h4>
                            <div class="d-flex align-items-center">
                              <p class="mb-0">Page Views</p>
                              <div class="dot-indicator bg-secondary ml-auto"></div>
                            </div>
                          </div>
                          <div class="wrapper">
                            <h4 class="font-weight-semibold mb-0">753,098</h4>
                            <div class="d-flex align-items-center">
                              <p class="mb-0">Bounce Rate</p>
                              <div class="dot-indicator bg-primary ml-auto"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-5 col-md-7 d-flex pl-4">
                          <div class="ml-auto">
                            <canvas height="100" id="realtime-statistics"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-5">
                        <div class="col-6">
                          <div class="d-flex align-items-center mb-2">
                            <div class="icon-holder bg-primary text-white py-1 px-3 rounded mr-2">
                              <i class="icon ion-logo-buffer icon-sm"></i>
                            </div>
                            <h2 class="font-weight-semibold mb-0">3,605</h2>
                          </div>
                          <p>Since last week</p>
                          <p><span class="font-weight-medium">0.51%</span> (30 days)</p>
                        </div>
                        <div class="col-6">
                          <div class="mt-n3 ml-auto" id="dashboard-guage-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title mb-4">World sellings</h4>
                      <div id="dashboard-vmap" class="vector-map"></div>
                      <div class="wrapper">
                        <div class="d-flex w-100 pt-2 mt-4">
                          <p class="mb-0 font-weight-semibold">California</p>
                          <div class="wrapper ml-auto d-flex align-items-center">
                            <p class="font-weight-semibold mb-0">26,437</p>
                            <p class="ml-1 mb-0">26%</p>
                          </div>
                        </div>
                        <div class="d-flex w-100 pt-2">
                          <p class="mb-0 font-weight-semibold">Washington</p>
                          <div class="wrapper ml-auto d-flex align-items-center">
                            <p class="font-weight-semibold mb-0">3252</p>
                            <p class="ml-1 mb-0">64%</p>
                          </div>
                        </div>
                        <div class="d-flex w-100 pt-2">
                          <p class="mb-0 font-weight-semibold">Michigan</p>
                          <div class="wrapper ml-auto d-flex align-items-center">
                            <p class="font-weight-semibold mb-0">4,987</p>
                            <p class="ml-1 mb-0">30%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title mb-0">Top Performer</h4>
                      <div class="d-flex mt-3 py-2 border-bottom">
                        <img class="img-sm rounded-circle" src="../assets/images/faces/face3.jpg" alt="profile image">
                        <div class="wrapper ml-2">
                          <p class="mb-n1 font-weight-semibold">Ray Douglas</p>
                          <small>162543</small>
                        </div>
                        <small class="text-muted ml-auto">1 Hours ago</small>
                      </div>
                      <div class="d-flex py-2 border-bottom">
                        <span class="img-sm rounded-circle bg-warning text-white text-avatar">OH</span>
                        <div class="wrapper ml-2">
                          <p class="mb-n1 font-weight-semibold">Ora Hill</p>
                          <small>162543</small>
                        </div>
                        <small class="text-muted ml-auto">4 Hours ago</small>
                      </div>
                      <div class="d-flex py-2 border-bottom">
                        <img class="img-sm rounded-circle" src="../assets/images/faces/face4.jpg" alt="profile image">
                        <div class="wrapper ml-2">
                          <p class="mb-n1 font-weight-semibold">Brian Dean</p>
                          <small>162543</small>
                        </div>
                        <small class="text-muted ml-auto">4 Hours ago</small>
                      </div>
                      <div class="d-flex pt-2">
                        <span class="img-sm rounded-circle bg-success text-white text-avatar">OB</span>
                        <div class="wrapper ml-2">
                          <p class="mb-n1 font-weight-semibold">Olive Bridges</p>
                          <small>162543</small>
                        </div>
                        <small class="text-muted ml-auto">7 Hours ago</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Recent Events</h4>
                  <div class="d-flex py-2 border-bottom">
                    <div class="wrapper">
                      <small class="text-muted">Mar 14, 2019</small>
                      <p class="font-weight-semibold text-gray mb-0">Change in Directors</p>
                    </div>
                    <small class="text-muted ml-auto">Edit event</small>
                  </div>
                  <div class="d-flex py-2 border-bottom">
                    <div class="wrapper">
                      <small class="text-muted">Mar 14, 2019</small>
                      <p class="font-weight-semibold text-gray mb-0">Other Events</p>
                    </div>
                    <small class="text-muted ml-auto">Edit event</small>
                  </div>
                  <div class="d-flex py-2 border-bottom">
                    <div class="wrapper">
                      <small class="text-muted">Mar 14, 2019</small>
                      <p class="font-weight-semibold text-gray mb-0">Quarterly Report</p>
                    </div>
                    <small class="text-muted ml-auto">Edit event</small>
                  </div>
                  <div class="d-flex pt-2">
                    <div class="wrapper">
                      <small class="text-muted">Mar 14, 2019</small>
                      <p class="font-weight-semibold text-gray mb-0">Change in Directors</p>
                    </div>
                    <small class="text-muted ml-auto">Edit event</small>
                  </div>
                  <a class="d-block mt-5" href="#">Show all</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between pb-3">
                    <h4 class="card-title mb-0">Activities</h4>
                    <p class="mb-0 text-muted">20 finished, 5 remaining</p>
                  </div>
                  <ul class="timeline">
                    <li class="timeline-item">
                      <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                      <p class="event-time">Just now</p>
                    </li>
                    <li class="timeline-item">
                      <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                      <p class="event-time">Just now</p>
                    </li>
                    <li class="timeline-item">
                      <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                      <p class="event-time">Just now</p>
                    </li>
                    <li class="timeline-item">
                      <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                      <p class="event-time">Just now</p>
                    </li>
                    <li class="timeline-item">
                      <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                      <p class="event-time">Just now</p>
                    </li>
                  </ul>
                  <a class="d-block mt-3" href="#">Show all</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">People Also Watch</h4>
                  <div class="table-responsive">
                    <table class="table table-stretched">
                      <thead>
                        <tr>
                          <th>Symbol</th>
                          <th>Last Price</th>
                          <th>Change</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <p class="mb-1 text-dark font-weight-medium">NFLX</p><small class="font-weight-medium">Netflix, Inc.</small>
                          </td>
                          <td class="font-weight-medium">$250.00</td>
                          <td class="text-success font-weight-medium">+12.64</td>
                        </tr>
                        <tr>
                          <td>
                            <p class="mb-1 text-dark font-weight-medium">TSLA</p><small class="font-weight-medium">Tesla, Inc.</small>
                          </td>
                          <td class="font-weight-medium">$458.00</td>
                          <td class="text-danger font-weight-medium">-14.53</td>
                        </tr>
                        <tr>
                          <td>
                            <p class="mb-1 text-dark font-weight-medium">GOOG</p><small class="font-weight-medium">Alphabet, Inc.</small>
                          </td>
                          <td class="font-weight-medium">$250.00</td>
                          <td class="text-danger font-weight-medium">+12.64</td>
                        </tr>
                        <tr>
                          <td>
                            <p class="mb-1 text-dark font-weight-medium">AMZN</p><small class="font-weight-medium">Amazon.com, Inc.</small>
                          </td>
                          <td class="font-weight-medium">$546.00</td>
                          <td class="text-success font-weight-medium">+24.34</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <a class="d-block mt-3" href="#">Show all</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../assets/js/shared/off-canvas.js"></script>
  <script src="../assets/js/shared/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../assets/js/demo_1/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script src="/pathto/js/sweetalert.js"></script>
  @include('sweet::alert')
</body>

</html>