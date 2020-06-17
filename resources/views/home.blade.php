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
    @include('layouts.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.sidebar')
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
                          <h3 class="mb-0 font-weight-semibold">{{ $produksi }} Butir</h3>
                          <h5 class="mb-0 font-weight-medium text-primary">Telur</h5>
                        </div>
                        <div class="wrapper my-auto ml-auto ml-lg-4">
                          <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                      <div class="d-flex">
                        <div class="wrapper">
                          <h3 class="mb-0 font-weight-semibold">{{ $populasi}} Ekor</h3>
                          <h5 class="mb-0 font-weight-medium text-primary">Puyuh</h5>
                        </div>
                        <div class="wrapper my-auto ml-auto ml-lg-4">
                          <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                      <div class="d-flex">
                        <div class="wrapper">
                          <h3 class="mb-0 font-weight-semibold">Rp. {{ $pendapatanBersih}}</h3>
                          <h5 class="mb-0 font-weight-medium text-primary">Pendapatan Bersih</h5>
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
                  <h4 class="card-title mb-0">Kondisi Kandang Terkini</h4>
                  <div class="d-flex flex-column flex-lg-row">
                    <p>Grafik berdasarkan filter : </p>
                    <ul class="nav nav-tabs sales-mini-tabs ml-lg-auto mb-4 mb-md-0" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="sales-statistics_switch_1" data-toggle="tab" role="tab"
                          aria-selected="true">1 Hari</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="sales-statistics_switch_2" data-toggle="tab" role="tab"
                          aria-selected="false">1 Minggu</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="sales-statistics_switch_3" data-toggle="tab" role="tab"
                          aria-selected="false">1 Bulan</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="sales-statistics_switch_4" data-toggle="tab" role="tab"
                          aria-selected="false">1 Tahun</a>
                      </li>
                    </ul>
                  </div>
                  <div class="d-flex flex-column flex-lg-row">
                    <div class="data-wrapper d-flex mt-2 mt-lg-0">
                      <div class="wrapper pr-5">
                        <h5 class="mb-0">Total Pengeluaran</h5>
                        <div class="d-flex align-items-center">
                          <h4 class="font-weight-semibold mb-0">Rp. {{$pengeluaran}}</h4>
                          <!-- <small class="ml-2 text-gray d-none d-lg-block"><b>89.5%</b> of 20,000 Total</small> -->
                        </div>
                      </div>
                      <div class="wrapper">
                        <h5 class="mb-0">Total Pendapatan</h5>
                        <div class="d-flex align-items-center">
                          <h4 class="font-weight-semibold mb-0">Rp. {{ $pendapatan }}</h4>
                          <!-- <small class="ml-2 text-gray d-none d-lg-block"><b>10.5%</b> of 20,000 Total</small> -->
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