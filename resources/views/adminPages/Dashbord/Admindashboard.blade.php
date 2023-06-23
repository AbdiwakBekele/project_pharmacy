<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yimarot Pharmacy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <style>
        .hr {
            margin-bottom: -4px;
            margin-top: 5px;
        }
        
        .navbar-nav .nav-item:hover {
            /* background-color: black; */
            color: rgb(247, 212, 10);
        }
        
        .navbar-nav .nav-item :active {
            color: blue;
        }
    </style>

</head>

<body>

   
    <div class="section bg-light   " style="height:auto">
  
        <div class="row">
            <div class="col-sm-2 collapse-horizontal bg-black" id="collapseExample">
                <div class=" font-weight-bold text-center pt-5 ms-4 ">
                    <img src="{{url('/image/logo.jpeg')}}" style="max-width:100%; " alt="... " class="img-fluid rounded-circle ">
                    <p class="text-white ">Yimarot Pharmacy</p>


                </div>
                <ul class="navbar-nav d-flex ms-2 flex-column mt-4 w-100 font-size-20 text-white ">
                    <li class="nav-item ">
                        <a href="{{url('/home')}}" class="nav-link hover-overlay "><i class="bi bi-list-ul "></i> Dashboard</a>
                    </li>

                    <hr class="hr  " />
                    <li class="nav-item ">
                        <a href="{{url('adminPages/Catagory')}}" class="nav-link "> <i class="bi bi-house-fill "></i> Manage Catagory Types</a>
                    </li>

                    <hr class="hr " />
                    <var><var>    <li class="nav-item ">
                    <a href="{{url('adminPages/Unit')}}" class="nav-link "> <i class="bi bi-house-fill "></i> Manage Unit Types</a>
                </li>
    
                <hr class="hr " /></var></var>
                    <li class="nav-item ">
                        <a href="{{url('adminPages/DrugType')}}" class="nav-link "><i class="bi bi-list-ul "></i>Manage Drug Type</a>
                    </li>

                    <hr class="hr " />
                    <li class="nav-item ">
                        <a href="{{url('adminPages/Drug')}}" class="nav-link "><i class="bi bi-list-ul "></i>Manage Drug</a>
                    </li>

                    <hr class="hr " />
                    <li class="nav-item ">
                        <a href="{{url('adminPages/Cosmotics')}}" class="nav-link "><i class="bi bi-list-ul "></i>Manage Cosmotics</a>
                    </li>

                    <hr class="hr " />
                    <li class="mt-4">
                        <p>Inventory System | In Your Favor © 2023 All rights reserved | Designed By Omishtu-Joy</p>
                    </li>

                </ul>
            </div>

        <div class="col-sm-9 mt-2 container-fluid border border-end-0 ms-2   ">
                <div class="container mt-5">
                    <div class=" row shadow-lg p-3 mb-2 bg-white rounded ">
                        <div class="col-2 ">
                            <!-- <button class="btn " data-bs-toggle="collapse " id="menu-btn "><i class="bi bi-list-ul "></i></button> -->
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <i class="bi bi-list-ul "></i>
                          </button>
                        </div>
                        <div class=" h4 col-10 text-center "> <i class="bi bi-spotify "></i> Inventory System</div>
                    </div>
                </div>



                
            <div class="container m-5">
                <hr class="hr text-danger " />
                <div class="row mt-5">
                    <div class="col-sm-3 border border-info ms-3 " style="margin-bottom:16px">
                   <div class="row mt-2">
                    <div class="col  h3 " style="">
                   
                            <p>{{$totalCatagory}}</p></div>
                            <div class="col-10"> <i class="bi bi-caret-up-fill text-warning h3"></i></div>
                   </div>
                   <div class="row " style="margin-top:-16px">
                    <div class="h4">Total Catagory</div>
                   </div>
                    </div>
                    <div class="col-sm-3 border border-info ms-3 " style="margin-bottom:16px">
                    <div class="row mt-2">
                    <div class="col  h3"> 
                            <p>{{$totalUnit}}</</p></div>
                            <div class="col-10"> <i class="bi bi-caret-up-fill text-warning h3"></i></div>
                   </div>
                   <div class="row " style="margin-top:-16px">
                    <div class="h4">Total Unit</div>
                   </div>
                    </div>
                    <div class="col-sm-3 border border-info ms-3" style="margin-bottom:16px">
                    <div class="row mt-2">
                    <div class="col float-end h3"> 
                            <p>{{$totalCosmotic}}</</p></div>
                            <div class="col-10"> <i class="bi bi-caret-up-fill text-warning h3"></i></div>
                   </div>
                   <div class="row " style="margin-top:-16px">
                    <div class="h4">Total Cosmotics</div>
                   </div>
                    </div>
                </div>
                <div class="row mt-3 mb-5">
                    <div class="col-sm-3 border border-info ms-3" style="margin-bottom:16px">
                    <div class="row mt-2">
                    <div class="col float-end h3"> 
                            <p>{{$totalDrugType}}</</p></div>
                            <div class="col-10"> <i class="bi bi-caret-up-fill text-warning h3"></i></div>
                   </div>
                   <div class="row " style="margin-top:-16px">
                    <div class="h4">Total DrugType</div>
                   </div>
                    </div>
                    <div class="col-sm-3 border border-info ms-3" style="margin-bottom:16px">
                    <div class="row mt-2">
                    <div class="col float-end h3"> 
                            <p>{{$totalDrug}}</</p></div>
                            <div class="col-10"> <i class="bi bi-caret-up-fill text-warning h3"></i></div>
                   </div>
                   <div class="row " style="margin-top:-16px">
                    <div class="h4">Total Drug</div>
                   </div>
                    </div>
                    <div class="col-sm-3 border border-info ms-3" style="margin-bottom:16px">
                    <div class="row mt-2">
                    <div class="col float-end h3">
                            <p>{{$totalSales}}</p></div>
                            <div class="col-10"> <i class="bi bi-caret-up-fill text-warning h3"></i></div>
                   </div>
                   <div class="row " style="margin-top:-16px">
                    <div class="h4">Total Sales</div>
                   </div>
                    </div>
                </div>
                
                <hr class="hr text-danger " />
               
            </div>

            <div class="container p-3  border border-danger col-7 float-start ms-5">
                <div class="h3">
                    Total sales
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h5>Total Drugs</h5>
                        </div>
                        <div class="col h4">{{$totalDrugSales}}</div>
                        <div class="col">
                        <a href="{{url('adminPages/DrugDetails')}}"><div class="btn btn-primary">View Details</div></a>
                        </div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="h5">Total Cosmotics</div>
                        </div>
                        <div class="col h4">{{$totalCosmoticSales}}</div>
                        <div class="col">
                        <a href="{{url('adminPages/Details')}}"><div class="btn btn-primary">View Details</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js "></script>


</body>

</html>

</html>
</x-app-layout>
