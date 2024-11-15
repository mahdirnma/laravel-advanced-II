@extends('layout.app2')
@section('title')
    user
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl"></h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <div class="w-[100%] h-3/5 flex flex-row-reverse">
                    <a href="{{route('subscription')}}" class="h-1/3 px-6 pt-3 rounded font-semibold text-xl border border-gray-600 text-gray-600">Go to subscription panel</a>
                </div>
            </div>
        </div>
@endsection
