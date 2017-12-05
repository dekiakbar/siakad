<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('judul')</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/akademik/manualAkademik.css')}}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    {!! MaterializeCSS::include_full() !!}
</head>
<body>
<div id="container">

  {{-- navbar --}}
  <nav class="cyan z-depth-2">
    <div class="nav-wrapper">
      <a href="/Akademik" class="brand-logo"><i class="material-icons">school</i> Akademik</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/Akademik">Akademik</a></li>
        <li><a href="#">Forum</a></li>
        <li><a href="#">Web</a></li>
        <li><a href="#">Perpus</a></li>
        <li><a href="#"><i class="material-icons">exit_to_app</i></a></li>
      </ul>
    </div>
  </nav>

  {{-- side bar --}}
  <div id="menu">
    <ul id="slide-out" class="side-nav fixed z-depth-5">
      <li class="no-padding">
          <div class="userView">
            <img class="background blue">
            <a href="#"><img class="circle white use_avatar" src="{{url('storage/avatar.png')}}"></a>
            <a href="#"><span class="white-text name">Deki</span></a>
            <a href="#"><span class="white-text email">Dekiakbar@linuxmail.org</span></a>
          </div>
      </li>
      {{-- <li><a href="#!">Logout <i class="material-icons cyan-text">exit_to_app</i></a></li> --}}
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header waves-effect waves-cyan">Data Dosen<i class="material-icons cyan-text">arrow_right</i></a>
            <ul class="collapsible-body no-padding">
              <li><a href="/Akademik/Dosen">Dosen<i class="material-icons tiny">list</i></a></li>
              <li><a href="/Akademik/Dosen/create">Dosen<i class="material-icons tiny">add</i></a></li>            
            </ul>
          </li>
        </ul>
      </li>
      <br>
      <br>
      <br>
    </ul>
  </div>

  <div id="content">
    <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only">
      <i class="material-icons">menu</i>
    </a>
  </div>
  {{-- isi --}}
  <div class="container-fluid">
    @yield('isi')  
  </div>
    
</div>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script type="text/javascript" src="{{ asset('js/akademik/manual.js') }}"></script>
</body>
</html>