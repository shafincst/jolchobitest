@extends('admin.layouts.template')
@section('content')
<div  class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Course</h4>
        <form class="forms-sample" method="post" action="{{ route('updatecourse', ['id' => $editcourse->id]) }}" enctype="multipart/form-data">
          @csrf
         <input type="hidden" name="id" value="{{ $editcourse->id }}">
          <div class=" d-flex justify-content-between">
              <div style="width: 58%; padding:10px;" class="bg-secondary">
              <div class="form-group" >
            <label for="exampleInputName1">Title Name</label>
            <input type="text" class="form-control" name="title" id="exampleInputName1" value="{{ $editcourse->title }}" placeholder="Blog Title">
          </div>
          
          <div class="form-group">
            <label for="editor">Description</label>
            <!--<textarea class="form-control" name="full_des"  id="exampleTextarea1" rows="4" placeholder="Full Descreption"></textarea>-->
            <textarea id="editor" rows="10" name="description" cols="80">{{ $editcourse->description }}
              </textarea>
          </div>
          </div>
          <div style="width:38%; padding:10px;" class="bg-secondary">
              
            <div class="form-group">
              <label for="exampleInputName1">Duration</label>
              <input type="text" class="form-control" name="duration" value="{{ $editcourse->duration }}"  id="exampleInputName1" placeholder="Short Descreption">
            </div>

            <div class="form-group">
              <label for="exampleInputName1" >Total Classes</label>
              <input type="text" class="form-control" name="total_classes" value="{{ $editcourse->total_class }}"  id="exampleInputName1" placeholder="Short Descreption">
            </div>

            <div class="form-group">
              <label for="exampleInputName1">Seat</label>
              <input type="text" class="form-control" name="total_seat" value="{{ $editcourse->total_seat }}" id="exampleInputName1" placeholder="Short Descreption">
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
          
          

          

          <button type="submit" class="btn btn-primary mr-2 mt-5  bg-blue-600">Update</button>
        </form>
      </div>
    </div>
  </div>
  @endsection