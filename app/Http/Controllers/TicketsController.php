<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ticket;
use App\Event;
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
      $ticket=new Ticket;
      $ticket->userName= $request->input('userName');
      $ticket->userEmail= $request->input('userEmail');
      $ticket->phoneNumber= $request->input('phoneNumber');
      $ticket->regular_quantity= $request->input('regular_quantity');
      $ticket->vip_quantity= $request->input('vip_quantity');
      $ticket->event_id=$request->route('id');
      $ticket->total= $request->input('regular_quantity') + $request->input('vip_quantity');
      
      
      $event = Event::find($ticket->event_id);
      if ($ticket->regular_quantity < $event->regular_attendies && $ticket->vip_quantity < $event->vip_attendies) {
          if($event->regular_attendies>0 && $event->vip_attendies>0){
        DB::table('events')->decrement('regular_attendies', $ticket->regular_quantity);
        DB::table('events')->decrement('vip_attendies', $ticket->vip_quantity);
        $ticket->save();
        
    };
        Mail::send('emails.booking-enquiry', compact('request', 'user', 'data'), function($message) use ($request, $user, $data){
            $message->from('matildamariwa3@@gmail.com');
            $message->to($ticket->email);
            $message->subject('Booking Enquiry');
       
    }
    
      }
   
       else{
          echo"no available space";
       } 
       return redirect('/');
    }
    // var_dump($ticket->regular_quantity, $event->regular_attendies, $ticket->vip_quantity, $event->vip_attendies);
     
      
    

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
