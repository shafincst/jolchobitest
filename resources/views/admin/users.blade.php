
@extends('admin.layouts.template')
@section('content')
    <div class="card-body">
      <h4 class="card-title">All Blog</h4>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>
                Id
              </th>
              <th>
                Name
              </th>
              <th>
                Created At
              </th>
              <th>
                Profile
              </th>
              <th>
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($admissions as $admission_forms)
                
            
            <tr>
              
              <td>
               {{ $admission_forms->id }}
              </td>
              <td>
                {{ $admission_forms->name }}
              </td>
              <td>
                {{ $admission_forms->date }}
              </td>
              <td>
                <a href="{{ route('profileview', $admission_forms->id) }}" class="btn btn-success">Profile</a>
              </td>
              <td>
                
                <a class="badge bg-danger" style="color: white;"  href="{{ route('deleteuser', $admission_forms->id) }}">Delete</a>
              </td>
            </tr>   
            @endforeach        
          </tbody>
        </table>
      </div>
    </div>
@endsection