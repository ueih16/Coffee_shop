<header class="w-full py-6">
    <nav class="relative flex flex-row items-center justify-between">
        <a href="{{ route('employee.home') }}" class="text-xl font-semibold text-center cursor-pointer logo">
            CoffeeStyle.
        </a>
        <!-- End logo -->

        <ul
            class="hidden text-sm font-medium text-gray-500 uppercase lg:flex lg:items-center lg:justify-end lg:gap-8"
            id="ct-top-menu"
        >
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
            <li class="ct-top-menu-item">
                <a class="" href="https://github.com/ueih16" target="blank">Ueih</a>
            </li>
            @if(auth('employees')->check())
                <li class="ct-top-menu-item lg:hidden">
                    <a class="" href="{{ route('employee.logout') }}">logout</a>
                </li>
            @else
                <li class="ct-top-menu-item lg:hidden">
                    <a class="" href="{{ route('employee.login') }}">login</a>
                </li>
            @endif
        </ul>
        <!-- End list products -->

        <!-- Start cart -->
        @if(auth('employees')->check())
            <ul
                class="flex items-center justify-end ml-16 text-sm font-medium text-gray-500 uppercase lg:justify-start"
            >
                <li class="">
                    <a class="flex items-center ct-top-menu-item" href="javascript:void(0)">
                        <svg
                            class="w-6 h-6 ct-icon"
                            fill="none"
                            stroke-width="1.5"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                        <span class="mx-2">Cart</span>
                        <span class="text-white bg-orange-400 ct-badge-circle">99+</span>
                    </a>
                </li>
                <li class="ct-top-menu-item hidden lg:inline-block ml-2">
                    <a class="" href="{{ route('employee.logout') }}">Logout</a>
                </li>
            </ul>
        @else
            <!-- Login -->
            <div class="ct-top-menu-item hidden lg:inline-block">
                <a href="{{ route('employee.login') }}">Login</a>
            </div>
        @endif
        <!-- End cart -->

        <!-- Start list -->
        <div class="flex items-center hover:cursor-pointer lg:hidden">
            <div>
                <svg
                    class="w-6 h-6"
                    fill="none"
                    id="toggle-ct-top-menu"
                    stroke-width="1.5"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </div>
        </div>
        <!-- End list -->
    </nav>
</header>
