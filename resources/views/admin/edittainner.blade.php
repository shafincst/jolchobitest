


@extends('admin.layouts.template')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Blog</h4>
        
        @if(Session::has('message'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif
        
        <form class="forms-sample" method="post" action="{{ route('updatetainner', ['id' => $edittainner->id]) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $edittainner->id }}">
                <div class=" d-flex justify-content-between">
                    <div style="width: 58%; padding:10px;" class="bg-blue-950">
                    <div class="form-group" >
                  <label for="exampleInputName1" class="block uppercase tracking-wide text-white text-xs font-bold mb-2"> Name</label>
                  <input type="text" class="form-control" name="name" id="exampleInputName1" value="{{ $edittainner->name }}" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputName1" class="block uppercase tracking-wide text-white text-xs font-bold mb-2">Designation</label>
                  <input type="text" class="form-control" name="designation" value="{{ $edittainner->designation }}"  id="exampleInputName1" placeholder="Designation">
                </div>
                <div class="w-full md:w-full px-3 mb-6">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="editor">Testimonial</label>
                  
                  <!--<textarea class="form-control" name="full_des"  id="exampleTextarea1" rows="4" placeholder="Full Descreption"></textarea>-->
                  <textarea id="editor" rows="10" name="testimonial" cols="80">
                   {{ $edittainner->testimonial }}
                    </textarea>
                </div>
      
                </div>
                
                
                
                
                <div style="width:38%; padding:10px;" class="bg-blue-950">
                    
              
          <div class="form-group">
            <label for="disabledSelect" class="block uppercase tracking-wide text-white text-xs font-bold mb-2">Status</label>
            <select id="disabledSelect" name="status" value="{{ $edittainner->status }}" class="form-control">
              <option value="Published">Published</option>
              <option value="Not Published">Not Published </option>
            </select>
          </div>
                    <div class="form-group">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">File upload</label>
                  <div class="input-group col-xs-3">
                    <!--<input type="file" name="image"  class="form-control file-upload-info" placeholder="Upload Image">-->
                    <!--<span class="input-group-append">-->
                    <!--  <button class="file-upload-browse btn btn-primary bg-blue-600" type="button">Upload</button>-->
                    <!--</span>-->
                    <label class="picture" for="picture__input" tabIndex="0">
                    <span class="picture__image"></span>
                    </label>
      
                      <input type="file" name="image" id="picture__input">
                  </div>
                </div>
      
      
      
                
                </div>
                </div>
                
                
      
                
      
                <button type="submit" class="btn btn-primary bg-blue-600 mr-2 mt-5">Submit</button>
        </form>


      </div>
    </div>
  </div>

  
@endsection