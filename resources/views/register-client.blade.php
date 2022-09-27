@extends('layouts.main')

@section('content')
<div class="container" style="background-color: white; margin-bottom:30%;">
    <form action="/client/create" method="post" id="form">
        @csrf
        <div class="panel-heading" style="padding-top:2%">
            <h3><center>Client Information</center></h3>
        </div>
               <hr><br>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="fname">First Name</label>
                <input name="fname" type="text" class="form-control" id="fname" placeholder="First name">
            </div>
            <div class="form-group col-md-4">
                <label for="mname">Middle Name</label>
                <input name="mname" type="text" class="form-control" id="mname" placeholder="Middle name">
            </div>
            <div class="form-group col-md-4">
                <label for="lname">Last Name</label>
                <input name="lname" type="text" class="form-control" id="lname" placeholder="Last name">
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nemis">Nemis</label>
                <input name="nemis" type="text" class="form-control" id="Nemis" placeholder="Nemis">
            </div>
            <div class="form-group col-md-4">
                <label for="dob">DOB</label>
                <input name="dob" type="date" class="form-control" id="dob">
            </div>
            <div class="form-group col-md-4">
                <label for="age">Age</label>
                <input name="age" type="text" class="form-control" id="age" readonly>
            </div>
            
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="gender">Gender</label>
                <select name='gender' id="gender" class="form-control">
                    <option selected disabled>Select gender</option>
                    <option value='F'>Female</option>
                    <option value='M'>Male</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="phone_number">Phone Number</label>
                <input name="phone" type="text" class="form-control" id="phone_number" placeholder="Phone Number">
            </div>
            <div class="form-group col-md-4">
                <label for="national_id_number">National Id Number</label>
                <input name="id_no" type="text" class="form-control" id="national_id_number" placeholder="National Id Number">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="facility">Facility</label>
                {{-- <input name="facility" type="text" class="form-control" id="facility" placeholder="Facility Name"> --}}
                <select name="facility_id" id="facility_id" class="form-control">
                    <option value="" selected disabled>Select facility</option>
                    @foreach ($facilities as $facilitykey => $facility)

                    <option value="{{ $facility->mfl_code }}" >{{$facility->mfl_code}}  - {{ $facility->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="mfl_code">MFL Code</label>
                <input name="mfl_code" type="text" class="form-control" id="mfl_code" readonly >
            </div>
            <div class="form-group col-md-3">
                <label for="serial_number">Serial Number</label>
                <input name="serial_no" type="number" class="form-control" min="0" id="serial_number" placeholder="Serial Number">
            </div>
            <div class="form-group col-md-3">
                <label for="uid_number">Uniques Patient ID</label>
                <input name="uid_Number" type="text" class="form-control" id="uid_Number" readonly>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="county">County</label>
                <input name="county" type="text" class="form-control" id="county" placeholder="County">

            </div>
            <div class="form-group col-md-3">
                <label for="sub-county">Sub - County</label>
                <input name="sub-county" type="text" class="form-control" id="sub-county" placeholder="County">

            </div>
            <div class="form-group col-md-3">
                <label for="ward">Ward</label>
                <input name="ward" type="text" class="form-control" id="ward" placeholder="ward">
            </div>
        </div>
        <div class="form-group">
            <label for="residence">Residence</label>
            <input name="Resident" type="text" class="form-control" id="Resident" placeholder="1234 Main St">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
<script type="text/javascript">
    $(document).ready(function($){
        $("#facility_id").select2();
        $('#mfl_code, #uid_Number, #facility_id, #serial_number').on('change', function() {
            $('#uid_Number').val($('#facility_id').val() + ' - ' + $('#serial_number').val() );
            $('#mfl_code').val($('#facility_id').val());
        });
        $('#county, #sub_county, #ward').on('change', function() {

        $('#Resident').val($('#county').val() +'/'
                            + $('#sub-county').val()
                            +'/' +$('#ward').val()
                            );
        });

        $('#dob').on('change', function(){
            var today = new Date();
            var birthDate = new Date($('#dob').val());
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            $('#age').val(age);

            // if($('#age').val(age)>18){
            //     $("#id_no").attr('required',true);
            // }else{
            //     $("#id_no").attr('required',false);
            // }
        })
        $('#form').on('change', function(){
            if($('#age').val() >= 18){
                $("#id_no").attr('required',true);
            }else{
                $("#id_no").removeAttr('required');
            }
        })

    })
</script>
@endsection
