<?php

namespace App\Http\Controllers;

use App\Models\Cosmotic;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CosmoticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $totalCosmotic=Cosmotic::count();
        $cosmotics=Cosmotic::all();
        return view('adminPages.Cosmotics.ManageCosmotics',compact('cosmotics','totalCosmotic'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('adminPages.Cosmotics.AddNewCosmotic');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        Cosmotic::create([
            'cosmotic_name'=>$request->cosmotic_name,
            'cosmotic_exp'=>$request->cosmotic_exp,
            'amount'=>$request->amount,
            'price'=>$request->price,

            
        ]);
        return redirect('adminPages/Cosmotics');
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    
    /**
     * Remove the specified resource from storage.
     * 
     */
    public function destroy(int $cosmotic_id){
        Cosmotic::FindOrFail($cosmotic_id)->delete();
        return redirect('adminPages/Cosmotics');
    }
  
}
