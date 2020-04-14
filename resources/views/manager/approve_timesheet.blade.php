@extends('manager.sidebar')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Approve Timesheet</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Approve Timesheet</li>
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
                  <th>Name</th>
                  <th>Date</th>
                  <th>Start</th>
                  <th>End</th>
                  <th>Total</th>
                  <th>Effect</th>
                  <th>Project</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Trần Đạt</td>
                  <td>01/04/2020</td>
                  <td>8:00</td>
                  <td>17:00</td>
                  <td>7</td>
                  <td>90</td>
                  <td>TensorRT</td>
                  <td>Write inference module</td>
                  <td>
                    <form>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="AH">
                        </div>
                        <div class="form-group col-md-4">
                          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="AE">
                        </div>
                        <div class="form-group col-md-2">
                          <button type="submit" class="btn btn-primary btn-sm">Approve</button>
                        </div>
                      </div>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>Phạm Hằng</td>
                  <td>02/04/2020</td>
                  <td>9:00</td>
                  <td>15:00</td>
                  <td>5</td>
                  <td>90</td>
                  <td>Water area</td>
                  <td>Prepare dataset</td>
                  <td>
                    <form>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="AH">
                        </div>
                        <div class="form-group col-md-4">
                          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="AE">
                        </div>
                        <div class="form-group col-md-2">
                          <button type="submit" class="btn btn-primary btn-sm">Approve</button>
                        </div>
                      </div>
                    </form>
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