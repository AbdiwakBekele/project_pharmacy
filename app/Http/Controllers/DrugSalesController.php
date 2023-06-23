<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrugType;
use Illuminate\Support\Str;

class DrugSalesController extends Controller
{
    //
    public function create(){
        $drugs=DrugType::all();
        return view('salesPages.DrugSales',compact('drugs'));
    }
    public function store(Request $request){
        $drugs=DrugType::findOrFail($request->drugsSalesName);

    

        ($drugs)->drugsales()->create([
            'drug_id'=>$request->drug_id,
            'amount'=>$request->amount,
            'slug'=>Str::slug($request->amount),
            
            'price'=>$request->price,

        
            ]);
        return redirect('SalesPages/ManageSales');
}
}
