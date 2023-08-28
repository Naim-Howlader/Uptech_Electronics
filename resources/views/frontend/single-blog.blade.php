@extends('frontend.layouts.master')
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
        <div class="absolute top-[50%] w-[100%] h[100%] flex justify-center items-center z-50 text-white font-medium text-lg space-x-5">
            <h2>{{date("d M , Y", strtotime($blogs->created_at))}}</h2>
            <h2>{{$blogs->name}}</h2>
        </div>
    </div>
</div>
<div class="font-jost px-5 md:px-10 lg:px-12">
    <div class="single-blog-section grid grid-cols-12 md:space-x-10">
        <div class="single-blog col-span-12 md:col-span-8 pt-[50px]">
            <div class="blog-title">
                <h2 class="text-[28px] font-medium ">{{$blogs->name}}</h2>
            </div>
            <div class="blog-title-icon flex space-x-3 pt-3 pb-8">
                <div class="person-icon flex items-end text-black ">
                    <span class="material-symbols-outlined text-[20px] text-gray-600">
                        person
                    </span>
                    <h2 class="text-[12px] text-gray-600">Admin</h2>
                </div>
                <div class="date flex text-black items-end">
                    <span class="material-symbols-outlined text-[20px] text-gray-600">
                        schedule
                    </span>
                    <h2 class="text-gray-600 text-[12px]">{{
                        date("d M , Y", strtotime($blogs->created_at))
                    }}</h2>
                </div>
                <div class="date flex text-black items-end">
                    <span class="material-symbols-outlined text-[20px] text-gray-600">
                        category
                    </span>
                    <h2 class="text-gray-600 text-[12px]">
                        {{$blogs->categories->name}}
                    </h2>
                </div>
            </div>
            <div class="blog-thumbnail-image">
                <img src="{{asset($blogs->image)}}" alt="" srcset="">
            </div>
            <div class="blog-description pt-10 pb-10">
                <p>{!!$blogs->description!!}</p>
            </div>
        </div>
        <div class="recent-blog col-span-12 md:col-span-4 md:pt-[50px]">
            <div class="recent-blog-box border px-5 pt-5 pb-5">
                <h2 class="uppercase text-lg font-semibold pb-5">recent posts</h2>
                <div class="separator w-full h-[2px] bg-red-500 mb-4"></div>
                @foreach ($allBlogs as $singleBlog)
                <div class="single-recent-blog flex items-center space-x-5">
                    <div class="image">
                        <a href="{{route('singleblog', ['id'=>$singleBlog->id])}}">
                            <img src="{{asset($singleBlog->image)}}" alt="" srcset="" class="w-[100px]">
                        </a>
                    </div>
                    <div class="content">
                        <a href="{{route('singleblog', ['id'=>$singleBlog->id])}}">
                            <h2 class="text-[16px]">{{$singleBlog->name}}</h2>
                        </a>
                        <h2 class="text-gray-400 text-[12px]">{{date('d M , Y', strtotime($singleBlog->created_at))}}</h2>
                    </div>
                </div>
                <div class="separator w-full h-[1px] bg-gray-300 mt-4 mb-4"></div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
