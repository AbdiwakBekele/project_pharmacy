<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrugType;
use App\Models\Catagory;
use App\Models\Unit;
use Illuminate\Support\Str;



class DrugTypeController extends Controller
{
    public function index(){
        $totalDrugType=DrugType::count();
        $drugtypes=DrugType::all();
        return view('adminPages.DrugType.ManageDrugType',compact('drugtypes','totalDrugType'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create(){
        $catagories=Catagory::all();
        $units=Unit::all();
        return view('adminPages.DrugType.AddNewDrugType',compact('catagories','units'));
    }
    public function store(Request $request){
        $catagory=Catagory::findOrFail($request->catagory_id);
        $unit=Unit::findOrFail($request->unit_id);

        // one two mnany
        ($catagory)->drugtypes()->create([
            'unit_id'=>$request->unit_id,
            'brand_name'=>$request->brand_name,
            'slug'=>Str::slug($request->brand_name),
            'generic_name'=>$request->generic_name,
            'dosage'=>$request->dosage,
            'price'=>$request->price,

        
            ]);
           
                return redirect('adminPages/DrugType');
    }
    public function destroy(int $drugtype_id){
        DrugType::FindOrFail($drugtype_id)->delete();
        return redirect('adminPages/DrugType');
    }
}
