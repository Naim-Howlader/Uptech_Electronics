@extends('frontend.layouts.master')
@section('main')
    <div>
        <div class="relative">
            <img src="{{ asset('frontend image/topbar-2.jpg') }}" alt="" srcset=""
                class="w-full md:h-[200px] lg:h-[300px]">
            <div class="w-full h-full top-0 opacity-30 bg-gray-500 absolute"></div>
            <div class="absolute top-[30%] w-[100%] h[100%] flex justify-center items-center z-50">
                <h2 class="justify-center font-jost text-3xl sm:text-4xl lg:text-6xl text-white font-bold">
                    All
                    Products</h2>
            </div>
        </div>
    </div>
    <div class="all-product pt-2 lg:pt-5 px-2 sm:px-5">
        @foreach ($categories as $category)
            <h2 class="font-jost text-lg font-bold pl-5 pt-10 pb-5 md:text-xl lg:text-2xl">{{ $category->name }}</h2>
            <div class="grid grid-cols-12 gap-y-5 ">
                @foreach ($category->products as $product)
                    <div class="single-product px-2  col-span-6 md:col-span-4 lg:col-span-3  audvid campho ">
                        <div class="image relative group ">

                            <img src="{{ asset($product->image) }}" alt="" class="">


                            <div
                                class="hidden  group-hover:block absolute bottom-3 w-full px-3 sm:px-10 group-hover:duration-500 transform[rotate(180deg)]">
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
                        <div class="text px-5  pt-5 border">
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
            </div>
        @endforeach

    </div>
@endsection
