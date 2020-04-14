@extends('ctv.sidebar')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Timesheet</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Timesheet</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-row">
                  <!--row -->
                  <div class="form-group col-md-6">
                    <label>Work Day</label>
                    <input type="date" name="day" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Select Project</label>
                    <select class="custom-select">
                      <option selected>Choose</option>
                      <option value="1">Water area</option>
                      <option value="2">Tree counting</option>
                      <option value="3">TensorRT</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col">
                    <label>Start Time</label>
                    <input type="text" name="starttime" class="form-control" placeholder="Enter start time">
                  </div>
                  <div class="form-group col">
                    <label>End Time</label>
                    <input type="text" name="endtime" class="form-control" placeholder="Enter end time">
                  </div>
                  <div class="form-group col">
                    <label>Total Hours</label>
                    <input type="text" name="totalhours" class="form-control" placeholder="Total Hours">
                  </div>
                </div>
                <div class="form-row">
                  <!--row -->
                  <div class="form-group col-md-6">
                    <label>Effective</label>
                    <input type="text" name="prjectname" class="form-control" placeholder="Enter effective(%)">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="comment">Task description</label>
                    <textarea class="form-control" rows="5" name="description" placeholder="Enter task description..."></textarea>
                  </div>
                </div>
              </div>
              <!--end car-body-->
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="row justify-content-md-center">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection
