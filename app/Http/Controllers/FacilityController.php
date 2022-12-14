<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
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

        return view('facilities', compact('facilities'));
    }

    public function viewFacility($id)
    {
        // view a single facility_type
        $facility = Facility::find($id);
        $facility_name = Facility::find($id)->name;
        $facility_status = Facility::find($id)->operational_status;
        $facility_services = Facility::find($id)->services;
        // dd($facility_name);
        // dd($facility);
        return view('view-facility', compact('facility', 'facility_name', 'facility_status', 'facility_services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Facility::firstOrCreate([
            'name' => $request->facility_name,
            'mfl_code' => $request->mfl_code,
            'county' => $request->county,
            'sub_county' => $request->sub_county,
            'ward' => $request->ward,
            'facility_type' => $request->facility_type,
            'services' => $request->services,
            'operational_status' => $request->status,
            'date_established' => $request->date_established,
            'date_operational' => $request->date_operational,
            'no_of_doctors' => $request->doctors,
            'no_of_nurses' => $request->nurses,
        ]);

        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFacilityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacilityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function edit(Facility $facility, $id)
    {
        $facility = Facility::all();
        $facility_id = Facility::find($id)->id;
        $facility_name = Facility::find($id)->name;
        $facility_code = Facility::find($id)->mfl_code;
        $facility_county = Facility::find($id)->county;
        $facility_sub_county = Facility::find($id)->sub_county;
        $facility_ward = Facility::find($id)->ward;
        $facility_type = Facility::find($id)->facility_type;
        $facility_services = Facility::find($id)->services;
        $facility_status = Facility::find($id)->operational_status;
        $facility_established = Facility::find($id)->date_established;
        $facility_operational = Facility::find($id)->date_operational;
        $facility_doctors = Facility::find($id)->no_of_doctors;
        $facility_nurses = Facility::find($id)->no_of_nurses;
        // dd($facility_name);
        return view('edit-facility', compact('facility', 'facility_name', 'facility_code', 'facility_type', 'facility_status', 'facility_services', 'facility_doctors', 'facility_nurses', 'facility_id', 'facility_county', 'facility_sub_county', 'facility_ward', 'facility_established', 'facility_operational'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFacilityRequest  $request
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        // dd($request->facility_id);

        // $request->validate([
        //     // 'facility_id' => 'required',
        //     'facility_name' => 'required',
        //     'mfl_code' => 'required',
        //     'facility_type' => 'required',
        //     'services' => 'required',
        //     'status' => 'required',
        //     'doctors' => 'required',
        //     'nurses' => 'required',
        // ]);


        // dd('Working directory');

        Facility::where('id', $request->facility_id)->update([
            'name' => $request->input('facility_name'),
            'mfl_code' => $request->input('mfl_code'),
            'county' => $request->input('county'),
            'sub_county' => $request->input('sub_county'),
            'ward' => $request->input('ward'),
            'facility_type' => $request->input('facility_type'),
            'services' => $request->input('services'),
            'operational_status' => $request->input('status'),
            'date_established' => $request->input('established'),
            'date_operational' => $request->input('operational'),
            'no_of_doctors' => $request->input('facility_doctors'),
            'no_of_nurses' => $request->input('facility_nurses'),
        ]);

        return redirect('facilities');
        // return view('facilities');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Destroy the Facility
        Facility::where('id', $id)->delete();
        return redirect('facilities');
    }
}
