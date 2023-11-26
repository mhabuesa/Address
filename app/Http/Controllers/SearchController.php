<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Place;
use App\Models\properties;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    function search(Request $request){
        $status = $request->status;
        $type = $request->type;
        $place = $request->place;
        $search = properties::where('status', $status)->where('type', $type)->where('place', $place)->get();


        $places = Place::all();
        $contact = Contact::find(1);
        $properties = properties::all();
        return view('frontend.search', [
            'search'=>$search,
            'places'=>$places,
            'properties'=>$properties,
            'contact'=>$contact,
            'search'=>$search,
        ]);



    }
}
