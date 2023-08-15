@extends('admin.layouts.master')
@section('main')
    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        {{--*Toast Message--}}
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
                <div class="ml-3 text-sm font-normal">{{session('success')}}</div>
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


        {{-- *Blog category table --}}
        <div class="px-6 py-6 w-full mx-auto ">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div
                            class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex items-center justify-between">
                            <h6 class="dark:text-white text-xl font-medium">Blog Category table</h6>
                            <div class="">
                                <a href="{{ route('blog_category.add') }}">
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
                                            <div class="relative overflow-x-auto">
                                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                                    <thead
                                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3">
                                                                #SL
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Status
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Category Name
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Category Image
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
                                                        @foreach ($blog_categories as $blog_category)
                                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                            <td class="px-6 py-4">
                                                                {{$sl++}}
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                Silver
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                {{$blog_category->name}}
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <img src="{{asset($blog_category->image)}}" alt="" srcset="" class="w-[100px] object-contain mx-auto">
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <a
                                                                    href="{{route('blog_category.edit', ['id'=> $blog_category->id])}}">
                                                                    <button type="button"
                                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
                                                                </a>
                                                                <a
                                                                    href="{{route('blog_category.delete', ['id' => $blog_category->id])}}">
                                                                    <button type="button" onclick="return confirm('Do you want to delete ?')"
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
            </div>
        </div>


        {{-- *Blog table --}}
        <div class="px-6 py-6 w-full mx-auto ">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div
                            class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex items-center justify-between">
                            <h6 class="dark:text-white text-xl font-medium">Blog table</h6>
                            <div class="">
                                <a href="{{route('blog.add')}}">
                                    <button type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                                        Blog</button>
                                </a>
                            </div>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <div class="relative overflow-hidden">
                                    <div class="relative  shadow-md sm:rounded-lg px-2">
                                        <div>
                                            <div class="relative overflow-x-auto">
                                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                                    <thead
                                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3">
                                                                #SL
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Status
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Title
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Category
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Description
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Image
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
                                                        @foreach ($blogs as $blog)
                                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                            <td class="px-6 py-4">
                                                                {{$sl++}}
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                Pending
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                {{$blog->name}}
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                {{$blog->categories->name}}
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                {{$blog->description}}
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <img src="{{asset($blog->image)}}" alt="" srcset="" class="w-[100px] object-contain mx-auto">
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <a
                                                                    href="">
                                                                    <button type="button"
                                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
                                                                </a>
                                                                <a
                                                                    href="">
                                                                    <button type="button" onclick="return confirm('Do you want to delete ?')"
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
            </div>
        </div>

    </main>
@endsection
