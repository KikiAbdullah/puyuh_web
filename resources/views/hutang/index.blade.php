<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hutang | Puyuh.in</title>
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
        @include('flash::message')
        <div class="content-wrapper">
          <div class="row">
            {{-- CICILAN BARU --}}
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <div class="wrapper">
                    <h4 class="card-title mb-0">Hutang</h4>
                    <p>Form Cicilan Baru</p>
                    <div class="mb-4" id="net-profit-legend"></div>
                  </div>
                  <form class="forms-sample" method="POST" action="{{ url('api/utang')}}">
                    @csrf
                    <div class="form-group">
                      <label for="cicilan_tetap">Cicilan Tetap</label>
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                        <input type="text" class="form-control" name="cicilan_tetap" id="cicilan_tetap" placeholder="Cicilan Tetap" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="periode_kurang">Periode</label>
                      <input type="number" class="form-control" name="periode_kurang" id="periode_kurang" placeholder="Periode" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mr-2" onclick="alert">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <div class="card-body">
                    <h4 class="card-title">Hutang</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Jumlah</th>
                          <th>Periode Sudah</th>
                          <th>Periode Belum</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data_utang as $sudahTerbayar)
                        <tr>
                          <td>{{$sudahTerbayar->id}}</td>
                          <td>Rp. {{ number_format($sudahTerbayar->cicilan_tetap,2,",",".") }}</td>
                          <td>{{$sudahTerbayar->periode_sudah}}</td>
                          <td>{{$sudahTerbayar->periode_kurang}}</td>
                          <td><a class="btn btn-dark" href="/hutang/edit/{{ $sudahTerbayar->id }}">Edit</a>
                            <a class="btn btn-primary" href="/hutang/pembayaran/{{ $sudahTerbayar->id }}" onClick='return confirm("Ingin membayar Hutang sebesar Rp. {{$sudahTerbayar->cicilan_tetap}} ")'>Pembayaran</a></td>
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
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <script>
    $('#flash-overlay-modal').modal();
  </script>
</body>

</html>