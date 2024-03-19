@extends('school.frame')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Fill Student Details</h3>
            <ol class="float-sm-right">
              <a href="{{route('studentdetails')}}" class="btn btn-primary btn-block"><i class="fa fa-arrow-left"></i></a>
            </ol>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- form start -->
            <form>
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone number</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Program</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <a href="{{route('studentdetails')}}" class="btn btn-primary">save</a>
                  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </div>
              </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection