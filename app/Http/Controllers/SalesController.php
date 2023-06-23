<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function saleslogin(){
        return view ('salesPages.SalesLogin');
    }
    public function index(){
        return view('salesPages.ManageSales');
    }
    // public function drugSales(){
    //     return view('salesPages.DrugSales');
    // }
    // public function cosmoticSales(){
    //     return view('salesPages.CosmoticSales');
    // }
}
