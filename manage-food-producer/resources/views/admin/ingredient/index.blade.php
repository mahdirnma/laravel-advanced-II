@extends('layout.app')
@section('title')
    ingredients
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('ingredients.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add ingredient +</a>
                <h2 class="text-xl">ingredients</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">delete</td>
                        <td class="text-center">update</td>
                        <td class="text-center">price</td>
                        <td class="text-center">product</td>
                        <td class="text-center">description</td>
                        <td class="text-center">title</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ingredients as $ingredient)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('ingredients.destroy',compact('ingredient'))}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('ingredients.edit',compact('ingredient'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">{{number_format($ingredient->price)}}</td>
                            <td class="text-center">{{$ingredient->product->title}}</td>
                            <td class="text-center">{{$ingredient->description}}</td>
                            <td class="text-center">{{$ingredient->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$ingredients->links()}}</div>
        </div>
@endsection
