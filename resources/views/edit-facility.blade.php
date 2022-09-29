@extends('layouts.main')
@section('Page-Title')
Edit {{ $facility_name }} Facility
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <!-- Main content -->

    <!-- /.content -->
    <!-- Main content -->
  
      <!-- Main content -->
      <section class="content">
  
        <!-- Default box -->
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Edit Facility Details</h3>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" method="POST" action="{{url('/facilities/update/'.$facility_id)}}" class="form">
                {{csrf_field()}}
              <div class="card-body">
                <div class="form-group row">
                  <input type="hidden" name="facility_id" value="{{ $facility_id}}">
                  <input type="hidden" name="county" value="{{ $facility_county}}">
                  <input type="hidden" name="sub_county" value="{{ $facility_sub_county}}">
                  <input type="hidden" name="ward" value="{{ $facility_ward}}">
                  <input type="hidden" name="services" value="{{ $facility_services}}">
                  <input type="hidden" name="status" value="{{ $facility_status}}">
                  <input type="hidden" name="established" value="{{ $facility_established}}">
                  <input type="hidden" name="operational" value="{{ $facility_operational}}">

                  
                  <label for="facilityName" class="col-sm-2 col-form-label">Facility Name</label>
                  <div class="col-sm-10"> 
                    <input type="text" name="facility_name" value="{{$facility_name}}" class="form-control" id="facility_name" placeholder="Facility Name">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="mflCode" class="col-sm-2 col-form-label">MFL - Code</label>
                    <div class="col-sm-10">
                        <input type="number" name="facility_code" value="{{$facility_code}}" class="form-control" id="mflCode" placeholder="145678">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="facilityType" class="col-sm-2 col-form-label">Facility Type</label>
                    <div class="col-sm-10">
                        <input type="text" name="facility_type" value="{{$facility_type}}" class="form-control" id="mflCode" placeholder="Facility Type">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="facilityStatus" class="col-sm-2 col-form-label">Facility Status</label>
                    <div class="col-sm-10">
                        <input type="text" name="facility_status" value="{{$facility_status}}" class="form-control" id="mflCode" placeholder="Facility Status">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="doctors" class="col-sm-2 col-form-label">Number of Doctors</label>
                    <div class="col-sm-10">
                        <input type="number" name="facility_doctors" value="{{$facility_doctors}}" class="form-control" id="doctors" placeholder="11">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="doctors" class="col-sm-2 col-form-label">Number of Nurses</label>
                    <div class="col-sm-10">
                        <input type="number" name="facility_nurses" value="{{$facility_nurses}}" class="form-control" id="doctors" placeholder="11">
                    </div>
                </div>
                
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Update</button>
                <button type="submit" class="btn btn-default float-right">Cancel</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
        <!-- /.card -->
  
      </section>
      <section class="content">
        

@endsection