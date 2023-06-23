<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrugType;
use App\Models\Drug;
use Illuminate\Support\Str;

class DrugController extends Controller
{
    public function index(){
        $totalDrug=Drug::count();
        $drugs=Drug::all();
        return view('adminPages.Drug.ManageDrug',compact('drugs','totalDrug'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create(){
        $drugtypes=DrugType::all();
        
        return view('adminPages.Drug.AddNewDrug',compact('drugtypes'));
    }

    public function store(Request $request){
        $drugtypes=DrugType::findOrFail($request->drugType);
        
        // one two mnany
        ($drugtypes)->drugs()->create([
            "drugsTypes_id"=>$request->drugTypes_id,
            'batch_number'=>$request->batch_number,
            'slug'=>Str::slug($request->batch_number),
            'manufacture_date'=>$request->manufacture_date,
            'expire_date'=>$request->expire_date,
            'amount'=>$request->amount,

        
            ]);
           
                return redirect('adminPages/Drug');
    }
    public function destroy(int $drug_id){
        Drug::FindOrFail($drug_id)->delete();
        return redirect('adminPages/Drug');
    }
}
