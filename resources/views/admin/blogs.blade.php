@extends('admin.layouts.master')
@section('main')
    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        {{-- *Blog category table --}}
        <div class="px-6 py-6 w-full mx-auto ">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div
                            class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex items-center justify-between">
                            <h6 class="dark:text-white text-xl font-medium">Category table</h6>
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                            <th scope="row"
                                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                Apple MacBook Pro 17"
                                                            </th>
                                                            <td class="px-6 py-4">
                                                                Silver
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                Laptop
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                $2999
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                            <th scope="row"
                                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                Microsoft Surface Pro
                                                            </th>
                                                            <td class="px-6 py-4">
                                                                White
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                Laptop PC
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                $1999
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-white dark:bg-gray-800">
                                                            <th scope="row"
                                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                Magic Mouse 2
                                                            </th>
                                                            <td class="px-6 py-4">
                                                                Black
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                Accessories
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                $99
                                                            </td>
                                                        </tr>
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
