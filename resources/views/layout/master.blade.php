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

  <link href="{{ url('css/style_resume.css') }}" rel="stylesheet">

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
          <li><a href="{{ url('resume') }}">Resume</a></li>
          <li><a href="{{ url('rancangan') }}">Perancangan</a></li>
          <li><a href="{{ url('javascript') }}">Javascript</a></li>
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
            <a href="https://github.com/mdridzuan80">Github</a><br/>
            <a href="https://www.facebook.com/mdridzuan80">Facebook</a>
          </p>
        </div>
        <!-- /col-lg-4 -->

        <div class="col-lg-4">
          <h4>About Md.Ridzuan.Latiah</h4>
          <p>By Cory House. Anyone can write code a computer can understand, but professional developers write code *humans* can understand. Clean code is a reader-focused development style that produces software that's easy to write, read and maintain.</p>
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
    <script>
    $(document).ready(function(){
      $('.form-horizontal').on('submit', function(e) {
        e.preventDefault();

        if(!e.target.emp_name.value || !e.target.emp_number.value || !e.target.rate.value || !e.target.hour.value) {
          alert('Please enter the value');
          return;
        }
        
        var normal_hour = 40;
        var extended = 1.5;
        var total = 0;

        var input_emp_name = e.target.emp_name.value;
        var input_emp_number = e.target.emp_number.value;
        var input_hour = parseFloat(e.target.hour.value);
        var input_rate = parseFloat(e.target.rate.value);

        if(input_hour < normal_hour) {
          total = input_hour * input_rate * 1;
        }
        else
        {
          total = ((normal_hour * input_rate) + ((input_hour-normal_hour)*extended*input_rate)) ;
        }

        alert('Paid amount for ' + input_emp_name + ' is RM' + total);
      });
    });
    </script>

</body>
</html>
