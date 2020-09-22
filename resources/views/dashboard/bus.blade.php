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
					<a href="#">Tables</a>
				</li>
				<li class="separator">
					<i class="fas fa-caret-right"></i>
				</li>
				<li class="nav-item">
					<a href="#">Basic Tables</a>
				</li>
			</ul>
		</div>
        <!-- <div class="col-md-12"> -->
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<div class="card-title">BUS</div>
							<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
								<i class="fa fa-plus"></i>
								Add Row
							</button>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-head-bg-primary table-bordered table-hover text-center mt-4">
							<thead>
								<tr>
									<th scope="col">Kode</th>
									<th scope="col">Name</th>
									<th scope="col">Type</th>
									<th scope="col">Image</th>
									<th scope="col">Harga</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $datas)
								<tr>
									<td>{{$datas->kode_bus}}</td>
									<td>{{$datas->name}}</td>
									<td>{{$datas->tipe}}</td>
									<td>{{$datas->img}}</td>
									<td>{{$datas->h_sewa}}</td>
									<td style="min-width:100px;">
										<a href="#"><i style="font-size:20px;" class="fa fa-edit"></i></a>
										<a href="#" style="margin:0px 10px;"><i class="fa fa-times" style="color:red;font-size:20px;"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>  
		<!-- </div> -->
    </div>
</div>
<!-- Modal -->
					<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
						    <div class="modal-content">
								<div class="modal-header no-bd">
									<h5 class="modal-title">
									    <span class="fw-mediumbold">
											New</span> 
										<span class="fw-light">
											Row
										</span>
									</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p class="small">Create a new row using this form, make sure you fill them all</p>
									<form>
									    <div class="row">
											<div class="col-sm-12">
												<div class="form-group form-group-default">
													<label>Name</label>
													<input id="addName" type="text" class="form-control" placeholder="fill name">
												</div>
											</div>
											<div class="col-md-6 pr-0">
												<div class="form-group form-group-default">
												    <label>Position</label>
												    <input id="addPosition" type="text" class="form-control" placeholder="fill position">
											    </div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-group-default">
														<label>Office</label>
														<input id="addOffice" type="text" class="form-control" placeholder="fill office">
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="modal-footer no-bd">
									<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
                    <!-- EndModal -->
@endsection