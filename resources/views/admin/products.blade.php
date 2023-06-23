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

        <div class="w-full px-6 py-6 mx-auto">
            <!-- table 1 -->

            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div
                            class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex items-center justify-between">
                            <h6 class="dark:text-white text-xl font-medium">Category table</h6>
                            <div class="">
                                <a href="{{ route('category.add') }}">
                                    <button type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                                        Category</button>
                                </a>
                            </div>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">

                                <div class="relative overflow-hidden">

                                    <div class="relative  shadow-md sm:rounded-lg px-2">
                                        <div>
                                            <table class="w-full text-sm text-left text-black dark:text-gray-400">
                                                <thead
                                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                    <tr>
                                                        <th scope="col" class="px-6 py-3 text-center">
                                                            #SL
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-center">
                                                            Status
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-center">
                                                            Category name
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-center">
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $sl = 1;
                                                    @endphp
                                                    @foreach ($categories as $category)
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 text-center">
                                                            <td class="px-6 py-4">
                                                                {{ $sl++ }}
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                @if ($category->status == 'active')
                                                                    <span
                                                                        class="bg-green-100 text-green-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $category->status }}</span>
                                                                @elseif($category->status == 'inactive')
                                                                    <span
                                                                        class="bg-red-100 text-red-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{ $category->status }}</span>
                                                                @else
                                                                    <span
                                                                        class="bg-yellow-100 text-yellow-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{ $category->status }}</span>
                                                                @endif
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                {{ $category->name }}
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <a
                                                                    href="{{ route('category.edit', ['id' => $category->id]) }}">
                                                                    <button type="button"
                                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
                                                                </a>
                                                                <a
                                                                    href="{{ route('category.delete', ['id' => $category->id]) }}">
                                                                    <button type="button"
                                                                        onclick="return confirm('Do you want to Delete ?')"
                                                                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
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
                        </div>
                    </div>
                </div>
            </div>

            <!-- card 2 -->

            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div
                            class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex items-center justify-between">
                            <div>
                                <h6 class="dark:text-white text-xl font-medium">Projects table</h6>
                            </div>
                            <div class="">
                                <a href="{{ route('product.add') }}">
                                    <button type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                                        Products</button>
                                </a>
                            </div>
                        </div>
                        <div class="flex-auto px-2 pt-0 pb-2">
                            <div class="p-0 overflow-hidden">
                                <table class="w-full text-sm text-left text-black dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center">
                                                #SL
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center">
                                                Product name
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center">
                                                Product Category
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center">
                                                Product Price
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center">
                                                Product Image
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center">
                                                Product Mini Description
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center">
                                                Product Description
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center">
                                                Product Feature
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $sl = 1;
                                        @endphp
                                        @foreach ($products as $product)
                                            <tr>
                                                <td class="px-6 py-4 text-center">
                                                    {{ $sl++ }}
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    @if ($product->status == 'active')
                                                        <span
                                                            class="bg-green-100 text-green-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $product->status }}</span>
                                                    @elseif ($product->status == 'inactive')
                                                        <span
                                                            class="bg-red-100 text-red-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{ $product->status }}</span>
                                                    @else
                                                        <span
                                                            class="bg-yellow-100 text-yellow-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{ $product->status }}</span>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    {{ $product->name }}
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    {{ $product->category->name }}
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    {{ $product->price }}
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    <a href="{{ asset($product->image) }}">
                                                        <img src="{{ asset($product->image) }}" alt=""
                                                            class="w-[100px] object-contain">
                                                    </a>
                                                </td>
                                                <td class="px-6 py-4 flex">
                                                    <div class="min-w-[500px]">
                                                        {!! $product->mini_description !!}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 flex">
                                                    <div class="min-w-[500px]">
                                                        {!! $product->description !!}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 flex">
                                                    <div class="min-w-[500px]">
                                                        {!! $product->feature !!}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="{{ route('product.edit', ['id' => $product->id]) }}">
                                                        <button type="button"
                                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
                                                    </a>
                                                    <a href="{{ route('product.delete', ['id' => $product->id]) }}">
                                                        <button type="button"
                                                            onclick="return confirm('Do you want to Delete ?')"
                                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
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
            </div>
            <footer class="pt-4">
                <div class="w-full px-6 mx-auto">
                    <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                        <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                            <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                                ©
                                <script>
                                    document.write(new Date().getFullYear() + ",");
                                </script>
                                made with <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com"
                                    class="font-semibold dark:text-white text-slate-700" target="_blank">Creative Tim</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                            <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com"
                                        class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500"
                                        target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation"
                                        class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500"
                                        target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://creative-tim.com/blog"
                                        class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500"
                                        target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license"
                                        class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-in-out text-slate-500"
                                        target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        @push('datatable')
            <script>
                $(function() {
                    $('table').DataTable({
                            // autoWidth: true
                            responsive: true,
                        })
                        .columns.adjust()
                        .responsive.recalc();
                })
            </script>
        @endpush
    </main>
@endsection
