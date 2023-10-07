<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="ie=edge" http-equiv="X-UA-Compatible" />
        <!-- /*icon*/ -->
        <link href="{{ Vite::asset('resources/assets/images/logo.jpg') }}" rel="apple-touch-icon" />
        <link href="{{ Vite::asset('resources/assets/images/logo.jpg') }}" rel="shortcut icon" />
        <title>Tailwind Project</title>
        @Vite(['resources/css/app.css'])
        <!-- Import CSS -->
        @Vite(['resources/js/app.js'])
        <!-- Import JS -->
    </head>

    <body>
        <div class="font-karla" id="root">
            <!-- Start content wrapper -->
            <div class="max-w-screen-xl px-8 mx-auto text-base content-wrapper">
                <!-- Start header section -->
                <header class="w-full py-6">
                    <nav class="relative flex flex-row items-center justify-between">
                        <div class="absolute pl-5 text-xl font-semibold text-center cursor-pointer logo basis-2/6">
                            CoffeeStyle.
                        </div><!-- End logo -->

                        <ul class="hidden text-sm font-medium text-gray-500 uppercase basis-3/6 lg:flex lg:items-center lg:justify-end lg:gap-8"
                            id="ct-top-menu">
                            <li class="ct-top-menu-item">
                                <a class="" href="javascript:void(0)">Home</a>
                            </li>
                            <li class="ct-top-menu-item">
                                <a class="" href="javascript:void(0)">products</a>
                            </li>
                            <li class="ct-top-menu-item">
                                <a class="" href="javascript:void(0)">Blog</a>
                            </li>
                            <li class="ct-top-menu-item">
                                <a class="" href="javascript:void(0)">About</a>
                            </li>
                            <li class="ct-top-menu-item">
                                <a class="" href="javascript:void(0)">Contact</a>
                            </li>
                            <li class="ct-top-menu-item">
                                <a class="" href="javascript:void(0)">StyleGuide</a>
                            </li>
                            <li class="px-2 ct-top-menu-item ct-top-menu-item-active">
                                <a class="" href="https://github.com/ueih16" target="blank">Ueih</a>
                            </li>
                        </ul><!-- End list products -->

                        <ul
                            class="flex items-center justify-end ml-16 text-sm font-medium text-gray-500 uppercase basis-3/6 lg:basis-1/6 lg:justify-start">
                            <li class="">
                                <a class="flex items-center ct-top-menu-item" href="javascript:void(0)">
                                    <svg class="w-6 h-6 ct-icon" fill="none" stroke-width="1.5" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class="mx-2">Cart</span>
                                    <span class="text-white bg-orange-400 ct-badge-circle">99+</span>
                                </a>
                            </li>
                        </ul><!-- End cart -->

                        <!-- Start list -->
                        <div class="flex items-center px-4 basis-1/6 hover:cursor-pointer sm:px-0 lg:hidden">
                            <svg class="w-6 h-6" fill="none" id="toggle-ct-top-menu" stroke-width="1.5"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div><!-- End list -->

                    </nav>
                </header><!-- End header section -->

                <!-- Start main section -->
                <main>
                    <!-- Start slider -->
                    <div
                        class="slider h-[530px] bg-[url('../assets/images/slide-picture.jpg')] bg-cover bg-bottom bg-no-repeat">
                        <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-40">
                            <div class="mx-16 text-center text-white">
                                <div class="my-3 text-xs font-semibold tracking-widest uppercase">
                                    Best to buy Coffee
                                </div>
                                <div class="mb-5 text-5xl font-medium">
                                    Coffee Mugs
                                </div>
                                <div class="mb-6 text-lg">
                                    The most versatile furniture system ever created. Designed to fit your life, made to
                                    move and grow.
                                </div>
                                <a class="flex justify-center" href="javascript:void(0)">
                                    <div
                                        class="px-8 py-4 text-sm font-semibold tracking-widest text-gray-900 uppercase bg-white cursor-pointer w-max hover:bg-opacity-90">
                                        Explore out products
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div><!-- End slider -->

                    <!-- Start story -->
                    <div class="flex items-center justify-center story">
                        <div class="py-32 text-center sm:px-4 md:px-32 lg:px-52 xl:px-64">
                            <div class="mb-6 text-3xl leading-10 text-gray-700">
                                Even the all-powerful Pointing has no control about the blind texts.
                            </div>
                            <div class="mb-6 leading-7 text-gray-500">
                                It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                                Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic life One day however a small line of blind text by the name of Lorem
                                Ipsum decided to leave for the far World of Grammar.
                            </div>
                            <a class="border-b-2 border-b-[#e3c3c3] py-2 text-[#A85F4B] transition-all ease-linear hover:border-b-[#a05a47] hover:text-[#8e5141]"
                                href="javascript:void(0)">
                                Read the full Story
                            </a>
                        </div>
                    </div><!-- End slider story -->


                    <!-- Start feature-mugs -->
                    <div class="ct-subheadline">
                        <div class="ct-subheadline-deco-line"></div>
                        <label class="ct-subheadline-label">Feature Mugs</label>
                        <div class="ct-subheadline-deco-line"></div>
                    </div>
                    <div class="feature-mugs w-[95%] lg:w-[80%] xl:w-[55%] mb-24 mx-auto">
                        <div class="flex justify-center items-center lg-max:grid lg-max:grid-cols-1 lg-max:place-items-center">
                            <div class="ct-product-card w-full">
                                <div class="mx-2 h-[540px] bg-[url('../assets/images/feature-mug-1.jpg')] bg-cover bg-no-repeat bg-center">
                                    <a href="javascript:void(0)" Alt="product img">
                                        <div class="relative w-full h-full ease-in-out hover:bg-gray-900 hover:bg-opacity-10 hover:transition-all hover:duration-400 group">
                                            <div class="absolute top-3 right-3 w-[100px] px-4 py-2 bg-white text-center font-semibold text-[#A85F4B]">On Sale.</div>
                                            <div class="absolute hidden group-hover:block group-hover:animate-fadeIn w-11/12 px-8 py-4 text-[12px] font-semibold tracking-widest text-center text-gray-900 uppercase -translate-x-1/2 bg-white cursor-pointer left-1/2 bottom-4 hover:bg-opacity-90">EXPLORE MUGS</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="javascript:void(0)" class="ct-product">
                                        <div class="text-xl mb-3 hover:opacity-80">Pink Premium Ceramic</div>
                                    </a>
                                    <div class="text-normal mt-2">
                                        <div class="inline-block text-xl text-[#A85F4B] mr-1">$50.00</div>
                                        <div class="relative inline-block text-gray-400 line-through">
                                            $69.00 USD
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ct-product-card w-full mt-5 lg:mt-0">
                                <div class="mx-2 h-[540px] bg-[url('../assets/images/feature-mug-2.jpg')] bg-cover bg-no-repeat bg-center">
                                    <a href="javascript:void(0)" Alt="product img">
                                        <div class="relative w-full h-full ease-in-out hover:bg-gray-900 hover:bg-opacity-10 hover:transition-all hover:duration-400 group">
                                            <div class="absolute top-3 right-3 w-[100px] px-4 py-2 bg-white text-center font-semibold text-[#A85F4B]">On Sale.</div>
                                            <div class="absolute hidden group-hover:block group-hover:animate-fadeIn w-11/12 px-8 py-4 text-[12px] font-semibold tracking-widest text-center text-gray-900 uppercase -translate-x-1/2 bg-white cursor-pointer left-1/2 bottom-4 hover:bg-opacity-90">EXPLORE MUGS</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="javascript:void(0)" class="ct-product">
                                        <div class="text-xl mb-3 hover:opacity-80">Golden Designers Mug</div>
                                    </a>
                                    <div class="text-normal mt-2">
                                        {{-- <div class="inline-block text-xl text-[#A85F4B] mr-1">$50.00</div> --}}
                                        <div class="relative inline-block text-gray-400">
                                            $69.00 USD
                                            {{-- <hr class="absolute left-0 right-0 w-full top-1/2 -translate-y-1/2 bg-gray-900"> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End slider feature-mugs -->

                    <!-- Start more-products -->
                    <div class="ct-subheadline">
                        <div class="ct-subheadline-deco-line"></div>
                        <label class="ct-subheadline-label">more products</label>
                        <div class="ct-subheadline-deco-line"></div>
                    </div>
                    <div class="more-products w-[95%] lg:w-[90%] xl:w-[65%] mb-24 mx-auto">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-x-1 lg:gap-y-8">
                            <div class="ct-product-card w-full">
                                <div class="mx-2 h-[380px] bg-[url('../assets/images/more-products-1.jpg')] bg-cover bg-no-repeat bg-center">
                                    <a href="javascript:void(0)" Alt="product img">
                                        <div class="relative w-full h-full ease-in-out hover:bg-gray-900 hover:bg-opacity-10 hover:transition-all hover:duration-400 group">
                                            <div class="absolute top-3 right-3 w-[100px] px-4 py-2 bg-white text-center font-semibold text-[#A85F4B]">On Sale.</div>
                                            <div class="absolute hidden group-hover:block group-hover:animate-fadeIn w-11/12 px-8 py-4 text-[12px] font-semibold tracking-widest text-center text-gray-900 uppercase -translate-x-1/2 bg-white cursor-pointer left-1/2 bottom-4 hover:bg-opacity-90">EXPLORE MUGS</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="javascript:void(0)" class="ct-product">
                                        <div class="text-xl hover:opacity-80">Red Love Cup</div>
                                    </a>
                                    <div class="text-normal mt-2">
                                        <div class="inline-block text-xl text-[#A85F4B] mr-1">$25.00</div>
                                        <div class="relative inline-block text-gray-400 line-through">
                                            $37.00 USD
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ct-product-card w-full">
                                <div class="mx-2 h-[380px] bg-[url('../assets/images/more-products-2.jpg')] bg-cover bg-no-repeat bg-center">
                                    <a href="javascript:void(0)" Alt="product img">
                                        <div class="relative w-full h-full ease-in-out hover:bg-gray-900 hover:bg-opacity-10 hover:transition-all hover:duration-400 group">
                                            <div class="absolute top-3 right-3 w-[100px] px-4 py-2 bg-white text-center font-semibold text-[#A85F4B]">On Sale.</div>
                                            <div class="absolute hidden group-hover:block group-hover:animate-fadeIn w-11/12 px-8 py-4 text-[12px] font-semibold tracking-widest text-center text-gray-900 uppercase -translate-x-1/2 bg-white cursor-pointer left-1/2 bottom-4 hover:bg-opacity-90">EXPLORE MUGS</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="javascript:void(0)" class="ct-product">
                                        <div class="text-xl hover:opacity-80">Black Tea Cup</div>
                                    </a>
                                    <div class="text-normal mt-2">
                                        <div class="inline-block text-xl text-[#A85F4B] mr-1">$15.00</div>
                                        <div class="relative inline-block text-gray-400 line-through">
                                            $29.00 USD
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ct-product-card w-full">
                                <div class="mx-2 h-[380px] bg-[url('../assets/images/more-products-3.jpg')] bg-cover bg-no-repeat bg-center">
                                    <a href="javascript:void(0)" Alt="product img">
                                        <div class="relative w-full h-full ease-in-out hover:bg-gray-900 hover:bg-opacity-10 hover:transition-all hover:duration-400 group">
                                            <div class="absolute top-3 right-3 w-[100px] px-4 py-2 bg-white text-center font-semibold text-[#A85F4B]">On Sale.</div>
                                            <div class="absolute hidden group-hover:block group-hover:animate-fadeIn w-11/12 px-8 py-4 text-[12px] font-semibold tracking-widest text-center text-gray-900 uppercase -translate-x-1/2 bg-white cursor-pointer left-1/2 bottom-4 hover:bg-opacity-90">EXPLORE MUGS</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="javascript:void(0)" class="ct-product">
                                        <div class="text-xl hover:opacity-80">B&W Essentials Mug</div>
                                    </a>
                                    <div class="text-normal mt-2">
                                        {{-- <div class="inline-block text-xl text-[#A85F4B] mr-1">$25.00</div> --}}
                                        <div class="relative inline-block text-gray-400">
                                            $19.00 USD
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ct-product-card w-full">
                                <div class="mx-2 h-[380px] bg-[url('../assets/images/more-products-4.jpg')] bg-cover bg-no-repeat bg-center">
                                    <a href="javascript:void(0)" Alt="product img">
                                        <div class="relative w-full h-full ease-in-out hover:bg-gray-900 hover:bg-opacity-10 hover:transition-all hover:duration-400 group">
                                            <div class="absolute top-3 right-3 w-[100px] px-4 py-2 bg-white text-center font-semibold text-[#A85F4B]">On Sale.</div>
                                            <div class="absolute hidden group-hover:block group-hover:animate-fadeIn w-11/12 px-8 py-4 text-[12px] font-semibold tracking-widest text-center text-gray-900 uppercase -translate-x-1/2 bg-white cursor-pointer left-1/2 bottom-4 hover:bg-opacity-90">EXPLORE MUGS</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="javascript:void(0)" class="ct-product">
                                        <div class="text-xl hover:opacity-80">Winter Style Mug</div>
                                    </a>
                                    <div class="text-normal mt-2">
                                        {{-- <div class="inline-block text-xl text-[#A85F4B] mr-1">$25.00</div> --}}
                                        <div class="relative inline-block text-gray-400">
                                            $25.00 USD
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ct-product-card w-full">
                                <div class="mx-2 h-[380px] bg-[url('../assets/images/more-products-5.jpg')] bg-cover bg-no-repeat bg-center">
                                    <a href="javascript:void(0)" Alt="product img">
                                        <div class="relative w-full h-full ease-in-out hover:bg-gray-900 hover:bg-opacity-10 hover:transition-all hover:duration-400 group">
                                            <div class="absolute top-3 right-3 w-[100px] px-4 py-2 bg-white text-center font-semibold text-[#A85F4B]">On Sale.</div>
                                            <div class="absolute hidden group-hover:block group-hover:animate-fadeIn w-11/12 px-8 py-4 text-[12px] font-semibold tracking-widest text-center text-gray-900 uppercase -translate-x-1/2 bg-white cursor-pointer left-1/2 bottom-4 hover:bg-opacity-90">EXPLORE MUGS</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="javascript:void(0)" class="ct-product">
                                        <div class="text-xl hover:opacity-80">Ceramic Tea</div>
                                    </a>
                                    <div class="text-normal mt-2">
                                        {{-- <div class="inline-block text-xl text-[#A85F4B] mr-1">$25.00</div> --}}
                                        <div class="relative inline-block text-gray-400">
                                            $46.00 USD
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ct-product-card w-full">
                                <div class="mx-2 h-[380px] bg-[url('../assets/images/more-products-6.jpg')] bg-cover bg-no-repeat bg-center">
                                    <a href="javascript:void(0)" Alt="product img">
                                        <div class="relative w-full h-full ease-in-out hover:bg-gray-900 hover:bg-opacity-10 hover:transition-all hover:duration-400 group">
                                            <div class="absolute top-3 right-3 w-[100px] px-4 py-2 bg-white text-center font-semibold text-[#A85F4B]">On Sale.</div>
                                            <div class="absolute hidden group-hover:block group-hover:animate-fadeIn w-11/12 px-8 py-4 text-[12px] font-semibold tracking-widest text-center text-gray-900 uppercase -translate-x-1/2 bg-white cursor-pointer left-1/2 bottom-4 hover:bg-opacity-90">EXPLORE MUGS</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="javascript:void(0)" class="ct-product">
                                        <div class="text-xl hover:opacity-80">Espresso Cup by Mugs.co</div>
                                    </a>
                                    <div class="text-normal mt-2">
                                        {{-- <div class="inline-block text-xl text-[#A85F4B] mr-1">$25.00</div> --}}
                                        <div class="relative inline-block text-gray-400">
                                            $25.00 USD
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ct-product-card w-full">
                                <div class="mx-2 h-[380px] bg-[url('../assets/images/more-products-7.jpg')] bg-cover bg-no-repeat bg-center">
                                    <a href="javascript:void(0)" Alt="product img">
                                        <div class="relative w-full h-full ease-in-out hover:bg-gray-900 hover:bg-opacity-10 hover:transition-all hover:duration-400 group">
                                            <div class="absolute top-3 right-3 w-[100px] px-4 py-2 bg-white text-center font-semibold text-[#A85F4B]">On Sale.</div>
                                            <div class="absolute hidden group-hover:block group-hover:animate-fadeIn w-11/12 px-8 py-4 text-[12px] font-semibold tracking-widest text-center text-gray-900 uppercase -translate-x-1/2 bg-white cursor-pointer left-1/2 bottom-4 hover:bg-opacity-90">EXPLORE MUGS</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="javascript:void(0)" class="ct-product">
                                        <div class="text-xl hover:opacity-80">Pink Premium Ceramic</div>
                                    </a>
                                    <div class="text-normal mt-2">
                                        {{-- <div class="inline-block text-xl text-[#A85F4B] mr-1">$25.00</div> --}}
                                        <div class="relative inline-block text-gray-400">
                                            $99.00 USD
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ct-product-card w-full">
                                <div class="mx-2 h-[380px] bg-[url('../assets/images/more-products-8.jpg')] bg-cover bg-no-repeat bg-center">
                                    <a href="javascript:void(0)" Alt="product img">
                                        <div class="relative w-full h-full ease-in-out hover:bg-gray-900 hover:bg-opacity-10 hover:transition-all hover:duration-400 group">
                                            <div class="absolute top-3 right-3 w-[100px] px-4 py-2 bg-white text-center font-semibold text-[#A85F4B]">On Sale.</div>
                                            <div class="absolute hidden group-hover:block group-hover:animate-fadeIn w-11/12 px-8 py-4 text-[12px] font-semibold tracking-widest text-center text-gray-900 uppercase -translate-x-1/2 bg-white cursor-pointer left-1/2 bottom-4 hover:bg-opacity-90">EXPLORE MUGS</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="javascript:void(0)" class="ct-product">
                                        <div class="text-xl hover:opacity-80">Summer Designer Cup</div>
                                    </a>
                                    <div class="text-normal mt-2">
                                        {{-- <div class="inline-block text-xl text-[#A85F4B] mr-1">$25.00</div> --}}
                                        <div class="relative inline-block text-gray-400">
                                            $29.00 USD
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ct-product-card w-full">
                                <div class="mx-2 h-[380px] bg-[url('../assets/images/more-products-9.jpg')] bg-cover bg-no-repeat bg-center">
                                    <a href="javascript:void(0)" Alt="product img">
                                        <div class="relative w-full h-full ease-in-out hover:bg-gray-900 hover:bg-opacity-10 hover:transition-all hover:duration-400 group">
                                            <div class="absolute top-3 right-3 w-[100px] px-4 py-2 bg-white text-center font-semibold text-[#A85F4B]">On Sale.</div>
                                            <div class="absolute hidden group-hover:block group-hover:animate-fadeIn w-11/12 px-8 py-4 text-[12px] font-semibold tracking-widest text-center text-gray-900 uppercase -translate-x-1/2 bg-white cursor-pointer left-1/2 bottom-4 hover:bg-opacity-90">EXPLORE MUGS</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="javascript:void(0)" class="ct-product">
                                        <div class="text-xl hover:opacity-80">No Handle Bar Cup</div>
                                    </a>
                                    <div class="text-normal mt-2">
                                        {{-- <div class="inline-block text-xl text-[#A85F4B] mr-1">$25.00</div> --}}
                                        <div class="relative inline-block text-gray-400">
                                            $34.00 USD
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End slider more-products -->

                    <!-- Start coffee-magazine -->
                    <div class="ct-subheadline">
                        <div class="ct-subheadline-deco-line"></div>
                        <label class="ct-subheadline-label">BUY 2 MUGS AND GET A COFFEE MAGAZINE FREE</label>
                        <div class="ct-subheadline-deco-line"></div>
                    </div>
                    <div class="coffee-magazine w-[95%] lg:w-[90%] xl:w-[65%] mb-24 mx-auto">
                        <div class="flex md:flex-row flex-col-reverse justify-start">
                            <div class="flex flex-col items-center md:items-start ct-magazine-post md:w-[45%] md:mr-5 md:mb-0 md:mt-0 mt-20">
                                <div class="text-[12px] font-semibold tracking-widest text-gray-400 uppercase mb-4">premium offer</div>
                                <div class="text-4xl font-medium mb-4">Get our Coffee Magazine</div>
                                <div class="mb-4 flex md:flex-col justify-center items">
                                    <div class="text-[12px] font-semibold tracking-widest text-gray-400 uppercase md:custom-leading">The most versatile furniture system ever created. <br class="hidden md:inline-block">Designed to fit your life.</div>
                                </div>
                                <button class="bg-slate-900 text-[12px] font-semibold tracking-custom text-white uppercase px-6 py-4 hover:bg-slate-800 transition-all ease-in-out duration-300">start shopping</button>
                            </div>
                            <div class="ct-magazine-images flex md:flex-row flex-col justify-center items-center md:justify-normal md:items-start">
                                <div class="ct-magazine-big-image md:mr-5 md:mb-0 mb-5 h-[280px] w-full md:w-[280px] bg-[url('../assets/images/magazine_image_01.jpg')] bg-cover bg-no-repeat bg-center"></div>
                                <div class="ct-magazine-small-image flex md:flex-col">
                                    <div class="ct-magazine-small-image-01 h-[130px] md:w-[160px] md:mb-5 md:mr-0 mr-5 w-full bg-[url('../assets/images/magazine_image_02.jpg')] bg-cover bg-no-repeat bg-center"></div>
                                    <div class="ct-magazine-small-image-02 h-[130px] md:w-[160px] w-full bg-[url('../assets/images/magazine_image_03.jpg')] bg-cover bg-no-repeat bg-center"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End slider coffee-magazine -->

                    <!-- Start lifestyle-story -->
                    <div class="ct-subheadline">
                        <div class="ct-subheadline-deco-line"></div>
                        <label class="ct-subheadline-label">lifestyle story</label>
                        <div class="ct-subheadline-deco-line"></div>
                    </div>
                    <div class="lifestyle-story">
                        lifestyle-story
                    </div><!-- End slider lifestyle-story -->

                    <!-- Start subscribe-us -->
                    <div class="subscribe-us">
                        subscribe-us
                    </div><!-- End slider subscribe-us -->

                </main><!-- End main -->

                <!-- Start footer section -->
                <footer>
                    Footer
                </footer><!-- End footer section -->

            </div><!-- End content wrapper -->

        </div>
    </body>

</html>
