<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Pendapatan | Puyuh.in</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        @include('layouts.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            @include('layouts.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                <div class="card-body d-flex flex-column">
                  <div class="wrapper">
                    <h4 class="card-title mb-0">Pendapatan</h4>
                    <p>Form Pendapatan</p>
                    <div class="mb-4" id="net-profit-legend"></div>
                  </div>
                  <form class="forms-sample" method="POST" action="{{ url('api/pendapatanHarian')}}">
                    @csrf
                    <div class="form-group">
                      <label for="jumlah">Jumlah</label>
                      <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah Pendapatan">
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga</label>
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                        <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="total">Total</label>
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                        <input type="text" class="form-control" name="total" id="total" placeholder="Total">
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mr-2" onclick="alert">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
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
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../../assets/js/shared/off-canvas.js"></script>
    <script src="../../../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>

</html>