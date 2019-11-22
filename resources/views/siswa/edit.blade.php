@extends('layout.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data Siswa</h3>
								</div>
								<div class="panel-body">
									<form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
			        	{{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama Lengkap</label>
				    <input name="nama_lengkap"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{$siswa->nama_lengkap}}">
				  </div>
				 <div class="form-group">
			    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
			    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
			      <option>-------</option>
			      <option value="L" @if($siswa->jenis_kelamin == 'L') selected  @endif>Laki-Laki</option>
			      <option value="P" @if($siswa->jenis_kelamin == 'P') selected  @endif>Perempuan</option>
			      </select>
	 			 </div>
				<div class="form-group">
		    <label for="exampleFormControlSelect1">Agama</label>
		    <select name="agama" class="form-control" id="exampleFormControlSelect1">
		      <option>-------</option>
		      <option value ="Islam">Islam</option>
		      <option value="Kristen">Kristen</option>
		      <option value="Hindu">Hindu</option>
		      <option value="Buddha">Buddha</option>
		      <option value="Konghucu">Konghucu</option>
		      </select>
 			 </div>
				 <div class="form-group">
				 <label for="exampleFormControlTextarea1">Alamat</label>
				 <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
				 </div>

				  <div class="form-group">
				 <label for="exampleFormControlTextarea1">Avatar</label>
				 <p>Note : File Avatar harus berukuran maksimal 90x90</p>
				 <input type="file" name="avatar" class="form-control">
				 </div>

				 <button type="submit" class="btn btn-warning">Update</button>
		        </form>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
@section('content1')
		<h1>Edit Data Siswa</h1>
				<div class="row">
			<div class="col-lg-12">
			
		        </div>
			</div>
@endsection




