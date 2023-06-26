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
            <div class="grid grid-cols-12 gap-y-5 all-pro">
                @foreach ($category->products as $product)
                    {{-- <div class="single-product px-2  col-span-6 md:col-span-4 lg:col-span-3  audvid campho ">
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

                    </div> --}}
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

                        <!-- Modal toggle -->
                        {{-- <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                Toggle modal
                            </button> --}}

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
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
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
                                    {{-- <div
                                            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button data-modal-hide="defaultModal" type="button"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                                accept</button>
                                            <button data-modal-hide="defaultModal" type="button"
                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                        </div> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        @endforeach

    </div>
@endsection
