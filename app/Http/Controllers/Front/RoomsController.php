<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\rooms;
use Illuminate\Http\Request;
use App\BusinessService;
use App\Coupon;
use Carbon\Carbon;
use App\Category;
use App\Location;

class RoomsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $allrooms = BusinessService::paginate(10);
    return view('front.rooms.index', compact('allrooms'));
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
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\rooms  $rooms
   * @return \Illuminate\Http\Response
   */
  public function show(Request $request, $serviceSlug)
  {
    $couponData = json_decode(request()->cookie('couponData'), true);
    if ($couponData) {
      setcookie("couponData", "", time() - 3600);
    }

    $categories = Category::active()->with(['services' => function ($query) {
      $query->active();
    }])->get();

    $first_location = request()->session()->pull('sess_location') ? request()->session()->pull('sess_location') : Location::first()->id;

    $services = BusinessService::active()
      ->with('location')
      ->whereHas('location', function ($query) use ($first_location) {
        $query->where('id', $first_location);
      })
      ->get();

    $service = BusinessService::where('slug', $serviceSlug)->first();

    return view('front.rooms.show', compact('services', 'categories', 'service'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\rooms  $rooms
   * @return \Illuminate\Http\Response
   */
  public function edit(rooms $rooms)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\rooms  $rooms
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, rooms $rooms)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\rooms  $rooms
   * @return \Illuminate\Http\Response
   */
  public function destroy(rooms $rooms)
  {
    //
  }
}
