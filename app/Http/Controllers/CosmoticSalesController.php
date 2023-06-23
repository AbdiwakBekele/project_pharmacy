<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cosmotic;
use App\Models\CosmoticSales;
use Illuminate\Support\Str;


class CosmoticSalesController extends Controller
{
    //
    // public function index(){
    
    //     return view('salesPages.ManageSales');
    // }

    public function create(){
        $cosmotics=Cosmotic::all();
        // $units=Unit::all();
        return view('salesPages.CosmoticSales',compact('cosmotics'));
    }
    public function store(Request $request){
        $cosmotics=Cosmotic::findOrFail($request->cosmoticSalesName);

    

        ($cosmotics)->cosmoticsales()->create([
            'cosmotic_id'=>$request->cosmotic_id,
            'amount'=>$request->amount,
        
            'slug'=>Str::slug($request->amount),
            
            'price'=>$request->price,

        
            ]);
        return redirect('SalesPages/ManageSales');
}

}


