<?php

namespace App\Http\Controllers;
use App\Models\Catagory;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function index(){
        $totalCatagory=Catagory::count();
        $catagories=Catagory::all();
        return view('adminPages.Catagory.ManageCatagory',compact('catagories','totalCatagory'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create(){
        return view('adminPages.Catagory.AddNewCatagory');
    }
    public function store(Request $request){
        Catagory::create([
            'catagory_name'=>$request->catagory_name,
            'slug'=>Str::slug($request->catagory_name),
            'catagory_description'=>$request->catagory_description,
            
        ]);
        return redirect('adminPages/Catagory');
    }


    public function destroy(int $catagory_id){
        Catagory::FindOrFail($catagory_id)->delete();
        return redirect('adminPages/Catagory');
    }
}
