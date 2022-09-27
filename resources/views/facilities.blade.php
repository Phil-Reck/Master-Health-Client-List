@extends('layouts.main')
@section('Page-Title')
Facility Master List
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <!-- Main content -->

    <!-- /.content -->
    <!-- Main content -->
  
      <!-- Main content -->
      <section class="content">
  
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Facilities Detail</h3>
  
            <div class="">
                {{-- <a href="#" class="">Create facility</a></div> --}}
                <a class="float-right btn btn-info btn-sm" data-toggle="modal" data-target="#newProgramModal"><span class="fas fa-plus"></span>&nbsp;Create Facility </a>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
                <div class="row">
                    <div class="col-12">
                    <h4>All Facilities</h4> <div class="">
                    </div>
                    
                </div>
            </div>
              <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
                <div class="row">
                  <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">Estimated budget</span>
                        <span class="info-box-number text-center text-muted mb-0">2300</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">Total amount spent</span>
                        <span class="info-box-number text-center text-muted mb-0">2000</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">Estimated project duration</span>
                        <span class="info-box-number text-center text-muted mb-0">20 <span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                <h3 class="text-primary"><i class="fas fa-paint-brush"></i> AdminLTE v3</h3>
                <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                <br>
                <div class="text-muted">
                  <p class="text-sm">Client Company
                    <b class="d-block">Deveint Inc</b>
                  </p>
                  <p class="text-sm">Project Leader
                    <b class="d-block">Tony Chicken</b>
                  </p>
                </div>
  
                <h5 class="mt-5 text-muted">Project files</h5>
                <ul class="list-unstyled">
                  <li>
                    <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                  </li>
                  <li>
                    <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                  </li>
                  <li>
                    <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                  </li>
                  <li>
                    <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                  </li>
                  <li>
                    <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                  </li>
                </ul>
                <div class="text-center mt-5 mb-3">
                  <a href="#" class="btn btn-sm btn-primary">Add files</a>
                  <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                </div>
              </div> --}}
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
  
      </section>
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Facility List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Facility Name</th>
                      <th>MFL Code</th>
                      <th>County</th>
                      <th>Sub-County</th>
                      <th>Services</th>
                      <th >
                        Actions
                      </th>
                    </th>
                  </tr>
                </thead>
                      {{-- <th>Operational Status</th>
                      <th>Date Established</th>
                      <th>Date Operational</th>
                      <th>Doctors</th>
                      <th>Nurses</th> --}}
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($facilities as $facility)
                        <tr>
                            <td>{{$facility->name}}</td>
                            <td>{{$facility->mfl_code}}</td>
                            <td>{{$facility->county}}</td>
                            <td>{{$facility->sub_county}}</td>
                            <td>{{$facility->services}}</td>
                            <td class="project-actions text-left float-right">
                                <a class="btn btn-info btn-sm" href="{{url('view-facility/'.$facility->id)}}">
                                    <i class="fas fa-gopuram">
                                    </i>
                                    View Facility
                                </a>
                                <a class="btn btn-info btn-sm" href="{{url('facilities/edit/'.$facility->id)}}">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Edit
                                </a>
                                <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-{{$facility->id}}">
                                  <i class="fas fa-trash">
                                  </i>
                                  Delete
                                </a>
          
                                <div class="modal fade" id="delete-{{$facility->id}}">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header bg-danger-normal">
                                        <h4 class="modal-title">Confirm delete</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <p>Do you really want to delete these records? Note that this process cannot be undone &hellip;</p>
                                      </div>
                                      <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <a href="{{url('delete-facility/'.$facility->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
                                      </div>
                                    </div>
                                    <!-- /.modal-content -->
                                  </div>
                                  <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                              </td>
                            {{-- <td>{{$lecturer->address}}</td>
                            <td>{{$lecturer->address}}</td>
                            <td>{{$lecturer->address}}</td>
                            <td>{{$lecturer->address}}</td> --}}
                         <tr>
                        @endforeach
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
          </div>

          <div class="modal fade" id="newProgramModal" tabindex="-1" role="dialog" aria-labelledby="itemModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header kabarak-modal-header">
                  <h3 class="card-title">Add Facility</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btnclose">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="">
        
        
        
                    <!-- /.card-header -->
                    <!-- form start -->
                  <form id="quickForm" method="post" action="{{url('/facilities/create')}}">
                      {{csrf_field()}}
                      <div class="card-body">
        
                        
                        
                        <div class="form-group">
                          <label for="facility-name">Name</label>
                          <input type="text" id="fName" class="form-control" name="facility_name" placeholder="eg. Mema Sub County Hospital" required>
                        </div>
                        <div class="form-group">
                          <label for="mfl-code">MFL Code</label>
                          <input type="text" id="mflCode" class="form-control" name="mfl_code" placeholder="e.g 678678" required>
                        </div>
        
                        <div class="form-group">
                          <label for="county">County</label>
                          <input type="text" id="county" class="form-control" name="county" placeholder="e.g Nakuru" required>
                        </div>
                        <div class="form-group">
                            <label for="sub-county">Sub-County</label>
                            <input type="text" id="sub-county" class="form-control" name="sub_county" placeholder="e.g Rongai" required>
                        </div>
                        <div class="form-group">
                            <label for="ward">Ward</label>
                            <input type="text" id="ward" class="form-control" name="ward" placeholder="e.g Mosop" required>
                        </div>
                        <div class="form-group">
                            <label for="facility-type">Facility Type</label>
                            <input type="text" id="facility-type" class="form-control" name="facility_type" placeholder="e.g Level 1" required>
                        </div>
                        <div class="form-group">
                            <label for="services">Services</label>
                            <input type="text" id="services" class="form-control" name="services" placeholder="e.g Level 1" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" id="status" class="form-control" name="status" placeholder="e.g Operational/ Non-Operational" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Establishment Date</label>
                            <input type="text" id="date-established" class="form-control" name="date_established" placeholder="e.g Date" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Operational Date</label>
                            <input type="text" id="date-operational" class="form-control" name="date_operational" placeholder="e.g Date" required>
                        </div>
                        <div class="form-group">
                            <label for="status">No of Doctors</label>
                            <input type="text" id="doctors" class="form-control" name="doctors" placeholder="e.g 11" required>
                        </div>
                        <div class="form-group">
                            <label for="status">No of Nurses</label>
                            <input type="text" id="nurses" class="form-control" name="nurses" placeholder="e.g 11" required>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-kabarak">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnclose">Close</button>
        
                      </div>
                    </form>
                  </div>
        
                </div>
        
              </div>
            </div>
          </div>
        <div>

@endsection