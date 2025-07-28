@extends('layouts.main')
@section('title','Dashboard')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

@section('konten')
    <!-- [ Main Content ] start -->
  
      <!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-md-2 col-xl-3">
          <div class="card bg-grd-warning order-card">
            <div class="card-body">
              <h6 class="text-white">Data Barang</h6>
              <h2 class="text-end text-white"><i class="feather icon-file-text float-start"></i><span>{{ $totalBarang }}</span></h2>
              <a href="#" style="text-decoration: none; color: white"><p class="m-b-0">Lihat Detail</p></a>
            </div>
          </div>
        </div>

        <div class="col-md-2 col-xl-3">
          <div class="card bg-grd-success order-card">
            <div class="card-body">
              <h6 class="text-white">Data Supplier</h6>
              <h2 class="text-end text-white"><i class="feather icon-file float-start"></i><span>{{ $totalSupplier }}</span></h2>
              <a href="#" style="text-decoration: none; color: white"><p class="m-b-0">Lihat Detail</p></a>
            </div>
          </div>
        </div>

        <div class="col-md-2 col-xl-3">
          <div class="card bg-grd-info order-card">
            <div class="card-body">
              <h6 class="text-white">Data User</h6>
              <h2 class="text-end text-white"><i class="feather icon-file float-start"></i><span>{{ $totalUser }}</span></h2>
              <a href="#" style="text-decoration: none; color: white"><p class="m-b-0">Lihat Detail</p></a>
            </div>
          </div>
        </div>

        <div class="col-md-2 col-xl-3">
          <div class="card bg-grd-primary order-card">
            <div class="card-body">
              <h6 class="text-white">Data Lainnya</h6>
              {{-- <h2 class="text-end text-white"><i class="feather icon-file float-start"></i><span>{{ $totFormulir }}</span></h2> --}}
              <a href="#" style="text-decoration: none; color: white"><p class="m-b-0">Lihat Detail</p></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
    <!-- Column -->
    <div class="col-lg-12">
        <div class="card ">
            <div class="box bg-cyan">
                <form action="#" method="get">
                <div class="row">
                        <div class="col-4">
                            <input type="text" name="search" class="form-control" placeholder="Cari">
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-secondary card-hover">Cari</button>
                        </div>
                </form>
                    
                </div>
            </div>
        </div>
    </div>



      <div class="row">
        

  <div class="col-sm-12">
  <div class="card">
    <div class="card-header text-center">
      <h4>Gambar</h4>
    </div>
    <div class="card-body px-5">
      <div class="row justify-content-center">
        <div class="col-md text-center">
          <img src="assets/images/gambar_test_it/BLOUSE/S5457.jpg" alt="Logo Vaka" class="img-fluid rounded shadow" style="width: 250px;">
        </div>
        <div class="col-md-4 text-center">
          <img src="assets/images/gambar_test_it/BLOUSE/S5451.jpg" alt="Logo Vaka" class="img-fluid rounded shadow" style="width: 250px;">
        </div>
        <div class="col-md-4 text-center">
          <img src="assets/images/gambar_test_it/BLOUSE/S5474.jpg" alt="Logo Vaka" class="img-fluid rounded shadow" style="width: 250px;">
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