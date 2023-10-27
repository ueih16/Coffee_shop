<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="ie=edge" http-equiv="X-UA-Compatible" />
        <!-- /*icon*/ -->
        <link href="{{ Vite::asset('resources/assets/images/logo.jpg') }}" rel="apple-touch-icon" />
        <link href="{{ Vite::asset('resources/assets/images/logo.jpg') }}" rel="shortcut icon" />
        <title>@yield('title')</title>
        @Vite(['resources/css/app.css'])
        @stack('css')
        <!-- Import CSS -->
        @Vite(['resources/js/app.js'])
        @stack('up_js')
        <!-- Import JS -->
    </head>

    <body>
        <div class="font-karla" id="root">
            <!-- Start content wrapper -->
            <div class="max-w-screen-xl px-8 mx-auto text-base content-wrapper">
                <!-- Start header section -->
                <x-user.navbar />
                <!-- End header section -->

                <!-- Start main section -->
                <main>
                    <!-- Start slider -->
                    @yield('content')
                    <!-- End slider subscribe-us -->
                </main>
                <!-- End main -->

                <!-- Start footer section -->
                <x-user.footer />
                <!-- End footer section -->
            </div>
            <!-- End content wrapper -->
        </div>
        {{-- <script type="text/javascript" src="../../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script> --}}
    </body>
    <!-- Stack JS -->
    @stack('down_js')
</html>
