@extends('layout.main')
@section('title','Virtual Tour | IPTEK 360°')
@section('content')

<section class="section-header-single">
	<img src="{{asset('assets/bg virtual2.jpg')}}">
	<div class="overlay">
		<div class="header-title">
			<h3>Virtual Tour</h3>	
			<span class="ion-record"></span>&nbsp;
			<span class="ion-record"></span>&nbsp;
			<span class="ion-record"></span>
		</div>
	</section>
</section>

<ul class="breadcrumb">
  <li><a href="{{route('home')}}">Home</a></li>
  <li>Virtual Tour</li>
</ul>

<!--Events-->
    <section class="section-events" id="events">
      <div class="section-events container">
        <div class="section-events title">
            <h1>Virtual Tour Museum PP-IPTEK</h1>
            <h3>Jelajahi Museum PP-IPTEK Langsung Dari Layar Gadget Anda</h3>
            <div class="line"></div>
        </div>
        
        <div class="panduan">
          <img src="{{asset('assets/panduan.png')}}" alt="">
        </div>
        <div class="mulai-virtual">
          <a href="https://s.id/ISC_360" class="button">Mulai Tour</a>
        </div>
      </div>
    </section>
    <!--Events-->

@endsection