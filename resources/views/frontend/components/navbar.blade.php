<div class="responsive-here font-jost">
    <div class="topnav text-sm bg-[#092240] text-white text-center px-5  font-normal pt-5 md:flex md:justify-between">
        <div class="text pb-3">
            <h2>New Offers This Weekend Only To Get 50%</h2>
        </div>
        <div class="icon flex justify-between gap-x-5 pb-3">
            <div class="single-icon flex "id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                <h2 class="text-[14px] cursor-pointer">EN</h2>
                <span class="material-symbols-outlined text-lg cursor-pointer">
                    expand_more
                </span>
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100  shadow w-24 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-b">English</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bangla</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="single-icon flex" id="dropdownDefaultButton2" data-dropdown-toggle="dropdown2">
                <h2 class="text-[14px] cursor-pointer">USD</h2>
                <span class="material-symbols-outlined text-lg cursor-pointer">
                    expand_more
                </span>
                <!-- Dropdown menu -->
                <div id="dropdown2" class="z-10 hidden bg-white divide-y divide-gray-100  shadow w-24 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton2">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-b">USD</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">TAKA</a>
                        </li>
                    </ul>
                </div>
            </div>
            
           <div class="flex justify-center items-center">
            @if (Route::has('login'))
           @auth
           <div>
            <a href="{{route('profile.dashboard')}}">
                <div class="">
                    <span class="material-symbols-outlined cursor-pointer ">
                        account_circle
                        </span>
                </div>
           </div>
           @endauth
            @endif
            </div>
            </a>
           
            @if (Route::has('login'))
                    
            @auth
                {{-- <a href="{{ url('/dashboard') }}" class="">Dashboard</a> --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <div :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <div class="flex cursor-pointer space-x-1">
                            <div class="text-xl">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </div>
                            <div>
                                <h2>Log out</h2>
                            </div>
                        </div>
                    </div>
                </form>
            @else
                <a href="{{ route('login') }}" class="pr-5">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="">Register</a>
                @endif
            @endauth
        
    @endif
        </div>
    </div>



    <nav class="bg-white border-gray-200 dark:bg-gray-900 py-4 lg:py-5 px-3">
        <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto  lg:grid lg:grid-cols-12">
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center   text-sm text-black rounded-lg lg:hidden  focus:outline-none  dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="lg:col-span-3">
                <h2 class="font-lobster text-4xl">Uptech Electronics</h2>
            </div>
            <div class="lg:hidden">
                <span class="material-symbols-outlined text-3xl">

                    shopping_cart
                </span>
            </div>
            <div class="hidden w-full lg:block lg:w-auto lg:col-span-7" id="navbar-default">
                <ul
                    class="flex flex-col text-[16px] font-medium p-4 lg:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 lg:flex-row lg:space-x-8 lg:mt-0 lg:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li class="nav">
                        <a href="{{ route('index') }}"
                            class="block py-2 pl-3 pr-4 text-white hover:text-red-500 duration-300 bg-blue-700 rounded lg:bg-transparent lg:text-black lg:p-0 lg:dark:text-blue-500 dark:bg-blue-600 lg:dark:bg-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li class="nav">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 lg:hover:text-red-500 duration-300 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Products
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="{{ route('allproducts') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">All
                                        Products</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Category</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign
                                    out</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav">
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 lg:hover:text-red-500 duration-300 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li class="nav">
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 lg:hover:text-red-500 duration-300 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About
                            us</a>
                    </li>
                    <li class="nav">
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 lg:hover:text-red-500 duration-300 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                    <li class="nav">
                        <a href="{{route('allblogs')}}"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 lg:hover:text-red-500 duration-300 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Blogs</a>
                    </li>
                </ul>
            </div>

            <div class="hidden lg:block lg:col-span-2 lg:text-right">

                <a href="{{ route('cart.view') }}" class="">
                    <span class="material-symbols-outlined text-3xl ">
                        shopping_cart
                    </span>
                    @if (!empty(session('cart')))
                        <span class="text-red-500  font-jost font-bold">{{ count((array) session('cart')) }}</span>
                    @endif
                </a>



            </div>
        </div>
    </nav>
</div>
