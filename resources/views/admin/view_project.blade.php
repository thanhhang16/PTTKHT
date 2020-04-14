@extends('admin.sidebar')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Project Tables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Project Tables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col col-sm">
                <a href="{{route('admin.create.project')}}" class="btn btn-primary active" role="button" aria-disabled="true">Add New</a>
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
                  <th>ID</th>
                  <th>Name</th>
                  <th>Detail</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>TensorRT</td>
                  <td>TensorRT Project</td>
                  <td>
                    <button type="button" class="btn btn-primary btn-sm">Enable</button>
                  </td>
                  <td> 
                    <a href="" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Detail</a>
                    <a href="{{route('admin.edit.project')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Edit</a>
                    <a href="" class="btn btn-danger btn-sm" role="button" aria-pressed="true">Delete</a>
                  </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Water area</td>
                  <td>Water area Paint Project</td>
                  <td>
                    <button type="button" class="btn btn-secondary btn-sm">Disabled</button>
                  </td>
                  <td> 
                    <a href="" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Detail</a>
                    <a href="{{route('admin.edit.project')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Edit</a>
                    <a href="" class="btn btn-danger btn-sm" role="button" aria-pressed="true">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Tree counting</td>
                  <td>Tree counting Project</td>
                  <td>
                    <button type="button" class="btn btn-secondary btn-sm">Disabled</button>
                  </td>
                  <td> 
                    <a href="" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Detail</a>
                    <a href="{{route('admin.edit.project')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Edit</a>
                    <a href="" class="btn btn-danger btn-sm" role="button" aria-pressed="true">Delete</a>
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