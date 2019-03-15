@extends('layout.master')

@section('content')

  <!-- +++++ Posts Lists +++++ -->
  <!-- +++++ First Post +++++ -->
  <div class="row mt">
      <div class="col-lg-6 col-lg-offset-3 centered">
        <h3>TUGASAN JAVASCRIPT</h3>
        <hr>
      </div>
    </div>
  </div>
    <div class="container">
      <div class="row">
          <div class="col-lg-6 col-lg-offset-3 centered">
          <form class="form-horizontal">
  <div class="form-group">
    <label class="col-sm-2 control-label">Employee Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="emp_name" placeholder="Employee name">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Employee Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="emp_number" placeholder="Employee number">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Rate of pay</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="rate" placeholder="Rate">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Hour of work</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="hour" placeholder="Hour">
    </div>
  </div>

  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
      <button id="btn_kira" type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
      </div>
<br>
<br>
<br>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->

  @endsection