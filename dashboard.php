<?php   ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sanaysay</title>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

	<link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<link href="assets/css/svg-weather.css" rel="stylesheet">

	<script src="assets/plugins/charts/echarts/js/echarts-all.js"></script>

	<link rel="stylesheet" type="text/css" href="assets/css/main.css">

	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

	<link rel="stylesheet" type="text/css" href="assets/css/color/color-1.min.css" id="color" />

</head>
<body class="sidebar-mini fixed">
	<div class="loader-bg">
		<div class="loader-bar"></div>
	</div>
	<div class="wrapper">
		<header class="main-header-top hidden-print">
			<a href="#" class="logo"><img   class="img-fluid able-logo"></a>
			<nav class="navbar navbar-static-top">
				<a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
				<div class="navbar-custom-menu f-right">
					<ul class="top-nav">
						<li class="dropdown pc-rheader-submenu message-notification search-toggle">
							<a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
								<i class="icofont icofont-search-alt-1"></i>
							</a>
						</li>
						<li class="dropdown notification-menu">
							<a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
								<i class="icon-bell"></i>
								<span class="badge badge-danger header-badge">10</span>
							</a>
							<ul class="dropdown-menu">
								<li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
								<li class="bell-notification">
									<a href="javascript:;" class="media">
										<span class="media-left  media-icon">
											<img src="assets/images/avatar-1.png" alt="User Image" class="img-circle">
										</span>
										<div class="media-body">
											<span class="block">Lisa sent you a mail</span>
											<span class="text-muted block-time">2min ago</span>
										</div>
									</a>
								</li>
								<li class="bell-notification">
									<a href="javascript:;" class="media">
										<span class="media-lef media-icon">
											<img src="assets/images/avatar-2.png" alt="User Image" class="img-circle">
											<div class="media-body">
												<span class="block">Server Not Working</span>
												<span class="text-muted block-time">20min ago</span>
											</div>
										</span>
									</a>
								</li>
								<li class="bell-notification">
									<a href="javascript:;" class="media">
										<span class="media-left media-icon"></span>
										<img src="assets/images/avatar-3.png" alt="User Image" class="img-circle">
										<div class="media-body">
											<span class="block">Transaction xyz complete</span>
											<span class="text-muted block-time">3 hours ago</span>
										</div>
									</a>
								</li>
								<li class="not-footer">
									<a href="#!">See all notifications.</a>
								</li>
							</ul>
						</li>
						<li class="pc-rheader-submenu ">
							<a href="#!" class="drop icon-circle displayChatbox">
								<i class="icon-bubbles"></i>
								<span class="badge badge-danger header-badge blink">5</span>
							</a>
						</li>
						<li class="pc-rheader-submenu">
							<a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
								<i class="icon-size-fullscreen"></i>
							</a>
						</li>
						<li class="dropdown">
							<a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
								<span>
									<img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;" alt="User Image">
								</span>
								<span>John <b>Doe</b> 
									<i class=" icofont icofont-simple-down"></i>
								</span>
							</a>
							<ul class="dropdown-menu settings-menu">
								<li>
									<a href="#!">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="profile.html">
										<i class="icon-user"></i> Profile
									</a>
								</li>
								<li>
									<a href="message.html">
										<i class="icon-envelope-open"></i> My Messages
									</a>
								</li>
								<li class="p-0">
									<div class="dropdown-divider m-0"></div>
								</li>
								<li>
									<a href="lock-screen.html">
										<i class="icon-lock"></i> Lock Screen
									</a>
								</li>
								<li>
									<a href="#!">
										<i class="icon-logout"></i> Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<div id="morphsearch" class="morphsearch">
						<form class="morphsearch-form">
							<input class="morphsearch-input" type="search" placeholder="Search..." />
							<button class="morphsearch-submit" type="submit">Search</button>
						</form>
						<div class="morphsearch-content">
							<div class="dummy-column">
								<h2>People</h2>
								<a class="dummy-media-object" href="#!">
									<img class="round" src="https://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&amp;d=identicon&amp;r=G" alt="Sara Soueidan" />
									<h3>Sara Soueidan</h3>
								</a>
								<a class="dummy-media-object" href="#!">
									<img class="round" src="https://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&amp;d=identicon&amp;r=G" alt="Shaun Dona" />
									<h3>Shaun Dona</h3>
								</a>
							</div>
							<div class="dummy-column">
								<h2>Popular</h2>
								<a class="dummy-media-object" href="#!">
									<img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
									<h3>Page Preloading Effect</h3>
								</a>
								<a class="dummy-media-object" href="#!">
									<img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
									<h3>Draggable Dual-View Slideshow</h3>
								</a>
							</div>
							<div class="dummy-column">
								<h2>Recent</h2>
								<a class="dummy-media-object" href="#!">
									<img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
									<h3>Tooltip Styles Inspiration</h3>
								</a>
								<a class="dummy-media-object" href="#!">
									<img src="assets/images/avatar-1.png" alt="NotificationStyles" />
									<h3>Notification Styles Inspiration</h3>
								</a>
							</div>
						</div>
						<span class="morphsearch-close">
							<i class="icofont icofont-search-alt-1"></i>
						</span>
					</div>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar hidden-print ">
			<section class="sidebar" id="sidebar-scroll">
				<div class="user-panel">
					<div class="f-left image">
						<img src="assets/images/avatar-1.png" alt="User Image" class="img-circle">
					</div>
					<div class="f-left info">
						<p>John Doe</p>
						<p class="designation">UX Designer 
							<i class="icofont icofont-caret-down m-l-5"></i>
						</p>
					</div>
				</div>
				<ul class="nav sidebar-menu extra-profile-list">
					<li>
						<a class="waves-effect waves-dark" href="profile.html">
							<i class="icon-user"></i>
							<span class="menu-text">View Profile</span>
							<span class="selected"></span>
						</a>
					</li>
					<li>
						<a class="waves-effect waves-dark" href="javascript:void(0)">
							<i class="icon-settings"></i>
							<span class="menu-text">Settings</span>
							<span class="selected"></span>
						</a>
					</li>
					<li>
						<a class="waves-effect waves-dark" href="javascript:void(0)">
							<i class="icon-logout"></i>
							<span class="menu-text">Logout</span>
							<span class="selected"></span>
						</a>
					</li>
				</ul>
				<ul class="sidebar-menu">
					<li class="nav-level">Navigation</li>
					<li class="active treeview">
						<a class="waves-effect waves-dark" href="index.html">
							<i class="icon-speedometer"></i>
							<span> Dashboard</span>
						</a>
					</li>
					<li class="nav-level">Components</li>
					<li class="treeview">
						<a class="waves-effect waves-dark" href="#!">
							<i class="icon-briefcase"></i>
							<span> UI Elements</span>
							<i class="icon-arrow-down"></i>
						</a>
						<ul class="treeview-menu">
							<li>
								<a class="waves-effect waves-dark" href="accordion.html">
									<i class="icon-arrow-right"></i> Accordion
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="button.html">
									<i class="icon-arrow-right"></i> Button
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="label-badge.html">
									<i class="icon-arrow-right"></i> Label Badge
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="bootstrap-ui.html">
									<i class="icon-arrow-right"></i> Grid system
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="box-shadow.html">
									<i class="icon-arrow-right"></i> Box Shadow
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="color.html">
									<i class="icon-arrow-right"></i> Color
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="light-box.html">
									<i class="icon-arrow-right"></i> Light Box
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="notification.html">
									<i class="icon-arrow-right"></i> Notification
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="panels-wells.html">
									<i class="icon-arrow-right"></i> Panels-Wells
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="tabs.html">
									<i class="icon-arrow-right"></i> Tabs
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="tooltips.html">
									<i class="icon-arrow-right"></i> Tooltips
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="typography.html">
									<i class="icon-arrow-right"></i> Typography
								</a>
							</li>
						</ul>
					</li>
					<li class="treeview">
						<a class="waves-effect waves-dark" href="#!">
							<i class="icon-chart"></i>
							<span> Charts &amp; Maps</span>
							<span class="label label-success menu-caption">New</span>
							<i class="icon-arrow-down"></i>
						</a>
						<ul class="treeview-menu">
							<li>
								<a class="waves-effect waves-dark" href="float-chart.html">
									<i class="icon-arrow-right"></i> Float Charts
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="morris-chart.html">
									<i class="icon-arrow-right"></i> Morris Charts
								</a>
							</li>
						</ul>
					</li>
					<li class="treeview">
						<a class="waves-effect waves-dark" href="#!">
							<i class="icon-book-open"></i>
							<span> Forms</span>
							<i class="icon-arrow-down"></i>
						</a>
						<ul class="treeview-menu">
							<li>
								<a class="waves-effect waves-dark" href="form-elements-bootstrap.html">
									<i class="icon-arrow-right"></i> Form Elements Bootstrap
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="form-elements-materialize.html">
									<i class="icon-arrow-right"></i> Form Elements Material
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="form-elements-advance.html">
									<i class="icon-arrow-right"></i> Form Elements Advance
								</a>
							</li>
						</ul>
					</li>
					<li class="treeview">
						<a class="waves-effect waves-dark" href="basic-table.html">
							<i class="icon-list"></i>
							<span> Table</span>
						</a>
					</li>
					<li class="nav-level">More</li>
					<li class="treeview">
						<a class="waves-effect waves-dark" href="#!">
							<i class="icon-docs"></i>
							<span>Pages</span>
							<i class="icon-arrow-down"></i>
						</a>
						<ul class="treeview-menu">
							<li class="treeview">
								<a href="#!">
									<i class="icon-arrow-right"></i>
									<span> Authentication</span>
									<i class="icon-arrow-down"></i>
								</a>
								<ul class="treeview-menu">
									<li>
										<a class="waves-effect waves-dark" href="register1.html" target="_blank">
											<i class="icon-arrow-right"></i> Register 1
										</a>
									</li>
									<li>
										<a class="waves-effect waves-dark" href="login1.html" target="_blank">
											<i class="icon-arrow-right"></i><span> Login 1</span>
										</a>
									</li>
									<li>
										<a class="waves-effect waves-dark" href="forgot-password.html" target="_blank">
											<i class="icon-arrow-right"></i><span> Forgot Password</span>
										</a>
									</li>
									<li>
										<a class="waves-effect waves-dark" href="profile.html">
											<i class="icon-arrow-right"></i> Profile
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="lock-screen.html" target="_blank">
									<i class="icon-arrow-right"></i> Lock Screen
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="404.html" target="_blank">
									<i class="icon-arrow-right"></i> Error 404
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="sample-page.html">
									<i class="icon-arrow-right"></i> Sample Page
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="search-result.html">
									<i class="icon-arrow-right"></i> Search Result
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-level">Menu Level</li>
					<li class="treeview">
						<a class="waves-effect waves-dark" href="#!">
							<i class="icofont icofont-company"></i>
							<span>Menu Level 1</span>
							<i class="icon-arrow-down"></i>
						</a>
						<ul class="treeview-menu">
					<li>
						<a class="waves-effect waves-dark" href="#!">
							<i class="icon-arrow-right"></i>
							Level Two
						</a>
					</li>
					<li class="treeview">
					<a class="waves-effect waves-dark" href="#!">
					<i class="icon-arrow-right"></i>
					<span>Level Two</span>
					<i class="icon-arrow-down"></i>
					</a>
					<ul class="treeview-menu">
					<li>
					<a class="waves-effect waves-dark" href="#!">
					<i class="icon-arrow-right"></i>
					Level Three
					</a>
					</li>
					<li>
					<a class="waves-effect waves-dark" href="#!">
					<i class="icon-arrow-right"></i>
					<span>Level Three</span>
					<i class="icon-arrow-down"></i>
					</a>
					<ul class="treeview-menu">
					<li>
					<a class="waves-effect waves-dark" href="#!">
					<i class="icon-arrow-right"></i>
					Level Four
					</a>
					</li>
					<li>
					<a class="waves-effect waves-dark" href="#!">
					<i class="icon-arrow-right"></i>
					Level Four
					</a>
					</li>
					</ul>
					</li>
					</ul>
					</li>
					</ul>
					</li>
		</ul>
		</section>
		</aside>
	</div>

	<script src="assets/plugins/Jquery/dist/jquery.min.js"></script>
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/plugins/tether/dist/js/tether.min.js"></script>

	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<script src="assets/plugins/Waves/waves.min.js"></script>

	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

	<script src="assets/plugins/classie/classie.js"></script>

	<script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

	<script src="assets/plugins/d3/d3.js"></script>
	<script src="assets/plugins/rickshaw/rickshaw.js"></script>

	<script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

	<script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
	<script src="assets/plugins/countdown/js/jquery.counterup.js"></script>

	<script type="text/javascript" src="assets/js/main.min.js"></script>
	<script type="text/javascript" src="assets/pages/dashboard.js"></script>
	<script type="text/javascript" src="assets/pages/elements.js"></script>
	<script src="assets/js/menu.min.js"></script>
</body>
</html>