@extends('layout.app')
@section('title')
    tickets
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('tickets.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add ticket +</a>
                <h2 class="text-xl">tickets</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">delete</td>
                        <td class="text-center">update</td>
                        <td class="text-center">user</td>
                        <td class="text-center">location</td>
                        <td class="text-center">time</td>
                        <td class="text-center">seat</td>
                        <td class="text-center">airline</td>
                        <td class="text-center">type</td>
                        <td class="text-center">title</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tickets as $ticket)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('tickets.destroy',compact('ticket'))}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('tickets.edit',compact('ticket'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">{{$ticket->user->firstname}} {{$ticket->user->lastname}}</td>
                            <td class="text-center">{{$ticket->location->title}}</td>
                            <td class="text-center">{{$ticket->time}}</td>
                            <td class="text-center">{{$ticket->seat}}</td>
                            <td class="text-center">{{$ticket->airline}}</td>
                            <td class="text-center">{{$ticket->type}}</td>
                            <td class="text-center">{{$ticket->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$tickets->links()}}</div>
        </div>
@endsection
