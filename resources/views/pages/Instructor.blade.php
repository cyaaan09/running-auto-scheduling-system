@extends('index')

@section('content')
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
                      <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <div class="card-body p-0">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>ID #</th>
                                <th>Name</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                              </tr>
                            </thead>
                             @foreach($instructors as $instructor)
                            <tbody>
                              <tr>
                               
                                <td>{{ $instructor->id }}</td>
                                <td>{{ $instructor->name }}</td>
                                <td>{{ $instructor->created_at }}</td>
                                <td>{{ $instructor->updated_at }}</td>
                                <td>
                                    <a href="#" class="btn btn-block btn-info btn-xs" data-toggle="modal" data-target="#Details">Details</a>
                                  </a>
                                </td>
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