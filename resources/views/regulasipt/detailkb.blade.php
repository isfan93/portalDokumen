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
                            <div class="col-sm-10">
                                <h2>DETAIL KEBIJAKAN</h2>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('regulasi.kebijakan') }}" class="btn btn-info btn-sm px-5">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                    {{-- Detail Dokumen --}}
                    </div>
                    <div class="card-body">
                        <h5 for="">Judul</h5>
                        <p>{{ $file2->judul }}</p>
                        <h5 for="">Deskripsi</h5>
                        <p>{{ $file2->deskripsi }}</p>
                        <h5 for="">Tanggal upload</h5>
                        <p>{{ $file2->tgl_upload }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header"> 
                    Detail Dokumen
                    </div>
                    <div class="card-body">
                        <iframe src="/files/{{ $file2->files }}" width="100%" height="650" frameborder="frameborder" allowfullscreen></iframe>

                        {{-- <object 
                            type="application/pdf" 
                            data="{{ $file->files }}"
                            width="100%"
                            height="650"
                        >
                        </object> --}}

                    </div>
                </div>
            </div>
        </div>

        
      
      <!-- [ Main Content ] end -->
@endsection

@section('js')

@endsection