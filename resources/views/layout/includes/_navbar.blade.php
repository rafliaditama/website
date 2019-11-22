<nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <a href="/dashboard"><img src="{{asset('admin/zzz.png')}}" alt=" Logo" class="img-responsive logo"></a>
      </div>
<div class="container-fluid">
        <div class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <form class="navbar-form navbar-left">
          <div class="input-group">
            <input type="text" value="" class="form-control" placeholder="Mencari Sesuatu??">
            <span class="input-group-btn"><button type="button" class="btn btn-primary">Cari</button></span>
          </div>
        </form>
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                <i class="lnr lnr-alarm"></i>
                <span class="badge bg-success">1</span>
              </a>
              <ul class="dropdown-menu notifications">
                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Selamat Datang Kembali ^_^</a></li>
                <li><a href="#" class="more">Lihat Semua Notifikasi</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Bantuan</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">Keamanan</a></li>
                <li><a href="#">Troubleshooting</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="
                @if(auth()->user()->role == 'siswa')
                {{auth()->user()->siswa->getAvatar()}} 
                @else
                  /images/default.jpg
                @endif"
                class="img-circle" alt="Avatar"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="/profilsaya"><i class="lnr lnr-user"></i> <span>Profilku</span></a></li>
                <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Keluar</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
