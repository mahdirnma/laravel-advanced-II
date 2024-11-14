@extends('layout.app')
@section('title')
    users
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <h2 class="text-xl">users</h2>
                <form action="{{route('users.index')}}" method="get">
                    <button type="submit" class="mr-5 bg-gray-600 text-white p-3 rounded">search</button>

                    <label for="subscription">subscription : </label>
                    <select name="subscription" id="subscription" class="w-32 py-1 text-center rounded border border-gray-500 cursor-pointer">
                        <option value="yes">yes</option>
{{--                        <option value="no">no</option>--}}
                    </select>
                </form>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">delete</td>
                        <td class="text-center">update</td>
                        <td class="text-center">subscription</td>
                        <td class="text-center">email</td>
                        <td class="text-center">name</td>
                    </tr>
                    </thead>
                    <tbody>
                    @if($users2!=null)
                        @foreach($users2 as $user)
                            <tr>
                                <td class="text-center">
                                    <form action="{{--{{route('users.destroy',compact('user'))}}--}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-green-600">delete</button>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <form action="{{--{{route('users.edit',compact('user'))}}--}}" method="get">
                                        @csrf
                                        <button type="submit" class="text-cyan-600">update</button>
                                    </form>
                                </td>
                                <td class="text-center"><a href="" class="{{$user->subcription==null?'text-gray-400':'text-orange-700'}}" onclick="{{$user->subcription==null?'return false;':''}}">subscription</a></td>
                                <td class="text-center">{{$user->email}}</td>
                                <td class="text-center">{{$user->name}}</td>
                            </tr>
                        @endforeach
                    @elseif($users2==null)
                        @foreach($users as $user)
                            <tr>
                                <td class="text-center">
                                    <form action="{{--{{route('users.destroy',compact('user'))}}--}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-green-600">delete</button>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <form action="{{--{{route('users.edit',compact('user'))}}--}}" method="get">
                                        @csrf
                                        <button type="submit" class="text-cyan-600">update</button>
                                    </form>
                                </td>
                                <td class="text-center"><a href="" class="{{$user->subcription==null?'text-gray-400':'text-orange-700'}}" onclick="{{$user->subcription==null?'return false;':''}}">subscription</a></td>
                                <td class="text-center">{{$user->email}}</td>
                                <td class="text-center">{{$user->name}}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            @if($users2!=null)
                <div class="mt-5">{{--{{$users2->links()}}--}}</div>
            @elseif($users2==null)
                <div class="mt-5">{{$users->links()}}</div>
            @endif
        </div>
@endsection
