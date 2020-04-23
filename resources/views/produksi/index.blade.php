<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Produksi | Puyuh.in</title>
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
                        <!-- TABEL PRODUKSI PERBULAN -->
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Produksi Perbulan {{ $monthName }}</h4>
                                        <p class="card-description"> Per tanggal : <b>{{ $date }}</b> </p>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No. Kandang</th>
                                                    <th>Tanggal</th>
                                                    <th>Jumlah</th>
                                                    <th>Tools</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($produksiPerbulan as $produksi)
                                                <tr align="center">
                                                    <td>{{$produksi->id_kandang}}</td>
                                                    <td>{{$produksi->tanggal}}</td>
                                                    <td>{{$produksi->jumlah_telur}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END TABEL PRODUKSI PERBULAN -->
                        <!-- TABEL PRODUKSI PERTAHUN -->
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Produksi Tahun</h4>
                                        <p class="card-description"> Per tanggal : <b>{{ $date }}</b> </p>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
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
                                                @foreach($produksiPertahun as $produksi)
                                                <tr align="center">
                                                    <td>{{$produksi->id_kandang}}</td>
                                                    <td><a style="color: black" href="/produksi/1">{{$produksi->januari}}</a></td>
                                                    <td><a style="color: black" href="/produksi/2">{{$produksi->februari}}</a></td>
                                                    <td><a style="color: black" href="/produksi/3">{{$produksi->maret}}</a></td>
                                                    <td><a style="color: black" href="/produksi/4">{{$produksi->april}}</a></td>
                                                    <td><a style="color: black" href="/produksi/5">{{$produksi->mei}}</a></td>
                                                    <td><a style="color: black" href="/produksi/6">{{$produksi->juni}}</a></td>
                                                    <td><a style="color: black" href="/produksi/7">{{$produksi->juli}}</a></td>
                                                    <td><a style="color: black" href="/produksi/8">{{$produksi->agustus}}</a></td>
                                                    <td><a style="color: black" href="/produksi/9">{{$produksi->september}}</a></td>
                                                    <td><a style="color: black" href="/produksi/10">{{$produksi->oktober}}</a></td>
                                                    <td><a style="color: black" href="/produksi/11">{{$produksi->november}}</a></td>
                                                    <td><a style="color: black" href="/produksi/12">{{$produksi->desember}}</a></td>
                                                    <td><b>{{$produksi->jumlah}}</b></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END TABEL PRODUKSI PERTAHUN -->
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