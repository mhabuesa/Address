<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\BannerImage;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Neighbor;
use App\Models\NeighborApartment;
use App\Models\Organizer;
use App\Models\Partner;
use App\Models\Place;
use App\Models\properties;
use App\Models\ServiceMessage;
use App\Models\Testimonial;
use App\Models\WorkingPartner;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    function index(){




        $partners = WorkingPartner::where('status',1)->get();
        $properties = properties::where('on_off', '1')->get();
        $contact = Contact::find(1);

        $popular = properties::latest()->take(8)->get();
        $agents = Agent::all();
        $testimonials = Testimonial::where('status', '1')->get();
        $place = Place::where('status',1)->get();

        $upcoming = properties::where('position', '1')->where('on_off', '1')->latest()->take(4)->get();
        $under_cons = properties::where('position', '2')->where('on_off', '1')->latest()->take(4)->get();
        $handover = properties::where('position', '3')->where('on_off', '1')->latest()->take(4)->get();

        return view('frontend.index', [

            'partners'=>$partners,
            'properties'=>$properties,
            'contact'=>$contact,
            'popular'=>$popular,
            'agents'=>$agents,
            'testimonials'=>$testimonials,
            'place'=>$place,
            'upcoming'=>$upcoming,
            'under_cons'=>$under_cons,
            'handover'=>$handover,

        ]);
    }

    function single_property($id){
        $galleries = Gallery::where('properties_id', $id)->get();
        $properties = properties::find($id);
        $recent_properties = properties::latest()->take(3)->get();
        $property = properties::find($id)->first();
        $places = properties::where('place', $properties->place)->latest()->take(4)->get();
        $status = properties::where('status', $properties->status)->latest()->get();
        $contact = Contact::find(1);

        return view('frontend.single_property', [
            'properties'=>$properties,
            'galleries'=>$galleries,
            'places'=>$places,
            'recent_properties'=>$recent_properties,
            'status'=>$status,
            'contact'=>$contact,
            'property'=>$property,
        ]);
    }

    function send_message(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'number'=>'required',
            'message'=>'required',
        ]);

        Message::insert([
            'name'=>$request->name,
            'number'=>$request->number,
            'email'=>$request->email,
            'message'=>$request->message,
            'property_id'=>$id,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }



    function organizer(){
        $places = Place::all();
        $contact = Contact::find(1);
        $properties = properties::all();
        $organizers = Organizer::where('status', 1)->get();
        return view('frontend.Organizer', [
            'places'=>$places,
            'properties'=>$properties,
            'contact'=>$contact,
            'organizers'=>$organizers,
        ]);
    }
    function place_properties($id){
        $partner = WorkingPartner::find($id);
        $places = Place::all();
        $contact = Contact::find(1);
        $properties = properties::where('partner', $id)->get();
        return view('frontend.place_property', [
            'partner'=>$partner,
            'places'=>$places,
            'properties'=>$properties,
            'contact'=>$contact,
        ]);
    }

    function partners(){
        $contact = Contact::find(1);
        $banner = BannerImage::find(1);
        $blogs = Blog::all();
        $partners = Partner::where('status', 1)->get();
        return view('frontend.partners', [
            'contact'=>$contact,
            'banner'=>$banner,
            'blogs'=>$blogs,
            'partners'=>$partners,
        ]);
    }


    function single_blog($id){
        $contact = Contact::find(1);
        $banner = BannerImage::find(1);
        $blogs = Blog::latest()->take(4)->get();
        $blog = Blog::find($id);
        return view('frontend.single_blog', [
            'contact'=>$contact,
            'banner'=>$banner,
            'blogs'=>$blogs,
            'blog'=>$blog,
        ]);
    }



    function service(){
        $contact = Contact::find(1);
        $banner = BannerImage::find(1);

        return view('frontend.service', [
            'contact'=>$contact,
            'banner'=>$banner,
        ]);
    }


    function neighbor(){
        $contact = Contact::find(1);
        $places = Place::all();
        $neighborApartment =NeighborApartment::where('status', 1)->get();
        return view('frontend.neighbor',[
            'contact'=>$contact,
            'places'=>$places,
            'neighborApartment'=>$neighborApartment,
        ]);
    }


    function single_neighbor($slug){
        $apartment_id = NeighborApartment::where('slug',$slug)->get()->first()->id;
        $neighbors = Neighbor::where('apartment_id', $apartment_id)->where('status', 1)->get();
        $contact = Contact::find(1);
        $places = Place::all();
        return view('frontend.single_neighbor',[
            'contact'=>$contact,
            'places'=>$places,
            'neighbors'=>$neighbors,
        ]);
    }


    function service_message_store(Request $request){

            $request->validate([
                'name'=>'required',
                'phone'=>'required',
                'message'=>'required',
            ]);

            ServiceMessage::insert([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'message'=>$request->message,
                'created_at'=>Carbon::now(),
            ]);

            return back()->with('message','Sent Message Successfully');

    }



    function upcoming(){

        $places = Place::all();
        $contact = Contact::find(1);

        $upcoming = properties::where('position', '1')->where('on_off', '1')->get();
        return view('frontend.upcoming',[
            'upcoming'=>$upcoming,
            'contact'=>$contact,
            'places'=>$places,
        ]);
    }


    function under_cons(){
        $places = Place::all();
        $contact = Contact::find(1);
        $under_cons = properties::where('position', '2')->where('on_off', '1')->get();
        return view('frontend.under_cons',[
            'under_cons'=>$under_cons,
            'contact'=>$contact,
            'places'=>$places,
        ]);
    }


    function handover(){
        $places = Place::all();
        $contact = Contact::find(1);
        $handover = properties::where('position', '3')->where('on_off', '1')->get();
        return view('frontend.handover',[
            'handover'=>$handover,
            'contact'=>$contact,
            'places'=>$places,
        ]);
    }









}
