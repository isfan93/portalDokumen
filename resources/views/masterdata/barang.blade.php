@extends('layouts.main')
@section('title','Dashboard')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

@section('konten')

        <div class="row">
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <div class="row">
                          <div class="col-sm-12">
                              <h2>Master Data Barang</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>

        <div class="row">
        <div class="col-sm-12">
          <div class="card table-card">
            <div class="row">
              <div class="col-sm-6">
                <div class="card-header">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-success btn-sm">Tambah data</button>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card-header">
                  <form action="{{ route('master.barang') }}" method="get">
                    <div class="row">
                      <div class="col-sm-10">
                        <input name="search" type="search" class="form-control form-control-sm" placeholder="Masukan Judul ...">
                      </div>
                      <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary btn-sm">Cari</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <hr>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table id="tablesk" class="table">
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>#</th>
                  </tr>
                  {{-- @foreach ($kebijakan as $data) --}}
                  @forelse ($barangs as $barang)
                  <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $barang->nama_barang }}</td>
                      <td>{{ $barang->deskripsi }}</td>
                      <td>{{ $barang->harga }}</td>
                      <td>{{ $barang->gambar }}</td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                          <a href="#" class="btn btn-info" title="detail"><i class="ph ph-clipboard"></i></a>
                            {{-- <button type="button" class="btn btn-info">Detail</button> --}}
                          <a class="btn btn-danger delete" data-id="{{ $barang->id }}" data-nama="{{ $barang->nama_barang }}" title="hapus"><i class="ph ph-trash" style="color: white"></i></a>
                          </div>
                    </td>
                </tr>
                  @empty
                      <tr>
                        <td colspan=6 class="text-center fw-bold">Tidak ada data</td>
                      </tr>
                  @endforelse
                  
                  {{-- @endforeach --}}
                </table>
                <div class="px-5">
                  {{-- {{ $kebijakan->links() }} --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      {{-- Modal tambah --}}
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
         
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('barang.tambah') }}" method="post" enctype="multipart/form-data"   >
                @csrf
                <div class="col-sm">
                  <label for="nama_barang">Nambah Barang</label>
                  <input class="form-control form-control-sm" type="text" name="nama_barang" id="nama_barang" placeholder="Masukan Nama Barang ..." value="{{ old('nama_barang') }}">
                </div>
                @error('nama_barang')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                <div class="col-sm">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea class="form-control form-control-sm" name="deskripsi" id="deskripsi" cols="30" rows="10" placeholder="Masukan deskripsi ..." value="{{ old('deskripsi') }}"></textarea>
                </div>
                @error('deskripsi')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                <div class="col-sm">
                  <label for="harga">Harga</label>
                  <input class="form-control form-control-sm" type="number" name="harga" id="harga" placeholder="Masukan Harga Barang ..." value="{{ old('harga') }}">
                </div>
                @error('harga')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                <div class="col-sm">
                  <label for="gambar">Gambar</label>
                  <input class="form-control form-control-sm" type="text" name="gambar" id="harga" placeholder="Masukan Harga Barang ..." value="{{ old('gambar') }}">
                </div>
                @error('gambar')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                {{-- <div class="col-sm">
                  <label for="">Gambar Barang</label>
                  <input class="form-control form-control-sm" type="file" name="gambar" id="">
                </div> --}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
          </div>        
        </div>
      </div>
        {{-- End Modal --}}
      
      <!-- [ Main Content ] end -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
      <script>
        $('.delete').click(function(){
        var id = $(this).attr('data-id');
        var nama_barang = $(this).attr('data-nama');

        swal({
        title: "Yakin?",
        text: "Kamu akan menghapus data dari "+nama_barang+" ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/masterbarang/hapus/"+id+""
            swal("Data Berhasil dihapus ", {
            icon: "success",
            });
        } else {
            swal("Data tidak dihapus",{
              icon: "error"
            });
        }
        });
    });
      </script>

@endsection

@section('js')

@endsection