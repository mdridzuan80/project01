@extends('layout.master')

@section('content')

  <!-- +++++ Posts Lists +++++ -->
  <!-- +++++ First Post +++++ -->
  <div id="grey">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <p><img src="{{ url('img/aina.jpeg') }}" width="50px" height="50px" class="img-circle">
            <ba>Md Ridzuan Latiah</ba>
          </p>
          <p>
            <bd>September 30, 2018</bd>
          </p>
          <h4>Menyertai Perhimpunan JomLaunch 6.0</h4>
          <p><img class="img-responsive" src="{{ url('img/jomweb-new-logo-invert.png') }}" alt=""></p>
          <p>JomLaunch merupakan platform untuk ahli komuniti JomWeb melancarkan sebarang produk yang melibatkan IT. Ianya bertujuan bagi membantu projek-projek komuniti, sumber terbuka, projek persendirian mahupun komersil dapat diketengahkan.</p>
          <p>JomWeb percaya, dengan adanya acara sebegini, secara tidak langsung ia seolah-olah memberikan ‘deadline’ kepada mereka yang membangunkan projek persendirian.</p>
          <p>Selain itu, JomWeb juga mahu meraikan kepakaran tempatan serta mengetengahkan produk-produk yang mempunyai nilai komersil.</p>
        </div>

      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /grey -->

  <!-- +++++ Second Post +++++ -->
  <div id="white">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <p><img src="{{ url('img/aina.jpeg') }}" width="50px" height="50px" class="img-circle">
            <ba>Md Ridzuan Latiah</ba>
          </p>
          <p>
            <bd>Mac 15, 2018</bd>
          </p>
          <h4>Kejohan Sukan Tara Sekolah</h4>
          <p>Satu kejohan Sukantara telah berlangsung di Maktab Perguruan Melaka di Durian Daun Melaka. Melibatkan 4 pasukan iaitu Rumah Biru, Rumah Hijau, Rumah Merah dan Rumah Kuning.</p>
          <p>Menyaksikan Rumah Biru telah menjadi Johan keseluruhan di dalam temasya tersebut.</p>
        </div>

      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /white -->

  @endsection