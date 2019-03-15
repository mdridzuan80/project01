@extends('layout.master')

@section('content')
  <!-- +++++ Welcome Section +++++ -->
  <div id="ww">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 centered">
          <img src="{{ url('img/aina.jpeg') }}" alt="Md.Ridzuan.Latiah" class="img-circle">
          <h1>Diri Md.Ridzuan.Latiah!</h1>
          <p>Salam Perkenalan!. Saya Md Ridzuan Mohd latiah kini sedang bekerja di Jabatan Ketua Menteri Melaka.</p>
          <p>Saya seorang pengaturcara komputer</p>

        </div>
        <!-- /col-lg-8 -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /ww -->


  <!-- +++++ Information Section +++++ -->

  <div class="container pt">
    <div class="row mt centered">

      <div class="col-lg-6">
        <span class="glyphicon glyphicon-user"></span>
        <p>Membangun, menyelenggara Sistem kehadiran PCRS di Jabatan Ketua Menteri Melaka</p>
      </div>

      <div class="col-lg-6">
        <span class="glyphicon glyphicon-globe"></span>
        <p>Membangun, menyelenggara Perkhidmatan Emel Rasmi Kerajaan Negeri Melaka</p>
      </div>
    </div>
    <!-- /row -->

    <div class="row mt">
      <div class="col-lg-6">
        <h4>PERIHAL</h4>
        <p>Saya adalah seorang Pengaturcara Komputer. Pernah berkhidmat di Kolej Yayasan Melaka, Pejabat Tanah dan Galian Wilayah Persekutuan, Kuala Lumpur dan kini berkhidmat di Jabatan Ketua Menteri Melaka. Saya sangat berminat dengan pengaturcaraan komputer. Antara bahasa yang biasa digunakan adalah PHP, Javascript, Python, Java. Saya juga meminati perisian sumber terbuka.</p>
      </div>
      <!-- /colg-lg-6 -->

      <div class="col-lg-6">
        <h4>KEMAHIRAN</h4> PHP
        <div class="progress">
          <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
            <span class="sr-only">100% Complete</span>
          </div>
        </div>

        Javascript
        <div class="progress">
          <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
            <span class="sr-only">80% Complete</span>
          </div>
        </div>

        HTML + CSS
        <div class="progress">
          <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
            <span class="sr-only">95% Complete</span>
          </div>
        </div>

      </div>
      <!-- /col-lg-6 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->

@endsection