<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ticket;
use App\Event;
use Mail;
use DB;
class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create Ticket
        $ticket = new Ticket;
        $ticket->userName = $request->input('userName');
        $ticket->userEmail = $request->input('userEmail');
        $ticket->phoneNumber = $request->input('phoneNumber');
        $ticket->regular_quantity = $request->input('regular_quantity');
        $ticket->vip_quantity = $request->input('vip_quantity');
        $ticket->event_id = $request->route('id');
        $ticket->total = $request->input('regular_quantity') + $request->input('vip_quantity');

        $previousTickets = Db::table('tickets')
            ->where('userEmail', '=', $ticket->userEmail)
            ->where('event_id', '=', $ticket->event_id)
            ->sum('total');

        $event = Db::table('events')
            ->where('id', '=', $ticket->event_id)
            ->first();

        $err_message = "Hi, " . $ticket->userName . " Sorry are not allowed to reserve " . ((int)$ticket->total + (int)$previousTickets) . " since it exceeds the maximum of 5 tickets allowed for both VIP and regular";
        //Save record if there is no previous ticket reserved for user of if total tickets for user is less than 5
        if ($previousTickets == NULL || (int)$previousTickets < 5) {
            if ($previousTickets != NULL && (int)$ticket->total > (int)$previousTickets) {
                echo $err_message;
            } else {
                if (($event->regular_attendies + $event->vip_attendies) > 0) {
                    $ticket->save();
                    DB::table('events')->decrement('regular_attendies', $ticket->regular_quantity);
                    DB::table('events')->decrement('vip_attendies', $ticket->vip_quantity);
                    $this->sendEmail($request);
                    return redirect('/confirmation');
                } else {
                    echo "No more spaces available for the event" . $event->eventName;
                }
            }
        } else {
            echo $err_message;
        }

    }

    private function sendEmail(Request $request)
    {
        $to_name =  $request->input('userName');
        $to_email = $request->input('userEmail');
        $data = array('name'=> $to_name, "body" => "Test mail");

        Mail::send('layouts.mail', $data, function($message) use ($to_name,$to_email){
            $message->to($to_email);
            $message->subject('Churchill ticket booking');
            $message->from('kisilamapeni@gmail.com','kisila');
        });
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
