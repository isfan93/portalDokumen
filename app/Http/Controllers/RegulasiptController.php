<?php

namespace App\Http\Controllers;

use App\Mail\VakaEmail;
use App\Models\Kebijakan;
use App\Models\Peraturan;
use App\Models\SKModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use File;
use Illuminate\Support\Facades\Mail;

class RegulasiptController extends Controller
{
    public function allDataKebijakan(Request $req){
        $no =1;
        $search = $req->input('search');

        if($search){
            $kebijakan = Kebijakan::where('judul','LIKE','%'.$req->search.'%')->paginate(10);

            if($kebijakan->isEmpty()){
                Alert::warning('Data tidak ditemukan');
            }
        }else{
            $kebijakan = Kebijakan::paginate(10);
        }
        
        return view('regulasipt.kebijakan', compact('no','kebijakan'));
    }

    public function tambahDataKebijakan(Request $req){
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
            'unit' => 'Kebijakan',
            'judul' => $req->judul,
            'deskripsi' => $req->deskripsi,
            'files' => $namaFile
            // 'tgl_upload' => $tglSkrng
        ];

        $judul = $req->input('judul');
        $des = $req->input('deskripsi');

        Kebijakan::create($dataFile);
        Alert::success('Data Berhasil disimpan');
        Mail::to('isfan@gmail.com')->send(new VakaEmail($judul,$des));
        return redirect()->route('regulasi.kebijakan');
    }

    public function detailKebijakan($id){
        $file2 = Kebijakan::find($id);
        return view('regulasipt.detailkb', compact('file2'));
    }

    public function hapusDataKebijakan($id){
        $data = Kebijakan::find($id);
        File::delete('files/'.$data->files);
        $data->delete();
        // Alert::success('Data Berhasil dihapus');
        return redirect()->route('regulasi.kebijakan');
    }


    public function allDataSK(Request $req){
        $no =1;
        $search = $req->input('search');

        if($search){
            $sk = SKModel::where('judul','LIKE','%'.$req->search.'%')->paginate(10);

            if($sk->isEmpty()){
                Alert::warning('Data tidak ditemukan');
            }
        }else{
            $sk = SKModel::paginate(10);
        }

        return view('regulasipt.sk', compact('no','sk'));
    }

    public function detailSK($id){
        $file = SKModel::find($id);
        return view('regulasipt.detailsk', compact('file'));
    }

    public function tambahDataSK(Request $req){
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
            'unit' => 'SK PT RSIH',
            'judul' => $req->judul,
            'deskripsi' => $req->deskripsi,
            'files' => $namaFile
            // 'tgl_upload' => $tglSkrng
        ];

        SKModel::create($dataFile);
        Alert::success('Data Berhasil disimpan');
        return redirect()->route('regulasi.sk');
    }

    public function hapusDataSK($id){
        $data = SKModel::find($id);
        File::delete('files/'.$data->files);
        $data->delete();
        // Alert::success('Data Berhasil dihapus');
        return redirect()->route('regulasi.sk');

    }

    public function allDataPeraturan(Request $req){
        $no =1;
        $search = $req->input('search');

        if($search){
            $peraturan = Peraturan::where('judul','LIKE','%'.$req->search.'%')->paginate(10);

            if($peraturan->isEmpty()){
                Alert::warning('Data tidak ditemukan');
            }
        }else{
            $peraturan = Peraturan::paginate(10);
        }

        return view('regulasipt.peraturan', compact('no','peraturan'));
    }

    public function detailPeraturan($id){
        $file = Peraturan::find($id);
        return view('regulasipt.detailperaturan', compact('file'));
    }

    public function email(){
        Mail::to('isfan@gmail.com')->send(new VakaEmail());
        return "Email telah terkriim";
    }
}
