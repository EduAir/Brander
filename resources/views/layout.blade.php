<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Brander</title>
   <link rel="icon" href="{{asset('assets/images/admin.png')}}" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{asset('assets/css/roboto.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    

</head>
<body>

	
	<div class="theme-layout">
    
    
		<div class="responsive-header">
				<div class="res-logo"><img src="{{asset('assets/images/logo.png')}}" alt=""></div>
		</div><!-- responsive header -->


		<header class="">
				<div class="topbar stick">
					<div class="logo"><img alt="" src="{{asset('assets/images/logo.png')}}"></div>
					<ul class="web-elements">
						<li>
							<div class="user-dp">
								<a href="profile-page2.html" title="">
									<img src="images/resources/user.jpg" alt="">
									<div class="name">
										<h4>John Doe</h4>
									</div>
								</a>	
							</div>
						</li>
						
					</ul>
				</div>
				
			</header>
    


		    <div class="container-fluid">
		        <div class="row">
		            <div class="col-lg-12">
		                <div class="panel-content">
		                    <h4 class="main-title">{{$page_title}}</h4>

		                    @yield('contain')
		                </div>
		            </div>
		        </div>
		    </div><!-- main content -->
    
		</div>




		<div class="all_url" api_url="{{URL::to('/')}}/api" images="{{asset('storage/')}}"></div>
    
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    @if(Request::is('panel_user'))
    	<script src="{{asset('eduair/js/eduair_admin_users_list.js')}}"></script>
    @endif
    
	

</body>	
</html>