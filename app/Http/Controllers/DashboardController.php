<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Formulir;
use App\Models\Panduan;
use App\Models\Pedoman;
use App\Models\SKDir;
use App\Models\SPKDir;
use App\Models\Spo;
use App\Models\Supplier;
use App\Models\Tarif;
use App\Models\Unit;
use App\Models\User;
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

        $totalBarang = Barang::count();
        $totalSupplier = Supplier::count();
        $totalUser = User::count();

        return view('dashboard.index',compact('totalBarang','totalSupplier','totalUser'));
    }
}
