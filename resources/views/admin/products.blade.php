@extends('admin.layouts.master')
@section('main')

<main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
{{--Toast start--}}
@if (session('success'))
<div class="flex justify-end mr-5">
    <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 text-sm font-normal">{{session('success')}}</div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
</div>
@endif


{{--Toast end--}}

    <div class="w-full px-6 py-6 mx-auto">
      <!-- table 1 -->

      <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex items-center justify-between">
              <h6 class="dark:text-white text-xl font-medium">Category table</h6>
              <div class="">
                <a href="{{route('category.add')}}">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Category</button>
                </a>
            </div>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
              <div class="p-0 overflow-x-auto">

<div class="relative overflow-x-auto">

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div>
        <table class="w-full text-sm text-left text-black dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 text-center">
                    <td class="px-6 py-4">
                        {{$sl++}}
                    </td>
                    <td class="px-6 py-4">
                        @if ($category->status == 'active')
                        <span class="bg-green-100 text-green-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $category->status }}</span>
                        @elseif($category->status == 'inactive')
                        <span class="bg-red-100 text-red-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{ $category->status }}</span>
                        @else
                        <span class="bg-yellow-100 text-yellow-800 text-base capitalize font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{ $category->status }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                       {{$category->name}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{route('category.edit', ['id' => $category->id])}}">
                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
                        </a>
                        <a href="{{route('category.delete', ['id'=> $category->id])}}">
                            <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
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
          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex items-center justify-between">
              <div>
                <h6 class="dark:text-white text-xl font-medium">Projects table</h6>
              </div>
              <div class="">
                <a href="">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Products</button>
                </a>
            </div>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
              <div class="p-0 overflow-x-auto">
                <table class="items-center justify-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                  <thead class="align-bottom">
                    <tr>
                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Project</th>
                      <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Budget</th>
                      <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                      <th class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Completion</th>
                      <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap"></th>
                    </tr>
                  </thead>
                  <tbody class="border-t">
                    <tr>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9" alt="spotify" />
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Spotify</h6>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$2,500</p>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">working</span>
                      </td>
                      <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex items-center justify-center">
                          <span class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">60%</span>
                          <div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="flex flex-col justify-center w-3/5 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-blue-700 to-cyan-500 whitespace-nowrap" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <button class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400">
                          <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-invision.svg" class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9" alt="invision" />
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Invision</h6>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$5,000</p>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">done</span>
                      </td>
                      <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex items-center justify-center">
                          <span class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">100%</span>
                          <div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="flex flex-col justify-center w-full h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-emerald-500 to-teal-400 whitespace-nowrap" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <button class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400" aria-haspopup="true" aria-expanded="false">
                          <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-jira.svg" class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9" alt="jira" />
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Jira</h6>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$3,400</p>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">canceled</span>
                      </td>
                      <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex items-center justify-center">
                          <span class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">30%</span>
                          <div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="flex flex-col justify-center h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-red-600 to-orange-600 w-3/10 whitespace-nowrap" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <button class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400" aria-haspopup="true" aria-expanded="false">
                          <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-slack.svg" class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9" alt="slack" />
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Slack</h6>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$1,000</p>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">canceled</span>
                      </td>
                      <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex items-center justify-center">
                          <span class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">0%</span>
                          <div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="flex flex-col justify-center w-0 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-emerald-500 to-teal-400 whitespace-nowrap" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <button class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400" aria-haspopup="true" aria-expanded="false">
                          <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-webdev.svg" class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9" alt="webdev" />
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Webdev</h6>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$14,000</p>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">working</span>
                      </td>
                      <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex items-center justify-center">
                          <span class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">80%</span>
                          <div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="flex flex-col justify-center w-4/5 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-blue-700 to-cyan-500 whitespace-nowrap" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <button class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400" aria-haspopup="true" aria-expanded="false">
                          <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-xd.svg" class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9" alt="xd" />
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Adobe XD</h6>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$2,300</p>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">done</span>
                      </td>
                      <td class="p-2 text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                        <div class="flex items-center justify-center">
                          <span class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">100%</span>
                          <div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="flex flex-col justify-center w-full h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-green-600 to-lime-400 whitespace-nowrap" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                        <button class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400" aria-haspopup="true" aria-expanded="false">
                          <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                        </button>
                      </td>
                    </tr>
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
                <a href="https://www.creative-tim.com" class="font-semibold dark:text-white text-slate-700" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
              <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

@endsection

