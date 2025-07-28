
    <div class="navbar-wrapper">
      <div class="m-header">
        <a href="{{ route('dashboard.index') }}" class="b-brand text-primary">
          <!-- ========   Change your logo from here   ============ -->
          <img src="\assets/images/logo-white.svg" alt="logo image" class="logo-lg">
        </a>
      </div>
      <div class="navbar-content">
        <ul class="pc-navbar">
          <li class="pc-item pc-caption">
            <label>Navigation</label>
          </li>
          <li class="pc-item">
            <a href="{{ route('dashboard.index') }}" class="pc-link"
              ><span class="pc-micon">
                <i class="ph ph-gauge"></i></span
              ><span class="pc-mtext">Dashboard</span></a>
          </li>

          
          <li class="pc-item pc-caption">
            <label>Master Data</label>
            <i class="ph ph-suitcase"></i>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"
              ><span class="pc-micon">
                <i class="ph ph-tree-structure"></i> </span
              ><span class="pc-mtext">Master Data</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item pc-hasmenu">
                <a href="{{ route('master.barang') }}" class="pc-link">Data Barang</a>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="{{ route('master.supplier') }}" class="pc-link">Data Supplier</a>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="{{ route('master.user') }}" class="pc-link">Data User</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>