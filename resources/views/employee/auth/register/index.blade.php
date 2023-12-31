@extends('commons.employee.dashboard_login')

@section('title', 'Register')

@push('css')
@endpush

@push('up_js')
@endpush

@section('content')
    <div class="main-content">
        <div class="flex">
            <!-- Left side image -->
            <img loading="lazy" class="lg-max:hidden h-screen w-[40%] object-cover" src="{{ Vite::asset('resources/assets/images/login_thumb.webp') }}" alt="login_thumb">

            <!-- Right side -->
            <div class="w-full flex flex-col justify-center items-center px-24 sm-max:px-10 py-24">
                <p class="text-2xl uppercase font-semibold font-karla tracking-widest text-gray-400 text-center">Register</p>

                <div class="w-[60%] sm-max:w-full mt-6">
                    <form method="post" action="{{ route('employee.send.confirmation.mail') }}">
                        @csrf
                        <!-- Email input -->
                        <div class="relative mt-6" data-te-input-wrapper-init>
                            <input
                                type="text"
                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                id="email-input"
                                placeholder="Email address"
                                name="email"
                            />
                            <label
                                for="email-input"
                                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-400 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                            >
                                Email address
                            </label>
                        </div>
                        <button type="submit" class="block w-full my-6 border bg-none border-light-coffee text-light-coffee px-3 py-[0.32rem] leading-[2.15] font-bold text-xl hover:bg-light-coffee hover:text-white transition-all duration-300 ease-linear uppercase">
                            Register
                        </button>
                    </form>
                    <div class="flex justify-center items-center">
                        <div class="h-[1px] bg-light-coffee w-full"></div>
                        <div class="mx-2 text-base tracking-widest font-light text-gray-400">OR</div>
                        <div class="h-[1px] bg-light-coffee w-full"></div>
                    </div>
                    <!-- Login with social media -->
                    <div class="flex flex-col xl:grid xl:grid-cols-2 xl:gap-x-1">
                        <!-- Login with Facebook -->
                        <a type="button" class="whitespace-nowrap flex justify-center items-center w-full xl:my-6 my-1 border bg-none border-primary text-primary px-3 py-[0.32rem] leading-[2.15] text-base hover:bg-primary hover:text-white transition-all duration-300 ease-linear">
                            <i class="fa-brands fa-square-facebook"></i>
                            <div class="px-2">Login with Facebook</div>
                        </a>
                        <!-- Login with Google -->
                        <a type="button" class="whitespace-nowrap flex justify-center items-center w-full xl:my-6 my-1 border bg-none border-red-500 text-red-500 px-3 py-[0.32rem] leading-[2.15] text-base hover:bg-red-500 hover:text-white transition-all duration-300 ease-linear">
                            <i class="fa-brands fa-square-google-plus"></i>
                            <div class="px-2">Login with Google</div>
                        </a>
                    </div>
                    <!-- Login -->
                    <div class="flex justify-center items-center">
                        <p class="inline-block pr-1 text-base tracking-wider text-gray-500">If you have an account?</p>
                        <a href="{{ route('employee.login') }}" class="inline-block text-base tracking-wider text-light-coffee">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('down_js')
@endpush
