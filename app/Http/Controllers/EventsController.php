<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use DB;
class EventsController extends Controller
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
        return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        //handle cover image upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just ext
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore=$filename.'_'.time().'_'.$extension;
            //Upload image
            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }
        else 
        $fileNameToStore='noImage.jpg';

        //create event
        $event=new Event;
        $event->eventName= $request->input('eventName');
        $event->details= $request->input('details');
        $event->location= $request->input('location');
        $event->Max_attendies= $request->input('Max_attendies');
        $event->regularPrice= $request->input('regularPrice');
        $event->VIP_price= $request->input('VIP_price');
        $event->eventDate= $request->input('eventDate');
        $event->cover_image=$fileNameToStore;
       
        $event->save();
        return redirect('/admin')->with('success',"Event successfully created");
       
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('layouts.event')->with('event',$event);;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event=Event::find($id);
        return view('layouts.edit')->with('event',$event);
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
        //edit image
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just ext
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore=$filename.'_'.time().'_'.$extension;
            //Upload image
            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }

        $event=Event::find($id);
        $event->eventName= $request->input('eventName');
        $event->details= $request->input('details');
        $event->location= $request->input('location');
        $event->Max_attendies= $request->input('Max_attendies');
        $event->regularPrice= $request->input('regularPrice');
        $event->VIP_price= $request->input('VIP_price');
        $event->eventDate= $request->input('eventDate');
        if($request->hasFile('cover_image')){
            $event->cover_image=$fileNameToStore;
        }
        $event->save();
        return redirect('/admin')->with('success','Updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=Event::find($id);
        $event->delete();
        return redirect('/admin')->with('success','Event deleted successfully');
    }
}
