<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('backend/images/favicon.ico') }}">

    <title>@yield('title')</title>
    @include('base.backend.include.css')
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed" data-new-gr-c-s-check-loaded="14.1111.0" data-gr-ext-installed="">
	
<div class="wrapper">
	<div id="loader" style="opacity: 0.05; display: none;"></div>
	
    <!-- header -->
  @include('base.backend.partials.header')
  
  @include('base.backend.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<div class="container-full">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
						<h3 class="page-title">@yield('page-name')</h3>
						<div class="d-inline-block align-items-center">
							<nav>
								<ol class="breadcrumb">
									@yield('breadcrumb')
								</ol>
							</nav>
						</div>
					</div>

				</div>
			</div>
			<!-- Main content -->
			<section class="content">
				@yield('content')
			</section>
			<!-- /.content -->
		</div>
	</div>
  <!-- /.content-wrapper -->
	
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="https://riday-admin-template.multipurposethemes.com/bs5/main/index2.html#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  © 2021 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
  </footer>
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
	
	
@include('base.backend.include.js')
<div aria-label="grammarly-integration" role="group" tabindex="-1" class="grammarly-desktop-integration" data-content="{&quot;mode&quot;:&quot;full&quot;,&quot;isActive&quot;:true,&quot;isUserDisabled&quot;:false}"></div></template></grammarly-desktop-integration></html>