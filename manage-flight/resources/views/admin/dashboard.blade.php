@extends('layout.app')
@section('title')
    dashboard
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex flex-row-reverse pr-20 pt-10">
        <div class="w-1/5 h-48 flex flex-col justify-center items-center ml-16 bg-white rounded-xl">
            <h2 class="mb-8">count of locations</h2>
            <p class="text-5xl font-light">{{$locations}}</p>
        </div>
        <div class="w-1/5 h-48 flex flex-col justify-center items-center bg-white rounded-xl ml-16 ">
            <h2 class="mb-8">count of tickets</h2>
            <p class="text-5xl font-light">{{$tickets}}</p>
        </div>
    </div>
@endsection

