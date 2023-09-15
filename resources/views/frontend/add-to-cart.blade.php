@extends('frontend.layouts.master')
@section('main')
    <!-- component -->
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css')
    </style>
    <style>
        /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        module.exports = {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            plugins: [require('@tailwindcss/forms'),]
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        };
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        */
        .form-radio {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            display: inline-block;
            vertical-align: middle;
            background-origin: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            flex-shrink: 0;
            border-radius: 100%;
            border-width: 2px;
        }

        .form-radio:checked {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
            border-color: transparent;
            background-color: currentColor;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
        }

        @media not print {
            .form-radio::-ms-check {
                border-width: 1px;
                color: transparent;
                background: inherit;
                border-color: inherit;
                border-radius: inherit;
            }
        }

        .form-radio:focus {
            outline: none;
        }

        .form-select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23a0aec0'%3e%3cpath d='M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z'/%3e%3c/svg%3e");
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            background-repeat: no-repeat;
            padding-top: 0.5rem;
            padding-right: 2.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            background-position: right 0.5rem center;
            background-size: 1.5em 1.5em;
        }

        .form-select::-ms-expand {
            color: #a0aec0;
            border: none;
        }

        @media not print {
            .form-select::-ms-expand {
                display: none;
            }
        }

        @media print and (-ms-high-contrast: active),
        print and (-ms-high-contrast: none) {
            .form-select {
                padding-right: 0.75rem;
            }
        }
    </style>

    <div class="min-w-screen min-h-screen bg-gray-50 py-5">
        <div class="px-5">
            <div class="mb-2">
                <a href="#" class="focus:outline-none hover:underline text-gray-500 text-sm"><i
                        class="mdi mdi-arrow-left text-gray-400"></i>Back</a>
            </div>
            <div class="mb-2">
                <h1 class="text-3xl md:text-5xl font-bold text-gray-600">Checkout.</h1>
            </div>
            <div class="mb-5 text-gray-400">
                <a href="#" class="focus:outline-none hover:underline text-gray-500">Home</a> / <a href="#"
                    class="focus:outline-none hover:underline text-gray-500">Cart</a> / <span
                    class="text-gray-600">Checkout</span>
            </div>
        </div>
        <div class="w-full bg-white border-t border-b border-gray-200 px-5 py-10 text-gray-800">
            <div class="w-full">
                <div class="-mx-3 md:flex items-start">
                    <div class="px-3 md:w-7/12 lg:pr-10">
                        <div class="w-full mx-auto text-gray-800 font-light mb-6 border-b border-gray-200 pb-6">
                            @php
                                $total = 0;
                            @endphp

                            @foreach ($data as $product)
                                @php

                                    $total += $product['price'] * $product['quantity'];
                                @endphp
                                <div class="box" data-id={{ $product['id'] }}>
                                    <div class="w-full flex items-center mt-2">
                                        <div class="overflow-hidden rounded-lg w-16 h-16 bg-gray-50 border border-gray-200">
                                            <img src="{{ asset($product['image']) }}" alt="">
                                        </div>

                                        <div class="flex-grow pl-3">
                                            <h6 class="font-semibold uppercase text-gray-600">{{ $product['name'] }}
                                            </h6>
                                            <p class="text-gray-400">{{ $product['price'] }} x
                                                {{ $product['quantity'] }}
                                            </p>
                                        </div>


                                        <div class="flex space-x-10">
                                            <div data-th="quantity">
                                                <input type="number" class="update_cart quantity"
                                                    value="{{ $product['quantity'] }}" min="1" max="5">
                                            </div>
                                            <div>
                                                <span
                                                    class="font-semibold text-gray-600 text-xl">{{ $product['price'] * $product['quantity'] }}</span>
                                            </div>
                                            <div>
                                                <button type="button" data-item="{{ $product['name'] }}"
                                                    class="remove_cart focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="mb-6 pb-6 border-b border-gray-200">
                            <div class="-mx-2 flex items-end justify-end">
                                <div class="flex-grow px-2 lg:max-w-xs">
                                    <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Discount code</label>
                                    <div>
                                        <input
                                            class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                            placeholder="XXXXXX" type="text" />
                                    </div>
                                </div>
                                <div class="px-2">
                                    <button
                                        class="block w-full max-w-xs mx-auto border border-transparent bg-gray-400 hover:bg-gray-500 focus:bg-gray-500 text-white rounded-md px-5 py-2 font-semibold">APPLY</button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6 pb-6 border-b border-gray-200 text-gray-800">
                            <div class="w-full flex mb-3 items-center">
                                <div class="flex-grow">
                                    <span class="text-gray-600">Subtotal</span>
                                </div>
                                <div class="pl-3">
                                    <span class="font-semibold">$190.91</span>
                                </div>
                            </div>
                            <div class="w-full flex items-center">
                                <div class="flex-grow">
                                    <span class="text-gray-600">Taxes (GST)</span>
                                </div>
                                <div class="pl-3">
                                    <span class="font-semibold">$19.09</span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6 pb-6 border-b border-gray-200 md:border-none text-gray-800 text-xl">
                            <div class="w-full flex items-center">
                                <div class="flex-grow">
                                    <span class="text-gray-600">Total</span>
                                </div>
                                <div class="pl-3">
                                    <span class="font-semibold text-gray-400 text-sm">AUD</span> <span
                                        class="font-semibold">{{ $total }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 md:w-5/12">
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-3 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-3 items-center">
                                <div class="w-32">
                                    <span class="text-gray-600 font-semibold">Contact</span>
                                </div>
                                <div class="flex-grow pl-3">
                                    <span>Scott Windon</span>
                                </div>
                            </div>
                            <div class="w-full flex items-center">
                                <div class="w-32">
                                    <span class="text-gray-600 font-semibold">Billing Address</span>
                                </div>
                                <div class="flex-grow pl-3">
                                    <span>123 George Street, Sydney, NSW 2000 Australia</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 text-gray-800 font-light mb-6">
                            <div class="w-full p-3 border-b border-gray-200">
                                <div class="mb-5">
                                    <label for="type1" class="flex items-center cursor-pointer">
                                        <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type"
                                            id="type1" checked>
                                        <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png"
                                            class="h-6 ml-3">
                                    </label>`
                                </div>
                                <form action="{{ route('pay') }}" method="post">
                                    @csrf
                                    <div>
                                        <div class="mb-3">
                                            <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Name</label>
                                            <div>
                                                <input name="name"
                                                    class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                    type="text" value="{{ $user->name }}" />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="grid grid-cols-12 space-x-3">
                                                <div class="col-span-6">
                                                    <label
                                                        class="text-gray-600 font-semibold text-sm mb-2 ml-1">Email</label>
                                                    <input name="email"
                                                        class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                        type="email" value="{{ $user->email }}" />
                                                </div>
                                                <div class="col-span-6">
                                                    <label
                                                        class="text-gray-600 font-semibold text-sm mb-2 ml-1">Mobile</label>
                                                    <input name="mobile"
                                                        class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                        type="number" value="{{ $user->mobile }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Street
                                                Address</label>
                                            <div>
                                                <input name="street"
                                                    class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                    type="text" value="{{ $user->street }}" />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="grid grid-cols-12 space-x-3">
                                                <div class="col-span-6">
                                                    <label
                                                        class="text-gray-600 font-semibold text-sm mb-2 ml-1">City</label>
                                                    <input name="city"
                                                        class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                        type="text" value="{{ $user->city }}" />
                                                </div>
                                                <div class="col-span-6">
                                                    <label
                                                        class="text-gray-600 font-semibold text-sm mb-2 ml-1">Region</label>
                                                    <input name="region"
                                                        class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                        type="text" value="{{ $user->region }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="grid grid-cols-12 space-x-3">
                                                <div class="col-span-6">
                                                    <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Zip
                                                        code</label>
                                                    <input name="zip"
                                                        class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                        type="number" value="{{ $user->zip }}" />
                                                </div>
                                                <div class="col-span-6">
                                                    <label
                                                        class="text-gray-600 font-semibold text-sm mb-2 ml-1">Country</label>
                                                    <input name="country"
                                                        class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                        type="text" value="{{ $user->country }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 -mx-2 flex items-end">
                                            <div class="px-2 w-1/4">
                                                <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Expiration
                                                    date</label>
                                                <div>
                                                    <select
                                                        class="form-select w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                                                        <option value="01">01 - January</option>
                                                        <option value="02">02 - February</option>
                                                        <option value="03">03 - March</option>
                                                        <option value="04">04 - April</option>
                                                        <option value="05">05 - May</option>
                                                        <option value="06">06 - June</option>
                                                        <option value="07">07 - July</option>
                                                        <option value="08">08 - August</option>
                                                        <option value="09">09 - September</option>
                                                        <option value="10">10 - October</option>
                                                        <option value="11">11 - November</option>
                                                        <option value="12">12 - December</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="px-2 w-1/4">
                                                <select
                                                    class="form-select w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                </select>
                                            </div>
                                            <div class="px-2 w-1/4">
                                                <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Security
                                                    code</label>
                                                <div>
                                                    <input
                                                        class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                                        placeholder="000" type="text" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="w-full p-3">
                                <label for="type2" class="flex items-center cursor-pointer">
                                    <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type"
                                        id="type2">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg"
                                        width="80" class="ml-3" />
                                </label>
                            </div>
                        </div>
                        <div>
                            <button type="submit"
                                class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-2 font-semibold"><i
                                    class="mdi mdi-lock-outline mr-1"></i> PAY NOW</button>
                        </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <div class="p-5">
            <div class="text-center text-gray-400 text-sm">
                <a href="https://www.buymeacoffee.com/scottwindon" target="_blank"
                    class="focus:outline-none underline text-gray-400"><i class="mdi mdi-beer-outline"></i>Buy me a
                    beer</a> and help support open-resource
            </div>
        </div>
    </div>

    <!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="Buy me a beer" href="https://www.buymeacoffee.com/scottwindon" target="_blank"
                class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full"
                    src="https://i.pinimg.com/originals/60/fd/e8/60fde811b6be57094e0abc69d9c2622a.jpg" />
            </a>
        </div>
    </div>
@endsection
