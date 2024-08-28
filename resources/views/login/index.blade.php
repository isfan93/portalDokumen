<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Login | Vaka App </title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Gradient Able is trending dashboard template made using Bootstrap 5 design framework. Gradient Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
  <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
  <meta name="author" content="codedthemes">

  <!-- [Favicon] icon -->
<link rel="icon" href="../assets/images/vaka-logo.png" type="image/x-icon"> <!-- [Google Font : Poppins] icon -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" >
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="../assets/fonts/feather.css" >
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="../assets/fonts/fontawesome.css" >
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="../assets/fonts/material.css" >
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" >
<link rel="stylesheet" href="../assets/css/style-preset.css" >

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-header="header-1" data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
  @include('sweetalert::alert')
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->

  <div class="auth-main v1 bg-grd-primary">
    <div class="auth-wrapper">
      <div class="auth-form">
        <div class="card my-5">
          <div class="card-body">
            <div class="text-center">
              <img src="../assets/images/text-logo.png" alt="images" class="img-fluid mb-4" style="width: 50%; height: 50%;">
              <h4 class="f-w-500 mb-4">Login</h4>
              {{-- <p class="mb-4">Don't have an Account? <a href="../pages/register-v1.html" class="link-primary ms-1">Create Account</a></p> --}}
            </div>
            <form action="{{ route('login.proses') }}" method="post">
              @csrf
              <div class="form-group mb-3">
                <input type="username" name="username" class="form-control" id="floatingInput" placeholder="username">
              </div>
              <div class="form-group mb-3">
                <input type="password" name="password" class="form-control" id="floatingInput1" placeholder="Password">
              </div>
              {{-- <div class="d-flex mt-1 justify-content-between align-items-center">
                <div class="form-check">
                  <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked="">
                  <label class="form-check-label text-muted" for="customCheckc1">Remember me?</label>
                </div>
                <a href="../pages/forgot-password-v1.html"><h6 class="f-w-400 mb-0">Forgot Password?</h6></a>
              </div> --}}
              <div class="d-grid mt-4">
                  {{-- <a class="btn btn-primary" href="/dashboard">Login</a> --}}
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
            <div class="saprator my-3">
              <span>@fajrulfallakh</span>
            </div>
            {{-- <div class="text-center">
              <ul class="list-inline mx-auto mt-3 mb-0">
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/" class="avtar avtar-s rounded-circle bg-facebook" target="_blank">
                    <i class="fab fa-facebook-f text-white"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://twitter.com/" class="avtar avtar-s rounded-circle bg-twitter" target="_blank">
                    <i class="fab fa-twitter text-white"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://myaccount.google.com/" class="avtar avtar-s rounded-circle bg-googleplus" target="_blank">
                    <i class="fab fa-google text-white"></i>
                  </a>
                </li>
              </ul>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <!-- Required Js -->
  <script src="../assets/js/plugins/popper.min.js"></script>
  <script src="../assets/js/plugins/simplebar.min.js"></script>
  <script src="../assets/js/plugins/bootstrap.min.js"></script>
  <script src="../assets/js/fonts/custom-font.js"></script>
  <script src="../assets/js/pcoded.js"></script>
  <script src="../assets/js/plugins/feather.min.js"></script>

  
  
  
  
  <script>layout_change('light');</script>
  
  
  
  
  <script>layout_sidebar_change('light');</script>
  
  
  
  <script>change_box_container('false');</script>
  
  
  <script>layout_caption_change('true');</script>
  
  
  
  
  <script>layout_rtl_change('false');</script>
  
  
  <script>preset_change("preset-1");</script>
  
  
  <script>header_change("header-1");</script>
   
</body>
<!-- [Body] end -->

</html>