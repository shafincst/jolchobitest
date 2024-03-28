@extends('admin.layouts.template')
@section('content')
<div class="card-body">
  <h4 class="card-title">All Blog</h4>
  <div class="table-responsive" style="width: 100%">
    <table class="table table-striped text-center">
      <thead>
        <tr>
          <th>
            Id
          </th>
          <th>
            Title
          </th>
          <th>
            Created At
          </th>
          <th>
            Image
          </th>
          <th>
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($details as $item)
        <tr>
          
          <td>
              {{ $item->id }}
          </td>
          
          <td>
            {{ $item->title }}
          </td>
          <td>
            {{ $item->created_at }}
          </td>
          <td class="py-1">
            <img src="{{ asset($item->image) }}" alt="image" width="50px"/>
          </td>
          <td>
            <a class="badge bg-warning" style="color: black;" href="{{ route('editblog', $item->id) }}">Edit</a>
            <a class="badge bg-primary" style="color: white;"  href="#">View</a>
            <a class="badge bg-danger" style="color: white;"  href="{{ route('deleteblog', $item->id) }}">Delete</a>
          </td>
        </tr>
        @endforeach           
      </tbody>
    </table>
  </div>
</div>
@endsection