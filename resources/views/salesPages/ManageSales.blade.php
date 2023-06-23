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
            height: 620px;
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
  
  <div class="container w-50 text-center p-5">
                    <div class="row ">
                        <div class="h1">Yimarot Pharmacy</div>

                        <p class="h1 text-white mt-4" style="font-family: 'Instrument Serif', cursive;">“The community’s best pharmacists”</p>
                        </div>

                   </div>
     <div class="container col-6 p-2" >
    
      <div class="container text-white ps-4  w-75">
         
         <div class=" h3  h3-lead">
             <i class="bi bi-house-fill"></i> Sales
         </div>
         <hr>
         <div class=" h3 h3-lead">
        
         </div>
       </div>

     <div class="container  border rounded  border-3 mt-5 w-50 ">
         <div class="d-grid gap-4 pt-4 ps-3 pb-4 ">

            <a href="{{url('SalesPages/DrugSales')}}"><button class="btn btn-primary col-6" type="button">Drug Sales</button></a>

            <a href="{{url('SalesPages/CosmoticSales')}}"><button class="btn btn-primary col-6" type="button">Cosmotics Sales</button></a>

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
  