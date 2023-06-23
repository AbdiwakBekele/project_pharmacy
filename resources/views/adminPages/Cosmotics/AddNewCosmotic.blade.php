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
            < <div class="row">
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

                        <div class=" h5 col-10 text-center"> Add New Cosmotics</div>
                    </div>
                </div>
                <div class="col-lg-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                <div class="container border rounded ">
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
                    <form class="row g-3"  action="{{url('adminPages/Cosmotic')}}" method="POST">
                        @csrf
                        <div class="col-md-4">
                            <label for="validationServer04" class="form-label"><i class="bi bi-info-circle-fill"></i> Cosmotics Name</label>
                            <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Cosmotic Name" name="cosmotic_name" aria-describedby="validationServer03Feedback" required>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                fill-out
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationServer04" class="form-label"><i class="bi bi-info-circle-fill"></i> Expiry Date</label>
                            <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="mm/dd/yyyy" name="cosmotic_exp" aria-describedby="validationServer03Feedback" required>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                fill-out
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <label for="validationServer05" class="form-label"><i class="bi bi-info-circle-fill"></i> Total Amount (unit)</label>
                            <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Total amount" name="amount" aria-describedby="validationServer05Feedback" required>
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                fill-out
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationServer06" class="form-label"><i class="bi bi-info-circle-fill"></i> Price(ETB) </label>
                            <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Selling Price" name="price" aria-describedby="validationServer05Feedback" required>
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                fill-out
                            </div>
                        </div>

                        <div class="mb-2 mx-auto d-grid col-6">
                            <button class="btn btn-primary" type="submit" name="submit">Add New Cosmotics</button>
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