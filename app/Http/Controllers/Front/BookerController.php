<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\booker;
use Illuminate\Http\Request;
use App\Booking;
use App\BookingItem;
use App\BusinessService;
use App\CompanySetting;

class BookerController extends Controller
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
    public function create(Request $request)
    {
        //
        return view('front.booker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return view('front.booker.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\booker  $booker
     * @return \Illuminate\Http\Response
     */
    public function show(booker $booker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\booker  $booker
     * @return \Illuminate\Http\Response
     */
    public function edit(booker $booker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\booker  $booker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booker $booker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\booker  $booker
     * @return \Illuminate\Http\Response
     */
    public function destroy(booker $booker)
    {
        //
    }
}
