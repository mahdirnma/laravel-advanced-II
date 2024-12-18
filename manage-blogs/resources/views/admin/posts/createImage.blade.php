@extends('layout.app')
@section('title')
    add {{$post->title}}'s images
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add {{$post->title}}'s images</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('createImage',compact('post'))}}" method="post" enctype="multipart/form-data" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-full h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            @foreach($images as $image)
                                <label for="" class="font-semibold ml-5">
                                    <input type="checkbox" name="images[]" id="images" value="{{$image->id}}">
                                    <img src="/upload/{{$image->url}}" alt="{{$image->alt}}" class="w-36">
                                </label>
                            @endforeach
                        </div>
                        <input type="submit" value="Add" class="absolute bottom-2 left-1/2 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                </form>
            </div>
        </div>
@endsection
