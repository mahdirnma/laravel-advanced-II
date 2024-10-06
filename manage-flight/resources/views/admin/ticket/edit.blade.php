@extends('layout.app')
@section('title')
    add location
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add location</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('locations.update',compact('location'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    @method('put')
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="city" class="font-semibold ml-5">: city</label>
                            <input type="text" name="city" value="{{$location->city}}" id="value" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('city'))
                                <p class="text-red-700">{{$errors->first('city')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="country" class="font-semibold ml-5">: country</label>
                            <input type="text" name="country" value="{{$location->country}}" id="value" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('country'))
                                <p class="text-red-700">{{$errors->first('country')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="Update" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="airport" class="font-semibold ml-5">: airport</label>
                            <input type="text" name="airport" value="{{$location->airport}}" id="value" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('airport'))
                                <p class="text-red-700">{{$errors->first('airport')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
