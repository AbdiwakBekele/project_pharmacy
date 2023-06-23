<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use Illuminate\Support\Str;

class UnitController extends Controller
{
    public function index(){
        $totalUnit=Unit::count();
        $units=Unit::all();
        return view('adminPages.Unit.ManageUnit',compact('units','totalUnit'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create(){
        return view('adminPages.Unit.AddNewUnit');
    }
    public function store(Request $request){
        Unit::create([
            'unit_name'=>$request->unit_name,
            'slug'=>Str::slug($request->unit_name),
            'unit_description'=>$request->unit_description,
            
        ]);
        return redirect('adminPages/Unit');
    }
    public function destroy(int $unit_id){
        Unit::FindOrFail($unit_id)->delete();
        return redirect('adminPages/Unit');
    }
}
