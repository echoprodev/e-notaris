<div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
        {{-- <div class="user">
            <div class="avatar-sm float-left mr-2">
                <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        Hizrian
                        <span class="user-level">Administrator</span>
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse in" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="link-collapse">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <span class="link-collapse">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <ul class="nav nav-primary">
            {{-- <li class="nav-item active">
                <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="dashboard">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="../demo1/index.html">
                                <span class="sub-item">Dashboard 1</span>
                            </a>
                        </li>
                        <li>
                            <a href="../demo2/index.html">
                                <span class="sub-item">Dashboard 2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            @if (Auth::user()->hak_akses == 'Pimpinan')
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Data</h4>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pimpinan.pegawai') }}">
                        <i class="fas fa-users"></i>
                        <p>Data Pegawai</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('akun.index') }}">
                        <i class="fas fa-user-circle"></i>
                        <p>Akun Pegawai</p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('Data-Permohonan.index')}}">
                        <i class="fas fa-file"></i>
                        <p>Data Permohonan <br> Masuk</p>
                        <span class="badge badge-warning"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('permohonan.arsip')}}">
                        <i class="fas fa-file-archive"></i>
                        <p>Arsip Data Permohonan</p>
                    </a>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{ route('permohonan.index')}}">
                        <i class="fas fa-file"></i>
                        <p>Data Permohonan Masuk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('permohonan.arsip')}}">
                        <i class="fas fa-file-archive"></i>
                        <p>Arsip Data Permohonan</p>
                    </a>
                </li>
            @endif


        </ul>
    </div>
</div>
