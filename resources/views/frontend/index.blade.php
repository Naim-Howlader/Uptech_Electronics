@extends('frontend.layouts.master')
@section('main')
    @include('frontend.components.slider')
    {{-- *Top Product section start here --}}
    <div class="top-product-section px-5 lg:px-10 pt-3 lg:pt-8">
        <div class="md:flex items-center justify-between">
            <div class="title pb-4">
                <h2 class="font-jost font-semibold uppercase text-3xl lg:text-4xl">top products</h2>
            </div>
            <div class="pronav uppercase pb-3 overflow-x-scroll md:overflow-x-hidden">
                <ul class="flex space-x-5 ">
                    <li
                        class="whitespace-nowrap product-link md:px-5 md:py-2 product-link-h text-sm lg:text-base lg:font-semibold cursor-pointer  uppercase font-jost font-medium  duration-150">
                        audio
                        & video
                    </li>
                    <li
                        class="whitespace-nowrap product-link md:px-5 md:py-2 product-link-h text-sm lg:text-base lg:font-semibold cursor-pointer  uppercase font-jost font-medium duration-150">
                        camera &
                        photo</li>
                    <li
                        class="whitespace-nowrap product-link md:px-5 md:py-2 product-link-h text-sm lg:text-base lg:font-semibold cursor-pointer  uppercase font-jost font-medium  duration-150">
                        headphone</li>
                </ul>
            </div>
        </div>
        <div class="all-product pt-2 lg:pt-5">
            <div class="grid grid-cols-12 gap-x-5 gap-y-10">
                <div class="single-product border col-span-6 md:col-span-4 lg:col-span-3">
                    <div class="image relative group">
                        <img src="{{ asset('frontend image/product-1.jpg') }}" alt="" class="">
                        <div
                            class="hidden group-hover:block absolute bottom-3 w-full px-3 sm:px-10 group-hover:duration-500 transform[rotate(180deg)]">
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
                    <div class="text px-5 pt-5">
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
                        <h2 class="font-jost text-lg pb-1 font-medium">Beats by Dr. Dre Studio</h2>
                        <h2 class="font-jost text-red-500 font-bold pb-6"><span class="border border-red-500">$</span>70.00
                        </h2>
                    </div>

                </div>
                <div class="single-product border col-span-6 md:col-span-4 lg:col-span-3">
                    <div class="image relative group">
                        <img src="{{ asset('frontend image/product-3.jpg') }}" alt="" class="">
                        <div
                            class="hidden group-hover:block  absolute bottom-0 group-hover:bottom-5 group-hover:duration-500 w-full px-3 sm:px-10">
                            <div class="bg-white  flex justify-between px-3 py-2">
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
                    <div class="text px-5 pt-5">
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
                        <h2 class="font-jost text-lg pb-1 font-medium">Beats by Dr. Dre Studio</h2>
                        <h2 class="font-jost text-red-500 font-bold pb-6"><span class="border border-red-500">$</span>70.00
                        </h2>
                    </div>
                </div>
                <div class="single-product border col-span-6 md:col-span-4 lg:col-span-3">
                    <div class="image relative group">
                        <img src="{{ asset('frontend image/product-4.jpg') }}" alt="" class="">
                        <div class="hidden group-hover:block absolute bottom-3 w-full px-3 sm:px-10">
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
                    <div class="text px-5 pt-5">
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
                        <h2 class="font-jost text-lg pb-1 font-medium">Beats by Dr. Dre Studio</h2>
                        <h2 class="font-jost text-red-500 font-bold pb-6"><span class="border border-red-500">$</span>70.00
                        </h2>
                    </div>
                </div>
                <div class="single-product border col-span-6 md:col-span-4 lg:col-span-3">
                    <div class="image relative group">
                        <img src="{{ asset('frontend image/product-5.jpg') }}" alt="" class="">
                        <div class="hidden group-hover:block absolute bottom-3 w-full px-3 sm:px-10">
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
                    <div class="text px-5 pt-5">
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
                        <h2 class="font-jost text-lg pb-1 font-medium">Beats by Dr. Dre Studio</h2>
                        <h2 class="font-jost text-red-500 font-bold pb-6"><span
                                class="border border-red-500">$</span>70.00
                        </h2>
                    </div>
                </div>
                <div class="single-product border col-span-6 md:col-span-4 lg:col-span-3">
                    <div class="image relative group">
                        <img src="{{ asset('frontend image/product-6.jpg') }}" alt="" class="">
                        <div class="hidden group-hover:block absolute bottom-3 w-full px-3 sm:px-10">
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
                    <div class="text px-5 pt-5">
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
                        <h2 class="font-jost text-lg pb-1 font-medium">Beats by Dr. Dre Studio</h2>
                        <h2 class="font-jost text-red-500 font-bold pb-6"><span
                                class="border border-red-500">$</span>70.00
                        </h2>
                    </div>
                </div>
                <div class="single-product border col-span-6 md:col-span-4 lg:col-span-3">
                    <div class="image relative group">
                        <img src="{{ asset('frontend image/product-2.jpg') }}" alt="" class="">
                        <div class="hidden group-hover:block absolute bottom-3 w-full px-3 sm:px-10">
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
                    <div class="text px-5 pt-5">
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
                        <h2 class="font-jost text-lg pb-1 font-medium">Beats by Dr. Dre Studio</h2>
                        <h2 class="font-jost text-red-500 font-bold pb-6"><span
                                class="border border-red-500">$</span>70.00
                        </h2>
                    </div>
                </div>
                <div class="single-product border col-span-6 md:col-span-4 lg:col-span-3">
                    <div class="image relative group">
                        <img src="{{ asset('frontend image/product-7.jpg') }}" alt="" class="">
                        <div class="hidden group-hover:block absolute bottom-3 w-full px-3 sm:px-10">
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
                    <div class="text px-5 pt-5">
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
                        <h2 class="font-jost text-lg pb-1 font-medium">Beats by Dr. Dre Studio</h2>
                        <h2 class="font-jost text-red-500 font-bold pb-6"><span
                                class="border border-red-500">$</span>70.00
                        </h2>
                    </div>
                </div>
                <div class="single-product border col-span-6 md:col-span-4 lg:col-span-3">
                    <div class="image relative group">
                        <img src="{{ asset('frontend image/product-8.jpg') }}" alt="" class="">
                        <div class="hidden group-hover:block absolute bottom-3 w-full px-3 sm:px-10">
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
                    <div class="text px-5 pt-5">
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
                        <h2 class="font-jost text-lg pb-1 font-medium">Beats by Dr. Dre Studio</h2>
                        <h2 class="font-jost text-red-500 font-bold pb-6"><span
                                class="border border-red-500">$</span>70.00
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        {{-- *Top Product section end here --}}
    @endsection
