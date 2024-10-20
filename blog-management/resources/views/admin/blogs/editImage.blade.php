@extends('layout.app')
@section('title')
    update {{$blog->title}}'s images
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">update {{$blog->title}}'s images</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('updateImage',compact('blog'))}}" method="post" enctype="multipart/form-data" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    @method('put')
                    <div class="w-full h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            @foreach($pics as $pic)
                                <label for="{{$pic->title}}" class="font-semibold ml-5 cursor-pointer"><img src="/upload/{{$pic->url}}" alt="{{$pic->alt}}" class="w-36"></label>
                                <input type="checkbox" name="images[]" id="{{$pic->title}}" value="{{$pic->id}}"
                                @foreach($blog->pics as $data)
                                    {{$data->pivot->pic_id==$pic->id?'checked':''}}
                                    @endforeach>
                            @endforeach
                        </div>
                        <input type="submit" value="Update" class="absolute bottom-2 left-1/2 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                </form>
            </div>
        </div>
@endsection
