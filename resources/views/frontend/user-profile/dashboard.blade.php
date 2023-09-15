@extends('frontend.profile-layouts.master')
@section('main')
<main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl font-jost">
  <div class="px-20 pb-20">
    <div class="bg-[#C8DAFD] rounded-lg">
      <div class=" flex justify-center">
        <img src="{{asset('frontend image/Blog Image-2.jpg')}}" alt="" srcset="" class="w-[600px] mt-10">
      </div>
      <div class="px-10 pt-5 pb-10">
        <h2 class="text-2xl ">Welcome {{$user->name}}</h2>
        <h2 class="text-lg pt-2">This is your Dashboard. From here you can manage your orders, payments, profile and so on.</h2>
      </div>
    </div>
  </div>
</main>
@endsection

