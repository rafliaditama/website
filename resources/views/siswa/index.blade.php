@extends('layout.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">	
								<h4 class="panel-title">DATA SISWA</h4>
								<div class="right">
								<a href="/siswa/exportExcel" class="btn btn-sm btn-primary">Export Excel</a>
								<a href="/siswa/exportpdf" class="btn btn-sm btn-primary">Export PDF</a>
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalLong"><i class="lnr lnr-plus-circle"></i></button>
								</div>
								</div>
								<div class="panel-body">
									<table class="table table-hover" id="datatable">
									</div>
										<thead>
											<tr>
												<th>Nama Lengkap</th>
												<th>Jenis Kelamin</th>
												<th>Agama</th>
												<th>Alamat</th>
												<th>Rata2 Nilai</th>
												<th>Aksi</th> 
											</tr>
										</thead>
										<tbody>											
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
//MODAL//
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Siswa</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="/siswa/create" method="POST" enctype="multipart/form-data">
		        	{{csrf_field()}}
			  <div class="form-group{{$errors->has('nama_lengkap') ? ' has-error' : '' }}">
			    <label for="exampleInputEmail1">Nama Lengkap</label>
			    <input name="nama_lengkap"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{old('nama_lengkap')}}">
			    @if($errors->has('nama_lengkap'))
			    	<span class="help-block">{{$errors->first('nama_lengkap')}}</span>
			    @endif
			  </div>
			  <div class="form-group{{$errors->has('email') ? ' has-error' : '' }}">
			    <label for="exampleInputEmail1">Email</label>
			    <input name="email"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}">
			    @if($errors->has('email'))
			    <span class="help-block">{{$errors->first('email')}}</span>
			    @endif
			  </div>
			 <div class="form-group{{$errors->has('jenis_kelamin') ? ' has-error' : '' }}">
		    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
		    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
		      <option>-------</option>
		      <option value="L">Laki-Laki</option>
		      <option value="P">Perempuan</option>
		      </select>
		      @if($errors->has('jenis_kelamin'))
			    <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
			    @endif
 			 </div>
			<div class="form-group{{$errors->has('agama') ? ' has-error' : '' }}">
		    <label for="exampleFormControlSelect1">Agama</label>
		    <select name="agama" class="form-control" id="exampleFormControlSelect1">
		      <option>-------</option>
		      <option value ="Islam">Islam</option>
		      <option value="Kristen">Kristen</option>
		      <option value="Hindu">Hindu</option>
		      <option value="Buddha">Buddha</option>
		      <option value="Konghucu">Konghucu</option>
		       @if($errors->has('agama'))
			    <span class="help-block">{{$errors->first('agama')}}</span>
			    @endif
		      </select>
 			 </div>
			 <div class="form-group">
			 <label for="exampleFormControlTextarea1">Alamat</label>
			 <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('alamat')}}</textarea>
			 </div>

			  <div class="form-group{{$errors->has('avatar') ? ' has-error' : '' }}">
			  	<p>Note : File Avatar harus berukuran maksimal 90x90</p>
				 <label for="exampleFormControlTextarea1">Avatar</label>
				 <input type="file" name="avatar" class="form-control">
				 @if($errors->has('avatar'))
			    <span class="help-block">{{$errors->first('avatar')}}</span>
			    @endif
				 </div>

		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary">Submit</button>
		        </form>
		      </div>
		    </div>
		  </div>
		</form>
	</div>
</div>
</div>
@endsection

@section('footer')
	<script>
		$(document).ready(function(){
			$('#datatable').DataTable({
				processing:true,
				serverside:true,
				ajax:"{{route('ajax.get.data.siswa')}}",
				columns:[
				{data:'nama_lengkap',name:'nama_lengkap'},
				{data:'jenis_kelamin',name:'jenis_kelamin'},
				{data:'agama',name:'agama'},
				{data:'alamat',name:'alamat'},
				{data:'rata2_nilai',name:'rata2_nilai'},
				{data:'aksi',name:'aksi'}
				]				
			});
			$('.delete').click(function(){
				var siswa_id = $(this).attr('siswa-id');
				swal({
				  title: "Apakah Yakin?",
				  text: "Mau dihapus data siswa dengan id "+siswa_id+" ??",                               
				  icon: "warning",
			 	 buttons: true,
			 	 dangerMode: true,
			})
			.then((willDelete) => {
				console.log(willDelete);
			  if (willDelete) {
			  	window.location = "/siswa/"+siswa_id+"/delete";			    
			  		}
				});
			});
		});
		
	</script>
@endsection








