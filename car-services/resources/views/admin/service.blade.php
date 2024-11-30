@extends('layout.app')
@section('title')
    select service
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex flex-row-reverse justify-between items-center border-b">
                <h2 class="text-xl"> : سرویس مورد نظر را انتخاب کنید</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <div class="w-[100%] h-full pt-5 flex justify-center">
                    @foreach($services as $service)
                        <form action="{{route('service.set')}}" method="post" class="w-1/4 h-full flex flex-row-reverse">
                            @csrf
                            <div class="w-full h-52 flex-col text-right border border-gray-500 py-2 px-4 shadow-xl shadow-stone-500 rounded-xl ml-8">
                                <p class="text-center font-semibold text-lg  mb-5">{{$service->title}}</p>
                                <p class="text-center mb-5"> : کیلومتر باقی مانده برای این سرویس</p>
                                <p class="text-center mb-5 font-bold text-red-800 text-xl">{{$service->km}}</p>
{{--
                                <p class="text-center mb-5 font-bold text-red-800 text-xl">
                                    @if($service->logs->last()!=null)
                                        {{$service->logs->last()->km}}
                                    @else
                                        {{$service->km}}
                                    @endif
                                </p>
--}}
                                <div class="w-full h-14 flex items-center justify-center pt-4">
                                    <button type="submit" class="bg-gray-300 pt-1 pb-2 px-2 rounded hover:bg-gray-700 hover:text-white transition-all">ثبت</button>
                                </div>
                                <input type="hidden" name="service" value="{{$service->id}}">
                                <input type="hidden" name="log" value="{{$log->id}}">
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
