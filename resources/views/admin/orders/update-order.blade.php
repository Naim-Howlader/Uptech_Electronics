@extends('admin.layouts.master')
@section('main')
<main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    <div
        class="mx-10 bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border px-20 py-5">

        <form method="POST" action="{{route('order.update-status', ['id'=>$orders->id])}}" enctype="multipart/form-data">
            @csrf
            <h2 class="text-center text-xl font-medium">Update Order Status</h2>


            <div class="mb-6">
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Order Status</label>
                <select name="status" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="{{$orders->status}}">{{$orders->status}}</option>
                    <option value="Pending">Pending</option>
                    <option value="Approve">Approve</option>
                    <option value="Ready">Ready</option>
                    <option value="Go for delivery">Go for delivery</option>
                    <option value="Delivered">Delivered</option>
                    <option value="Cancel">Cancel</option>

                </select>
                <span class="text-red-500">
                        @error('category')

                        @enderror
                    </span>
            </div>


            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
        </form>

    </div>
</main>
@endsection
