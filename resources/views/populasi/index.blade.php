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
    <title>Kandang | Puyuh.in</title>
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

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">



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
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h4 class="card-title">Populasi Kandang</h4>
                                            <p class="card-description"> Per tanggal : <b>{{ $date }}</b> </p>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-success mr-2" data-toggle="modal"
                                                data-target="#addKandangModal">
                                                Tambah Kandang
                                            </button>

                                            <div class="modal fade" id="addKandangModal" tabindex="-1" role="dialog"
                                                aria-labelledby="addKandangModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="addKandangModalLabel">Tambah
                                                                Kandang</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form class="forms-sample" method="POST" action="/api/kandang">
                                                            @csrf
                                                            <div class="modal-body">

                                                                <div class="form-group">
                                                                    <label for="noKandang">No. Kandang</label>
                                                                    <input type="text" class="form-control"
                                                                        name="no_kandang" id="no_kandang"
                                                                        placeholder="Nomor Kandang" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="jumlahTernak">Jumlah Ternak</label>
                                                                    <div class="input-group-prepend">
                                                                        <input type="text" class="form-control"
                                                                            name="jumlah_ternak" id="jumlah_ternak"
                                                                            placeholder="Jumlah Ternak" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light"
                                                                    data-dismiss="modal">Close </button>
                                                                <button type="submit" name="submit"
                                                                    class="btn btn-success mr-2"
                                                                    onclick="alert">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr align="center">
                                                <th>No. Kandang</th>
                                                <th>Jumlah</th>
                                                <th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $index=1;
                                            @endphp
                                            @foreach($all_kandang as $kandangs)
                                            <tr align="center">
                                                <td>{{$kandangs->id}}</td>
                                                <td>{{$kandangs->jumlah_ternak}}</td>
                                                <td><a class="btn btn-dark"
                                                        href="/populasi/edit-kandang/{{ $kandangs->id }}">Edit</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jumlah Kematian /{{ $monthName }}</h4>
                                    <p class="card-description"> Per tanggal : <b>{{ $date }}</b> </p>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr align="center">
                                                <th>No. Kandang</th>
                                                <th>Tanggal</th>
                                                <th>Jumlah</th>
                                                <th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach($populasiPerbulan as $populasi)
                                            <tr align="center">
                                                <td>{{$populasi->no_kandang}}</td>
                                                <td>{{$populasi->tanggal}}</td>
                                                <td>{{$populasi->jumlah_kematian}}</td>
                                                <td><a class="btn btn-dark"
                                                        href="/populasi/edit-kematian/{{ $populasi->id }}">Edit</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body" style="overflow-x:auto;">
                                    <h4 class="card-title">Kematian Pertahun</h4>
                                    <p class="card-description"> Per tanggal : <b>{{ $date }}</b> </p>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr align="center">
                                                <th>No Kandang.</th>
                                                <th>Januari</th>
                                                <th>Februari</th>
                                                <th>Maret</th>
                                                <th>April</th>
                                                <th>Mei</th>
                                                <th>Juni</th>
                                                <th>Juli</th>
                                                <th>Agustus</th>
                                                <th>September</th>
                                                <th>Oktober</th>
                                                <th>November</th>
                                                <th>Desember</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($populasiPertahun as $populasi)
                                            <tr align="center">
                                                <td>{{$populasi->no_kandang}}</td>
                                                <td><a style="color: black"
                                                        href="/populasi/1">{{$populasi->januari}}</a></td>
                                                <td><a style="color: black"
                                                        href="/populasi/2">{{$populasi->februari}}</a></td>
                                                <td><a style="color: black" href="/populasi/3">{{$populasi->maret}}</a>
                                                </td>
                                                <td><a style="color: black" href="/populasi/4">{{$populasi->april}}</a>
                                                </td>
                                                <td><a style="color: black" href="/populasi/5">{{$populasi->mei}}</a>
                                                </td>
                                                <td><a style="color: black" href="/populasi/6">{{$populasi->juni}}</a>
                                                </td>
                                                <td><a style="color: black" href="/populasi/7">{{$populasi->juli}}</a>
                                                </td>
                                                <td><a style="color: black"
                                                        href="/populasi/8">{{$populasi->agustus}}</a></td>
                                                <td><a style="color: black"
                                                        href="/populasi/9">{{$populasi->september}}</a></td>
                                                <td><a style="color: black"
                                                        href="/populasi/10">{{$populasi->oktober}}</a></td>
                                                <td><a style="color: black"
                                                        href="/populasi/11">{{$populasi->november}}</a></td>
                                                <td><a style="color: black"
                                                        href="/populasi/12">{{$populasi->desember}}</a></td>
                                                <td><b>{{$populasi->jumlah}}</b></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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