<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profil | Puyuh.in</title>
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
                            <a class="dropdown-item" href="{{ route('profile') }}">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
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
        </nav <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
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
                        <div class="row">
                            <div class="col-md-8 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Populasi Kandang</h4>
                                        <p class="card-description"> Per tanggal : <b>{{ $date }}</b> </p>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Kandang</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data_kandang as $kandangs)
                                                <tr>
                                                    <td>{{$index++}}</td>
                                                    <td>{{$kandangs['jumlah_ternak']}}</td>
                                                    <td><button><a href="{{action('KandangController@edit',$kandangs['id'])}}">Edit</a></button>
                                                        <form action="{{action('KandangController@delete',$kandangs['id'])}}" method="post">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" onclick="return confirm('Apakah Anda yakin akan menghapus?')">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Kematian Populasi</h4>
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($kematian as $kematians)
                                                <tr align="center">
                                                    <td>{{$index++}}</td>
                                                    <td>{{$kematians->januari}}</td>
                                                    <td>{{$kematians->februari}}</td>
                                                    <td>{{$kematians->maret}}</td>
                                                    <td>{{$kematians->april}}</td>
                                                    <td>{{$kematians->mei}}</td>
                                                    <td>{{$kematians->juni}}</td>
                                                    <td>{{$kematians->juli}}</td>
                                                    <td>{{$kematians->agustus}}</td>
                                                    <td>{{$kematians->september}}</td>
                                                    <td>{{$kematians->oktober}}</td>
                                                    <td>{{$kematians->november}}</td>
                                                    <td>{{$kematians->desember}}</td>

                                                    <!-- <td><button><a href="{{action('KandangController@edit',$kandangs['id'])}}">Edit</a></button>
                                                        <form action="{{action('KandangController@delete',$kandangs['id'])}}" method="post">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" onclick="return confirm('Apakah Anda yakin akan menghapus?')">Hapus</button>
                                                        </form>
                                                    </td> -->
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