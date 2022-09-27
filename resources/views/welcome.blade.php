@extends('layouts.main')
@section('Page-Title')
Welcome, {{ Auth::user()->name }}
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <!-- Main content -->

    <!-- /.content -->
    <!-- Main content -->
  
      <!-- Main content -->
      <section class="content">
  
        <!-- Default box -->
        <h5 class="mt-4 mb-2">Master Health Facility Client List</h5>

        <div class="row">
          <!-- /.col -->

          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-list"></i>
                  Master Facility & Client List
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="callout callout-info">
                  <h5>Master Health Facility List</h5>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/facilities" class="nav-link">
                        <p>Facilities</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/common-units" class="nav-link">
                        <p>Common Units</p>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="callout callout-warning">
                  <h5>Master Health Client List</h5>

                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="/client/register" class="nav-link">
                    
                            <p>Register</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="/client/search" class="nav-link">
                            <p>Search</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="/client/summary" class="nav-link">
                            <p>Patient Summary</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="../tables/jsgrid.html" class="nav-link">
                            <p>Reports</p>
                          </a>
                        </li>
                      </ul>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.card -->
  
      </section>
      
@endsection