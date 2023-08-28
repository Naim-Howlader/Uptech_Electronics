@extends('frontend.layouts.master');
@section('main')
<div>
    <div class="relative">
        <img src="{{ asset('frontend image/topbar-2.jpg') }}" alt="" srcset=""
            class="w-full md:h-[200px] lg:h-[300px]">
        <div class="w-full h-full top-0 opacity-30 bg-gray-500 absolute"></div>
        <div class="absolute top-[30%] w-[100%] h[100%] flex justify-center items-center z-50">
            <h2 class="justify-center font-jost text-3xl sm:text-4xl lg:text-6xl text-white font-bold font-jost">
                Blogs</h2>
        </div>
    </div>
</div>
@endsection
