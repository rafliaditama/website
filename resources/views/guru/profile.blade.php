@extends('layout.master')

@section('content')
<div class="main">
<div class="main-content">
				<div class="container-fluid">
						<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="" class="img-circle" alt="Avatar">
										<h3 class="name">{{$guru->nama}}</h3>
										<span class="online-status status-available">Ada</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
											{{$guru->telpon}} <span>No Telepon</span>
											</div>
											<div class="col-md-4 stat-item">
											{{$guru->alamat}}<span>Alamat</span>
											</div>											
										</div>
									</div>
								</div>							
								</div>
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Mata Pelajaran yang diajar oleh Guru {{$guru->nama}}</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Nama</th>												
												<th>Semester</th>
											</tr>
										</thead>
										<tbody>	
											@foreach($guru->mapel as $mapel)										
											<tr>
												<td>{{$mapel->nama}}</td>
												<td>{{$mapel->semester}}</td>												
											</tr>			
											@endforeach																		
										</tbody>
									</table>
								</div>
							</div>			
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>		
		@stop


