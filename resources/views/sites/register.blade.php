@extends('layout.frontend')

@section('content')
<section class="banner-area relative about-banner" id="home" style="background: url('{{config('sekolah.image_top_url')}}');">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Pendaftaran			
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> Daftar</a></p>
						</div>	
					</div>
				</div>
			</section>

	<section class="search-course-area relative" style="background: unset;">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-3 col-md-6 search-course-left">
							<h1>
								Daftar Secara Online <br>
								Bergabunglah bersama kami
							</h1>
							<p>
								Pendaftaran online yang mudah dan cepat. Dengan kurikulum yang selalu update kami menjamin lulusan mudah terserap di dunia kerja.
							</p>
						</div>
						<div class="col-lg-49 col-md-6 search-course-right section-gap">
							{!! Form::open(['url' => '/postregister','class' => 'form-wrap']) !!}
							<form class="form-wrap" action="#">
								<h4 class="pb-20 text-center mb-30">Formulir Pendaftaran</h4>
								{!!Form::text('nama_lengkap','',['class' => 'form-control','placeholder' => 'Nama Lengkap'])!!}		
								{!!Form::text('agama','',['class' => 'form-control','placeholder' => 'Agama'])!!}
								{!!Form::text('alamat','',['class' => 'form-control','placeholder' => 'Alamat'])!!}
								<div class="form-select" id="service-select">
								{!!Form::select('jenis_kelamin',[''=> 'Pilih Jenis Kelamin', 'L' => 'Laki-laki', 'P' => 'Perempuan'],['style' => 'display: none;']);!!}		
								</div>	
								{!!Form::email('email','',['class' => 'form-control','placeholder' => 'Email'])!!}			
								{!!Form::password('password',['class' => 'form-control','placeholder' => 'Password'])!!}			
								<input type="submit" class="primary-btn text-uppercase" value="Kirim" style="text-align: center;">
								{!!Form::close()!!}
							</form>
						</div>
					</div>
				</div>	
			</section>
@endsection