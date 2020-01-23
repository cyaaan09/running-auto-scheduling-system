@extends('index')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Schedules</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                      <div class="card-header" style="background-color: #343a40;color: white;">
                        <h3 class="card-title">Block A</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body p-0">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>ID #</th>
                              <th>Instructors</th>
                              <th>Subjects</th>
                              <th>Rooms</th>
                              <th>Types of rooms</th>
                              <th>Time</th>
                              <th>Date</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>19-202</td>
                              <td>John Rosales</td>
                              <td>IT</td>
                              <td>Annex 101 </td>
                              <td>Lab</td>
                              <td>3:30pm - 4:30pm</td>
                              <td>Mon - TH</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                </div>
                <div class="row card-footer">
                  <div class="col-sm-2">
                    <button class="btn btn-block btn-info btn-sm">Bellman</button>
                  </div>
                </div>
            </div>
        </div>
    </div>

@endsection