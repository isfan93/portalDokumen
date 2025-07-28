<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBarangRequest;
use App\Models\Barang;
use App\Models\Supplier;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterDataController extends Controller
{
    public function index(Request $req){
        $no=1;
        $search = $req->input('search');

        $barangs = Barang::query();
        if($search){
            $barangs->where('nama_barang','LIKE', '%'. $search . '%');
        }

        $barangs = $barangs->latest()->get();
        return view('masterdata.barang', compact('no','barangs'));
    }

    public function tambahData(StoreBarangRequest $request){
        $request = $request->validated();
        $isCreated = Barang::create($request);

        // return redirect(route('master.barang'));
        return $isCreated ? redirect(route('master.barang'))->with('success', 'Barang berhasil disimpan') : back()->with('error','Barang gagal disimpan');
    }

    public function hapusDataBarang($id){
        $data = Barang::find($id);
        $data->delete();
        return redirect(route('master.barang'));
    }

    public function dataSupplier(){
        $suppliers =  Supplier::latest()->get();
        return view('masterdata.supplier', compact('suppliers'));
    }

    public function dataUser(){
        $users = User::latest()->get();
        return view('masterdata.user', compact('users'));
    }
}
