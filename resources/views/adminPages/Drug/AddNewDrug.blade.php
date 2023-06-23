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

                        <div class=" h5 col-10 text-center">Refill / Add Drug</div>
                    </div>
             </div>
                
            <div class="container border rounded ">
                    <form class="row g-3" action="{{url('adminPages/Drug')}}"  method="POST">
                        
                    @csrf
                    <input type="hidden" name="_method" value="POST">
                      <div class="col-md-6">
                    
                         <label for="validationCustom01" class="form-label"><i class="bi bi-file-earmark-text-fill"></i> Drug Type</label>
                            <div class="container border p-2 rounded">
                            
                            <select name="drugType" class="form-select" id="validationCustom04" required>
                                
                                <option selected disabled value="">Choose...</option>
                                    
                                @foreach($drugtypes as $drugtype)
                                    <option value="{{ $drugtype->id}}">
                                    {{ $drugtype->brand_name }}({{ $drugtype->generic_name }}){{ $drugtype->dosage }}
                                    </option>
                                    @endforeach>
                             
                            </select>
                            </div>
                        

                            <div class="valid-feedback">

                            </div>
                        </div>
                                    

                        <div class="col-md-6">
                            <label for="validationServer03" class="form-label"><i class="bi bi-info-circle-fill"></i> Batch Number</label>
                            <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Batch Number" name="batch_number" aria-describedby="validationServer03Feedback" required>
                            @error('batch_number')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        
                        <div class="col-md-4">
                            <label for="validationServer04" class="form-label"><i class="bi bi-info-circle-fill"></i> Manufactured Date</label>
                            <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="mm/dd/yyyy" name="manufacture_date" aria-describedby="validationServer03Feedback" required>
                            @error('manufacture_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="validationServer05" class="form-label"><i class="bi bi-info-circle-fill"></i> Expiry Date</label>
                            <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="mm/dd/yyyy" name="expire_date" aria-describedby="validationServer05Feedback" required>
                            @error('expire_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="validationServer06" class="form-label"><i class="bi bi-info-circle-fill"></i> Amount(unit) </label>
                            <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Amount" name="amount" aria-describedby="validationServer05Feedback" required>
                            @error('amount')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="mb-2 mx-auto d-grid col-6">
                            <button class="btn btn-primary" name="submit" type="submit">Add Drug</button>
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