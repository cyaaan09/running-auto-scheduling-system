@extends('index')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Meeting</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
      <div class="col-sm-4">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Meeting</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Date</label>
                        <select class="custom-select">
                          <option>Select</option>
                          <option>Mon - TH</option>
                          <option>LEC</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Start Time</label>
                        <input type="time" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> End Time</label>
                        <input type="time" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Section</label>
                        <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Max Number of Student</label>
                        <input type="number" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                      </div>

                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-block btn-info btn-md">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
      <div class="col-sm-8">
         <div class="card">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">List</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body p-0">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>ID #</th>
                                  <th>Day</th>
                                  <th>Start</th>
                                  <th>End </th>
                                  <th>Duration</th>
                                </tr>
                              </thead>
                              @foreach($meeting_times as $meeting_time)
                              <tbody>
                                <tr>
                                  <td>{{ $meeting_time->id }}</td>
                                  <td>{{ $meeting_time->day }}</td>
                                  <td>{{ $meeting_time->start }}</td>
                                  <td>{{ $meeting_time->end }}</td>
                                  <td>{{ $meeting_time->duration }}</td>
                                 <!--  <td style="width: 12%;">Delete</td> -->
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
    </div>
@endsection