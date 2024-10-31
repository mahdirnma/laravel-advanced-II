@extends('layout.app')
@section('title')
    blogs
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('blogs.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add post +</a>
                <h2 class="text-xl">blog</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">delete</td>
                        <td class="text-center">update</td>
                        <td class="text-center">tags</td>
                        <td class="text-center">other pics</td>
                        <td class="text-center">main pic</td>
                        <td class="text-center">category</td>
                        <td class="text-center">body</td>
                        <td class="text-center">description</td>
                        <td class="text-center">title</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('blogs.destroy',compact('blog'))}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('blogs.edit',compact('blog'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('editTag',compact('blog'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-emerald-400">tags</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('editImage',compact('blog'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-red-700">other pics</button>
                                </form>
                            </td>
                            <td class="text-center"><img src="/upload/{{$blog->main_pic}}" alt="pic" class="inline-block w-36"></td>
                            <td class="text-center">{{$blog->category->title}}</td>
                            <td class="max-w-52 text-justify overflow-auto">{{$blog->body}}</td>
                            <td class="text-center max-w-52">{{$blog->description}}</td>
                            <td class="text-center">{{$blog->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$blogs->links()}}</div>
        </div>
@endsection
