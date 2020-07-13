<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kas | Puyuh.in</title>
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
          @include('flash::message')
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body" style="overflow-x:auto;">
                  <h4 class="card-title">Kas Bulan Ini</h4>
                  <table class="table table-fixed">
                    <thead>
                      <tr>
                        <th >No.</th>
                        <th >Tanggal / Bulan</th>
                        <th >Total</th>
                      </tr>
                    </thead>
                    <tbody style="overflow-y:auto;">
                      @php
                      $index=1;
                      @endphp
                      @foreach ($data_kas as $item)
                      <tr>
                        <td>{{ $index++ }}</td>
                        <td>{{$item->tanggal}}</td>
                        <td>Rp. {{$item->total_kas}}</td>
                        <td><a class="btn btn-dark" href="/kas/edit/{{ $item->id }}">Edit</a>
                          <form action="{{ action('KasController@delete', $item->id)}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" onclick="window.alert('Apakah yakin akan menghapus data kas?')" type="submit">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body" style="overflow-x:auto;">
                  <h4 class="card-title">Kas Pertahun</h4>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Tahun</th>
                        <th>Total Uang Kas</th>
                      </tr>
                    </thead>
                    <tbody style="overflow-y:auto;">
                      @php
                      $index=1;
                      @endphp
                      @foreach ($kas_pertahun as $item)
                      <tr>
                        <td>{{ $index++ }}</td>
                        <td>{{$item->tahun}}</td>
                        <td>Rp. {{$item->total}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kas</h4>
                  <form class="forms-sample" method="POST" action="{{url('api/kas')}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="POST">
                    <div class="form-group">
                      <label for="tanggal">Form Pemasukan Kas</label>
                    </div>
                    <div class="form-group">
                      <label for="kas">Nilai Kas</label>
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                        <input type="hidden" name="tanggal" id="tanggal" value="{{$date}}" required />
                        <input type="text" class="form-control" name="total_kas" id="total_kas" required />
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
  <!-- If using flash()->important() or flash()->overlay(), you'll need to pull in the JS for Twitter Bootstrap. -->
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <script>
    $('#flash-overlay-modal').modal();
  </script>
</body>

</html>