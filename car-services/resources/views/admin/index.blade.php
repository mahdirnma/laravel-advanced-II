@extends('layout.app')
@section('title')
    home
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex flex-row-reverse justify-between items-center border-b">
                <h2 class="text-xl"> : خودروی مورد نظر را انتخاب کنید</h2>
                <a href="" class="px-4 py-4 bg-gray-500 text-white rounded-xl hover:bg-gray-600 hover:scale-110 transition-all">افزودن خودرو</a>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <div class="w-[100%] h-3/5 flex justify-center">
                    <form action="" method="get" class="w-full h-full flex flex-row-reverse">
                        @foreach($user->vehicles as $vehicle)
                            <div class="w-1/4 h-52 flex-col text-right border border-gray-500 py-2 px-4 shadow-xl shadow-stone-500 rounded-xl ml-8">
                                <p class="text-center font-semibold text-lg  mb-5">{{$vehicle->name}}</p>
                                <label for="km" dir="rtl" class="">کیلومتر خودروی خودرا وارد کنید : </label>
                                <input type="number" name="km" min="0" id="km" class="border border-gray-500 rounded mt-8 pl-2">
                                <div class="w-full h-14 flex items-center justify-center pt-4">
                                    <button type="submit" class="bg-gray-300 pt-1 pb-2 px-2 rounded hover:bg-gray-700 hover:text-white transition-all">ورود</button>
                                </div>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
@endsection
