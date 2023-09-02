@extends('admin.layouts.master')
@section('main')
    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
{{-- Toast start --}}
@if (session('success'))
<div class="flex justify-end mr-5">
    <div id="toast-success"
        class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
        role="alert">
        <div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 text-sm font-normal">{{ session('success') }}</div>
        <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
            data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
</div>
@endif


{{-- Toast end --}}
<div class="px-6 py-6 w-full mx-auto">
    <div class="relative overflow-x-auto rounded-2xl">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
    <div class="relative overflow-x-auto">
    <div class="title mt-5">
        <h2 class="text-center text-2xl font-medium">Order Table</h2>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-14">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #SL
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Product Info
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Total Cost
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Mobile
                </th>
                <th scope="col" class="px-6 py-3 w-[100px]">
                    Address
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @php
                $sl = 1;
            @endphp
            @foreach ($orders as $order)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{-- @php
                 //echo $order->cart_details;
                  $single = (json_decode($order->cart_details));
                 //echo $single->product_id;
                 foreach ($single as  $value) {
                    echo $value->product_name;
                 }
                 @php
                        $single = (json_decode($order->cart_details));
                    @endphp
                    @foreach ($single as $item)
                        {{$item->product_name ." * ".$item->product_quantity}}<br>
                    @endforeach
                    @endphp --}}
                {{$sl++}}

                </th>
                <td class="px-6 py-4">

    <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   #SL
                </th>
                <th scope="col" class="px-6 py-3">
                    Item
                </th>
                <th scope="col" class="px-6 py-3">
                    Quantity
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Total Price
                </th>
            </tr>
        </thead>
        <tbody>
            @php

            $sl = 1;
            $single = (json_decode($order->cart_details));
            @endphp
            @php
            $total = 0;
            @endphp
            @foreach ($single as $item)
            @php

                $total +=$item->product_price*$item->product_quantity;
            @endphp
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th  class="px-6 py-4 ">
                    {{$sl++}}
                </th>
                <td class="px-6 py-4">
                    {{$item->product_name}}
                </td>
                <td class="px-6 py-4">
                    {{$item->product_quantity}}
                </td>
                <td class="px-6 py-4">
                    <img src="{{asset($item->product_image)}}" alt="" srcset="" class="w-[50px]">
                </td>
                <td class="px-6 py-4">
                    {{$item->product_price}}
                </td>
                <td class="px-6 py-4">
                    {{$item->product_price*$item->product_quantity}}
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    </div>

                </td>
                <td class="px-6 py-4">
                    {{$total}}
                </td>
                <td class="px-6 py-4">
                    {{$order->name}}
                </td>
                <td class="px-6 py-4">
                    {{$order->email}}
                </td>
                <td class="px-6 py-4">
                    {{$order->mobile}}
                </td>
                <td class="px-6 py-4">
                   <div class="w-[200px]">
                    {{$order->street.', '.$order->city.', '.$order->region}}
                   </div>
                </td>
                <td class="px-6 py-4">
                    @if ($order->status == 'Approve')
                    <span class="bg-green-100 text-green-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{$order->status}}</span>
                    @elseif ($order->status == 'Ready')
                    <span class="bg-blue-100 text-blue-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{$order->status}}</span>
                    @elseif ($order->status == 'Go for delivery')
                    <span class="bg-purple-100 text-purple-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">{{$order->status}}</span>
                    @elseif ($order->status == 'Delivered')
                    <span class="bg-indigo-100 text-indigo-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">{{$order->status}}</span>
                    @elseif ($order->status == 'Cancel')
                    <span class="bg-red-100 text-red-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{$order->status}}</span>
                    @else
                    <span class="bg-yellow-100 text-yellow-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{$order->status}}</span>
                    @endif

                 </td>
                <td class="px-6 py-4">
                    <a href="{{route('order.edit-status',['id'=>$order->id])}}">
                        <button type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">Edit</button>
                    </a>
                    <a href="{{route('invoice.generate', ['id'=>$order->id])}}">
                        <button type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Bill</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

        </div>
    </div>
</div>

    </main>
@endsection
