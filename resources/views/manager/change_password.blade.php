@extends('manager.sidebar')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Change Pasword</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Change Pasword</li>
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
                <div class="form-row justify-content-md-center"> <!-- row 1 -->
                  <div class="form col-md-6">
                    <label for="InputPassword">Current Password</label>
                    <input type="password" name="currentpassword" class="form-control">
                  </div>
                </div> <!--end row 1--> 
                <div class="form-row justify-content-md-center">
                  <div class="form col-md-6">
                    <label for="InputRePassword">New Password</label>
                    <input type="password" name="password" class="form-control">
                  </div>
                </div>
                <div class="form-row justify-content-md-center">
                  <div class="form col-md-6">
                    <label for="InputRePassword">Verify Password</label>
                    <input type="password" name="repassword" class="form-control">
                  </div>      
                </div> <!--end main row-->
              </div><!--end car-body-->
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="form-row justify-content-md-center">
                  <div class="form col-md-3">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                  </div>      
                </div> <!--end main row-->
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