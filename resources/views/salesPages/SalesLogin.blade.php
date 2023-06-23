

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
            height: 400px;
        }
        
        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #305b69;
            overflow: hidden;
            width: 0;
            height: 100%;
            transition: .5s ease;
        }
        
        .container:hover .overlay {
            width: 100%;
        }
        
        .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            white-space: nowrap;
        }
    </style>
</head>

<body>


    <div class="background1 " id="mainbody">
        <div class="container-fluid pt-5 col-8 shadow my-auto " id="index">
            <div class="row">
                <div class="col-4">
                    <div class="container ps-2 ms-0">
                        <img src="{{url('/image/p1.avif')}}"  alt="admin" class=" image">
                        <div class="overlay">
                            <div class="text">Hello I am sales</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 border  pt-5">



                <x-auth-session-status class="mb-4" :status="session('status')" />

                 <form method="POST" action="{{ route('login') }}">
                @csrf

    <!-- Email Address -->
             <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
           </div>

    <!-- Password -->
              <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-black hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
        <div class="mt-4 text-center ">
        <x-primary-button class="ml-3 btn btn-primary ">
            {{ __('Log in') }}
        </x-primary-button>
        </div>

        
    </div>
</form>
                </div>
            </div>
        </div>

    </div>

</body>

</html>