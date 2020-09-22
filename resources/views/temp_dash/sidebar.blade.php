@section('sidebar')
<!-- Sidebar -->
    <div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="/assets/img/profiles.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a>
								<span>
									Andryan
									<span class="user-level">Administrator</span>
								</span>
							</a>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#Bus">
								<i class="fas fa-history"></i>
								<p>Data</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="Bus">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{url('dashboard/bus')}}">
											<span class="sub-item">Bus</span>
										</a>
									</li>
									<li>
										<a href="{{url('dashboard/user')}}">
											<span class="sub-item">User</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="#">
								<i class="far fa-chart-bar"></i>								
								<p>Transaction</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<i class="fas fa-history"></i>
								<p>History</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
        @endsection