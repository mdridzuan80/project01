<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Md Ridzuan Latiah Profil</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ url('img/favicon.png') }}" rel="icon">
  <link href="{{ url('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ url('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ url('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ url('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Template Name: Stanley
    Template URL: https://templatemag.com/stanley-bootstrap-freelancer-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>

  <!-- Static navbar -->
  <div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">MD.RIDZUAN.LATIAH</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ url('diri') }}">Diri Ini</a></li>
          <li><a href="{{ url('blog') }}">Blog</a></li>
          <li><a href="{{ url('galeri') }}">Galeri</a></li>
          <li><a href="about.html">Resume</a></li>
          <li><a href="contact.html">Perancangan</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

    @yield('content')

  <!-- +++++ Footer Section +++++ -->
  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h4>My Bunker</h4>
          <p>
            No. 28, Jalan DP9,<br/>Taman Duyong Permai, <br/> Melaka, Malaysia.
          </p>
        </div>
        <!-- /col-lg-4 -->

        <div class="col-lg-4">
          <h4>My Links</h4>
          <p>
            <a href="#">Dribbble</a><br/>
            <a href="#">Twitter</a><br/>
            <a href="#">Facebook</a>
          </p>
        </div>
        <!-- /col-lg-4 -->

        <div class="col-lg-4">
          <h4>About Md.Ridzuan.Latiah</h4>
          <p>This cute theme was created to showcase your work in a simple way. Use it wisely.</p>
        </div>
        <!-- /col-lg-4 -->
      </div>
    </div>
  </div>

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>MD.RIDZUAN.LATIAH</strong>. All Rights Reserved
      </p>
    </div>
  </div>
  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src="{{ url('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('lib/php-mail-form/validate.js') }}"></script>
  <script src="{{ url('lib/easing/easing.min.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ url('js/main.js') }}"></script>

</body>
</html>
