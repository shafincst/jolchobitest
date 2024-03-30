@extends('admin.layouts.template')
@section('content')
<div class="card-body">

  <h1 class="font-semibold text-gray-600  text-3xl uppercase	">Galary</h1>
<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mx-auto gap-4" >
  @foreach ($detailsmedia as $item)
  <div class="card w-96 hover-to-show border-slate-400 border-8" style="background-image: url('{{ asset($item->image) }}'); height: 300px; background-repeat: no-repeat;
 background-repeat: no-repeat;
  background-size: 100% 300px">
    <div class="flex justify-around gap-2 hover-to-show-botton" style="position: absolute; 
    top: 10px;
    right: 10px; font-size:20px;">
    <a href="{{ route('addmedia') }}" class="bg-light-500" style="background-color: rgb(155, 150, 150); border-radius:50%;">
      <i class="fa-solid fa-plus p-2"></i></a>
     
    <a href=" {{ route('editmedia', $item->id) }}" class="bg-light-500" style="background-color: rgb(155, 150, 150); border-radius:50%;">
      <i class="fa-solid fa-pencil p-2"></i></a>
     
    <a href="" class="bg-light-500" style="background-color: rgb(155, 150, 150); border-radius:50%;">
      <i class="fa-solid fa-eye p-2"></i></a>
     
    <a href="{{ route('deletemedia', $item->id) }}" class="bg-light-500" style="background-color: rgb(155, 150, 150); border-radius:50%;">
      <i class="fa-solid fa-trash-can p-2"></i></a>
     
    </div>
  </div>

  @endforeach 


</div>
</div>

  
  @endsection