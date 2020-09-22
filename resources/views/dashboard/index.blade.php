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
							<h2 class="pb-2">Welcome back, Andryan!</h2>
							<h5 class="op-7 mb-4">Do Your Best Think today,cause u dont know u can even do that tommorow.</h5>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="card card-dark bg-primary-gradient">
									<div class="card-body pb-0">
										<div class="h1 fw-bold float-right">+5%</div>
										<h2 class="mb-2">17</h2>
										<p>Users online</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-dark bg-secondary-gradient">
									<div class="card-body pb-0">
										<div class="h1 fw-bold float-right">-3%</div>
										<h2 class="mb-2">27</h2>
										<p>New Users</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-dark bg-success2">
									<div class="card-body pb-0">
										<div class="h1 fw-bold float-right">+7%</div>
										<h2 class="mb-2">213</h2>
										<p>Transactions</p>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
@endsection