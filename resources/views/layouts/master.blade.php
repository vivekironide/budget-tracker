<!doctype html>
<html lang="en">
<head>
    @section('meta')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @show


    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
</head>
<body class="dark:bg-gray-800 dark:text-white text-gray-800">
    <header>
        <nav class="flex justify-between shadow-lg px-6 ">
            <div class="py-6">
                <h1 class="font-bold dark:text-white">Budget Tracker</h1>
            </div>

            <div class="menu text-center">
                <ul>
                    <li class="py-6 px-3 transition-all duration-200 dark:hover:bg-gray-600"><a href="" class="text-white">Dashboard</a></li>
                </ul>
            </div>

            <div class="menu-right py-3 text-right">
                <div class="relative">
                    <button class="dark:bg-gray-600 shadow-lg transition duration-500 dark:text-white font-medium py-2 md:px-6 px-4 rounded-full outline-none focus:outline-none dropdown">
                        <span>Vivek Sandran</span>
                        <i class="fa fa-chevron-down transition-all transform duration-200"></i>
                    </button>

                    <div class="absolute right-0 text-left w-48 dark:bg-gray-600 bg-white rounded shadow-lg hidden focus:outline-none ring-black ring-opacity-5 dropdown-menu px-6 py-6">
                        <a href="" class="block px-4 py-4 dark:text-gray-100 dark:hover:bg-gray-800 text-sm hover:bg-gray-200">
                            <i class="fa fa-user-circle"></i> Profile
                        </a>
                        <a href="" class="block px-4 py-4 dark:text-gray-100 dark:`hover:bg-gray-800 text-sm hover:bg-gray-200">
                            <i class="fa fa-cog"></i> Settings
                        </a>
                        <a href="" class="block px-4 py-4 dark:text-gray-100 dark:hover:bg-gray-800 text-sm hover:bg-gray-200">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')
</body>

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        $( document ).ready( function() {
            $( '.dropdown' ).on( 'click', function() {
                $( this ).find( 'i' ).last().toggleClass( 'rotate-180' );

                $( this ).siblings( '.dropdown-menu' ).fadeToggle( "fast" );
            } );

            $( document ).on( 'click', function( e ) {
                let dropdownButtonEl = $( '.dropdown' );

                if( !dropdownButtonEl.is( e.target ) && dropdownButtonEl.has( e.target ).length === 0 ) {
                    $( '.dropdown-menu' ).fadeOut( 'fast' );
                    dropdownButtonEl.find( 'i' ).last().removeClass( 'rotate-180' );
                }
            } )
        } )
    </script>
@show
</html>
