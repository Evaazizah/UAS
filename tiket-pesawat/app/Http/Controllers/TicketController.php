<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'destination' => 'required',
            'departure_date' => 'required|date',
            'origin_airport' => 'nullable|string|max:255', // Kolom baru
        ]);

        Ticket::create([
            'name' => $request->name,
            'email' => $request->email,
            'destination' => $request->destination,
            'departure_date' => $request->departure_date,
            'origin_airport' => $request->origin_airport ?? 'unknown', // Nilai default
        ]);
    
        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }

    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'destination' => 'required',
            'departure_date' => 'required|date',
            'origin_airport' => 'nullable|string|max:255', // Kolom baru
        ]);

        $ticket->update([
            'name' => $request->name,
            'email' => $request->email,
            'destination' => $request->destination,
            'departure_date' => $request->departure_date,
            'origin_airport' => $request->origin_airport ?? $ticket->origin_airport, // Nilai default
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully.');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->with('success', 'Ticket deleted successfully.');
    }
}
