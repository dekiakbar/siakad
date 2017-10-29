<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('judul')</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/manualAkademik.css')}}">
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
        <li><a href="#">Akademik</a></li>
        <li><a href="#">Forum</a></li>
        <li><a href="#">Web</a></li>
        <li><a href="#"><i class="material-icons">exit_to_app</i></a></li>
      </ul>
    </div>
  </nav>

  {{-- side bar --}}
  <div id="menu">
    <ul id="slide-out" class="side-nav fixed z-depth-5">
      <li>
          <div class="userView">
            <img class="background blue">
            <a href="#"><img class="circle white use_avatar" src="{{url('storage/avatar.png')}}"></a>
            <a href="#"><span class="white-text name">{{Auth::user()->name}}</span></a>
            <a href="#"><span class="white-text email">{{Auth::user()->email}}</span></a>
          </div>
      </li>
      <li><a href="#!">Logout <i class="material-icons cyan-text">exit_to_app</i></a></li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header waves-effect waves-cyan">Data Dosen<i class="material-icons">arrow_drop_down</i></a>
            <ul class="collapsible-body no-padding">
              <li><a href="/Akademik/Dosen">Dosen<i class="material-icons tiny">list</i></a></li>
              <li><a href="/Akademik/Dosen/create">Dosen<i class="material-icons tiny">add</i></a></li>            
            </ul>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header waves-effect waves-cyan">Mahasiswa<i class="material-icons">arrow_drop_down</i></a>
            <ul class="collapsible-body no-padding">
                <li><a href="/Akademik/Mahasiswa">Mahasiswa<i class="material-icons tiny">list</i></a></li>
                <li><a href="/Akademik/Mahasiswa/create">Mahasiswa<i class="material-icons tiny">add</i></a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header waves-effect waves-cyan">Mata Kuliah<i class="material-icons">arrow_drop_down</i></a>
            <ul class="collapsible-body no-padding">
              <li><a href="/Akademik/Makul">Mata Kuliah<i class="material-icons tiny">list</i></a></li>
              <li><a href="/Akademik/Makul/create">Mata Kuliah<i class="material-icons tiny">add</i></a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header waves-effect waves-cyan">Jurusan<i class="material-icons">arrow_drop_down</i></a>
              <ul class="collapsible-body no-padding">
                <li><a href="/Akademik/Jurusan">Jurusan<i class="material-icons tiny">list</i></a></li>
                <li><a href="/Akademik/Jurusan/create">Jurusan<i class="material-icons tiny">add</i></a></li>
              </ul>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header waves-effect waves-cyan">Krs<i class="material-icons">arrow_drop_down</i></a>
            <ul class="collapsible-body no-padding">
              <li><a href="/Akademik/Krs">Krs<i class="material-icons tiny">list</i></a></li>
              <li><a href="/Akademik/Krs/create">Krs<i class="material-icons tiny">add</i></a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header waves-effect waves-cyan">Fakultas<i class="material-icons">arrow_drop_down</i></a>
            <ul class="collapsible-body no-padding">
              <li><a href="/Akademik/Fakultas">Fakultas<i class="material-icons tiny">list</i></a></li>
              <li><a href="/Akademik/Fakultas/create">Fakultas<i class="material-icons tiny">add</i></a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header waves-effect waves-cyan">Ruang<i class="material-icons">arrow_drop_down</i></a>
            <ul class="collapsible-body no-padding">
              <li><a href="/Akademik/Ruang">Ruang<i class="material-icons tiny">list</i></a></li>
              <li><a href="/Akademik/Ruang/create">Ruang<i class="material-icons tiny">add</i></a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header waves-effect waves-cyan">Kelas<i class="material-icons">arrow_drop_down</i></a>
            <ul class="collapsible-body no-padding">
              <li><a href="/Akademik/Kelas">Kelas<i class="material-icons tiny">list</i></a></li>
              <li><a href="/Akademik/Kelas/create">Kelas<i class="material-icons tiny">add</i></a></li>
            </ul>
          </li>
        </ul>
      </li>
      <br>
      <br>
      <br>
    </ul>
  </div>

  {{-- isi --}}
  <div id="content">
    <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only">
      <i class="material-icons">menu</i>
    </a>
  </div>
  <div class="container-fluid">
    @yield('content')  
  </div>
    
</div>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script type="text/javascript" src="{{ asset('js/manual.js') }}"></script>
</body>
</html>