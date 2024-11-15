@extends('layout.app')
@section('title')
    add subscription
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add subscription</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('subcriptions.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="title" class="font-semibold ml-5">: title</label>
                            <input type="text" name="title" value="{{old('title')}}" id="title" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('title')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="description" class="font-semibold ml-5">: description</label>
                            <textarea name="description" id="description" cols="3" rows="3" class="w-2/5 h-32 rounded outline-0 pb-2 pt-1 px-2 border border-gray-400">{{old('description')}}</textarea>
                            @error('description')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="user" class="font-semibold ml-5">: user</label>
                            <select name="user" id="user" class="w-2/5 h-8 rounded outline-0 pb-2 pt-1 px-2 border border-gray-400">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            @error('user')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <input type="submit" value="Add" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="breakfast" class="font-semibold ml-5">: breakfast</label>
                            <input type="text" name="breakfast" value="{{old('breakfast')}}" id="breakfast" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('breakfast')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="lunch" class="font-semibold ml-5">: lunch</label>
                            <input type="text" name="lunch" value="{{old('lunch')}}" id="lunch" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('lunch')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="dinner" class="font-semibold ml-5">: dinner</label>
                            <input type="text" name="dinner" value="{{old('dinner')}}" id="dinner" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('dinner')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>

                    </div>
                </form>
            </div>
        </div>
@endsection
