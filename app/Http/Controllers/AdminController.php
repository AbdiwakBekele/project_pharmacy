<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
public function catagory(){
    return view('adminPages.Catagory.ManageCatagory');
}
public function addCatagory(){
    return view('adminPages.Catagory.AddNewCatagory');
}
public function adminlogin(){
    return view('adminPages.AdminLogin');
}
public function unit(){
    return view('adminPages.Unit.ManageUnit');
}
public function addUnit(){
    return view('adminPages.Unit.AddNewUnit');
}
public function drug(){
    return view('adminPages.Drug.ManageDrug');
}
public function addDrug(){
    return view('adminPages.Drug.AddNewDrug');
}

public function cosmotics(){
    return view('adminPages.Cosmotics.ManageCosmotics');
}
public function addCosmotics(){
    return view('adminPages.Cosmotics.AddNewCosmotic');
}




// public function drugtype(){
//     return view('adminPages.DrugType.ManageDrugType');
// }
// public function addNewDrugType(){
//     return view('adminPages.DrugType.AddNewDrugType');
// }



}
