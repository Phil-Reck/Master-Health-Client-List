<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use App\Models\Facility;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //department main page
        $facilities = Facility::all();
        // $departments = department::all();
        // dd($facilities);

        return view('register-client', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Client::firstOrCreate([
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'dob' => $request->dob,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'id_no' => $request->id_no,
            'UID_Number' => $request->uid_Number, 
            'nemis' => $request->nemis,
            'county' => $request->county,
            'sub_county' => $request->sub_county,
            'ward' => $request->ward,
            'facility_id' => $request->facility_id,
        ]);

        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $clients = Client::all();

        return view('search', compact('clients'));
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function summary(Client $client)
    {
        //
        $client = Client::find($client->id);
        // $facility = Facility::find($client->facility_id);
        // dd($client);
        return view('client-summary', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
