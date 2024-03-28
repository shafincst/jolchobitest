@extends('admin.layouts.template')
@section('content')
<h3 class="font-weight-bold">Welcome {{ Auth::user()->name }}</h3>

<div style="width: 100rem;" class="card-deck container flex justify-around">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Total Post</h5>
        <h1 class="pb-6">{{ $count }}</h1>
        <a href="{{ route('addblog') }}" class="badge rounded bg-green-500 p-2" style="color: white;">Add Post</a>
        <a href="{{ route('allblog') }}" class="badge bg-red-400 p-2" style="color: white;">All Post</a>
      </div>
    </div>
  
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Users</h5>
        <h1>{{ $count_user }}</h1>
        <a href="#" class="badge bg-primary" style="color: white;">All Users</a>
      </div>
    </div>
  
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Total Course</h5>
        <h1>00</h1>
        <a href="#" class="badge bg-primary" style="color: white;">Add Course</a>
        <a href="#" class="badge bg-danger" style="color: white;">All Course</a>
      </div>
    </div>
  </div>
  

@endsection