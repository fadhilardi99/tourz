<!-- Navbar -->
    <nav class="navbar">
      <div class="container">
        <div class="navbar-bars">
          <a href="#" class="navbar-title sidebar-toggle" style="padding: 0"><i class="ion-navicon-round"></i></a>
          <a href="{{route('home')}}" class="navbar-title">ISC 360°</a>
        </div>
        <div class="navbar-item">
          <a href="{{route('home')}}" class="navbar-title">
            <img src="{{asset('assets/ISC 360°.png')}}" alt="">
          </a>
          <ul>
            <li>
            <a href="{{route('beranda')}}">Home</a>
            </li>
            <li>
              <a href="{{route('about')}}">About</a>
            </li>
            <li>
              <a href="{{route('virtual')}}">Virtual Tour</a>
             
            </li>
              <li>
              <a href="{{route('galeri')}}">Gallery</a>
            </li>
            <li>
              <button class="btn-login">
              <a href="{{url('sesi')}}">Login</a></button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
      <ul class="sidebar-list">
        <li class="sidebar-logo">
          <a href="" class="close"><span class="ion-android-close"></span></a>
        </li>
        <li>
          <img src="{{asset('assets/ISC 360°.png')}}" alt="">
        </li>
        <li class="sidebar-list-hover">
          <a href="{{route('beranda')}}">Home</a>
        </li>
        <li class="sidebar-list-hover">
          <a href="{{route('about')}}">About</a>
        </li>
        <li class="sidebar-list-hover">
          <a href="{{route('virtual')}}">Virtual Tour</a>
        </li>
        <li class="sidebar-list-hover">
          <a href="{{route('galeri')}}">Gallery</a>
        </li>
      </ul>
    </div>

    <!-- Sidebar Overlay -->
    <section class="sidebar-overlay"></section>