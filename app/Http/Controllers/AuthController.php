<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Catagory;
use App\Models\Unit;
use App\Models\DrugType;
use App\Models\Drug;
use App\Models\Cosmotic;
use App\Models\CosmoticSales;
use App\Models\DrugSales;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function admin(){
        return view ('adminPages.AdminLogin');
    }
    public function sales(){
        return view ('salesPages.SalesLogin');
    }
    
    public function dashboard(){
        $totalCatagory=Catagory::count();
        $totalUnit=Unit::count();
        $totalDrugType=DrugType::count();
        $totalDrug=Drug::count();
        $totalCosmotic=Cosmotic::count();
        $totalCosmoticSales=CosmoticSales::count();
        $totalDrugSales=DrugSales::count();
        $totalSales=$totalCosmoticSales+$totalDrugSales;


        if(Auth::id()){
            $username=Auth()->user()->name;
            if($username=='Admin'){
                return view ('adminPages.Dashbord.Admindashboard',compact('totalCatagory','totalUnit','totalDrugType','totalDrug','totalCosmotic','totalCosmoticSales','totalDrugSales','totalSales'));
            }
            else if($username=='Sales'){
                return view ('salesPages.ManageSales');
            }
            else{
                return redirect()->back();
            }
        }
        
    }



}
