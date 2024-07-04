@extends('layout.main')
@section('title','IPTEK GO - Gallery')
@section('content')
<section class="section-header-single">
	<img src="{{asset('assets/immersive-experience-concept-collage (1).jpg')}}">
	<div class="overlay">
		<div class="header-title">
			<h3>Gallery</h3>	
			<span class="ion-record"></span>&nbsp;
			<span class="ion-record"></span>&nbsp;
			<span class="ion-record"></span>
		</div>
</section>
<ul class="breadcrumb">
	<li><a href="{{route('home')}}">Home</a></li>
	<li>Gallery</li>
</ul>
<section class="section-gallery" id="galeri">
    <div class="section-gallery container">
        <div class="section-gallery title">
            <h1>Galeri Foto</h1>
            <div class="line"></div>
        </div> 

		<div class="work">
			<div class="grid">
				<img class="filterDiv show" src="{{asset('assets/galeri/jurasic.jpg')}}">
				<div class="teks-tengah">Taman Jurasic</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="
				{{asset('assets/galeri/sepeda diatas kabel.jpg')}}">
				<div class="teks-tengah">Wahana Evolusi Teknologi</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="
				{{asset('assets/galeri/virtual zone.jpg')}}">
				<div class="teks-tengah">Wahana Virtual Zone</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="{{asset('assets/galeri/petualangan sains.jpg')}}">
				<div class="teks-tengah">Wahan Petualangan Sains</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="
				{{asset('assets/galeri/listrik dan magnet.jpg')}}">
				<div class="teks-tengah">Wahana Listrik dan Magnet</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="
				{{asset('assets/galeri/arena peneliti cilik.jpg')}}">
				<div class="teks-tengah">Wahana Arena Peneliti</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="
				{{asset('assets/galeri/stereo visual.jpg')}}">
				<div class="teks-tengah">Wahana Stereo Visual</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="
				{{asset('assets/galeri/ozon.jpg')}}">
				<div class="teks-tengah">Wahana Ozon</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="
				{{asset('assets/galeri/simulasi gempa.jpg')}}">
				<div class="teks-tengah">Wahana Gempa dan Tsunami</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="
				{{asset('assets/galeri/antariksa.jpg')}}">
				<div class="teks-tengah">Wahana Antariksa</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="
				{{asset('assets/galeri/mekanika.jpg')}}">
				<div class="teks-tengah">Wahana Mekanika</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="
				{{asset('assets/galeri/istana cahay.jpg')}}">
				<div class="teks-tengah">Wahana Optik</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="
				{{asset('assets/galeri/inovasi indonesia.jpg')}}">
				<div class="teks-tengah">Wahana Inovasi Indonesia</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="
				{{asset('assets/galeri/trasnportasi darat.jpg')}}">
				<div class="teks-tengah">Wahana Transportasi Darat</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="
				{{asset('assets/galeri/transportasi udara.jpg')}}">
				<div class="teks-tengah">Wahana Transportasi Udara</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="
				{{asset('assets/galeri/Pandemi Influenza.jpg')}}">
				<div class="teks-tengah">Wahana Pandemi Influenza</div>
			</div>
			<div class="grid">
				<img class="filterDiv show" src="
				{{asset('assets/galeri/Flu burung.jpg')}}">
				<div class="teks-tengah">Wahana Flu Burung</div>
			</div>
		</div>

    </div>
</section>



@endsection