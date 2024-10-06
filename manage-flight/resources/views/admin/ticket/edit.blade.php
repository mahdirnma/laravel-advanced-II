@extends('layout.app')
@section('title')
    update ticket
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">update ticket</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('tickets.update',compact('ticket'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    @method('put')
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="type" class="font-semibold ml-5">: type</label>
                            <input type="text" name="type" value="{{$ticket->type}}" id="value" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('type'))
                                <p class="text-red-700">{{$errors->first('type')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="airline" class="font-semibold ml-5">: airline</label>
                            <input type="text" name="airline" value="{{$ticket->airline}}" id="value" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('airline'))
                                <p class="text-red-700">{{$errors->first('airline')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="seat" class="font-semibold ml-5">: seat</label>
                            <input type="text" name="seat" value="{{$ticket->seat}}" id="value" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('seat'))
                                <p class="text-red-700">{{$errors->first('seat')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="Update" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="time" class="font-semibold ml-5">: time</label>
                            <input type="datetime-local" name="time" value="{{$ticket->time}}" id="value" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('time'))
                                <p class="text-red-700">{{$errors->first('time')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="time" class="font-semibold ml-5">: location</label>
                            <select name="location_id" id="location" class="w-3/5 h-8 pl-2 rounded outline-0 border border-gray-400">
                                @foreach($locations as $location)
                                    <option value="{{$location->id}}" {{$ticket->location_id==$location->id?'selected':''}}>{{$location->title}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('location'))
                                <p class="text-red-700">{{$errors->first('location')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="user" class="font-semibold ml-5">: user</label>
                            <select name="user_id" id="user" class="w-3/5 h-8 pl-2 rounded outline-0 border border-gray-400">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}" {{$ticket->user_id==$user->id?'selected':''}}>{{$user->fullname}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('user'))
                                <p class="text-red-700">{{$errors->first('user')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
