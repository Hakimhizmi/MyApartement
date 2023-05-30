<?php

namespace App\Http\Controllers;

use App\Models\apartement;
use App\Models\ApartementOption;
use App\Models\mail;
use App\Models\option;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apartements = apartement::where('sold',0)->orderBy('created_at', 'desc')->get();
        $options = option::all();
        $orders = mail::join('apartements as a', 'mails.idA', '=', 'a.id')
        ->select('a.title','a.cover','mails.*')->orderBy('date', 'desc')->get();
        return view('dashboard',compact("apartements","options","orders"));
    }
    public function sold(Request $request)
    {
        $apartements = apartement::where('sold',$request->type)->orderBy('created_at', 'desc')->get();
        return response()->json(['data'=>$apartements]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $options = option::all();
        return view('addApartement',compact('options'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'surface' => 'required|numeric',
            'price' => 'required|numeric',
            'cover' => 'required|mimes:jpg,jpeg,png',
            'pieces' => 'required|integer',
            'floor' => 'required|integer',
            'rooms' => 'required|integer',
            'city' => 'required|string',
            'adresse' => 'required|string',
            'postalcode' => 'required|numeric',
            'description' => 'required|string',
        ]);
        $imageName = $request->cover->getClientOriginalName();
        if (apartement::where('cover',$imageName)->count() < 1) {
            $request->cover->move(public_path('images'), $imageName);
        }
        $apartmentData = [
            'title' => $request->title,
            'surface' => $request->surface,
            'price' => $request->price,
            'cover' => $imageName,
            'pieces' => $request->pieces,
            'floor' => $request->floor,
            'rooms' => $request->rooms,
            'city' => $request->city,
            'adresse' => $request->adresse,
            'postalcode' => $request->postalcode,
            'description' => $request->description,
            'sold' => 0,
        ];
        $apartmentId = apartement::insertGetId($apartmentData);

        if ($request->options != null) {
            foreach ($request->options as $value) {
                ApartementOption::insert([
                    'idA' => $apartmentId , 'idO' => $value
                ]);
            }
        }
        return redirect('/dashboard')->with(['success'=>'The item was added successfully']);
    }
    public function storeOption(Request $request)
    {
        $option = $request->validate([
            'Name' => 'required|string',
        ]);
        option::insert($option);
        return redirect('/dashboard')->with(['success'=>'The Option was added successfully']);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $apartement = apartement::findOrFail($id);
        $apartementOptions = $apartement->options;
        $options = option::all();
        return view('editApartement',compact('options','apartement','apartementOptions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',
            'surface' => 'required|numeric',
            'price' => 'required|numeric',
            'pieces' => 'required|integer',
            'floor' => 'required|integer',
            'rooms' => 'required|integer',
            'city' => 'required|string',
            'adresse' => 'required|string',
            'postalcode' => 'required|numeric',
            'description' => 'required|string',
        ]);
        if ($request->cover == null) {
            $imageName = $request->defaulimage;
        }
        else {
            $request->validate([
                'cover'=> 'required|mimes:jpeg,png,jpg,gif',
            ],[
                'cover.required'=>'image format invalid',
            ]);
            if (apartement::where('cover',$request->defaulimage)->count() == 1) {
                unlink(public_path('images/' . $request->defaulimage));
            }
            $imageName = $request->cover->getClientOriginalName();
            $request->cover->move(public_path('images'),$imageName);
        }
        $apartmentData = [
            'title' => $request->title,
            'surface' => $request->surface,
            'price' => $request->price,
            'cover' => $imageName,
            'pieces' => $request->pieces,
            'floor' => $request->floor,
            'rooms' => $request->rooms,
            'city' => $request->city,
            'adresse' => $request->adresse,
            'postalcode' => $request->postalcode,
            'description' => $request->description,
        ];
        if ($request->options != null) {
            ApartementOption::where('idA',$id)->delete();
            foreach ($request->options as $value) {
                ApartementOption::insert([
                    'idA' => $id , 'idO' => $value
                ]);
            }
        }
        apartement::whereId($id)->update($apartmentData);
        return redirect('/dashboard')->with(['success'=>'The item was Updated successfully']);
    }
    public function UpdateSold(string $id , $type)
    {
        apartement::whereId($id)->update(
            [
                'sold' => $type
            ]
        );
        return redirect('/dashboard')->with(['success'=> $type == 1 ? 'The item has been added to the sold item' : 'The item has been returned for sale again']);
    }
    public function updateOption(Request $request)
    {
        $request->validate([
            'NameOption' => 'required',
        ]);
        option::whereId($request->id)->update(['Name'=>$request->NameOption]);
        return redirect('/dashboard')->with(['success'=>'The option was Updated successfully']);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        apartement::whereId($id)->delete();
        return redirect('/dashboard')->with(['success'=>'The item has been deleted']);

    }
    public function destroyoption(string $id)
    {
        option::whereId($id)->delete();
        return redirect('/dashboard')->with(['success'=>'The option has been deleted']);

    }

    //details

    public function detailOrder(string $id)
    {
        mail::whereId($id)->update(['status' => 1]);
        $data = mail::findOrFail($id);
        $apartement = $data->apartement;
        return view('detailOrder',compact('data','apartement'));

    }
}
