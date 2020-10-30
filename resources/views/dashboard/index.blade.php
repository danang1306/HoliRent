@extends('temp_dash/main')
@extends('temp_dash/navbar')
@extends('temp_dash/sidebar')
@extends('temp_dash/footer')
@extends('temp_dash/js')
@section('title','Dashboard Admin')
@section('main')
			<div class="content">
					<div class="page-inner">
						<div class="mt-2 mb-4">
							<h2 class="pb-2">Welcome back,
							{{ $name }}
							</h2>
							<h5 class="op-7 mb-4">Do Your Best Think today,cause u dont know u can even do that tommorow.</h5>
						</div>
						<div class="row">
							<div class="col-md-4 ">
								<div class="card card-stats card-round">
									<div class="card-body ">
										<div class="row align-items-center">
											<div class="col-icon">
												<div class="icon-big text-center icon-primary bubble-shadow-small">
													<i class="fa fa-users"></i>
												</div>
											</div>
											<div class="col col-stats ml-3 ml-sm-0">
												<div class="numbers">
													<p class="card-category">Users</p>
													<h4 class="card-title">100</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-stats card-round">
									<div class="card-body ">
										<div class="row align-items-center">
											<div class="col-icon">
												<div class="icon-big text-center icon-secondary bubble-shadow-small">
													<i class="fa fa-bus"></i>
												</div>
											</div>
											<div class="col col-stats ml-3 ml-sm-0">
												<div class="numbers">
													<p class="card-category">Bus</p>
													<h4 class="card-title">1293</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-stats card-round">
									<div class="card-body ">
										<div class="row align-items-center">
											<div class="col-icon">
												<div class="icon-big text-center icon-success bubble-shadow-small">
													<i class="far fa-chart-bar"></i>
												</div>
											</div>
											<div class="col col-stats ml-3 ml-sm-0">
												<div class="numbers">
													<p class="card-category">Transaksi</p>
													<h4 class="card-title">423.123</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
@endsection