@extends('index')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rooms</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
      <div class="col-sm-4">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Room</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Building</label>
                        <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Rooms</label>
                        <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label>Types of Rooms</label>
                        <select class="custom-select">
                          <option>Select</option>
                          <option>LAB</option>
                          <option>LEC</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Capacity</label>
                        <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
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
                                  <th>Building</th>
                                  <th>Rooms</th>
                                  <th>Types of Room</th>
                                  <th>Capacity</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>19-202</td>
                                  <td>John Rosales</td>
                                  <td>IT</td>
                                  <td>Annex 101 </td>
                                  <td>Lab</td>
                                  <td>Delete</td>
                                </tr>
                              </tbody>
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