<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MunMahdi</title>
    @vite('resources/css/app.css')
</head>
<body>
<header class="w-svw h-20 flex justify-center bg-amber-500">
    <div class="w-10/12 h-full flex bg-amber-700">
        <div class="w-1/5 h-full flex items-center bg-blue-800">
            <h1 class="font-bold text-2xl">MunMahdi</h1>
        </div>
        <nav class="w-3/5 h-full bg-blue-500 flex items-center justify-center">
            <ul>
                <li><a href="{{route('user.index')}}" class="font-semibold">Home</a></li>
            </ul>
        </nav>
        <div class="w-1/5 h-full bg-blue-800 flex items-center justify-end">
            <ul class="flex">
                <li class="ml-3"><a href=""><img src="images/icons8-insta.svg" alt="" class="w-6"></a></li>
                <li class="ml-3"><a href=""><img src="images/icons8-x.svg" alt="" class="w-5"></a></li>
                <li class="ml-3"><a href=""><img src="images/icons8-search.svg" alt="" class="w-5"></a></li>
            </ul>
        </div>
    </div>
</header>
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

