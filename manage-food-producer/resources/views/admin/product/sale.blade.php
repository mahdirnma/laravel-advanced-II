@extends('layout.app')
@section('title')
    products
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('products.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add product +</a>
                <h2 class="text-xl">products</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
{{--
                        <td class="text-center">delete</td>
                        <td class="text-center">update</td>
--}}
                        <td class="text-center">total sale</td>
                        <td class="text-center">date</td>
                        <td class="text-center">quantity</td>
                        <td class="text-center">price</td>
                        <td class="text-center">product</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($product->sales as $sale)
                        <tr>
{{--
                            <td class="text-center">
                                <form action="{{route('products.destroy',compact('product'))}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('products.edit',compact('product'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
--}}

                            <td class="text-center">{{number_format(($product->price)*($sale->quantity))}}</td>
                            <td class="text-center">{{$sale->date}}</td>
                            <td class="text-center">{{$sale->quantity}}</td>
                            <td class="text-center">{{number_format($product->price)}}</td>
                            <td class="text-center">{{$product->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
{{--
            <div class="mt-5">{{$products->links()}}</div>
--}}
        </div>
@endsection