<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yimarot Pharmacy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@1&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <style>
        .background1 {
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3)0%, rgba(255, 255, 255, 0.3) 100%), url({{url('/image/1.jpg')}});
            background-size: cover;
            max-width: 1330px;
            height: 920px;
            opacity: 0.9;
        }
        
        .container {
            position: relative;
            width: auto;
        }
        
        .image {
            display: block;
            width: auto;
            height: 600px;
        }
        
        
    </style>

</head>

<body>

  <div class="background1 container-fluid" id="mainbody">
     <div class="container col-6 p-5 w-50" >
              <div class="row">
                        <div class="h1 ms-5">Yimarot Pharmacy</div>

                        <p class="h1 text-white mt-4" style="font-family: 'Instrument Serif', cursive;">“The community’s best pharmacists”</p>
                        </div>

                   </div>
      <div class="container text-white ps-4  mt-2 w-75">
     
         
         <div class=" h3  h3-lead">
             <i class="bi bi-house-fill"></i> Sales
         </div>
         <hr>
         <div class=" h3 pb-1 h3-lead">
        
         </div>
       </div>

     <div class="container  border mt-5 w-50 ">
         <div class="d-grid gap-4 pt-4 ps-3 pb-4 ">
        
         <form class="row g-3" method="POST" action="{{url('SalesPages/ManageSales')}}">
            @csrf
            <div class="row">
            <div class="col-md-8">
                    
                    <label for="validationCustom01" class="form-label"><i class="bi bi-file-earmark-text-fill"></i> Drug Type</label>
                       <div class="container border p-2 rounded">
                       
                       <select name="drugsSalesName" class="form-select" id="validationCustom04" required>
                           
                           <option selected disabled value="">Choose...</option>
                             
                           @foreach($drugs as $drugtype)
                                    <option value="{{ $drugtype->id}}">
                                    {{ $drugtype->brand_name }}({{ $drugtype->generic_name }}){{ $drugtype->dosage }}
                                    </option>
                                    @endforeach>
                          
                       </select>
                       </div>
                   

                       <div class="valid-feedback">

                       </div>
                   </div>
                   <div class="col-md-8">

                                    <label for="validationServer03" class="form-label"><i class="bi bi-info-circle-fill"></i>Amount</label>
                                    <input type="text" class="form-control is-valid" id="validationServer03" name="amount" placeholder="amount " aria-describedby="validationServer03Feedback" required>


                                </div>

                                <div class="col-md-8">

                                    <label for="validationServer03" class="form-label"><i class="bi bi-info-circle-fill"></i>Price</label>
                                    <input type="text" class="form-control is-valid" id="validationServer03" name="price" placeholder="price " aria-describedby="validationServer03Feedback" required>


                                </div>


                   <div class="mb-2 mx-auto d-grid mt-4 col-6 ">
                       <button class="btn btn-primary" name="submit" type="submit">submit</button>
                   </div>
               
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