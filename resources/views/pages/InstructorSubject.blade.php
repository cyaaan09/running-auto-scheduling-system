@extends('index')

@section('content')
@include('modal.instructorsubjectmodal')
<style type="text/css">
.my-custom-scrollbar {
position: relative;
height: 500px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>INSTRUCTOR SUBJECTS</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	<!-- Default box -->
      <div class="card">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Instructors Subjects Table</h3>
                        <div class="col-sm-12">
                          <div class="float-right" >
                             <a href="#" class="btn btn-block btn-info btn-md" data-toggle="modal" data-target="#instructor_subject">Add Data</a>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <div class="card-body p-0">
                          <table class="table">
                            <thead class="position-relative">
                              <tr>
                                <th>ID #</th>
                                <th>Instructor</th>
                                <th>Course</th>
                                <th>Section</th>
                                <th>Subject Details</th>
                              </tr>
                            </thead>
                             @foreach($InstructorSubjects as $InstructorSubject)
                            <tbody>
                              <tr>
                                
                                <td>{{ $InstructorSubject->id }}</td>
                                <td>{{ $InstructorSubject->instructor_name }}</td>
                                <td>{{ $InstructorSubject->course_name }}</td>
                                <td>{{ $InstructorSubject->section_name }}</td>
                                <td>{{ $InstructorSubject->sub_name }} - {{ $InstructorSubject->type_name }}</td>
                                <!-- <td>
                                    <a href="#" class="btn btn-block btn-info btn-xs" data-toggle="modal" data-target="#Details">Details</a>
                                  </td> -->
                                <!-- <td>
                                    <a href="/instructor/{{ $InstructorSubject->id }}" class="btn btn-block btn-info btn-xs">Delete</a>
                                </td> -->
                              </tr>
                            </tbody>
                            @endforeach
                          </table>
                        </div>
                      <!-- /.card-body -->
                      </div>
                </div>
            </div>
        </div>
      </div>
      <!-- /.card -->
@endsection