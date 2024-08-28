<?php

namespace App\Http\Controllers;

use App\Models\Regnas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use File;

class RegnasController extends Controller
{
    public function index(Request $req){
        $no = 1;
        $search = $req->input('search');

        if($search) {
            $datas = Regnas::where('judul','LIKE','%'.$req->search.'%')->paginate(10);

            if($datas->isEmpty()){
                Alert::warning('Data tidak ditemukan');
            }
        }else{
            $datas = Regnas::paginate(10);
        }

        
        // $datas = Regnas::paginate(10);
        return view('regnas.index', compact('no','datas'));
    }

    public function detail($id){
        $file = Regnas::find($id);
        return view('regnas.detail', compact('file'));
    }
    

    public function tambahData(Request $req){
        $req->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'files' => 'required|file|mimes:doc,pdf',
        ]);

        // $tglSkrng = Carbon::now()->format('dmY');
        $file = $req->file('files');
        $namaFile = $file->getClientOriginalName();
        $folderTujuan = 'files';
        $file->move($folderTujuan,$namaFile);

        $dataFile = [
            'unit' => 'REGULASI NASIONAL',
            'judul' => $req->judul,
            'deskripsi' => $req->deskripsi,
            'files' => $namaFile
            // 'tgl_upload' => $tglSkrng
        ];

        Regnas::create($dataFile);
        Alert::success('Data Berhasil disimpan');
        return redirect()->route('regnas.index');
    }

    public function hapusData($id){
        $data = Regnas::find($id);
        File::delete('files/'.$data->files);
        $data->delete();
        // Alert::success('Data Berhasil dihapus');
        return redirect()->route('regnas.index');

    }
}
