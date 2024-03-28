


@extends('admin.layouts.template')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Blog</h4>
        
        @if(Session::has('message'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif
        
        <form class="forms-sample" method="post" action="{{ route('updateblog', ['id' => $editblog->id]) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $editblog->id }}">
          <div class=" d-flex justify-content-between">
              <div style="width: 58%; padding:10px;" class="bg-secondary">
              <div class="form-group" >
            <label for="exampleInputName1">Title Name</label>
            <input type="text" class="form-control" value="{{ $editblog->title }}" name="title" id="exampleInputName1" placeholder="Blog Title">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Short Description</label>
            <input type="text" class="form-control" name="short_des" value="{{ $editblog->short_des }}"  id="exampleInputName1" placeholder="Short Descreption">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Long Description</label>
            <!--<textarea class="form-control" name="full_des"  id="exampleTextarea1" rows="4" placeholder="Full Descreption"></textarea>-->
            <textarea id="exampleTextarea1" rows="10" name="full_des" cols="80">{{ $editblog->full_des }}
              </textarea>
          </div>
          <div class="row" style="padding: 20px;">
    <div class="form-check form-check-inline border border-success bg-light" style="width: 100px; padding-left: 10px;">
        <input class="form-check-input" type="radio" name="categories" id="inlineRadio1" value="option1" {{ $editblog->categories === 'option1' ? 'checked' : '' }}>
        <label for="inlineRadio1" style="margin-top: 0.5rem;">Option 1</label>
    </div>
    <div class="form-check form-check-inline border border-success bg-light" style="padding-right: 10px; padding-left: 10px;">
        <input class="form-check-input" type="radio" name="categories" id="inlineRadio2" value="option2" {{ $editblog->categories === 'option2' ? 'checked' : '' }}>
        <label for="inlineRadio2" style="margin-top: 0.5rem;">Option 2</label>
    </div>
    <div class="form-check form-check-inline border border-success bg-light" style="padding-right: 10px; padding-left: 10px;">
        <input class="form-check-input" type="radio" name="categories" id="inlineRadio3" value="option3" {{ $editblog->categories === 'option3' ? 'checked' : '' }}>
        <label for="inlineRadio3" style="margin-top: 0.5rem;">Option 3</label>
    </div>
    <div class="form-check form-check-inline border border-success bg-light" style="padding-right: 10px; padding-left: 10px;">
        <input class="form-check-input" type="radio" name="categories" id="inlineRadio4" value="option4" {{ $editblog->categories === 'option4' ? 'checked' : '' }}>
        <label for="inlineRadio4" style="margin-top: 0.5rem;">Option 4</label>
    </div>
</div>

          </div>
          
          
          
          
          <div style="width:38%; padding:10px;" class="bg-secondary">
              
              <div class="form-group">
      <label >Unique URL/Short Url</label>
      <input type="text"  class="form-control" value="{{ $editblog->unique_url }}" placeholder="Post Unique URL">
    </div>
    
    <div class="form-group">
      <label for="disabledSelect">Author</label>
      <select id="disabledSelect" name="author" class="form-control">
        <option value="Abu Faisal Ahmed" {{$editblog->author =="Abu Faisal Ahmed" ? 'selected' : ''}} >Abu Faisal Ahmed</option>
        <option value="Md.Shafin Ahmaed"  {{$editblog->author =="Md.Shafin Ahmaed" ? 'selected' : ''}} >Md.Shafin Ahmaed</option>
        <option value="Md.Sobuj"  {{$editblog->author =="Md.Sobuj" ? 'selected' : ''}}>Md.Sobuj</option>
      </select>
    </div>
    <div class="form-group">
      <label for="disabledSelect">Status</label>
      <select id="disabledSelect" name="status" class="form-control">
        <option value="Published"  {{$editblog->status =="Published" ? 'selected' : ''}}>Published</option>
        <option value="Not Published"  {{$editblog->status =="Not Published" ? 'selected' : ''}}>Not Published </option>
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
          <button type="submit" class="btn btn-primary mr-2 mt-5">Update</button>
        </form>
<!--    <form class="forms-sample" method="post" action="{{ route('updateblog', ['id' => $editblog->id]) }}" enctype="multipart/form-data">-->
<!--    @csrf-->
    <!-- Other form fields -->
<!--    <button type="submit" class="btn btn-primary mr-2 mt-5">Update Blog</button>-->
<!--</form>-->

      </div>
    </div>
  </div>
  <div class="theme-setting-wrapper">
    <div id="settings-trigger"><i class="ti-settings"></i></div>
    <div id="theme-settings" class="settings-panel">
      <i class="settings-close ti-close"></i>
      <p class="settings-heading">SIDEBAR SKINS</p>
      <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
      <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
      <p class="settings-heading mt-2">HEADER SKINS</p>
      <div class="color-tiles mx-0 px-4">
        <div class="tiles success"></div>
        <div class="tiles warning"></div>
        <div class="tiles danger"></div>
        <div class="tiles info"></div>
        <div class="tiles dark"></div>
        <div class="tiles default"></div>
      </div>
    </div>
  </div>
</div>
  
@endsection