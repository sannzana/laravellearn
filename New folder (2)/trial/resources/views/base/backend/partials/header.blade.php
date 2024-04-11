<header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">
		<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent hover-primary" data-toggle="push-menu" role="button">
			<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
		</a>	
		<!-- Logo -->
		<a href="{{ route('home') }}" class="logo">
		  <!-- logo-->
		  <div class="logo-lg">
			  <span class="light-logo"><h1>Boleto</h1></span>
			  <span class="dark-logo"><h1>Boleto</h1></span>
		  </div>
		</a>	
	</div>  
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item d-md-none">
				<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#" class="waves-effect waves-light nav-link push-btn btn-info-light" data-toggle="push-menu" role="button">
					<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<div class="app-menu">
                    <div class="search-bx mx-5 d-flex">
                        <div class="wallet-balance">
                            @if (Auth::guard('web')->user()->wallet != 0)
                            @if (Auth::guard('web')->user()->wallet >= 500)
                            <span class="badge badge-success" style="font-size: 15px"><b>Wallet Balance:
                                    {{ Auth::guard('web')->user()->wallet }} {{
                                    Auth::guard('web')->user()->currency }}</b>
                            </span>
                            @endif
                            @endif
                        </div>
                        {{-- <form>
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search" aria-label="Search"
                                    aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn" type="submit" id="button-addon3"><i
                                            class="ti-search"></i></button>
                                </div>
                            </div>
                        </form> --}}
                    </div>
				</div>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">	
			<li class="btn-group nav-item d-lg-inline-flex d-none">
				<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-info-light" title="Full Screen">
					<i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>	
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
		    <span class="label label-primary">5</span>
			<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#" class="waves-effect waves-light dropdown-toggle btn-primary-light" data-bs-toggle="dropdown" title="Notifications">
			  <i class="icon-Notifications"><span class="path1"></span><span class="path2"></span></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><ul class="menu sm-scrol" style="overflow: hidden; width: auto; height: 250px;">
				  <li>
					<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
			  </li>
			  <li class="footer">
				  <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">View all</a>
			  </li>
			</ul>
		  </li>	
		  
		  <!-- Messages -->
		  <li class="dropdown messages-menu">
		    <span class="label label-primary">5</span>
			<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#" class="dropdown-toggle btn-primary-light" data-bs-toggle="dropdown" title="Messages">
			  <i class="icon-Incoming-mail"><span class="path1"></span><span class="path2"></span></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Messages</h4>
						</div>
						<div>
							<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>
			  <li>
				<!-- inner menu: contains the actual data -->
				<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><ul class="menu sm-scrol" style="overflow: hidden; width: auto; height: 250px;">
				  <li><!-- start message -->
					<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					  <div class="pull-left">
						<img src="{{ asset('public/backend/images/user2.jpg') }}" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Lorem Ipsum
						  <small><i class="fa fa-clock-o"></i> 15 mins</small>
						 </h4>
						 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
					  </div>
					</a>
				  </li>
				  <!-- end message -->
				  <li>
					<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					  <div class="pull-left">
						<img src="{{ asset('public/backend/images/user3.jpg') }}" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Nullam tempor
						  <small><i class="fa fa-clock-o"></i> 4 hours</small>
						 </h4>
						 <span>Curabitur facilisis erat quis metus congue viverra.</span>
					  </div>
					</a>
				  </li>
				  <li>
					<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					  <div class="pull-left">
						<img src="{{ asset('public/backend/images/user4.jpg') }}" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Proin venenatis
						  <small><i class="fa fa-clock-o"></i> Today</small>
						 </h4>
						 <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
					  </div>
					</a>
				  </li>
				  <li>
					<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					  <div class="pull-left">
						<img src="{{ asset('public/backend/images/user3.jpg') }}" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Praesent suscipit
						<small><i class="fa fa-clock-o"></i> Yesterday</small>
						 </h4>
						 <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
					  </div>
					</a>
				  </li>
				  <li>
					<a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">
					  <div class="pull-left">
						<img src="{{ asset('public/backend/images/user4.jpg') }}" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Donec tempor
						  <small><i class="fa fa-clock-o"></i> 2 days</small>
						 </h4>
						 <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
					  </div>

					</a>
				  </li>
				</ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
			  </li>
			  <li class="footer">				  
				  <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">See all e-Mails</a>
			  </li>
			</ul>
		  </li>
          <!-- Control Sidebar Toggle Button -->
          <li class="btn-group nav-item">
			  <span class="label label-danger">5</span>
              <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light nav-link full-screen btn-danger-light">
			  	<i class="icon-Settings-2"></i>
			  </a>
          </li>		  
	      <!-- Right Sidebar Toggle Button -->
          <li class="btn-group nav-item d-xl-none d-inline-flex">
              <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#" class="push-btn right-bar-btn waves-effect waves-light nav-link full-screen btn-info-light">
			  	<span class="icon-Layout-left-panel-1"><span class="path1"></span><span class="path2"></span></span>
			  </a>
          </li>
	      <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#" class="dropdown-toggle p-0 text-dark hover-primary ms-md-30 ms-10" data-bs-toggle="dropdown" title="User">
				<span class="ps-30 d-md-inline-block d-none">Hello,</span> <strong class="d-md-inline-block d-none">Alia</strong>
                <img src="./Riday - Restaurant Bootstrap Admin Template Webapp_files/avatar-11.png" class="user-image rounded-circle avatar bg-white mx-10" alt="User Image">
            </a>
            <ul class="dropdown-menu animated flipInX">
              <li class="user-body">
				 <a class="dropdown-item" href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#"><i class="ti-user text-muted me-2"></i> Profile</a>
				 <a class="dropdown-item" href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#"><i class="ti-wallet text-muted me-2"></i> My Wallet</a>
				 <a class="dropdown-item" href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#"><i class="ti-settings text-muted me-2"></i> Settings</a>
				 <div class="dropdown-divider"></div>
				 <a class="dropdown-item" href="" onclick="event.preventDefault();
				 document.getElementById('logout-form').submit();"><i class="ti-lock text-muted mr-2"></i> Logout</a>
				 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					 @csrf
				 </form>
              </li>
            </ul>
          </li>	
			
        </ul>
      </div>
    </nav>
  </header>