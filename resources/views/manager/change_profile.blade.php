@extends('manager.sidebar')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit User</li>
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
            <!-- form start -->
            <form role="form" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-row"> <!-- row 1 -->
                  <div class="form-group col-md-6">   
                    <label for="InputName">Name</label>
                    <input type="text" name="name" class="form-control" id="InputName" value="Trần Đạt" placeholder="Enter name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="InputEmail">Email</label>
                    <input type="email" name="email" class="form-control" id="InputEmail" value="trandat.hust@gmail.com" placeholder="Enter email">
                  </div>                       
                  <div class="form-group col-md-6">
                    <label for="InputAddress">Address</label>
                    <input type="text" name="address" class="form-control" id="InputAddress" value="Hà Nam" placeholder="Enter address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="InputBirthDay">Birth Day</label>
                    <input type="date" name="birthday" class="form-control" id="InputBirthDay" value="">
                  </div>


                </div> <!--end row 1-->
                <div class="form-row"> <!-- row 2 -->
                  <div class="form-group col-md-6">
                    <label>Avatar</label>
                    <div class="custom-file">
                      <input type="file" name="avatar" class="custom-file-input" id="validatedCustomFile" disabled> <!--required-->
                      <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                </div> <!--end row 2-->           
              </div> <!--end main row-->
            </div><!--end car-body-->
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