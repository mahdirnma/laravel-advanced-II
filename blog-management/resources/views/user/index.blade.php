<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
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
                <form action="{{route('user.blog',compact('blog'))}}" method="get">
                    @csrf
                    <button type="submit" class="text-red-600">show post</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
{{--
@foreach($categories as $category)
    {{$category}}
@endforeach
<br>
@foreach($blogs as $blog)
    {{$blog}}
@endforeach
<br>
@foreach($tags as $tag)
    {{$tag}}
    <br>
@endforeach
<form action="{{route('user.blog',['blog'=>$blogs[0]])}}" method="get">
    <button type="submit">go</button>
</form>

--}}

