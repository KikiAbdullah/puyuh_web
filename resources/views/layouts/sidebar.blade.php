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
                        <a class="nav-link" href="/pendapatan">Pendapatan</a>
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