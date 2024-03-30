@extends('admin.layouts.template')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Advisor</h4>
        
        @if(Session::has('message'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif
        
        <form class="forms-sample" method="post" action="{{ route('added_featured') }}" enctype="multipart/form-data">
          @csrf
          <div class=" d-flex justify-content-between">
              <div style="width: 58%; padding:10px;" class="bg-blue-950">
              <div class="form-group  px-3" >
            <label for="exampleInputName1" class="block uppercase tracking-wide text-white text-xs font-bold mb-2">Advisor Name</label>
            <input type="text" class="form-control" name="adviser_name" id="exampleInputName1" placeholder="Advisor Name">
          </div>
          <div class="form-group  px-3">
            <label for="exampleInputName1" class="block uppercase tracking-wide text-white text-xs font-bold mb-2">Designation</label>
            <input type="text" class="form-control" name="designation"  id="exampleInputName1" placeholder="Designation">
          </div>

          <div class="w-full md:w-full px-3 mb-6"> 
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="exampleTextarea1">Bio/description</label>
            
            <!--<textarea class="form-control" name="full_des"  id="exampleTextarea1" rows="4" placeholder="Full Descreption"></textarea>-->
            <textarea id="editor" rows="10" name="bio_description" cols="80">
              </textarea>
          </div>
         
          </div>
          
          
          
          
          <div style="width:38%; padding:10px;" class="bg-blue-950">
              
        
    <div class="form-group">
      <label for="disabledSelect" class="block uppercase tracking-wide text-white text-xs font-bold mb-2">Status</label>
      <select id="disabledSelect" name="status" class="form-control">
        <option value="Published">Published</option>
        <option value="Not Published">Not Published </option>
      </select>
    </div>
              <div class="form-group">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">File upload</label>
            <div class="input-group col-xs-3">
              <!--<input type="file" name="image"  class="form-control file-upload-info" placeholder="Upload Image">-->
              <!--<span class="input-group-append">-->
              <!--  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>-->
              <!--</span>-->
              <label class="picture" class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="picture__input" tabIndex="0">
              <span class="picture__image"></span>
              </label>

                <input type="file" name="image" id="picture__input">
            </div>
          </div>



          
          </div>
          </div>
          
          

          

          <button type="submit" class="btn btn-primary mr-2 mt-5 bg-blue-600">Submit</button>
        </form>
      </div>
    </div>
  </div>
 
@endsection