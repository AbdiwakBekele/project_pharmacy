<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\CosmoticController;
use App\Http\Controllers\DrugTypeController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\SalesDetailController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');

});



// Route::resource('cosmotics',CosmoticController::class);


Route::get('/adminPages/AdminLogin',[AuthController::class,'admin'] );

Route::get('/salesPages/SalesLogin',[AuthController::class,'sales'] ); 


Route::get('/home',[AuthController::class,'dashboard'] )->middleware('auth')->name('home');  
 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/adminLogin',[AdminController::class,'adminlogin'] ); 
Route::get('/salesLogin',[SalesController::class,'saleslogin'] ); 

Route::prefix('adminPages')->group(function(){
    Route::controller(App\Http\Controllers\CatagoryController::class)->group(function(){
        Route::get('Catagory','index');
        Route::get('Catagory/AddNewCatagory','create');
        Route::post('Catagory','store');
    
        Route::get('Catagory/{catagory_id}/delete','destroy');


    });

    Route::controller(App\Http\Controllers\UnitController::class)->group(function(){
        Route::get('Unit','index');
        Route::get('Unit/AddNewUnit','create');
        Route::post('Unit','store');
        Route::get('Unit/{unit_id}/delete','destroy');
    

    });
    Route::controller(App\Http\Controllers\CosmoticController::class)->group(function(){
        Route::get('Cosmotics','index');
        Route::get('Cosmotic/AddNewCosmotic','create');
        Route::post('Cosmotic','store');
        Route::get('Cosmotic/{cosmotic_id}/delete','destroy');
    

    });
    Route::controller(App\Http\Controllers\DrugTypeController::class)->group(function(){
        Route::get('DrugType','index');
        Route::get('DrugType/AddNewDrugType','create');
        Route::post('DrugType','store');
        Route::get('DrugType/{drugtype_id}/delete','destroy');

    });
    Route::controller(App\Http\Controllers\DrugController::class)->group(function(){
        Route::get('Drug','index');
        Route::get('Drug/AddNewDrug','create');
        Route::post('Drug','store');
        Route::get('Drug/{drug_id}/delete','destroy');

    });
    Route::controller(App\Http\Controllers\SalesDetailController::class)->group(function(){
        Route::get('Details','index');
        Route::get('TodaysSales','today');

        Route::get('DrugDetails','Drugindex');
        Route::get('DrugTodaysSales','Drugtoday');

     

    });
});




// sales Pages
Route::prefix('SalesPages')->group(function(){
    Route::controller(App\Http\Controllers\SalesController::class)->group(function(){

        
        Route::get('ManageSales','index' ); 
        
    
        
    });
    Route::controller(App\Http\Controllers\CosmoticSalesController::class)->group(function(){

    
        Route::get('CosmoticSales','create' ); 
        Route::post('ManageSaless','store');
        
    });
    Route::controller(App\Http\Controllers\DrugSalesController::class)->group(function(){

        // Route::get('ManageSales','index' ); 
        Route::get('DrugSales','create' ); 
        Route::post('ManageSales','store');
        
    });

});

