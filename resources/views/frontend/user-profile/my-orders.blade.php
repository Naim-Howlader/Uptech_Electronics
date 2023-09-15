@extends('frontend.profile-layouts.master')
@section('main')
<main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
  <div class="px-10 ">
    <div class="bg-[#C8DAFD] rounded-lg">
      <div class="px-10 py-10 ">
        
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                    #SL
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Product Info
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Total Cost
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @php
                $serial = 1;
            @endphp
            @foreach ($orders as $order)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$serial++}}
                </th>
                <td class="px-6 py-4">
                    
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-transparent dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #SL
                </th>
                <th scope="col" class="px-6 py-3">
                    Product name
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
                    Total price
                </th>
            </tr>
        </thead>
        <tbody>
            @php
                $sl = 1;
                $single = (json_decode($order->cart_details));
                $total =0;
            @endphp
            @foreach ($single as $item)
            @php
                $total += $item->product_quantity*$item->product_price;
            @endphp
            <tr class="bg-[#C8DAFD] border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$sl++}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item->product_name}}
                </th>
                <td class="px-6 py-4">
                    {{$item->product_quantity}}
                </td>
                <td class="px-6 py-4">
                    <img src="{{asset($item->product_image)}}" alt="" srcset="" class="w-[100px]">
                </td>
                <td class="px-6 py-4">
                    {{$item->product_price}}
                </td>
                <td class="px-6 py-4">
                    {{$item->product_quantity*$item->product_price}}
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
                <td class="px-6 py-4 ">
                    @if ($order->status == 'Approve')
                    <span class="bg-green-100 text-green-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{$order->status}}</span>
                    @elseif ($order->status == 'Ready')
                    <span class="bg-blue-100 text-blue-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{$order->status}}</span>
                    @elseif ($order->status == 'Go for delivery')
                    <span class="bg-purple-100  text-purple-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">{{$order->status}}</span>
                    @elseif ($order->status == 'Delivered')
                    <span class="bg-indigo-100 text-indigo-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">{{$order->status}}</span>
                    @elseif ($order->status == 'Cancel')
                    <span class="bg-red-100 text-red-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{$order->status}}</span>
                    @else
                    <span class="bg-yellow-100 text-yellow-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{$order->status}}</span>
                    @endif
                </td>
                <td class="px-6 py-4 min-w-[200px]">
                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Order Cancel</button>
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