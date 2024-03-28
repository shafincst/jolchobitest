
@extends('admin.layouts.template')
@section('content')

<div class="col-12 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Blog</h4>
        
        @if(Session::has('message'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif
        
        <form class="forms-sample" method="post" action="{{ route('added_blog') }}" enctype="multipart/form-data">
          @csrf
          <div class=" d-flex justify-content-between">
              <div style="width: 58%; padding:10px;" class="bg-secondary">
              <div class="form-group" >
            <label for="exampleInputName1">Title Name</label>
            <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Blog Title">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Short Description</label>
            <input type="text" class="form-control" name="short_des"  id="exampleInputName1" placeholder="Short Descreption">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Long Description</label>
            <!--<textarea class="form-control" name="full_des"  id="exampleTextarea1" rows="4" placeholder="Full Descreption"></textarea>-->
            <textarea id="exampleTextarea1" rows="10" name="full_des" cols="80">
              </textarea>
          </div>
          <div class="row" style="padding:20px;">
          <div class="form-check form-check-inline border border-success bg-light" style="width:100px; padding-left:10px;">
          <input class="form-check-input" type="radio" name="categories" id="inlineRadio1" value="option1">
          <label for="inlineRadio1" style="margin-top: 0.5rem;">option1</label>
        </div>
        <div class="form-check form-check-inline border border-success bg-light" style="    padding-right: 10px;
    padding-left: 10px;">
          <input class="form-check-input" type="radio" name="categories" id="inlineRadio2" value="option2">
          <label  for="inlineRadio2" style="margin-top: 0.5rem;">option2</label>
        </div>
        <div class="form-check form-check-inline border border-success bg-light" style="    padding-right: 10px;
    padding-left: 10px;">
          <input class="form-check-input" type="radio" name="categories" id="inlineRadio3" value="option3">
          <label  for="inlineRadio3" style="margin-top: 0.5rem;">option3</label>
        </div>
        <div class="form-check form-check-inline border   border-success bg-light" style="    padding-right: 10px;
    padding-left: 10px;">
          <input class="form-check-input" type="radio" name="categories" id="inlineRadio4" value="option4">
          <label  for="inlineRadio4" style="margin-top: 0.5rem;">option4</label>
        </div>
          
          </div>
          </div>
          
          
          
          
          <div style="width:38%; padding:10px;" class="bg-secondary">
              
              <div class="form-group">
      <label >Unique URL/Short Url</label>
      <input type="text" name="unique_url" class="form-control" placeholder="Post Unique URL">
    </div>
    
    <div class="form-group">
      <label for="disabledSelect">Author</label>
      <select id="disabledSelect" name="author" class="form-control">
        <option value="Abu Faisal Ahmed">Abu Faisal Ahmed</option>
        <option value="Md.Shafin Ahmaed">Md.Shafin Ahmaed</option>
        <option value="Md.Sobuj">Md.Sobuj</option>
      </select>
    </div>
    <div class="form-group">
      <label for="disabledSelect">Status</label>
      <select id="disabledSelect" name="status" class="form-control">
        <option value="Published">Published</option>
        <option value="Not Published">Not Published </option>
      </select>
    </div>
              <div class="form-group">
            <label>File upload</label>
            <div class="input-group col-xs-3">
              <!--<input type="file" name="image"  class="form-control file-upload-info" placeholder="Upload Image">-->
              <!--<span class="input-group-append">-->
              <!--  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>-->
              <!--</span>-->
              <label class="picture" for="picture__input" tabIndex="0">
              <span class="picture__image"></span>
              </label>

                <input type="file" name="image" id="picture__input">
            </div>
          </div>



          
          </div>
          </div>
          
          

          

          <button type="submit" class="btn btn-primary mr-2 mt-5">Submit</button>
        </form>
      </div>
    </div>
  </div>
 

  
@endsection