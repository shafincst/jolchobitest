<!DOCTYPE html>
<html lang="en" ng-app="gaigDemo">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Jolchobi Admin</title>
  <!-- plugins:css -->
  {{-- {{ asset('admin/assets/') }} --}}
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/js/select.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/vertical-layout-light/style.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/css/vertical-layout-light/styleimg.css') }}">

  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
  
  <style>
 #picture__input {
  display: none;
}

.picture {
  width: 400px;
  aspect-ratio: 16/9;
  background: #ddd;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #aaa;
  border: 2px dashed currentcolor;
  cursor: pointer;
  font-family: sans-serif;
  transition: color 300ms ease-in-out, background 300ms ease-in-out;
  outline: none;
  overflow: hidden;
}

.picture:hover {
  color: #777;
  background: #ccc;
}

.picture:active {
  border-color: turquoise;
  color: turquoise;
  background: #eee;
}

.picture:focus {
  color: #777;
  background: #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.picture__img {
  max-width: 100%;
}
</style>
  
  
  
</head>
<body ng-controller="DemoCtrl as demo">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5 text-dark" href="index.html"><img src="{{ asset('admin/assets/images/logo.png') }}" class="mr-2" alt="logo"/>জলছবি</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" id="profileDropdown">
                    <img src="{{ asset('admin/assets/images/profile/faisal.jpg') }}" alt="profile"/>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="icon-head text-primary"></i>
                        Profile
                    </a>
                    <a class="dropdown-item">
                        <i class="ti-settings text-primary"></i>
                        Settings
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </li>
            
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper"> 
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style:"width:40%;">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Blog</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('addblog') }}">Add Blog</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('allblog') }}">All Blog</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Course</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('addcourse') }}">Add Course</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('allcourse') }}">All Course</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Advisor</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('addfeatured') }}">Add Advisor</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('allfeatured') }}">All Advisor</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Testimonial</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('addtainner') }}">Add Testimonial</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('alltainner') }}">All Testimonial</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('users') }}">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="ti-settings menu-icon"></i>
              <span class="menu-title">Settings</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                  @yield('content')
                </div>
                <footer class="footer">
                  <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024.<a href="https://www.facebook.com/Shafin19110" target="_blank"></a></span>
                  </div>
                </footer>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
        <!-- partial -->
      </div>
      
      <!-- main-panel ends -->
    </div>
    
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


  <script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/ckeditor/ckeditor.js"></script>
  <script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/jquery.min.js"></script>
  <script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/angular.min.js"></script>
  
  
  <script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/gaig-ui-bootstrap.js"></script>

    <script>
    function DemoCtrl() {

  this.foo = 'foo';
  
  CKEDITOR.editorConfig = function (config) {
    config.extraPlugins = 'confighelper';
  };
  CKEDITOR.replace('exampleTextarea1');

}

angular
  .module('gaigDemo', ['gaigUiBootstrap'])
  .controller('DemoCtrl', DemoCtrl);
  </script>
  
  
  
  
  
  
  <script>
    const inputFile = document.querySelector("#picture__input");
const pictureImage = document.querySelector(".picture__image");
const pictureImageTxt = "Choose an image";
pictureImage.innerHTML = pictureImageTxt;

inputFile.addEventListener("change", function (e) {
  const inputTarget = e.target;
  const file = inputTarget.files[0];

  if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", function (e) {
      const readerTarget = e.target;

      const img = document.createElement("img");
      img.src = readerTarget.result;
      img.classList.add("picture__img");

      pictureImage.innerHTML = "";
      pictureImage.appendChild(img);
    });

    reader.readAsDataURL(file);
  } else {
    pictureImage.innerHTML = pictureImageTxt;
  }
});
  </script>
  <!-- plugins:js -->
  {{-- {{ asset('admin/assets/') }} --}}
  <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('admin/assets/css/vertical-layout-light/style.js') }}"></script>

  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('admin/assets/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('admin/assets/js/dataTables.select.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('admin/assets/js/template.js') }}"></script>
  <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
  <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('admin/assets/js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->
  <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('admin/assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendors/select2/select2.min.js') }}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('admin/assets/js/template.js') }}"></script>
  <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
  <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('admin/assets/js/file-upload.js') }}"></script>
  <script src="{{ asset('admin/assets/js/typeahead.js') }}"></script>
  <script src="{{ asset('admin/assets/js/select2.js') }}"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
  @if(Session::has('success'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('success') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>
</body>

</html>

