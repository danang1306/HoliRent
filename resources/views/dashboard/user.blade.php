@extends('temp_dash/main')
@extends('temp_dash/navbar')
@extends('temp_dash/sidebar')
@extends('temp_dash/footer')
@extends('temp_dash/js')
@section('title','Dashboard Admin')
@section('main')
<div class="content">
    <div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Tables</h4>
			<ul class="breadcrumbs">
				<li class="nav-home">
					<a href="#">
						<i class="fas fa-home"></i>
					</a>
				</li>
				<li class="separator">
					<i class="fas fa-caret-right"></i>
				</li>
				<li class="nav-item">
					<a href="#">Data</a>
				</li>
				<li class="separator">
					<i class="fas fa-caret-right"></i>
				</li>
				<li class="nav-item">
					<a href="#">User</a>
				</li>
			</ul>
		</div>
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<div class="card-title">User</div>
							<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
								<i class="fa fa-plus"></i>
								Add Row
							</button>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-head-bg-secondary table-bordered table-hover text-center mt-4">
							<thead>
								<tr>
									<th scope="col">ID</th>
									<th scope="col">Name</th>
									<th scope="col">Email</th>
									<th scope="col">Role</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $datas)
								<tr>
									<td>{{$datas->id}}</td>
									<td>{{$datas->name}}</td>
									<td>{{$datas->email}}</td>
									<td>{{$datas->role}}</td>
									<td style="min-width:100px;">
										<a id="edit" href="user/edit/{{$datas->id}}"><i style="font-size:20px;" class="fa fa-edit"></i></a>
										<a id="delete" href="user/delete/{{$datas->id}}"  style="margin:0px 10px;"><i class="fa fa-times" style="color:red;font-size:20px;"></i></a>
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
<!-- Modal -->
	<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header no-bd">
					<h5 class="modal-title">
						<span class="fw-mediumbold">
							Tambah</span> 
						<span class="fw-light">
							User
						</span>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="{{ route('user.store') }}">
					<div class="modal-body">
						<div class="row">
							@csrf
							<div class="col-md-6">
								<div class="form-group @error('name') has-error @enderror" style="padding:5px 0px">
									<label for="email2">Nama Depan</label>
									<input type="text" class="form-control" id="email2" name="name">
									@error('name')
									<small id="emailHelp" class="form-text text-muted">{{$message}}</small>
									@enderror
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group" style="padding:5px 0px"> 
									<label>Belakang</label>
									<input id="addName" type="text" class="form-control" name="namebelakang" value="">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group @error('email') has-error @enderror" style="padding:5px 0px">
									<label>Email</label>
									<input id="addPosition" type="email" class="form-control" name="email" value="">
									@error('email')
									<small id="emailHelp" class="form-text text-muted">{{$message}}</small>
									@enderror
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-check" style="padding:5px 0px">
									<label>Role</label><br/>
									<label class="form-radio-label">
										<input class="form-radio-input" type="radio" name="role" value="admin"  checked="">
										<span class="form-radio-sign">Admin</span>
									</label>
									<label class="form-radio-label ml-3">
										<input class="form-radio-input" type="radio" name="role" value="user">
										<span class="form-radio-sign">User</span>
									</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group @error('pass') has-error @enderror" style="padding:5px 0px">
									<label>Password</label>
									<input id="addPass" type="password" class="form-control" name="pass" value="">
									@error('pass')
									<small id="emailHelp" class="form-text text-muted">{{$message}}</small>
									@enderror
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group" style="padding:5px 0px">
									<label>Re-type Password</label>
									<input id="addPassretype" type="password" class="form-control" name="pass_confirmation" value="">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer no-bd">
						<button type="submit" id="addRowButton" class="btn btn-primary">Add</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- EndModal -->
@endsection

@section('jscode')
<script>
	// Modal
	@if($errors->any())
	$('#addRowModal').modal('toggle');
	@endif
	// EndModal

	// Alert Delete
	// $('a#edit').click(function(e){
		// e.preventDefault();
	// });
	$('a#delete').click(function(e){
		e.preventDefault();
		const href= $(this).attr('href');
		swal({
  		title: "Apakah Data ingin dihapus",
  		text: "Data yang dihapus tidak akan bisa dilihat lagi",
  		icon: "warning",
  		buttons: true,
  		dangerMode: true,
	})
		.then((willDelete) => {
  		if (willDelete) {
			document.location.href = href;
  	}else {
    swal("Dibatalkan");
  	}
	});
});
	// EndAllert

	//Session
	@if(session('delete'))
	swal("{{ session('delete') }}",{
      icon: "success",
    });
	@endif

	@if(session('insert'))
	swal("{{ session('insert') }}",{
      icon: "success",
    });
	@endif

	@if(session('edit'))
	swal("{{ session('edit') }}",{
      icon: "success",
    });
	@endif
	// End Session
</script>
@endsection