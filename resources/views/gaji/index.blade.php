
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gaji | Puyuh.in</title>
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
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Gaji</h4>
                  Pembayaran Gaji Perbulan <br>
                  <a href="/gaji/pembayaran" class="btn btn-primary">Pembayaran</a>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Gaji</h4>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal / Bulan</th>
                        <th>Jumlah Gaji</th>
                        <th>Tools</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $index=1;
                      @endphp
                      @foreach($data_gaji as $gajis)
                      <tr align="center">
                        <td>{{ $index++}}</td>
                        <td>{{$gajis->tanggal}}</td>
                        <td>{{$gajis->jumlah_gaji}}</td>
                        <td><a class="btn btn-dark" href="/gaji/edit/{{ $gajis->id }}">Edit</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
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