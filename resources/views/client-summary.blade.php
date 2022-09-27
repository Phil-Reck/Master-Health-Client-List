@extends('layouts.main')
@section('Page-Title')
Client/ Patient Summary
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="../../dist/img/avatar5.png"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">Nina Mcintire</h3>


                         </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Patient Summary</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-syringe mr-1"></i> Medications</strong>

              <hr>

              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Past Visits</a></li>
                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Vitals</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Consent</a></li>
              </ul>
            </div><!-- /.card-header -->
            
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection