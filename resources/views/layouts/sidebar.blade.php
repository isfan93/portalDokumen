
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
            <label>Regulasi</label>
            <i class="ph ph-suitcase"></i>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="{{ route('regnas.index') }}" class="pc-link"><span class="pc-micon">
                <i class="ph ph-tree-structure"></i></span><span class="pc-mtext">Regulasi Nasional</span><span class="pc-arrow"></span></a>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"
              ><span class="pc-micon">
                <i class="ph ph-tree-structure"></i> </span
              ><span class="pc-mtext">Regulasi PT RSIH</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item pc-hasmenu">
                <a href="{{ route('regulasi.kebijakan') }}" class="pc-link">Kebijakan</a>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="{{ route('regulasi.sk') }}" class="pc-link">SK</a>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="{{ route('regulasi.peraturan') }}" class="pc-link">Peraturan</a>
              </li>
            </ul>
          </li>

          <li class="pc-item pc-caption">
            {{-- <label>Regulasi</label> --}}
            {{-- <i class="ph ph-suitcase"></i> --}}
          </li>

          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"
              ><span class="pc-micon">
                <i class="ph ph-tree-structure"></i> </span
              ><span class="pc-mtext">SK & SPK Dierektur</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">SK</a>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">SPK</a>
              </li>
            </ul>
          </li>

          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"
              ><span class="pc-micon">
                <i class="ph ph-tree-structure"></i> </span
              ><span class="pc-mtext">Regulasi Induk</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              {{-- <li class="pc-item"><a class="pc-link" href="#!">SPO {{ $unit->nama }}</a></li> --}}
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">Corporate By Laws</a>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">Medical By Laws</a>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">Nursing By Laws</a>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">Peraturan Direktur Utama tentang SOTK</a>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">Kebijakan Standar Manajemen Sumber Daya RS</a>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">Kebijakan Standar Pelayanan Berfokus Pasien</a>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">Kebijakan Program Nasional</a>
              </li>
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"><span class="pc-micon">
                <i class="ph ph-tree-structure"></i></span><span class="pc-mtext">Tarif</span><span class="pc-arrow"></span></a>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"><span class="pc-micon">
                <i class="ph ph-tree-structure"></i></span><span class="pc-mtext">Booking Meeting Room</span><span class="pc-arrow"></span></a>
          </li>

          <li class="pc-item pc-caption">
            <label>UNIT</label>
            <i class="ph ph-suitcase"></i>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"
              ><span class="pc-micon">
                <i class="ph ph-tree-structure"></i> </span
              ><span class="pc-mtext">PKRS dan Keuangan</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              @php
                  use App\Models\Unit;
                  $units = Unit::where('manajer', 0)->get();
              @endphp
              @foreach ($units as $unit)
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">{{ $unit->nama }}<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="#!">SPO {{ $unit->nama }}</a></li>
                  <li class="pc-item"><a class="pc-link" href="#!">Panduan {{ $unit->nama }}</a></li>
                  <li class="pc-item"><a class="pc-link" href="#!">Pedoman {{ $unit->nama }}</a></li>
                  <li class="pc-item"><a href="#!" class="pc-link">Formulir {{ $unit->nama }}</a></li>
                </ul>
              </li>
              @endforeach
            </ul>
          </li>

          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"
              ><span class="pc-micon">
                <i class="ph ph-tree-structure"></i> </span
              ><span class="pc-mtext">Keperawatan</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              @php
                  $units =Unit::where(function($query){
                    $query->where('manajer',1)->orWhere('manajer',2);
                  })->where('id','!=',40)->get();
                  // $units = Unit::where('manajer', 1)->orWhere('manajer',2)->except('id','!=',40)->get();
              @endphp
              @foreach ($units as $unit)
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">{{ $unit->nama }}<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="#!">SPO {{ $unit->nama }}</a></li>
                  <li class="pc-item"><a class="pc-link" href="#!">Panduan {{ $unit->nama }}</a></li>
                  <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Formulir {{ $unit->nama }}</a></li>
                </ul>
              </li>
              @endforeach
            </ul>
          </li>

          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"
              ><span class="pc-micon">
                <i class="ph ph-tree-structure"></i> </span
              ><span class="pc-mtext">Pelayanan Medis</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              @php
                  $units =Unit::where(function($query){
                    $query->where('manajer',1)->orWhere('manajer',2);
                  })->where('id','!=',39)->get();
                  // $units = Unit::where('manajer', 1)->orWhere('manajer',2)->get();
              @endphp
              @foreach ($units as $unit)
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">{{ $unit->nama }}<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="#!">SPO {{ $unit->nama }}</a></li>
                  <li class="pc-item"><a class="pc-link" href="#!">Panduan {{ $unit->nama }}</a></li>
                  <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">Formulir {{ $unit->nama }}</a></li>
                </ul>
              </li>
              @endforeach
            </ul>
          </li>

          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"
              ><span class="pc-micon">
                <i class="ph ph-tree-structure"></i> </span
              ><span class="pc-mtext">SDM dan UMUM</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              @php
                  $units = Unit::where('manajer', 3)->get();
              @endphp
              @foreach ($units as $unit)
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">{{ $unit->nama }}<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="#!">SPO {{ $unit->nama }}</a></li>
                  <li class="pc-item"><a class="pc-link" href="#!">Panduan {{ $unit->nama }}</a></li>
                  <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Formulir {{ $unit->nama }}</a></li>
                </ul>
              </li>
              @endforeach
            </ul>
          </li>

          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"
              ><span class="pc-micon">
                <i class="ph ph-tree-structure"></i> </span
              ><span class="pc-mtext">Komite</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              @php
                  $units = Unit::where('manajer', 4)->get();
              @endphp
              @foreach ($units as $unit)
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">{{ $unit->nama }}<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="#!">SPO {{ $unit->nama }}</a></li>
                  <li class="pc-item"><a class="pc-link" href="#!">Panduan {{ $unit->nama }}</a></li>
                  <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link">Formulir {{ $unit->nama }}</a></li>
                </ul>
              </li>
              @endforeach
            </ul>
          </li>

          <li class="pc-item pc-caption">
            {{-- <label>Regulasi</label> --}}
            {{-- <i class="ph ph-suitcase"></i> --}}
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"
              ><span class="pc-micon">
                <i class="ph ph-tree-structure"></i> </span><span class="pc-mtext">Notulensi Rapat</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">Arsip Rapat<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                <ul class="pc-submenu">
                  @php
                  use App\Models\ArsipRapat;
                  use App\Models\ArsipRapatDv;
                  use App\Models\Divisi;
                  $arsipr = ArsipRapat::all();
                  $arsiprdv = ArsipRapatDv::all();
                  @endphp
                  @foreach ($arsipr as $ars)
                  <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">{{ $ars->nama }}</a>
                    <ul class="pc-submenu"></ul>
                  </li>
                  @endforeach
                  <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">Rapat Internal Divisi/Unit/Komite<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                      @foreach ($arsiprdv as $arsdv)
                      <li class="pc-item"><a class="pc-link" href="#!">{{ $arsdv->nama }}</a></li>
                      @endforeach
                    </ul>
                  </li>
                </ul>
              </li>
                @php
                $divisi = Divisi::all();
                @endphp
                @foreach ($divisi as $div)
                <li class="pc-item pc-hasmenu">
                
                <a href="#!" class="pc-link">{{ $div->nama }}<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                <ul class="pc-submenu">
                  <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">On Progress</a>
                  </li>
                  <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">Overdue</a>
                  </li>
                  <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">Done</a>
                  </li>
                </ul>
                
              </li>
              @endforeach
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"><span class="pc-micon">
                <i class="ph ph-tree-structure"></i></span><span class="pc-mtext">MSDS</span><span class="pc-arrow"></span></a>
          </li>
  
        </ul>
      </div>
    </div>