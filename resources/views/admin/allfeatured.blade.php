@extends('admin.layouts.template')
@section('content')
<div class="card-body">
    <h4 class="card-title">All Blog</h4>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              ID
            </th>
            <th>
              Adviser Name
            </th>
            <th>
              Designation
            </th>
            <th>
              Total Classes
            </th>
            <th>
              Seat
            </th>
            <th>
              Featured Image
            </th>
            <th>
              Created At
            </th>
            <th>
              Action
            </th>
          </tr>
        </thead>
        <tbody>
        @foreach ($detailsfeatured as $item)
        <tr>
          
          <td>
              {{ $item->id }}
          </td>
          
          <td>
            {{ $item->adviser_name }}
          </td>
          <td>
            {{ $item->designation }}
          </td>
          <td>
            {{ $item->status }}
          </td>
          <td>
            {{ $item->date }}
          </td>
          <td class="py-1">
            <img src="{{ asset($item->image) }}" alt="image" width="50px"/>
          </td>
          <td>
            {{ $item->date }}
          </td>
          <td>
            <a class="badge bg-warning" style="color: black;" href="{{ route('editcourse', $item->id) }}">Edit</a>
            <a class="badge bg-primary" style="color: white;"  href="#">View</a>
            <a class="badge bg-danger" style="color: white;"  href="{{ route('deletecourse', $item->id) }}">Delete</a>
          </td>
        </tr>
        @endforeach           
      </tbody>
      </table>
    </div>
  </div>
  @endsection