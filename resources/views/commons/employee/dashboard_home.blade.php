<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="ie=edge" http-equiv="X-UA-Compatible" />
    <!-- /*icon*/ -->
    <link href="{{ Vite::asset('resources/assets/images/logo.jpg') }}" rel="apple-touch-icon" />
    <link href="{{ Vite::asset('resources/assets/images/logo.jpg') }}" rel="shortcut icon" />
    <!-- /*title*/ -->
    <title>@yield('title')</title>
    <!-- Import CSS -->
    @Vite(['resources/css/app.css'])
    @stack('css')
    <!-- Import JS -->
    @Vite(['resources/js/app.js'])
    @stack('up_js')
    <!-- Import jQuery -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>
    </head>

    <body>
        <div class="font-karla" id="root">
            <!-- Start content wrapper -->
            <div class="max-w-screen-xl px-8 mx-auto text-base content-wrapper">
                <!-- Start header section -->
                <x-employee.navbar />
                <!-- End header section -->

                <!-- Start main section -->
                <main>

                    <!-- Start toast -->
                    <x-employee.toast />
                    <!-- End toast -->

                    <!-- Start slider -->
                    @yield('content')
                    <!-- End slider subscribe-us -->

                </main>
                <!-- End main -->

                <!-- Start footer section -->
                <x-employee.footer />
                <!-- End footer section -->
            </div>
            <!-- End content wrapper -->
        </div>
    </body>
    <!-- Stack JS -->
    @stack('down_js')
</html>
