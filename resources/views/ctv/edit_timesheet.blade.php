@extends('ctv.sidebar')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Timesheet</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Timesheet</li>
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
            <div class="card-header">
              <!--đây là header-->
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-row">
                  <!--row -->
                  <div class="form-group col-md-6">
                    <label>Work Day</label>
                    <input type="date" name="day" value="" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Select Project</label>
                    <select class="custom-select">
                      <!-- <option selected>Choose</option> -->
                      <option value="1">Water area</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col">
                    <label>Start Time</label>
                    <input type="text" name="starttime" value="8" class="form-control" placeholder="Enter start time">
                  </div>
                  <div class="form-group col">
                    <label>End Time</label>
                    <input type="text" name="endtime" value="17" class="form-control" placeholder="Enter end time">
                  </div>
                  <div class="form-group col">
                    <label>Total Hours</label>
                    <input type="text" name="totalhours" value="8" class="form-control" placeholder="Total Hours">
                  </div>
                </div>
                <div class="form-row">
                  <!--row -->
                  <div class="form-group col-md-6">
                    <label>Effective</label>
                    <input type="text" name="prjectname" value="90" class="form-control" placeholder="Enter effective(%)">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="comment">Task description</label>
                    <textarea class="form-control" rows="5" name="description" placeholder="Enter task description...">Write inference module</textarea>
                  </div>
                </div>
              </div>
              <!--end car-body-->
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
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
