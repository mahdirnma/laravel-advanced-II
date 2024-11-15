@extends('layout.app2')
@section('title')
    user subscription
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl"></h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <div class="w-[90%] h-3/5 flex flex-col justify-center">
                    <table class="w-full min-h-full border border-gray-400">
                        <thead>
                        <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                            <td class="text-center">dinner</td>
                            <td class="text-center">lunch</td>
                            <td class="text-center">breakfast</td>
                            <td class="text-center">description</td>
                            <td class="text-center">title</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center">{{$subscription->dinner}}</td>
                            <td class="text-center">{{$subscription->lunch}}</td>
                            <td class="text-center">{{$subscription->breakfast}}</td>
                            <td class="text-center">{{$subscription->description}}</td>
                            <td class="text-center">{{$subscription->title}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
