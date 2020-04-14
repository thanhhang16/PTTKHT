@extends('admin.sidebar')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Report</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Timesheet</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col col-1 align-self-end">
                <button class="btn btn-primary btn-sm" type="submit">Export</button>
              </div>
              <div class="col col-4 align-self-end">
                <div class="input-group">
                  <input type="text" class="form-control-sm" placeholder="Search">
                  <div class="input-group-append">
                    <button class="btn btn-primary btn-sm" type="submit">Go</button>
                  </div>
                </div>
              </div>
              <div class="col col-2">
                <label for="start">Start</label>
                <input type="date" name="start" class="form-control-sm" id="InputBirthDay" value="">
              </div>
              <div class="col col-2">
                <label for="start">End</label>
                <input type="date" name="end" class="form-control-sm" id="InputBirthDay" value="">
              </div>
              <div class="col col-1 align-self-end">
                <button class="btn btn-primary btn-sm" type="submit">Submit</button>
              </div>
              <div class="col col-1">
                <div class="data_month" id="example1_length">
                  <label>Month</label>
                  <select name="data_month"" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                </div>
              </div>
              <div class="col col-1">
                <div class="dataTables_length" id="example1_length">
                  <label>Show </label>
                  <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th><input type="checkbox" name=""></th>
                <th>Name</th>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Total Hours</th>
                <th>Effective</th>
                <th>Project</th>
                <th>Task Description</th>
                <th>AH</th>
                <th>AE</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox" name=""></td>
                <td>Trần Đạt</td>
                <td>01/04/2020</td>
                <td>8:00</td>
                <td>17:00</td>
                <td>7</td>
                <td>90</td>
                <td>TensorRT</td>
                <td>Write inference module</td>
                <td>7</td>
                <td>100</td>
              </tr>
              <tr>
                <td><input type="checkbox" name=""></td>
                <td>Phạm Hằng</td>
                <td>02/04/2020</td>
                <td>9:00</td>
                <td>15:00</td>
                <td>5</td>
                <td>90</td>
                <td>Water area</td>
                <td>Prepare dataset</td>
                <td>5</td>
                <td>80</td>
              </tr>                            
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

</div>
@endsection