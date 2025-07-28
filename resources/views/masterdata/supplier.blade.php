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
                  <form action="#" method="get">
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
                    <th>Nama Supplier</th>
                    <th>Alamat</th>
                    <th>No Telfon</th>
                    <th>#</th>
                  </tr>
                  {{-- @foreach ($kebijakan as $data) --}}
                  @forelse ($suppliers as $supplier)
                  <tr>
                      <td>{{ $supplier->id }}</td>
                      <td>{{ $supplier->nama }}</td>
                      <td>{{ $supplier->alamat }}</td>
                      <td>{{ $supplier->no_telf }}</td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                          <a href="#" class="btn btn-info" title="detail"><i class="ph ph-clipboard"></i></a>
                            {{-- <button type="button" class="btn btn-info">Detail</button> --}}
                          <a class="btn btn-danger delete" data-id="1" data-nama="1" title="hapus"><i class="ph ph-trash" style="color: white"></i></a>
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
              <form action="#" method="post" enctype="multipart/form-data"   >
                @csrf
                <div class="col-sm">
                  <label for="">Nama Supplier</label>
                  <input class="form-control form-control-sm" type="text" name="judul" id="" placeholder="Masukan Judul Dokumen ...">
                </div>
                <br>
                <div class="col-sm">
                  <label for="">Alamat</label>
                  <textarea class="form-control form-control-sm" name="deskripsi" id="" cols="30" rows="10" placeholder="Masukan deskripsi ..."></textarea>
                </div>
                <br>
                <div class="col-sm">
                  <label for="">No telepon</label>
                  <input class="form-control form-control-sm" type="text" name="judul" id="" placeholder="Masukan Judul Dokumen ...">
                </div>
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
        var judul = $(this).attr('data-nama');

        swal({
        title: "Yakin?",
        text: "Kamu akan menghapus data dari "+judul+" ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/regulasiPT/hapus/kb/"+id+""
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