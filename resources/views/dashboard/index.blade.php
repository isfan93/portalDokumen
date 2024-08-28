@extends('layouts.main')
@section('title','Dashboard')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

@section('konten')
    <!-- [ Main Content ] start -->
  
      <!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-md-2 col-xl-2">
          <div class="card bg-grd-secondary order-card">
            <div class="card-body">
              <h6 class="text-white">SK & SPK Direktur</h6>
              <h2 class="text-end text-white"><i class="feather icon-briefcase float-start"></i><span>{{ $total }}</span>
              </h2>
              <a href="#" style="text-decoration: none; color: white"><p class="m-b-0">Lihat Detail</p></a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xl-2">
          <div class="card bg-grd-dark order-card">
            <div class="card-body">
              <h6 class="text-white">Tarif RSIH</h6>
              <h2 class="text-end text-white"><i class="feather icon-tag float-start"></i><span>{{ $totTarif }}</span>
              </h2>
              <a href="#" style="text-decoration: none; color: white"><p class="m-b-0">Lihat Detail</p></a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xl-2">
          <div class="card bg-grd-warning order-card">
            <div class="card-body">
              <h6 class="text-white">SPO RSIH</h6>
              <h2 class="text-end text-white"><i class="feather icon-file-text float-start"></i><span>{{ $totSpo }}</span></h2>
              <a href="#" style="text-decoration: none; color: white"><p class="m-b-0">Lihat Detail</p></a>
            </div>
          </div>
        </div>

        <div class="col-md-2 col-xl-2">
          <div class="card bg-grd-success order-card">
            <div class="card-body">
              <h6 class="text-white">Pedoman RSIH</h6>
              <h2 class="text-end text-white"><i class="feather icon-file float-start"></i><span>{{ $totPedoman }}</span></h2>
              <a href="#" style="text-decoration: none; color: white"><p class="m-b-0">Lihat Detail</p></a>
            </div>
          </div>
        </div>

        <div class="col-md-2 col-xl-2">
          <div class="card bg-grd-info order-card">
            <div class="card-body">
              <h6 class="text-white">Panduan RSIH</h6>
              <h2 class="text-end text-white"><i class="feather icon-file float-start"></i><span>{{ $totPanduan }}</span></h2>
              <a href="#" style="text-decoration: none; color: white"><p class="m-b-0">Lihat Detail</p></a>
            </div>
          </div>
        </div>

        <div class="col-md-2 col-xl-2">
          <div class="card bg-grd-primary order-card">
            <div class="card-body">
              <h6 class="text-white">Formulir RSIH</h6>
              <h2 class="text-end text-white"><i class="feather icon-file float-start"></i><span>{{ $totFormulir }}</span></h2>
              <a href="#" style="text-decoration: none; color: white"><p class="m-b-0">Lihat Detail</p></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-header" style="background-color: rgb(42, 91, 165); text-align: center">
              <h4 style="color: white">Nomor Darurat Kabupaten Garut</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>Instansi</th>
                    <th>Nomor Telepon</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="fa fa-taxi fa-fw"></i> Pemadam Kebakaran</td>
                    <td>(0262) 232113</td>
                  </tr>
                  <tr>
                    <td><i class="feather icon-alert-triangle"></i> Polisi</td>
                    <td>(0262) 233110</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-ambulance fa-fw"></i> Ambulans</td>
                    <td>(0262) 232720</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-plus fa-fw"></i> PMI</td>
                    <td>(0262) 235118 & 233672</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-bolt fa-fw"></i> PLN</td>
                    <td>(0262) 242751</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-tint fa-fw"></i> PDAM</td>
                    <td>(0262) 233324</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-taxi fa-fw"></i> POS</td>
                    <td>(0262) 233832</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <ul class="list-group list-group-flush">
            </ul>
            <a href="https://infogarut.id/catat-ini-nomor-penting-ketika-keadaan-genting-di-garut/" class="btn btn-info btn-block" target="_blank">Lihat lebih detail</a>
          </div>
        </div>

        <div class="col-sm-8">
            <div class="card">
              <div class="card-header" style="text-align: center">
                <h4>Lokasi</h4>
              </div>
              <div class="card-body px-5">
                <div class="mapouter">
                  <div class="gmap_canvas">
                      <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=rumah%20sakit%20intan%20husada%20garut&t=k&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                          <a href="https://123movies-to.org"></a>
                          <br>
                          <style>.mapouter{position:relative;text-align:right;height:460px;width:100%;}</style>
                          <a href="https://www.embedgooglemap.net">add google map to my website</a>
                          <style>.gmap_canvas {overflow:hidden;background:none!important;height:460px;width:100%;}</style>
                  </div>
              </div>
              </div>
            </div>
        </div>
      </div>

      
        
        
      
      <!-- [ Main Content ] end -->
@endsection

@section('js')

@endsection