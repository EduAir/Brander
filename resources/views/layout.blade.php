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
				
				<div class="user-avatar mobile">
					<a href="profile.html" title="View Profile"><img alt="" src="{{asset('assets/images/resources/user.jpg')}}"></a>
					<div class="name">
						<h4>Saim Turan</h4>
						<span>Antalaya, Turky</span>
					</div>
				</div>
				<div class="right-compact">
					<div class="menu-area">
						<div id="nav-icon3">
							<i>
		<svg class="feather feather-grid" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><rect height="7" width="7" y="3" x="3"/><rect height="7" width="7" y="3" x="14"/><rect height="7" width="7" y="14" x="14"/><rect height="7" width="7" y="14" x="3"/></svg>
								</i>
						</div>
						<ul class="drop-menu">
						  	<li><a title="profile.html" href="profile.html"><i class="icofont-user-alt-1"></i>Your Profile</a></li>
							<li><a title="" href="#"><i class="icofont-question-circle"></i>Help</a></li>
							<li><a title="" href="#"><i class="icofont-gear"></i>Setting</a></li>
							<li><a class="dark-mod" title="" href="#"><i class="icofont-moon"></i>Dark Mode</a></li>
							<li><a title="" href="login-register.html" class="logout"><i class="icofont-logout"></i>Logout</a></li>
						</ul>
					</div>
					<div class="res-search">
						<span><i>
		<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></i></span>
					</div>
				</div>
				<div class="restop-search">
					<span class="hide-search"><i class="icofont-close-circled"></i></span>
					<form method="post">
						<input type="text" placeholder="Search...">
					</form>
				</div>
			</div><!-- responsive header -->



		<header class="">
				<div class="topbar stick">
					<div class="logo"><img alt="" src="{{asset('assets/images/logo.png')}}"></div>
					<div class="searches">
						<form method="post">
							<input type="text" placeholder="Search...">
							<button type="submit"><i class="icofont-search"></i></button>
						</form>
					</div>
					<ul class="web-elements">
						<li>
							<div class="user-dp">
								<a href="profile-page2.html" title="">
									<img src="images/resources/user.jpg" alt="">
									<div class="name">
										<h4>Danial Cardos</h4>
									</div>
								</a>	
							</div>
						</li>
						<li>
							<a href="index.html" title="" data-toggle="tooltip" data-original-title="Home">
								<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></i>
							</a>
						</li>
						<li>
							<a class="mesg-notif" href="#" title="" data-toggle="tooltip" data-original-title="Messages">
								<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></i>
							</a>
							<span></span>
						</li>
						<li>
							<a class="mesg-notif" href="#" title="" data-toggle="tooltip" data-original-title="Notifications">
								<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></i>
							</a>
							<span></span>
						</li>
						<li>
							<a class="create" href="#" title="" data-toggle="tooltip" data-original-title="Add New">
								<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></i>
							</a>
						</li>
						<li>
							<a title="" href="#">
								<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
								</i>
							</a>
							<ul class="dropdown">
								<li><a href="profile.html" title=""><i class="icofont-user-alt-3"></i> Your Profile</a></li>
								<li><a href="add-new-course.html" title=""><i class="icofont-plus"></i> New Course</a></li>
								<li><a class="invite-new" href="#" title=""><i class="icofont-brand-slideshare"></i> Invite Collegue</a></li>
								<li><a href="pay-out.html" title=""><i class="icofont-price"></i> Payout</a></li>
								<li><a href="price-plan.html" title=""><i class="icofont-flash"></i> Upgrade</a></li>
								<li><a href="help-faq.html" title=""><i class="icofont-question-circle"></i> Help</a></li>
								<li><a href="settings.html" title=""><i class="icofont-gear"></i> Setting</a></li>
								<li><a href="privacy-n-policy.html" title=""><i class="icofont-notepad"></i> Privacy</a></li>
								<li><a class="dark-mod" title="" href="#"><i class="icofont-moon"></i> Dark Mode</a></li>
								<li class="logout"><a href="sign-in.html" title=""><i class="icofont-power"></i> Logout</a></li>
							</ul>
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




		<div class="all_url" api_url="{{env('APP_URL')}}/api" images="{{asset('storage/')}}"></div>
    
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    @if(Request::is('panel_user'))
    	<script src="{{asset('eduair/js/eduair_admin_users_list.js')}}"></script>
    @endif
    
	

</body>	
</html>