<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
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
                    <a href="#"><img class="circle white" ></a>
                    <a href="#"><span class="white-text name">{{Auth::user()->name}}</span></a>
                    <a href="#"><span class="white-text email">{{Auth::user()->email}}</span></a>
                </div>
            </li>
            <li><a href="#!">Logout <i class="material-icons">log_out</i></a></li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header waves-effect">Data Dosen<i class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="/Dosen">Daftar Dosen</a></li>
                    <li><a href="/Dosen/create">Insert Data Dosen</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header waves-effect">Mahasiswa<i class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="/Mahasiswa">Daftar Mahasiswa</a></li>
                    <li><a href="/Mahasiswa/create">Insert Mahasiswa</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header waves-effect">Mata Kuliah<i class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="/Makul">Data Mata Kuliah</a></li>
                    <li><a href="/Makul/create">Mata Kuliah<i class="material-icons">plus</i></a></li>
                  </ul>
                </div>
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
    <div style="margin-left: 240px;">
        @yield('content')
    </div>

</div>

    <script type="text/javascript">  
    $('.button-collapse').sideNav({
      menuWidth: 240,
      edge: 'left',
      closeOnClick: false, 
      draggable: true 
        }
    ); 
    </script>
</body>
</html>