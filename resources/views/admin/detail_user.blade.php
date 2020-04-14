@extends('admin.sidebar')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Infromation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Infromation</li>
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
                    <div class="form-row"> <!-- row 1 -->
                        <div class="form-group col-md-6">   
                            <label for="InputName">Name</label>
                            <input class="form-control" type="text" value="Trần Đạt" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="InputEmail">Email</label>
                            <input class="form-control" type="text" value="trandat.hust@gmail.com" readonly>
                        </div>                       
                        <div class="form-group col-md-6">
                            <label for="InputAddress">Address</label>
                            <input class="form-control" type="text" value="Lý Nhân-Hà Nam" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="InputBirthDay">Birth Day</label>
                            <input class="form-control" type="text" value="" readonly>
                        </div>
                        

                        <div class="form-group col-md-6">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Role</label>
                            <select class="custom-select" name="roles[]" disabled="true">
                                <option selected>Cộng Tác Viên</option>
                            </select>
                        </div>
                        <!--status-->
                        <div class="form-group col-md 6">
                            <div class="row">
                              <div class="col-6">
                                <label>Status</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12">
                                @if (1 == 1)
                                    <input class="form-control" type="text" value="Enable" readonly>
                                @else
                                    <input class="form-control" type="text" value="Disable" readonly>
                                @endif
                              </div>
                            </div>
                          </div>
                          <!-- end status-->
                      </div> <!--end row 1-->
                    </div> <!--end main row-->
                </div><!--end car-body-->
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="row justify-content-md-center">
                      <a href="{{route('admin.edit.user')}}" class="btn btn-primary btn-lg active btn-mb-2 " role="button" aria-pressed="true">Edit Information</a>
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