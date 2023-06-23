<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="display-3 text-white text-center">Drug Sales Details</div>
        <div class="row">
            <a href="{{url('/home')}}"><div class="btn btn-primary float-end col-1 me-5">Back</div></a>
        </div>
        
        <div class="row text-center">
            <div class="col-2"></div>
            <div class="border  mt-5 ms-5 col-8">
                <table class="table table-striped text-white">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Drug Name</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($drugs as $drug)
                            <tr>
                                <th scope="row">{{ ++$i }}</th>
                                <td> {{$drug->drugs->brand_name}}({{$drug->drugs->generic_name}}){{$drug->drugs->dosage}}</td>

                                 <td>{{ $drug->amount }}</td>
                                <td>{{ $drug->price }}</td>
                            </tr>

                        @endforeach 
   
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
                <div class="col-2"></div>
                
                <div class="col-8">
                    <a href="{{url('adminPages/DrugTodaysSales')}}"><div class="btn btn-primary  col-3 mt-5 ms-5">Today's Sales</div></a>
                    
                </div>
                <div class="col-2">
                        <div class="container border border-3 border-black col-1 mt-5 text-center pt-3 h3"><p>{{$todaySalesDrug}}</p></div>
                 </div>
               

        </div>
       
    </div>
</body>
</html>
</x-app-layout>