@extends('layout.main')
@section('title','Home | ISC 360°')
@section('content')

<!-- Section Header -->

<div class="slider">
  <div class="slide" style="background-image: url('/assets/background.png'); background-position:center; ">
     <div class="title">
       <h1>VIRTUAL TOUR <br/>INDONESIA SCIENCE CENTER (PP-IPTEK)</h1>
     </div>
     <div class="title-min">
      <h1>
        VIRTUAL TOUR <br />
              ISC <br />PP-IPTEK <br />
      </h1>
     </div>
  </div>
</div>


<!-- Section About -->

<section class="section section-about">
  <div class="texture-handler-top "></div>
  <div class="about-head slides">
    <h3>ISC 360°</h3>
    <p>
      <b>ISC 360° </b> merupakan website yang memungkinkan pengguna untuk melakukan tur virtual di kawasan Indonesia Science Center (PP-IPTEK) di Taman Mini Indonesia Indah. Aplikasi ini menyediakan informasi mengenai lokasi, fasilitas dan alat peraga pada kawasan tersebut, serta memberikan pengalaman tur virtual yang menyenangkan dan menambah pengetahuan pengguna tentang Science. Fitur-fitur yang mungkin termasuk dalam aplikasi ini meliputi peta interaktif dan gambar panorama.
    </p>
  </div>
  <div class="about-body">
    <div class="row slides">
      <div class="col">
        <img src="{{asset('assets/virtual.png')}}" />
        <h2>Virtual</h2>
        <p>
          Dapat diakses dari mana saja dan kapan saja, sehingga lebih fleksibel daripada tur fisik
      </div>
      <div class="col">
        <img src="{{asset('assets/panorama.png')}}" />
        <h2>PANORAMA</h2>
        <p>
          Menyediakan pandangan yang lebih luas dan detail dari suatu tempat wisata dibandingkan dengan hanya melihat foto 
      </div>
      <div class="col">
        <img src="{{asset('assets/tour-guide.png')}}" />
        <h2>GUIDE</h2>
        <p>
          Memberikan informasi - informasi seputar lokasi dan Wahana pada Indonesia Science Center (PP-IPTEK)  
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Section Explore -->

<section class="section-explore">
  <div class="texture-handler-top"></div>
  <div class="overlay">
    <div class="caption">
      <h2>ENJOY THE TOUR ANYWHERE AND ANYTIME</h2>
      <br />
      <img src="{{asset('assets/bumper.png')}}" alt="" />
      <br>
      <a href="https://s.id/ISC_360" class="button">Mulai Tour</a>
    </div>
  </div>
  <div class="texture-handler-bottom"></div>
</section>

<!-- Section gallery -->
<section class="section-discover" id="discover">
      <div class="section-head">
        <h3 class="section-title">DISCOVERY INDONESIA SCIENCE CENTER (PP-IPTEK)</h3>
        <p class="section-subtitle">
          Sebuah Museum yang menampilkan Wahana-wahana seputar teknologi dan pengetahuan
        </p>
        <div class="section-line"></div>
      </div>
      <div class="section-discover-body slides">
        <div class="col">
          <a href="destination.html">
            <img src="{{asset('assets/galeri/jurasic.jpg')}}" alt="" />
            <div class="caption">
              <p>Taman Jurasic</p>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="culture.html">
            <img src="{{asset('assets/galeri/sepeda diatas kabel.jpg')}}" />
            <div class="caption" alt="Culture">
              <p>Wahana Evolusi Teknologi</p>
              
            </div>
          </a>
        </div>
        <div class="col">
          <a href="event.html">
            <img src="{{asset('assets/galeri/virtual zone.jpg')}}" />
            <div class="caption" alt="Event">
              <p>Wahana Virtual Zone</p>
            </div>
          </a>
        </div>
      </div>
      <div class="explore">
        <a href="{{route('galeri')}}" class="button">Explore</a>
      </div>
</section>

<!-- Section Logo -->
<div class="container-logo">
  <div class="logo-slider">
    <img src="{{ asset('assets/logo/isc2.png') }}" alt="" width="200px" height="200px" >
    <img src="{{ asset('assets/logo/logo uhamka.png') }}" alt="" width="200px" height="200px">
    <img src="{{ asset('assets/logo/logo tmii.png') }}" alt="" width="200px" height="200px">
  </div>
</div>

@endsection