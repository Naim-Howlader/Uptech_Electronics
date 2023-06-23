@extends('frontend.layouts.master')
@section('main')
    @include('frontend.components.slider')
    {{-- *Top Product section start here --}}
    <div class="top-product-section px-5 lg:px-10 pt-3 lg:pt-8">
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

                    {{-- <li data-filter=".campho"
                        class="whitespace-nowrap product-link md:px-5 md:py-2 product-link-h text-sm lg:text-base lg:font-semibold cursor-pointer  uppercase font-jost font-medium duration-150">
                        camera &
                        photo</li>
                    <li data-filter=".headphone"
                        class="whitespace-nowrap product-link md:px-5 md:py-2 product-link-h text-sm lg:text-base lg:font-semibold cursor-pointer  uppercase font-jost font-medium  duration-150">
                        headphone</li> --}}
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
                                        <span class="material-symbols-outlined">
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
        <div class="limited-product-section grid grid-cols-12 gap-y-5 sm:px-14 md:px-0 md:space-x-5 pb-10">
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
        <div class="relative w-64 h-64 bg-gray-200 flex justify-center items-center">
            <div
                class="opacity-0 transition-all duration-300 absolute inset-0 flex justify-center items-center hover:opacity-100 hover:rotate-180">
                <svg class="h-12 w-12 text-gray-600 transform rotate-0" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                </svg>
            </div>
        </div>
    @endsection
