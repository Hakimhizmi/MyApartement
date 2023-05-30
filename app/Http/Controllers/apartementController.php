<?php

namespace App\Http\Controllers;

use App\Models\apartement;
use App\Models\mail;
use Illuminate\Http\Request;

class apartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scroller = apartement::orderby('created_at','desc')->limit(4)->get();        
        return(
            view('main',['scroller'=>$scroller])
        );
    }
    public function filter(Request $request)
    {
        $properties = apartement::query();
        
        if ($request->has('surface_filter') &&  $request->surface_filter != '') {
            $properties->orderby('surface', $request->surface_filter);
        };
        if ($request->has('rooms_filter') &&  $request->rooms_filter != '') {
            $properties->where('rooms', $request->rooms_filter);
        };
        if ($request->has('price_filter') &&  $request->price_filter != '' ) {
            $properties->orderby('price', $request->price_filter);
        };
        if ($request->has('search') &&  $request->search != '') {
            $properties->where('title', 'LIKE', "%{$request->search}%");
        };
        if ($request->has('sold_filter') &&  $request->sold_filter != '') {
            $properties->where('sold',$request->sold_filter);
        };
        $filtered_properties = $properties->get();

        return(
            response()->json([
                'data' => $filtered_properties ,
            ])
        );
    }


    public function order(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        mail::insert([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'date' => now(),
            'status' => 0 ,
            'idA' => $id
        ]);
        return redirect()->back()->with(['success'=>'Thank you for submitting your information. We have received your message and will respond to you as soon as possible. Please wait for our response.']);

    }

    public function show(string $id)
    {      
        $data = apartement::findOrFail($id);
        $options = $data->options;

        return view('detail',compact('data','options'));
    }


  
}
