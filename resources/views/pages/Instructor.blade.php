@extends('index')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>INSTRUCTORS</h1>
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
                        <h3 class="card-title">Simple Full Width Table</h3>
                        <div class="col-sm-12">
                          <div class="float-right" >
                             <a href="#" class="btn btn-block btn-info btn-md" data-toggle="modal" data-target="#exampleModalCenter">Add Instructor</a>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body p-0">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>ID #</th>
                              <th>Name</th>
                              <th>Rank</th>
                              <th>Expertise</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>19-202</td>
                              <td>Update software</td>
                              <td><span class="badge bg-danger">1</span></td>
                              <td><span class="badge bg-danger">55%</span></td>
                              <td>
                                  <a href="#" class="btn btn-block btn-info btn-xs" data-toggle="modal" data-target="#Details">Details</a>
                                </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                </div>
            </div>
        </div>
      </div>
      <!-- /.card -->
@endsection