<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MunMahdi</title>
    @vite('resources/css/app.css')
    @vite('resources/css/main.css')
</head>
<body>
<header class="w-full h-20 flex justify-center">
    <div class="w-10/12 h-full flex">
        <div class="w-1/5 h-full flex items-center">
            <h1 class="font-bold text-2xl">MunMahdi</h1>
        </div>
        <nav class="w-3/5 h-full flex items-center justify-center">
            <ul>
                <li><a href="{{route('user.index')}}" class="font-semibold">Home</a></li>
            </ul>
        </nav>
        <div class="w-1/5 h-full flex items-center justify-end">
            <ul class="flex gap-x-3">
                <li><a href=""><img src="images/icons8-insta.svg" alt="" class="w-6"></a></li>
                <li><a href=""><img src="images/icons8-x.svg" alt="" class="w-5"></a></li>
                <li><a href=""><img src="images/icons8-search.svg" alt="" class="w-5"></a></li>
            </ul>
        </div>
    </div>
</header>
<div class="w-full h-20 flex justify-center bg-[#f8f7f3]">
    <div class="w-10/12 h-full flex items-center">
        <h2 class="font-bold text-xl">Blog</h2>
    </div>
</div>
<div class="w-full py-8 flex justify-center">
    <div class="w-10/12 flex justify-between">
        <div class="w-[32%] h-auto">
            <form action="" method="get" class="flex h-14 w-full">
                @csrf
                <label for="search"></label>
                <input type="search" name="search" id="search" placeholder="search..." class="w-full h-full pl-6 pb-1 bg bg-[#f8f7f3] placeholder-[#00000082] outline-0 rounded-s select-none">
                <div class="w-10 h-full p-2 flex items-center justify-center bg-[#f8f7f3] rounded-e"><img src="images/icons8-search-gray.svg" alt="" class="w-5 select-none"></div>
            </form>
            <div class="w-full max-h-96 px-6 py-6 bg-[#f8f7f3] my-8 rounded box-border">
                <p class="font-bold text-xl">Categories</p>
                <ul class="mt-3 max-h-72 overflow-auto">
                    @foreach($categories as $category)
                        <li class="h-12 font-semibold border-b flex items-center border-[#00000032]"><a href="{{route('category.blog',$category->id)}}">{{$category->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="w-full max-h-96 px-6 py-6 bg-[#f8f7f3] rounded box-border">
                <p class="font-bold text-xl">Tags</p>
                <ul class="mt-3 max-h-72 overflow-auto">
                    @foreach($tags as $tag)
                        <li class="h-12 font-semibold border-b flex items-center border-[#00000032]"><a href="{{route('tag.blog',$tag->id)}}">{{$tag->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="w-[66%] h-auto">
            <div class="w-full flex flex-col mb-10">
                <span class="flex text-[#676767] text-2xl gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#cfcfcf" d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z"/></svg>
                    {{$blog->category->title}}
                </span>
                <h2 class="text-5xl ml-6 text-[#272727] mb-8">{{$blog->title}}</h2>
                <img src="/upload/{{$blog->main_pic}}" alt="{{$blog->title}}">
                <p class="mt-10 text-[#3A3A3A] text-justify">{{$blog->body}}</p>
            </div>
        </div>
    </div>
</div>
<footer class="w-full h-64 flex justify-center items-center bg-[#f8f7f3]">
    <div class="w-10/12 h-4/6 flex">
        <div class="w-[27%] flex flex-col">
            <p class="font-bold text-2xl">MunMahdi</p>
        </div>
        <div class="w-[27%] flex flex-col">
            <p class="font-bold text-xl">About us</p>
            <div class="pt-6">
                <p class="text-[#676767]">Mohammad mahdi Rahnama</p>
            </div>
        </div>
        <div class="w-[27%] flex flex-col">
            <p class="font-bold text-xl">Product</p>
        </div>
        <div class="w-[19%] flex flex-col">
            <p class="font-bold text-xl">Contact us</p>
        </div>
    </div>
</footer>
</body>
</html>
{{--<body>
<table>
    <tr class="border-2 border-black">
        <td class="font-bold border-2 border-black">blog title</td>
        <td class="font-bold border-2 border-black">description</td>
        <td class="font-bold border-2 border-black">show blog</td>
    </tr>
    @foreach($blogs as $blog)
        <tr class="border-2 border-black">
            <td>{{$blog->title}}</td>
            <td>{{$blog->description}}</td>
            <td>
                <form action="{{route('blog.single',compact('blog'))}}" method="get">
                    @csrf
                    <button type="submit" class="text-red-600">show post</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<table class="mt-10">
    <tr class="border-2 border-black">
        <td class="font-bold border-2 border-blue-800">tags title</td>
        <td class="font-bold border-2 border-blue-800">show tag's blogs</td>
    </tr>
    @foreach($tags as $tag)
        <tr class="border-2 border-blue-800">
            <td>{{$tag->title}}</td>
            <td>
                <form action="{{route('tag.blog',compact('tag'))}}" method="get">
                    @csrf
                    <button type="submit" class="text-red-600">show blogs</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<table class="mt-10">
    <tr class="border-2 border-black">
        <td class="font-bold border-2 border-red-800">category title</td>
        <td class="font-bold border-2 border-red-800">show category's blogs</td>
    </tr>
    @foreach($categories as $category)
        <tr class="border-2 border-red-800">
            <td>{{$category->title}}</td>
            <td>
                <form action="{{route('category.blog',compact('category'))}}" method="get">
                    @csrf
                    <button type="submit" class="text-red-600">show categories</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>--}}


{{--
<table>
    <tr class="border-2 border-black">
        <td class="font-bold border-2 border-black">blog title</td>
        <td class="font-bold border-2 border-black">description</td>
        <td class="font-bold border-2 border-black">pic</td>
    </tr>
    <tr class="border-2 border-black">
        <td>{{$blog->title}}</td>
        <td>{{$blog->description}}</td>
        <td><img src="/upload/{{$blog->main_pic}}" alt="" class="w-36"></td>
    </tr>
</table>
--}}
