<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use App\Models\Panduan;
use App\Models\Pedoman;
use App\Models\SKDir;
use App\Models\SPKDir;
use App\Models\Spo;
use App\Models\Tarif;
use App\Models\Unit;
use Illuminate\Http\Request;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\DataTables;

class DashboardController extends Controller
{
    // public function cariData(Request $req){
    //     if($req->has('search')){
    //         $dataSK = SKDir::where('judul','Like','%' . $req->search .'%');
    //     }else{
    //         $dataSK = SKDir::paginate(10);
    //     }
    //     return view('dashboard.index', compact('dataSK'));
    // }

    public function index(){
        return view('dashboard.index');
    }
    public function CountDashboard(Request $req){
        $no=1;
        $skd = SKDir::count();
        $spkd = SPKDir::count();
        $totTarif = Tarif::count();
        $totSpo =Spo::count();
        $totPedoman = Pedoman::count();
        $totPanduan = Panduan::count();
        $totFormulir = Formulir::count();

        if($req->has('search')){
            $dataSK = SKDir::where('judul','Like','%' . $req->search .'%');
        }else{
            $dataSK = SKDir::paginate(10);
        }

        


        $total = $skd + $spkd;
        return view('dashboard.index', compact('no','total','totTarif','totSpo','totPedoman','totPanduan','totFormulir','dataSK'));
    }

    public function PKRs(){
        $UPkrs = unit::where('manajer', 0)->get();
        return view('layouts.main', compact('UPkrs'));
    }
}
