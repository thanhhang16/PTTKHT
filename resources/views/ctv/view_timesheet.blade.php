@extends('ctv.sidebar')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Timesheet</h1>
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

  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col col-sm">
                <a href="" class="btn btn-primary active" role="button" aria-disabled="true">Add</a>
              </div>
              <div class="col col-sm col-lg-4">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Search">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Go</button>
                  </div>
                </div>
              </div>
            </div>  


            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Start</th>
                  <th>End</th>
                  <th>Totals</th>
                  <th>Effec</th>
                  <th>Project</th>
                  <th>Task Description</th>
                  <th>AH</th>
                  <th>AE</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01/04/2020</td>
                  <td>8:00</td>
                  <td>17:00</td>
                  <td>7</td>
                  <td>90</td>
                  <td>TensorRT</td>
                  <td>Write inference module</td>
                  <td>7</td>
                  <td>100</td>
                  <td> 
                    <a href="{{route('ctv.edit.timesheet')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>02/04/2020</td>
                  <td>9:00</td>
                  <td>15:00</td>
                  <td>5</td>
                  <td>90</td>
                  <td>Water area</td>
                  <td>Prepare dataset</td>
                  <td>5</td>
                  <td>80</td>
                  <td> 
                    <a href="" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Edit</a>
                  </td>
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
</div>
@endsection