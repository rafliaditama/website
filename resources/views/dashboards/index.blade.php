@extends('layout.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">			
			<div class="panel panel-headline">
				<div class="panel-heading">					
					<div class="panel-body">							
							<div class="row">
							<div class="col-md-6">
							<div class="panel">
								<div class="panel-heading">
									<center><h3 class="panel-title">Ranking 5 Besar</h3></center>
								</div>								
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Ranking</th>			
												<th>Nama</th>			
												<th>Nilai</th>						
											</tr>
										</thead>
										<tbody>
											@php
												$ranking = 1;
											@endphp
											@foreach(ranking5Besar() as $s)															
											<tr>
												<td>{{$ranking}}</td>
												<td>{{$s->nama_lengkap}}</td>
												<td>{{$s->rataRataNilai}}</td>														
											</tr>
											@php
												$ranking++;
											@endphp																					@endforeach	
										</tbody>
									</table>
								</div>								
							</div>									
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="lnr lnr-user"></i></span>
										<p>
											<span class="number">9</span>
											<span class="title">Guru</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="lnr lnr-user"></i></span>
										<p>
											<span class="number">4</span>
											<span class="title">Siswa</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>		
@stop