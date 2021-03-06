<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pendapatan | Puyuh.in</title>
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
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>
                                                <h1>Data Pendapatan</h1>
                                            </b>
                                        </div>
                                        <div class="col-md-6" >
                                            <h6>Tanggal : {{$date}}</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
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
                                            <div class="input-group-prepend">
                                                <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" required>
                                                <span class="input-group-text">Kg</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp.</span>
                                                <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" required>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-success mr-2" onclick="alert">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- TABEL PRODUKSI PERBULAN -->
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Pendapatan Harian</h4>
                                    <p class="card-description"> Per tanggal : <b>{{ $date }}</b> </p>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Tanggal</th>
                                                <th>Jumlah</th>
                                                <th>Harga</th>
                                                <th>Total</th>
                                                <th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $index=1;
                                            @endphp
                                            @foreach($data_pendapatan as $data)
                                            <tr align="center">
                                                <td>{{$index++}}</td>
                                                <td>{{$data->tanggal}}</td>
                                                <td>{{$data->jumlah}}</td>
                                                <td>Rp. {{ number_format($data->harga,2,",",".") }}</td>
                                                <td>Rp. {{$data->total}}</td>
                                                <td><a class="btn btn-dark" href="/pendapatan/edit/{{ $data->id }}">Edit</a>
                                                    <form action="{{ action('PendapatanHarianController@delete', $data->id)}}" method="POST">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="_method" type="hidden" value="DELETE">
                                                        <button class="btn btn-danger" onclick="window.alert('Apakah yakin akan menghapus data pendapatan?')" type="submit">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Pendapatan Perbulan /{{ $monthName }}</h4>
                                    <p class="card-description"> Per tanggal : <b>{{ $date }}</b> </p>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr align="center">
                                                <th>No.</th>
                                                <th>Tanggal</th>
                                                <th>Jumlah</th>
                                                <th>Harga</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $index=1;
                                            @endphp
                                            @foreach($pendapatanPerbulan as $dataPerbulan)
                                            <tr align="center">
                                                <td>{{$index++}}</td>
                                                <td>{{$dataPerbulan->tanggal}}</td>
                                                <td>{{$dataPerbulan->jumlah}}</td>
                                                <td>Rp. {{ number_format($dataPerbulan->harga,2,",",".") }}</td>
                                                <td>Rp. {{ number_format($dataPerbulan->total,2,",",".") }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body" style="overflow-y:auto;">
                                    <h4 class="card-title">Pendapatan Pertahun</h4>
                                    <p class="card-description"> Per tanggal : <b>{{ $date }}</b> </p>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Bulan</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $index=1;
                                            @endphp
                                            @foreach($pendapatanPertahun as $pertahun)
                                            <tr>
                                                <td>{{$index++}}</td>
                                                <td>{{$pertahun->bulan}} {{$pertahun->tahun}}</td>
                                                <td>Rp. {{ number_format($pertahun->total,2,",",".") }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END TABEL PRODUKSI PERBULAN -->
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