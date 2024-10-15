@extends('layout.app')
@section('title')
    images
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('images.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add image +</a>
                <h2 class="text-xl">images</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">delete</td>
                        <td class="text-center">update</td>
                        <td class="text-center">image</td>
                        <td class="text-center">alt</td>
                        <td class="text-center">description</td>
                        <td class="text-center">title</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $image)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('images.destroy',compact('image'))}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('images.edit',compact('image'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center"><img src="upload/{{$image->url}}" alt="{{$image->alt}}" class="w-36 inline-block"></td>
                            <td class="text-center">{{$image->alt}}</td>
                            <td class="text-center">{{$image->description}}</td>
                            <td class="text-center">{{$image->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
{{--            <div class="mt-5">{{$tags->links()}}</div>--}}
        </div>
@endsection
