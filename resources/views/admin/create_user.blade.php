@extends('admin.sidebar')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add User</li>
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
                            <input type="text" name="name" class="form-control" id="InputName" placeholder="Enter name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="InputEmail">Email</label>
                            <input type="email" name="email" class="form-control" id="InputEmail" placeholder="Enter email">
                        </div>                       
                        <div class="form-group col-md-6">
                            <label for="InputPassword">Password</label>
                            <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="InputRePassword">Confirm Password</label>
                            <input type="password" name="repassword" class="form-control" id="InputPassword" placeholder=" Confirm Password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="InputAddress">Address</label>
                            <input type="text" name="address" class="form-control" id="InputAddress" placeholder="Enter address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="InputBirthDay">Birth Day</label>
                            <input type="date" name="birthday" class="form-control" id="InputBirthDay" >
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
                          <div class="form-group col-md 6">
                            <div class="row">
                              <div class="col-6">
                                <label>Status</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline1" name="status" class="custom-control-input" value="1">
                                  <label class="custom-control-label" for="customRadioInline1">Enable</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline2" name="status" class="custom-control-input" value="0">
                                  <label class="custom-control-label" for="customRadioInline2">Disable</label>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div> <!--end row 2-->           
                      <div class="form-row">  <!-- row 3 -->
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Choose Role</label>
                        <select class="custom-select my-1 mr-sm-2" name="roles[]">
                          <option value="" ? 2:>Giám Đốc</option>
                          <option value="" ? 2:>Quản Lý</option>
                          <option value="" ? 2:>Cộng Tác Viên</option>
                        </select>
                      </div> <!--end row 3--> 
                    </div> <!--end main row-->
                </div><!--end car-body-->
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Add New</button>
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