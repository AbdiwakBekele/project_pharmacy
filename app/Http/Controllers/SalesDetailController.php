<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Cosmotic;
use App\Models\CosmoticSales;
use App\Models\DrugSales;

class SalesDetailController extends Controller
{
    //
    public function index(){
        $cosmotics=CosmoticSales::all();
        $todaySales=CosmoticSales::whereDate('created_at',Carbon::today())->count();
        return view('adminPages.Details.CosmoticSalesDetails',compact('cosmotics','todaySales'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function today(){
    
        $cosmotics = CosmoticSales::whereDate('created_at', '=', Carbon::today())->get();
        return view('adminPages.Details.CosmoticTodaysSales',compact('cosmotics'))->with('i', (request()->input('page', 1) - 1) * 5);
 
    }

     // For Drug Sales

     public function Drugindex(){
        $drugs=DrugSales::all();
        $todaySalesDrug=DrugSales::whereDate('created_at',Carbon::today())->count();
        return view('adminPages.Details.DrugSalesDetails',compact('drugs','todaySalesDrug'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function Drugtoday(){
    
        $drugs = DrugSales::whereDate('created_at', '=', Carbon::today())->get();
        return view('adminPages.Details.DrugTodaysSales',compact('drugs'))->with('i', (request()->input('page', 1) - 1) * 5);
 
    }

}
