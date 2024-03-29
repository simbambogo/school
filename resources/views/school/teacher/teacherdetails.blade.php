@extends('school.frame')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Teacher Details</h3>
            <ol class="float-sm-right">
              <a href="{{route('studentform')}}" class="btn btn-primary btn-block">Add</a>
            </ol>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>Trident</td>
            <td>Internet
                Explorer 4.0
            </td>
            <td>Win 95+</td>
            <td> 4</td>
            <td>X</td>
            <td><a href="#" class="btn btn-success"><i class="fa fa-edit"></i></a><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
            </tr>
            </tbody>
        </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection