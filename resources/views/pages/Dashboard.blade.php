@extends('index')

@section('content')
<style type="text/css">
  .btn-circle.btn-xl {
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 18px;
    line-height: 1.33;
}
</style>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <br><br><br>
    <div id="loading" hidden>
      <h1 class="text-center" style="font-weight: 700;
      font-family: system-ui">
      <span style="color: #007bff">L</span>
      <span style="color: #dc3545">O</span>
      <span style="color: #ffc107">A</span>
      <span style="color: #007bff">D</span>
      <span style="color: #28a745">I</span>
      <span style="color: #dc3545">N</span>
      <span style="color: #007bff">G</span>
      <span style="color: #ffc107">. . .</span></h1>
      <br>
      <div class="d-flex justify-content-center">
          <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>
          <span class="sr-only"  style="color: #ffc107">Loading...</span>
      </div><br>
      <h3 class="text-center" style="color: #007bff">53 %</h3>
    </div>
    <div id="generate">
      <h5 class="text-center">Click Here</h5>
      <p class="text-center">
      <small class="text-warning mr-1">
        <i style="text-align: center;" class="fas fa-arrow-down"></i>
      </small>
      </p>
      <div class="d-flex justify-content-center">
         <div class="row">
           <div class="col-sm-12">
              <button type="button" class="btn btn-block btn-outline-warning btn-lg btn-circle btn-xl"><span>Generate Schedule</span>
          </button>
           </div>
         </div>
      </div>
    </div>
    <br><br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $('#loading').attr('hidden', false);
    $('#generate').attr('hidden', true);
  });
});
</script>
    
@endsection