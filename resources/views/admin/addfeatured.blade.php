@extends('admin.layouts.template')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Advisor</h4>
        
        @if(Session::has('message'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif
        
        <form class="forms-sample" method="post" action="{{ route('added_blog') }}" enctype="multipart/form-data">
          @csrf
          <div class=" d-flex justify-content-between">
              <div style="width: 58%; padding:10px;" class="bg-secondary">
              <div class="form-group" >
            <label for="exampleInputName1">Advisor Name</label>
            <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Advisor Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Designation</label>
            <input type="text" class="form-control" name="short_des"  id="exampleInputName1" placeholder="Designation">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Bio/description</label>
            <!--<textarea class="form-control" name="full_des"  id="exampleTextarea1" rows="4" placeholder="Full Descreption"></textarea>-->
            <textarea id="exampleTextarea1" rows="10" name="full_des" cols="80">
              </textarea>
          </div>
         
          </div>
          
          
          
          
          <div style="width:38%; padding:10px;" class="bg-secondary">
              
        
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