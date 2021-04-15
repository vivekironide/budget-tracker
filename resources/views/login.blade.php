<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <style>
        input {
            background: 0 0;
        }
    </style>
</head>
<body class="font-sans text-gray-900">
   <div class="h-screen grid grid-cols-1 sm:px-24 md:px-36 lg:px-24 lg:grid-cols-3 place-content-center relative">
        <div class="shadow-lg rounded py-12 px-4 sm:px-8 lg:col-start-2">
            <form class="w-full flex flex-col">
                <div class="text-3xl text-center font-semibold uppercase block my-7">
                    Welcome
                </div>

                <div class="flex text-3xl justify-center items-center rounded-full bg-gray-200 mx-auto my-0 w-20 h-20">
                    <i class="fa fa-money"></i>
                </div>

                <div class="text-2xl text-center uppercase block my-7">
                    Log In
                </div>

                <div class="field mt-5">
                    <label for="email" class="text-base">Email</label>
                    <input type="email" name="email" id="email" class="outline-none border-b-2 border-solid border-gray-200 w-full text-gray-700 leading-tight py-3 px-2">
                </div>

                <div class="mt-5">
                    <label for="password" class="text-base">Password</label>
                    <input type="password" name="password" id="password" class="outline-none border-b-2 border-solid border-gray-200 w-full text-gray-700 leading-tight py-3 px-2">
                </div>

                <div class="mt-10">
                    <button class="w-full bg-button text-white px-7 py-4 rounded transition duration-500 transform hover:bg-white hover:text-button shadow-lg uppercase tracking-widest block">Log In</button>
                </div>

                <div class="mt-10 flex justify-between">
                    <div class="some">
                        <input class="inp-cbx" id="morning" type="checkbox" />

                        <label class="cbx cursor-pointer overflow-hidden select-none" for="morning">
                           <span class="mt-0.5">
                              <svg width="12px" height="10px">
                                 <use xlink:href="#check"></use>
                              </svg>
                           </span>
                           <span class="p-2">Remember Me</span>
                        </label>

                        <svg class="inline-svg">
                           <symbol id="check" viewbox="0 0 12 10">
                              <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                           </symbol>
                        </svg>
                    </div>

                    <a href="" class="">Forgot Password?</a>
                </div>

                <div class="flex justify-center content-center mt-10">
                    <p>Dont have an account? <a href="" class="underline">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</body>
</html>
