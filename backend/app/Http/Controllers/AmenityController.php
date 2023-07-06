<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Amenity;
use Illuminate\Support\Facades\Session;

class AmenityController extends Controller
{
    public function index(Request $request)
    {
        $amenities = Amenity::get();
        Session::flash('message', 'Data get successfully !');
        // return view('amenities', compact('amenities'));
        return json_decode($amenities);
    }

    public function create()
    {
        return view('amenity-form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'amenities' => 'required',
        ]);
        Amenity::create([
            'name' => $request->get('name'),
            'amenities' => $request->get('amenities'),
            'date' => $request->get('date'),
            'start_time' => $request->get('start_time'),
            'end_time' => $request->get('end_time'),
        ]);
        Session::flash('message', 'Data inserted successfully !');
        return redirect('/amenities');
    }

    // public function show($id)
    // {
    //     $amenity = Amenity::find($id);
    //     return view('amenity-info', compact('amenity'));
    // }

    // public function edit($id)
    // {
    //     $amenity = Amenity::find($id);
    //     return view('amenity-form', compact('amenity'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $amenity = Amenity::find($id);
    //     $request->validate([
    //         'name' => 'required',
    //         'details' => 'nullable',
    //     ]);
    //     $amenity->name = $request->get('name');
    //     $amenity->details = $request->get('details');
    //     $amenity->save();
    //     Session::flash('message', 'Data updated successfully !');
    //     return redirect('/amenities');
    // }

    // public function destroy($id)
    // {
    //     Amenity::find($id)->delete();
    //     Session::flash('message', 'Data deleted successfully !');
    //     return redirect('/amenities');
    // }

}


















