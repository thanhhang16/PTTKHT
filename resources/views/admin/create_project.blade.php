@extends('admin.sidebar')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Project</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Project</li>
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
                            <label for="InputName">Project Name</label>
                            <input type="text" name="projectname" class="form-control" placeholder="Enter name">                                            
                      </div> <!--end row 1-->
                        <label for="comment">Detail</label>
                        <textarea class="form-control" rows="5" id="comment" name="detailproject" placeholder="Enter detail..."></textarea>
                      <div class="form-row"> <!-- row 2 -->
                        <div class="form-group col-md-4">
                            <label for="InputBirthDay">Start Time</label>
                            <input type="date" name="starttime" class="form-control" >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="InputBirthDay">End Time</label>
                            <input type="date" name="endtime" class="form-control" >
                        </div>
                          <div class="form-group col-md 4 ">
                            <div class="row">
                              <div class="col-4">
                                <label>Status</label>
                              </div>
                            </div>
                            <div class="row ">
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
                      </div> <!--end row 2-->           
                      @include('error')
                    </div> <!--end main row-->
                </div><!--end car-body-->
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="row justify-content-md-center">
                        <button type="submit" class="btn btn-primary btn-lg">Add New</button>
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