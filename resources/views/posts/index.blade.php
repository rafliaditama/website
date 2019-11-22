@extends('layout.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">	
								<h4 class="panel-title">Posts</h4>
								<div class="right">								
								<a href="{{route('posts.add')}}" class="btn btn-sm btn-primary">Tambah Posts Baru</a>
								</div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
									</div>
										<thead>
											<tr>
												<th>Id</th>
												<th>Title</th>
												<th>User</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach($posts as $post)
										<tr>											
											<td>{{$post->id}}</td>
											<td>{{$post->title}}</td>
											<td>{{$post->user->name}}</td>
											<td>
												<a target ="_blank" href="{{route('site.single.post',$post->slug)}}" class="btn btn-info  btn-sm">View</a>									
												<a href="/posts/{{$post->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Delete</a>
											</td>
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
//MODAL//
@endsection

@section('footer')
	<script>
		$('.delete').click(function(){
		var posts_id = $(this).attr('posts-id');
		swal({
			  title: "Apakah Yakin?",
			  text: "Mau dihapus posts dengan id "+post_id+" ??",                               
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
				console.log(willDelete);
			  if (willDelete) {
			  	window.location = "/posts/"+posts_id+"/delete";			    
			  }
			});
		});
	</script>
@endsection








