<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('judul')</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/manual.css')}}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    {!! MaterializeCSS::include_full() !!}
</head>
<body>

<div id="container">
    <div id="menu">
        <ul id="slide-out" class="side-nav fixed">
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
                    <li><a href="/Dosen">Dosen<i class="material-icons tiny">list</i></a></li>
                    <li><a href="/Dosen/create">Data Dosen<i class="material-icons tiny">add</i></a></li>
                  </ul>
              </li>
            </ul>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header waves-effect waves-cyan">Mahasiswa<i class="material-icons">arrow_drop_down</i></a>
                  <ul class="collapsible-body no-padding">
                    <li><a href="/Mahasiswa">Mahasiswa<i class="material-icons tiny">list</i></a></li>
                    <li><a href="/Mahasiswa/create">Mahasiswa<i class="material-icons tiny">add</i></a></li>
                  </ul>
              </li>
            </ul>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header waves-effect waves-cyan">Mata Kuliah<i class="material-icons">arrow_drop_down</i></a>
                  <ul class="collapsible-body no-padding">
                    <li><a href="/Makul">Mata Kuliah<i class="material-icons tiny">list</i></a></li>
                    <li><a href="/Makul/create">Mata Kuliah<i class="material-icons tiny">add</i></a></li>
                  </ul>
              </li>
            </ul>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header waves-effect waves-cyan">Jurusan<i class="material-icons">arrow_drop_down</i></a>
                  <ul class="collapsible-body no-padding">
                    <li><a href="/Jurusan">Jurusan<i class="material-icons tiny">list</i></a></li>
                    <li><a href="/Jurusan/create">Jurusan<i class="material-icons tiny">add</i></a></li>
                  </ul>
              </li>
            </ul>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header waves-effect waves-cyan">Krs<i class="material-icons">arrow_drop_down</i></a>
                  <ul class="collapsible-body no-padding">
                    <li><a href="/Krs">Krs<i class="material-icons tiny">list</i></a></li>
                    <li><a href="/Krs/create">Krs<i class="material-icons tiny">add</i></a></li>
                  </ul>
              </li>
            </ul>
          </li>
        </ul>
    </div>

    <div id="content">
        <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only">
            <i class="material-icons">menu</i>
        </a>
    </div>
    <div class="container-fluid">
        @yield('content')  
    </div>

</div>

    <script type="text/javascript">  
    $('.button-collapse').sideNav({
      menuWidth: 250,
      edge: 'left',
      closeOnClick: false, 
      draggable: true 
        }
    ); 
    </script>
</body>
</html>