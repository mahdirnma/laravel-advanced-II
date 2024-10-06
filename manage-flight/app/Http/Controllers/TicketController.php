<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Ticket;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\User;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::where('is_active', 1)->paginate(2);
        return view('admin.ticket.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::where('is_active', 1)->get();
        $locations=Location::where('is_active', 1)->get();
        return view('admin.ticket.create', compact('users', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        $ticket = Ticket::create($request->validated());
        if ($ticket) {
            return to_route('tickets.index');
        }else{
            return to_route('tickets.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        $users=User::where('is_active', 1)->get();
        $locations=Location::where('is_active', 1)->get();
        return view('admin.ticket.edit', compact('users', 'locations', 'ticket'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        $status=$ticket->update($request->validated());
        if ($status) {
            return to_route('tickets.index');
        }else{
            return to_route('tickets.edit', $ticket);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->update(['is_active' => 0]);
        return to_route('tickets.index');
    }
}
