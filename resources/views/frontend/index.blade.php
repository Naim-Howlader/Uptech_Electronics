@extends('frontend.layouts.master')
@section('main')
    @include('frontend.components.slider')
    {{-- *Top Product section start here --}}
    <div class="top-product-section px-2 sm:px-5 lg:px-10 pt-3 lg:pt-8">
        <div class="md:flex items-center justify-between">
            <div class="title pb-4">
                <h2 class="font-jost font-semibold uppercase text-3xl lg:text-4xl">top products</h2>
            </div>
            <div class="filter-button-group pronav uppercase pb-3 overflow-x-scroll md:overflow-x-hidden">
                <ul class="flex space-x-5 ">
                    <li data-filter="*"
                        class="whitespace-nowrap product-link md:px-5 md:py-2 product-link-h text-sm lg:text-base lg:font-semibold cursor-pointer  uppercase font-jost font-medium  duration-150">
                        all
                    </li>
                    @foreach ($categories as $category)
                        <li data-filter=".{{ $category->name }}"
                            class="whitespace-nowrap product-link md:px-5 md:py-2 product-link-h text-sm lg:text-base lg:font-semibold cursor-pointer  uppercase font-jost font-medium  duration-150">
                            {{ $category->name }}
                        </li>
                    @endforeach


                </ul>
            </div>
        </div>
        <div class="all-product pt-2 lg:pt-5">
            <div class="grid grid-cols-12  gap-y-10 all-pro">
                @foreach ($categories as $category)
                    @foreach ($category->products as $product)
                        <div
                            class="single-product px-2  col-span-6 md:col-span-4 lg:col-span-3 w-6/12 sm:w-4/12 lg:w-1/4 audvid campho {{ $category->name }}">
                            <div class="image relative group ">

                                <img src="{{ $product->image }}" alt="" class="">


                                <div
                                    class="opacity-0  transition-opacity duration-500 absolute bottom-3 w-full px-3 sm:px-10 group-hover:opacity-100 cursor-pointer ">
                                    <div class="bg-white flex justify-between px-3 py-2">
                                        <span class="material-symbols-outlined">
                                            shopping_cart
                                        </span>
                                        <span class="material-symbols-outlined">
                                            favorite
                                        </span>
                                        <span class="material-symbols-outlined">
                                            compare_arrows
                                        </span>
                                        <span class="material-symbols-outlined view-btn" data-modal-target="defaultModal"
                                            data-modal-toggle="defaultModal" data-id="{{ $product->id }}"
                                            data-image="{{ $product->image }}" data-name="{{ $product->name }}"
                                            data-price="{{ $product->price }}"
                                            data-feature="{{ $product->feature }}"data-description="{{ $product->mini_description }}"
                                            data-category="{{ $category->name }}" data-url="{{ $url }}">
                                            fullscreen
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="text px-5 mb-14 pt-5 border">
                                <div class="icon">
                                    <span class="text-[#FDDB19] font-bold text-xl">
                                        <ion-icon name="star"></ion-icon>
                                    </span>
                                    <span class="text-[#FDDB19] font-bold text-xl">
                                        <ion-icon name="star"></ion-icon>
                                    </span>
                                    <span class="text-[#FDDB19] font-bold text-xl">
                                        <ion-icon name="star"></ion-icon>
                                    </span>
                                    <span class="text-[#FDDB19] font-bold text-xl">
                                        <ion-icon name="star"></ion-icon>
                                    </span>
                                    <span class="text-[#FDDB19] font-bold text-xl">
                                        <ion-icon name="star"></ion-icon>
                                    </span>
                                </div>
                                <h2 class="font-jost text-lg pb-1 font-medium">{{ $product->name }}</h2>
                                <h2 class="font-jost text-red-500 font-bold pb-6"><span
                                        class="border border-red-500">$</span>{{ $product->price }}
                                </h2>
                            </div>

                            <!-- Main modal -->
                            <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-4xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                About Product
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="defaultModal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 space-y-6">
                                            <div class="modal-body grid grid-cols-12 gap-x-5">
                                                <div class="col-span-6">
                                                    <img alt="" srcset="" id="image">
                                                </div>
                                                <div class="col-span-6">
                                                    <h2 id="name" class="text-3xl font-jost font-medium"></h2>
                                                    <div class="icon pt-2 pb-6">
                                                        <span class="text-[#FDDB19] font-bold">
                                                            <ion-icon name="star"></ion-icon>
                                                        </span>
                                                        <span class="text-[#FDDB19] font-bold">
                                                            <ion-icon name="star"></ion-icon>
                                                        </span>
                                                        <span class="text-[#FDDB19] font-bold">
                                                            <ion-icon name="star"></ion-icon>
                                                        </span>
                                                        <span class="text-[#FDDB19] font-bold">
                                                            <ion-icon name="star"></ion-icon>
                                                        </span>
                                                        <span class="text-[#FDDB19] font-bold">
                                                            <ion-icon name="star"></ion-icon>
                                                        </span>
                                                    </div>
                                                    <h2 class="font-medium text-3xl font-jost pb-6" id="price"></h2>
                                                    <div class="text-gray-700 font-jost pb-10" id="feature">

                                                    </div>
                                                    <div class="text-gray-700 font-jost pb-10">
                                                        <p id="description"></p>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="bg-gray-900 capitalize px-12 py-3 text-white font-jost font-medium hover:bg-red-600 duration-300">add
                                                            to cart</button>
                                                    </div>
                                                    <div class="w-full px-10 mt-10 bg-gray-300 h-[1px]"></div>
                                                    <div class="pt-3 font-jost text-gray-700">
                                                        <h2>Category : <span id="category"></span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
        <div class="product-button mb-14 flex justify-center">
            <a href="{{ route('allproducts') }}">
                <button
                    class="uppercase text-white font-jost bg-black px-12 py-4 font-bold text-sm text-center hover:bg-red-600 duration-300 transition ease-in-out">shop
                    now</button>
            </a>
        </div>
        {{-- *Top Product section end here --}}

        {{-- *Limited product section start here --}}
        <div
            class="limited-product-section grid grid-cols-12 gap-y-5 sm:px-14 md:px-0 md:space-x-5 pb-10 overflow-x-hidden">
            <div class="single-box relative h-[300px] md:h-[350px] lg:h-[400px] overflow-hidden col-span-12 md:col-span-6">
                <img class="object-cover w-full h-full transition-transform duration-1000 transform hover:scale-125"
                    src="{{ asset('frontend image/vr.png') }}" alt="Image">
                <div class="absolute top-[15%] text-white px-5 lg:px-10 font-jost font-bold">
                    <h2 class="text-lg">limited edition</h2>
                    <h2 class="text-2xl lg:text-4xl pt-[20px] pb-[30px]">Virtual Reality<br>Glasses</h2>
                    <button class="uppercase text-black font-jost bg-white px-10 py-4 font-bold text-sm text-center ">shop
                        now</button>
                </div>
            </div>

            <div class="single-box relative h-[300px] lg:h-[400px] md:h-[350px] overflow-hidden col-span-12 md:col-span-6">
                <img class="object-cover w-full h-full transition-transform duration-1000 transform hover:scale-125"
                    src="{{ asset('frontend image/headphone.jpg') }}" alt="Image">
                <div class="absolute top-[15%] text-white px-5 lg:px-10 font-jost font-bold">
                    <h2 class="text-lg">limited edition</h2>
                    <h2 class="text-2xl lg:text-4xl pt-[20px] pb-[30px]">Put The World<br> On Mute</h2>
                    <button class="uppercase text-black font-jost bg-white px-10 py-4 font-bold text-sm text-center ">shop
                        now</button>
                </div>
            </div>
        </div>
        {{-- *Limited product section end here --}}



        {{-- *Category section start here --}}
        <div class="category-section relative overflow-hidden mb-5">
            <img src="{{ asset('frontend image/category2-bg.jpg') }}" alt="" srcset=""
                class="h-[450px] sm:h-[550px] lg:h-[600px] w-full">
            <div class="text absolute top-[10%] left-1/2 transform -translate-x-1/2 text-white ">
                <h2 class="text-xl md:text-2xl lg:text-[3xl] font-jost font-bold uppercase">shop by categories</h2>
                <div class="flex justify-center items-center space-x-1 mt-2">
                    <div class="w-1 h-3 bg-red-700"></div>
                    <div class="w-1 h-5 bg-red-700"></div>
                    <div class="w-1 h-3 bg-red-700"></div>
                    <div class="w-1 h-5 bg-red-700"></div>
                    <div class="w-1 h-3 bg-red-700"></div>
                </div>
            </div>
            <div
                class="slider absolute top-[30%] px-5 grid grid-cols-12 space-x-5 gap-x-10 owl-carousel owl-theme category">
                @foreach ($allCategories as $category)
                    <div class="single-item col-span-6 relative">
                        <a href="{{ route('singleCategoryProduct', ['id' => $category->id]) }}">
                            <img src="{{ $category->image }}" alt="">
                        </a>
                        <h2
                            class="bg-transparent text-black absolute bottom-[10%] left-1/2 transform -translate-x-1/2 text-[12px] font-medium font-jost uppercase">
                            {{ $category->name }}</h2>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- *Category section end here --}}
    </div>
@endsection
