
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style type="text/css">
        .background1 {
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3)0%, rgba(255, 255, 255, 0.3) 100%), url({{url('/image/1.jpg')}});
            background-size: cover;
            max-width: 1330px;
            height: 620px;
            opacity: 0.9;
        }
    
        
    </style>
</head>

<body>
    <div class="well">
        <div class="row">
            <div class="background1">
                
                <div class="container w-50 mt-5 text-center p-5">
                    <div class="row mt-5">
                        <div class="h1">Yimarot Pharmacy</div>

                        <p class="h1 text-white mt-5" style="font-family: 'Instrument Serif', cursive;">“The community’s best pharmacists”</p>
                    </div>

                </div>
                <div class="row text-center">

                    <div class="col-11 mt-3">
                        <a class="btn btn-primary col-1" href="{{url('adminLogin')}}">Admin</a>

                        <a class="btn btn-primary ms-4 col-1" href="{{url('salesLogin')}}">Sales</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>

</html>