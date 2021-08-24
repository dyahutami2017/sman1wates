  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="{{asset('images/logosma1.png')}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>SMA N 1 WATES</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          
        <div class="image">
          <img src="{{asset('images/profile.svg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>
      
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @if(Auth::user()->name == 'admin')
        <li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon fa fa-home" aria-hidden="true"></i>
              <p>
                Home
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="/profil_sekolah" class="nav-link">
              <i class="nav-icon fa fa-school"></i>
              <p>
                Profil Sekolah
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/siswa" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/kelas" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Kelas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/mapel" class="nav-link">
              <i class="nav-icon fa fa-book" aria-hidden="true"></i>
              <p>
                Mata Pelajaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/berita" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url()->route('logout') }}" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                  <p>Sign Out</p>
                </a>
              </li>
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon fa fa-home" aria-hidden="true"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/kelas/siswa" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Kelas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/mapel/siswa" class="nav-link">
              <i class="nav-icon fa fa-book" aria-hidden="true"></i>
              <p>
                Mata Pelajaran
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/profil/{{auth()->user()->id}}" class="nav-link">
                <i class="fas fa-user-check"></i>
                  <p>Profil Saya</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/profil/{{auth()->user()->id}}/edit" class="nav-link">
                  <i class="far fas fa-user-cog"></i>
                  <p>Edit Profil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url()->route('logout') }}" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                  <p>Sign Out</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>