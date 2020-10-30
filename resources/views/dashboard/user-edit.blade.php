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
			<h4 class="page-title">Edit User</h4>
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
					<a href="#"> {{ Str::of(Request::segment(2))->ucfirst() }}</a>
				</li>
				<li class="separator">
					<i class="fas fa-caret-right"></i>
				</li>
				<li class="nav-item">
					<a href=""> {{ Str::of(Request::segment(3))->ucfirst() }}</a>
                </li>
                <li class="separator">
					<i class="fas fa-caret-right"></i>
				</li>
				<li class="nav-item">
					<a href="#"> {{ Str::of(Request::segment(4))->ucfirst() }}</a>
				</li>
			</ul>
		</div>
			<div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
					    <div class="card-title">Edit User</div>
                        <a href="{{route('dashboard.user')}}" class="btn btn-primary btn-round ml-auto">
                            <i class="fas fa-arrow-left"></i>
                            Back
                        </a>
                    </div>
                </div>
				<div class="card-body">
                    <form action="{{url('/dashboard/user/edit')}}/{{$data->id}}" method="post">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="form-group" style="padding:5px 0px 5px 0px !important ;">
                                    <label style="font-size:15px !important">Username</label>
                                    <input type="text" class="form-control" name="username" value="{{ $data->name }}">
                                    @error('username')
									<small id="emailHelp" class="form-text text-muted">{{$message}}</small>
									@enderror
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-group" style="padding:5px 0px 5px 0px !important ;">
                                    <label style="font-size:15px !important">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $data->email }}">
                                    @error('email')
									<small id="emailHelp" class="form-text text-muted">{{$message}}</small>
									@enderror
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-group" style="padding:5px 0px 5px 0px !important ;">
                                    <label style="font-size:15px !important">Password</label>
                                    <input type="password" class="form-control" name="password" value="{{ $data->password }}">
                                    @error('password')
									<small id="emailHelp" class="form-text text-muted">{{$message}}</small>
									@enderror
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-check" style="padding:5px 0px 5px 0px !important ;">
                                     <label style="font-size:15px !important">Role</label><br>
									<label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="role" value="admin"  <?php if($data->role == 'admin'){ ?> checked="" <?php } ?>>
										<span class="form-radio-sign">Admin</span>
									</label>
									<label class="form-radio-label ml-3">
										<input class="form-radio-input" type="radio" name="role" value="user"  <?php if($data->role == 'user'){ ?> checked="" <?php } ?>>
										<span class="form-radio-sign">User</span>
                                    </label>
                                    @error('role')
									<small id="emailHelp" class="form-text text-muted">{{$message}}</small>
									@enderror
								</div>
                                <button type="submit" id="update" class="btn btn-primary">Update</button>
						        <button type="reset" class="btn btn-danger">Close</button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>  
    </div>
</div>
@endsection