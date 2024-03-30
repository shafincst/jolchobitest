
@extends('admin.layouts.template')
@section('content')

<div class="col-12 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Media</h4>
        
        @if(Session::has('message'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif
        
        <form class="forms-sample" method="post" action="{{ route('added_media') }}" enctype="multipart/form-data">
          @csrf
          <div class=" d-flex justify-content-between">
              <div style="width: 58%; padding:10px;" class="bg-blue-950">
              <div class="form-group" >
            <label for="exampleInputName1" class="block uppercase tracking-wide text-white text-xs font-bold mb-2">Title Name</label>
            <input type="text" class="form-control" name="titlename" id="exampleInputName1" placeholder="Enter Title">
          </div>
          <div class="form-group">
            <label for="exampleInputName1" class="block uppercase tracking-wide text-white text-xs font-bold mb-2">Automated Slug</label>
            <input type="text" class="form-control" name="autometedslug"  id="exampleInputName1" placeholder="Automated Slug">
          </div>
          <div class="form-group">
            <label for="editor" class="block uppercase tracking-wide text-white text-xs font-bold mb-2">Description</label>
            <!--<textarea class="form-control" name="full_des"  id="exampleTextarea1" rows="4" placeholder="Full Descreption"></textarea>-->
            <textarea id="editor" rows="10" name="description" cols="80">
              </textarea>
          </div>
          
          </div>
          
          
          
          
          <div style="width:38%; padding:10px;" class="bg-blue-950">
            
              <div class="row" style="padding:20px;">

                <div>
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2 pt-2 my-2" >Quality: </label>
                </div>
                <div class="form-check form-check-inline border border-success bg-light" style="width:100px; padding-left:10px; margin-left:10px;">
                <input class="form-check-input" type="radio" name="quality" id="hdquality" value="hdquality">
                <label for="hdquality" style="margin-top: 0.5rem;">HD Quality</label>
              </div>
              <div class="form-check form-check-inline border border-success bg-light" style="    padding-right: 10px;
          padding-left: 10px;">
                <input class="form-check-input" type="radio" name="quality" id="Normal" value="Normal">
                <label  for="Normal" style="margin-top: 0.5rem;">Normal</label>
              </div>
              
                
                </div>

              <div class="row" style="padding:20px;">
                <div>
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2 pt-2 my-2" >Is Featured: </label>
                </div>
                <div class="form-check form-check-inline border border-success bg-light" style="width:100px; padding-left:10px; margin-left:10px;">
                <input class="form-check-input" type="radio" name="Featured" id="yesfetured" value="yes">
                <label for="yesfetured" style="margin-top: 0.5rem;">yes</label>
              </div>
              <div class="form-check form-check-inline border border-success bg-light" style="    padding-right: 10px;
          padding-left: 10px;">
                <input class="form-check-input" type="radio" name="Featured" id="nofetured" value="No">
                <label  for="nofetured" style="margin-top: 0.5rem;">No</label>
              </div>
              
                
                </div>

                <div class="row" style="padding:20px;">
                  <div>
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2 pt-2 my-2" >has Watermarked: </label>
                  </div>
                <div class="form-check form-check-inline border border-success bg-light" style="width:100px; padding-left:10px; margin-left:10px;">
                <input class="form-check-input" type="radio" name="Watermarked" id="Watermarked" value="Yes">
                <label for="Watermarked" style="margin-top: 0.5rem;">Yes</label>
              </div>
              <div class="form-check form-check-inline border border-success bg-light" style="    padding-right: 10px;
          padding-left: 10px;">
                <input class="form-check-input" type="radio" name="Watermarked" id="Watermarked1" value="No">
                <label  for="Watermarked1" style="margin-top: 0.5rem;">No</label>
              </div>
              
                
                </div>
    
    <div class="form-group">
      <label for="disabledSelect" class="block uppercase tracking-wide text-white text-xs font-bold mb-2">Author</label>
      <select id="disabledSelect" name="author" class="form-control">
        <option value="Abu Faisal Ahmed">Abu Faisal Ahmed</option>
        <option value="Md.Shafin Ahmaed">Md.Shafin Ahmaed</option>
        <option value="Md.Sobuj">Md.Sobuj</option>
      </select>
    </div>
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