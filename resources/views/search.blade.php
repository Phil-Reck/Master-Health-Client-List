@extends('layouts.main')
@section("title", "Clients")
@section('Page-Title')
All Clients
@endsection
@section('content')
<div class="input-group float-lefts" style="margin-bottom:7px; margin-left:-10px;">

    &nbsp;&nbsp;&nbsp;
    <div class="mt-22 input-group-prepend">
        <span class="input-group-text" id=""><span class="fas fa-search"></span>&nbsp; Search for a Client </span>
    </div>
    <input id="myInput" placeholder="e.g Names, Gender, By Facility, Unique Patient ID & By County" type="text" class="form-control">
    {{-- <input type="text" class="form-control"> --}}
</div>

<!-- Default box -->
<div class="card mt-22">
    </div>

        <table id="example3" class="display dataTable table-striped">
            <thead>
                <tr>
                    <th style="width: 8%">
                        First Name
                    </th>
                    <th style="width: 15%">
                        Last Name
                    </th>
                    <th style="width: 10%">
                        Gender
                    </th>
                    <th style="width: 15%">
                        Facility
                    </th>
                    <th style="width: 10%">
                        Uniques Patient ID
                    </th>
                    <th style="width: 10%">
                        County
                    </th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($clients as $client)
                <tr data-toggle="tooltip" title="Click to edit">
                    <td data-toggle="tooltip" data-placement="bottom" title="{{$client->fname}}">{{$client->fname}}</td>
                    <td data-toggle="tooltip" data-placement="bottom" title="{{$client->lname}}">{{$client->lname}}</td>
                    <td data-toggle="tooltip" data-placement="bottom" title="{{$client->gender}}">{{$client->gender}}</td>
                    <td data-toggle="tooltip" data-placement="bottom" title="{{$client->facility_id}}">{{$client->facility_id}}</td>
                    <td data-toggle="tooltip" data-placement="bottom" title="{{$client->UID_Number}}">{{$client->UID_Number}}</td>
                    <td data-toggle="tooltip" data-placement="bottom" title="{{$client->county}}">{{$client->county}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <br>
</div>
<!-- /.card -->
<br>

@endsection
<script>
    $(document).ready(function() {
      $("#myInput").on("keyup", function() {
        alert('working')
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
@section('jscontent')
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

    });
</script>
<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    function topBar(message) {
        $("<div />", {
                'class': 'topbar',
                text: message
            }).hide().prependTo('body')
            .slideDown('fast').delay(5000).slideUp(function() {
                $(this).remove();
            });
    }

    function submitChange(formData) {
        $.ajax({
            url: "{{url('editcohort')}}",
            type: "POST",
            data: formData,
            contentType: false,
            cache: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            success: function(data) {
                console.log('success');
            },
            error: function(data) {
                //alert("Error");
                console.log('error');
            },
            complete: function(data) {
                toastr.success('Cohort updated successfully.')
            }
        });
    }

    function saveChange(id) {
        var num_students = $('#numStudents' + id).val();

        if (num_students < 0) {
            alert("Number of students cannot be less than zero");
            $('#numStudents' + id).val(0);
        } else {
            var formData = new FormData();
            formData.append("level_id", id);
            formData.append("num_students", num_students);

            if ($('#inSession' + id).is(':checked')) {
                formData.append("in_session", "on")
            } else {
            }
            submitChange(formData);
        }
    }

    $(document).ready(function() {
        $('#cohorts.table').DataTable();

        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });
    });

    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("example2");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    jQuery(function() {
        // $.post(
        jQuery('#s_cohorts').change(function() {
            this.form.submit();

        });
        // );

    });
</script>
@endsection