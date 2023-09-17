<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- /*icon*/ -->
        <link rel="apple-touch-icon" href="{{ Vite::asset('resources/assets/images/logo.jpg') }}">
        <link rel="shortcut icon" href="{{ Vite::asset('resources/assets/images/logo.jpg') }}">
        <title>Tailwind Project</title>
        @Vite(['resources/css/app.css']) <!-- Import CSS -->
        @Vite(['resources/js/app.js']) <!-- Import JS -->
    </head>

    <body>
        <div id="root">
            <!-- Start content wrapper -->
            <div class="content-wrapper max-w-screen-xl text-base mx-auto px-8 bg-slate-200">
                <!-- Start header section -->
                <header class="p-6 mx-auto">
                    <nav class="flex flex-row justify-between items-center font-karla relative">
                        <div class="logo basis-2/6 text-center text-xl font-semibold cursor-pointer">
                            CoffeeStyle.
                        </div> <!-- End logo -->

                        <ul id="ct-top-menu"
                            class="basis-3/6 hidden lg:flex lg:justify-end lg:items-center lg:gap-8 uppercase text-sm text-gray-500 font-medium">
                            <li class="ct-top-menu-item">
                                <a href="#" class="">Home</a>
                            </li>
                            <li class="ct-top-menu-item">
                                <a href="#" class="">products</a>
                            </li>
                            <li class="ct-top-menu-item">
                                <a href="#" class="">Blog</a>
                            </li>
                            <li class="ct-top-menu-item">
                                <a href="#" class="">About</a>
                            </li>
                            <li class="ct-top-menu-item">
                                <a href="#" class="">Contact</a>
                            </li>
                            <li class="ct-top-menu-item">
                                <a href="#" class="">StyleGuide</a>
                            </li>
                            <li class="ct-top-menu-item ct-top-menu-item-active">
                                <a href="https://github.com/ueih16" target="blank" class="">Ueih</a>
                            </li>
                        </ul> <!-- End list products -->

                        <ul
                            class="basis-3/6 lg:basis-1/6 flex justify-end lg:justify-start items-center ml-16 uppercase text-sm text-gray-500 font-medium">
                            <li class="">
                                <a class="ct-top-menu-item flex items-center" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ct-icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                    <span class="mx-2">Cart</span>
                                    <span class="ct-badge-circle bg-orange-400 text-white">99+</span>
                                </a>
                            </li>
                        </ul> <!-- End cart -->
                        <!-- Start list -->
                        <div class="basis-1/6 lg:hidden flex items-center hover:cursor-pointer px-4 sm:px-0">
                            <svg
                                id="toggle-ct-top-menu"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                            </svg>
                        </div> <!-- End list -->
                    </nav>
                </header>
                <!-- End header section -->

                <!-- Start main section -->
                <main>
                    <!-- Start slider -->
                    <div class="slider">
                        slider
                    </div>
                    <!-- End slider section -->

                    <!-- Start story -->
                    <div class="story">
                        story
                    </div>
                    <!-- End slider story -->

                    <!-- Start feature-mugs -->
                    <div class="feature-mugs">
                        feature-mugs
                    </div>
                    <!-- End slider feature-mugs -->

                    <!-- Start more-products -->
                    <div class="more-products">
                        more-products
                    </div>
                    <!-- End slider more-products -->

                    <!-- Start coffee-magazine -->
                    <div class="coffee-magazine">
                        coffee-magazine
                    </div>
                    <!-- End slider coffee-magazine -->

                    <!-- Start lifestyle-story -->
                    <div class="lifestyle-story">
                        lifestyle-story
                    </div>
                    <!-- End slider lifestyle-story -->

                    <!-- Start subscribe-us -->
                    <div class="subscribe-us">
                        subscribe-us
                    </div>
                    <!-- End slider subscribe-us -->
                </main>
                <!-- End main -->

                <!-- Start footer section -->
                <footer>
                    Footer
                </footer>
                <!-- End footer section -->
            </div>
            <!-- End content wrapper -->
        </div>
    </body>

</html>
