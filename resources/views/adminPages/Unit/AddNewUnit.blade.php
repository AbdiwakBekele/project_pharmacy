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

   
    <div class="section bg-light" style="height:auto">

        <div class="row">
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

                <div class="container mt-5 mb-4">
                    <div class=" row shadow-lg p-1 mb-2 bg-info rounded ">

                        <div class=" h5 col-10 text-center"> Add New Unit</div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                <div class="container border mt-4 ">
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{url('adminPages/Unit')}}" class="was-validated row" method="POST">
                        @csrf
                        <div class="col mb-3 mt-3">
                            <label for="uname" class="form-label"><i class="bi bi-info-circle-fill"></i> Unit Name</label>
                            <input type="text" class="form-control" id="uname" placeholder="Unit Name" name="unit_name" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">fill-out</div>
                        </div>
                        <div class=" col mt-3 mb-3">
                            <label for="validationServer01" class="form-label"><i class="bi bi-info-circle-fill"></i> Unit Description</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Unit Description" name="unit_description" required>
                            <div class="valid-feedback">
                                good
                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="conatiner mx-auto d-grid col-6">
                            <button type="submit" name="submit" class="btn btn-primary mb-3 ">Add New Unit</button>

                        </div>


                    </form>
                </div>
                

            
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js "></script>


</body>

</html>

</html>
    </x-app-layout>