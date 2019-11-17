<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.locations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reords = DB::table('records')
            ->join('sensors', 'sensors.id', '=', 'records.sensor_id')
            ->join('locations', 'locations.id', '=', 'sensors.location_id')
            ->select(DB::raw('SUM(records.temperature)/COUNT(records.id) as temperature'), DB::raw('SUM(records.humidity)/COUNT(records.id) as humidity'),
                DB::raw('SUM(records.pollution)/COUNT(records.id) as pollution'),DB::raw('SUM(records.sound)/COUNT(records.id) as sound')
                ,DB::raw('MAX(records.take_at) as take_at'))
            ->whereRaw('DATE_FORMAT(records.take_at, "%Y %m %d") = DATE_FORMAT(" ' . date('Y-m-d') . '", "%Y %m %d")')
            ->where('locations.id', '=', $id)
            ->first();
        $location = Location::find($id);
        return view('user.locations.show', ['records' => $reords, 'location' => $location]);
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
