@extends('layout.main')
@section("title", 'Tentang | IPTEK 360°')
@section('content')

<section class="section-header-single">
	<img src="{{asset('assets/immersive-experience-concept-collage.jpg')}}">
	<div class="overlay">
		<div class="header-title">
			<h3>About</h3>	
			<span class="ion-record"></span>&nbsp;
			<span class="ion-record"></span>&nbsp;
			<span class="ion-record"></span>
		</div>
</section>
</section>

<ul class="breadcrumb">
  <li><a href="{{route('beranda')}}">Home</a></li>
  <li>About</li>
</ul>

<section class="section section-about" style="background-color: #F8F8F8">
  <div class="about-head slides">
    <h3>Iptek 360°</h3>
    <p style="color: black">
      <b>Iptek 360° </b> merupakan website yang memungkinkan pengguna untuk melakukan tur virtual di kawasan Museum PP-IPTEK di Taman Mini Indonesia Indah. Aplikasi ini menyediakan informasi mengenai lokasi, fasilitas dan alat peraga pada kawasan tersebut, serta memberikan pengalaman tur virtual yang menyenangkan dan menambah pengetahuan pengguna tentang Science. Fitur-fitur yang mungkin termasuk dalam aplikasi ini meliputi peta interaktif dan gambar panorama.
    </p>
  </div>
  <div class="about-body">
    <div class="row slides">
      <div class="col">
        <img src="{{asset('assets/virtual.png')}}" />
        <h2>Virtual</h2>
        <p style="color: black">
          Dapat diakses dari mana saja dan kapan saja, sehingga lebih fleksibel daripada tur fisik
      </div>
      <div class="col">
        <img src="{{asset('assets/panorama.png')}}" />
        <h2>PANORAMA</h2>
        <p style="color: black">
          Menyediakan pandangan yang lebih luas dan detail dari suatu tempat wisata dibandingkan dengan hanya melihat foto 
      </div>
      <div class="col">
        <img src="{{asset('assets/tour-guide.png')}}" />
        <h2>GUIDE</h2>
        <p style="color: black">
          Kami memberikan info - info seputar lokasi dan alat peraga pada Museum PP-IPTEK  
        </p>
      </div>
    </div>
  </div>
  <div class="contact_us">
    <div class="row-contact">
      <div class="lokasi">
        <h2>Lokasi</h2>
        <div class="line"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7066774682244!2d106.90099767279614!3d-6.302218093686934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed50d090bb61%3A0x51439bd053397c1b!2sIndonesia%20Science%20Center%20(PP-IPTEK)!5e0!3m2!1sen!2sid!4v1713194148093!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="cbox">
       <h2>Kontak</h2>
       <div class="line"></div>
        <div class="c_boxx">
            <a href="http://indonesiasciencecenter.co.id/"><i class="fa fa-globe"></i>
                Mail: indonesiasciencecenter.co.id
            </a>
        </div>
        <div class="c_boxx">
            <a href="tel:02187792078"><i class="fa fa-phone"></i>
                Phone: 08111155444
            </a>
        </div>
        <div class="c_boxx">
            <a href="#"><i class="fa fa-map-marker"></i>
                Location: Jl. Raya Tmii, RW.10, Ceger, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13810
            </a>
        </div>
      </div>
    </div>
  </div>
  
</section>


@endsection