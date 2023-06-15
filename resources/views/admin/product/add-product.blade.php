@extends('admin.layouts.master')
@section('main')
<main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
<div class="mx-10 bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border px-20 py-5">

<form method="POST" action="{{route('category.insert')}}">
    @csrf
    <h2 class="text-center text-xl font-medium">Add Category</h2>
    <div class="mb-6">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
      <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <span class="text-red-500">
        @error('name')
          {{$message}}
      @enderror
      </span>
    </div>
    <label class="relative inline-flex items-center cursor-pointer">
        <input type="checkbox" name="status" class="sr-only peer">
        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>

      </label>
      <br><br>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>

</div>
  </main>
@endsection
