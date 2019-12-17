<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TicketFormRequest;
use App\Ticket;
use Illuminate\Support\Facades\Mail;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketFormRequest $request)
    {
        $slug = uniqid();
        $ticket = new Ticket(array(
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => $slug
        ));

    $ticket->save();

    $data = array(
        'ticket' => $slug,
    );

    Mail::send('emails.ticket', $data, function ($message){
        $message->from('juanc.aliendresd@gmail.com', 'Curso Laravel');

        $message->to('jaliendres123@gmail.com')->subject('¡Hay un nuevo ticket!');
    }); 

        return redirect('/contact')->with('status', 'Su ticket ha sido creado. Su id unica es: '.$slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function show($slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $comments = $ticket->comments()->get();
        return view('tickets.show', compact('ticket', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($slug, TicketFormRequest $request)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->title = $request->get('title');
        $ticket->content = $request->get('content');

        $ticket->quote_number = $request->get('quote_number');
        $ticket->date_quoted = $request->get('date_quoted');
        $ticket->firt_name = $request->get('firt_name');
        $ticket->last_name = $request->get('last_name');
        $ticket->phone = $request->get('phone');
        $ticket->email = $request->get('email');
        $ticket->tariff = $request->get('tariff');
        $ticket->deposit = $request->get('deposit');
        $ticket->estimated_ship_date = $request->get('estimated_ship_date');
        $ticket->make = $request->get('make');
        $ticket->model = $request->get('model');
        $ticket->vehicle_type = $request->get('vehicle_type');
        $ticket->ship_via = $request->get('ship_via');
        $ticket->vehicle_runs = $request->get('vehicle_runs');
        $ticket->pickup_city = $request->get('pickup_city');
        $ticket->pickup_state = $request->get('pickup_state');
        $ticket->pickup_zip = $request->get('pickup_zip');
        $ticket->dropoff_city = $request->get('dropoff_city');
        $ticket->dropoff_state = $request->get('dropoff_state');
        $ticket->dropoff_zip = $request->get('dropoff_zip');



        
        $ticket->year = $request->get('year');
        

        if($request->get('status') != null) {
            $ticket->status = 0;

        }else {

            $ticket->status = 1;   
        }
        $ticket->save();
        return redirect(action('TicketsController@edit',$ticket->slug))->with('status', '!El ticket'.$slug.'ha sido actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->delete();
        return redirect('/tickets')->with('status', 'El ticket '.$slug.' ha sido borrado');
    }
}
