@extends('admin.layouts.template')
@section('content')
<div class="card-body">
    <h4 class="card-title">All Blog</h4>
    <div class="text-gray-900 bg-gray-200">
      <div class="p-4 flex">
          <h1 class="text-3xl">
              Users
          </h1>
      </div>
      <div class="px-3 py-4 flex justify-center">
          <table class="w-full text-md bg-white shadow-md rounded mb-4">
              <tbody>
                  <tr class="border-b">
                      <th class="text-left p-3 px-5">Name</th>
                      <th class="text-left p-3 px-5">designation</th>
                      <th class="text-left p-3 px-5">status</th>
                      <th class="text-left p-3 px-5">Action</th>
                  </tr>
                  @foreach ($detailstainner as $item)
                  <tr class="border-b hover:bg-orange-100 bg-gray-100">
                      <td class="p-3 px-5 bg-transparent"> {{ $item->name }}</td>
                      <td class="p-3 px-5 bg-transparent"> {{ $item->designation }}</td>
                      <td class="p-3 px-5 bg-transparent">
                        {{ $item->status }}
                      </td>
                      <td class="p-3 px-5 flex justify-end">
                        <a href="{{ route('edittainner', $item->id) }}" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                        <a href="{{ route('deletetainner', $item->id) }}" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</a></td>
                  </tr>
                  @endforeach 
              </tbody>
          </table>
      </div>
  </div>
  </div>@endsection