@extends('admin.layouts.template')
@section('content')
<h3 class="font-weight-bold">Welcome {{ Auth::user()->name }}</h3>

    <div style="width: 100rem;" class="d-flex justify-content-around card-deck container">
        <div class="card text-center" >
            <div class="card-body">
                <h5 class="card-title">Total Post</h5>
                <h1>{{ $count }}</h1>
                <a href="{{ route('addblog') }}" class="badge bg-primary" style="color: white;">Add Post</a>
                <a href="{{ route('allblog') }}" class="badge bg-danger" style="color: white;">All Post</a>
            </div>
        </div>
    
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Users</h5>
                <h1>{{ $count_user }}</h1>
                <a href="#" class="badge bg-primary" style="color: white;">All Users</a>
            </div>
        </div>
    
        <div class="card text-center" >
            <div class="card-body">
                <h5 class="card-title">Total Course</h5>
                <h1>00</h1>
                <a href="#" class="badge bg-primary" style="color: white;">Add Course</a>
                <a href="#" class="badge bg-danger" style="color: white;">All Course</a>
            </div>
        </div>
    </div>


@endsection