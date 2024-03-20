@extends('school.frame')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Student Details</h3>
            <ol class="float-sm-right">
              <a href="{{route('studentform')}}" class="btn btn-primary btn-block">Add</a>
            </ol>
        </div>
        <!-- /.card-header -->
        @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div>
        <script>
            // Automatically close the alert after 3 seconds (3000 milliseconds)
            setTimeout(function() {
                $('.alert').slideUp();
            }, 3000);
        </script>
        @endif 
        @php($na=1)
        <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
            <th>N/A</th>
            <th>Full Name</th>
            <th>Tel No</th>
            <th>Email</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $student)
                <tr>
                <td>{{$na++}}</td>
                <td>{{$student -> fullname}}</td>
                <td>{{$student -> tel}}</td>
                <td>{{$student -> email}}</td>
                <td><a href="#" class="btn btn-success"><i class="fa fa-edit"></i></a><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection