<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../../../../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="../../../../global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="../../../../global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="../../../../global_assets/js/plugins/pickers/daterangepicker.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/dashboard.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="../../../../global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>
										
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Victoria</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Victoria Baker</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">
						
				<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
									<span class="d-block font-weight-normal opacity-50">No active orders</span>
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="form_materias.php" class="nav-link">
								<i class="icon-file-upload"></i>
								<span>
									Registro de materias
									<span class="d-block font-weight-normal opacity-50">No active orders</span>
								</span>
							</a>
						</li>
						<!-- /main -->

						<!-- Forms -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Formularios</div> <i class="icon-menu" title="Forms"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-pencil5"></i> <span>Formulario de ingreso</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form components">
								<li class="nav-item"><a href="form_wizard.php" class="nav-link">Formulario para alumnos</a></li>
								<li class="nav-item"><a href="form_maestros.php" class="nav-link">Formulario  para maestros</a></li>
								<li class="nav-item"><a href="form_camion.php" class="nav-link">Formulario para pago de camion</a></li>
								<li class="nav-item"><a href="form_grupos.php" class="nav-link">Formulario para creacion de grupos</a></li>
							</ul>
						</li>
						
						<!-- /forms -->

						<!-- Tables -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Tablas de datos</div> <i class="icon-menu" title="Forms"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-magazine"></i> <span>Tablas</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form components">
								<li class="nav-item"><a href="datatable_basic.php" class="nav-link">Tabla de información de alumnos</a></li>
								<li class="nav-item"><a href="datatable_maestros.php" class="nav-link">Tabla de información de maestros</a></li>
							</ul>
						</li>

						
						<!-- /tables -->

						
						<!-- /tables -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Bienvenidos</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Inicio</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->

		<!-- /main content -->
<div class ="row">
	<div class= "col-md-6 col-xl-3">

	<!-- User details (with sample pattern) -->
						<div class="card">
							<div class="card-body bg-blue text-center card-img-top" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
								<div class="card-img-actions d-inline-block mb-3">
									<img class="img-fluid rounded-circle" src="../../../../global_assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
									<div class="card-img-actions-overlay card-img rounded-circle">
										<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
											<i class="icon-plus3"></i>
										</a>
										<a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>

								<h6 class="font-weight-semibold mb-0">Victoria Davidson</h6>
								<span class="d-block opacity-75">Head of UX</span>

								<ul class="list-inline list-inline-condensed mt-3 mb-0">
									<li class="list-inline-item">
										<a href="#" class="btn btn-outline bg-white btn-icon text-white border-white border-2 rounded-round">
											<i class="icon-google-drive"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="#" class="btn btn-outline bg-white btn-icon text-white border-white border-2 rounded-round">
											<i class="icon-twitter"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="#" class="btn btn-outline bg-white btn-icon text-white border-white border-2 rounded-round">
											<i class="icon-github"></i>
										</a>
									</li>
								</ul>
							</div>

							<div class="card-body border-top-0">
								<div class="d-sm-flex flex-sm-wrap mb-3">
									<div class="font-weight-semibold">Nombre:</div>
									<div class="ml-sm-auto mt-2 mt-sm-0">Victoria Anna Davidson</div>
								</div>

								<div class="d-sm-flex flex-sm-wrap mb-3">
									<div class="font-weight-semibold">Telefono:</div>
									<div class="ml-sm-auto mt-2 mt-sm-0">+3630 8911837</div>
								</div>

								<div class="d-sm-flex flex-sm-wrap mb-3">
									<div class="font-weight-semibold">Email:</div>
									<div class="ml-sm-auto mt-2 mt-sm-0"><a href="#">corporate@domain.com</a></div>
								</div>
							</div>
						</div>
						<!-- /user details (with sample pattern) -->

<!-- Messages widget -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Messages</h6>

								<div class="header-elements">
									<a href="#" class="text-default"><i class="icon-cog3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3 position-relative">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" jeight="36" alt="">
											<span class="badge bg-danger-400 badge-pill badge-float border-2 border-white">5</span>
										</div>

										<div class="media-body">
											<div class="d-flex justify-content-between">
												<div class="media-title"><a href="#">James Alexander</a></div>
												<span class="font-size-sm text-muted">14:58</span>
											</div>

											Who knows, maybe that would be the best thing for me...
										</div>
									</li>

									<li class="media">
										<div class="mr-3 position-relative">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" jeight="36" alt="">
											<span class="badge bg-danger-400 badge-pill badge-float border-2 border-white">4</span>
										</div>

										<div class="media-body">
											<div class="d-flex justify-content-between">
												<div class="media-title"><a href="#">Margo Baker</a></div>
												<span class="font-size-sm text-muted">12:16</span>
											</div>

											That was something he was unable to do because...
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" jeight="36" alt="">
										</div>

										<div class="media-body">
											<div class="d-flex justify-content-between">
												<div class="media-title"><a href="#">Jeremy Victorino</a></div>
												<span class="font-size-sm text-muted">22:48</span>
											</div>

											But that would be extremely strained and suspicious...
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" jeight="36" alt="">
										</div>

										<div class="media-body">
											<div class="d-flex justify-content-between">
												<div class="media-title"><a href="#">Beatrix Diaz</a></div>
												<span class="font-size-sm text-muted">Tue</span>
											</div>

											What a strenuous career it is that I've chosen...
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- /messages widget -->
						<div class="card">
						</div>
						<!-- Widget with rounded icon -->
						<div class="card">
							<div class="card-body text-center">
							<i class="icon-book icon-2x text-success-400 border-success-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="card-title">Knowledge Base</h5>
								<p class="mb-3">Ouch found swore much dear conductively hid submissively hatchet vexed far</p>
								<a href="#" class="btn bg-success-400">Browse articles</a>
							</div>
						</div>
						<!-- /widget with rounded icon -->
</div>
	
	<div clas="col-md-6 col-x1-3">
		<!-- List of latest updates -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Latest updates</h6>

								<div class="header-elements">
									<a href="#">All updates</a>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon">
												<i class="icon-spinner11"></i>
											</a>
										</div>

										<div class="media-body">
											<a href="#">David Linner</a> requested refund for a double card charge
											<div class="text-muted font-size-sm">12 minutes ago</div>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-danger text-danger rounded-round border-2 btn-icon">
												<i class="icon-infinite"></i>
											</a>
										</div>
										
										<div class="media-body">
											User <a href="#">Christopher Wallace</a> is awaiting for staff reply
											<div class="text-muted font-size-sm">16 minutes ago</div>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-slate text-slate rounded-round border-2 btn-icon">
												<i class="icon-cash3"></i>
											</a>
										</div>

										<div class="media-body">
											All sellers have received monthly payouts
											<div class="text-muted font-size-sm">4 hours ago</div>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon">
												<i class="icon-checkmark3"></i>
											</a>
										</div>
										
										<div class="media-body">
											Ticket #43683 has been closed by <a href="#">Victoria Wilson</a>
											<div class="text-muted font-size-sm">Apr 28, 21:39</div>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
												<i class="icon-comment"></i>
											</a>
										</div>
										
										<div class="media-body">
											<a href="#">Beatrix Diaz</a> left a new feedback for Camo backpack
											<div class="text-muted font-size-sm">Mar 30, 05:46</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- /list of latest updates -->
						<!-- Seamless button group -->
						<div class="mb-3">
							<div class="row row-tile no-gutters">
								<div class="col-6">
									<button type="button" class="btn btn-light btn-block btn-float m-0">
										<i class="icon-github4 icon-2x"></i>
										<span>Github</span>
									</button>

									<button type="button" class="btn btn-light btn-block btn-float m-0">
										<i class="icon-dropbox text-blue-400 icon-2x"></i>
										<span>Dropbox</span>
									</button>
								</div>
								
								<div class="col-6">
									<button type="button" class="btn btn-light btn-block btn-float m-0">
										<i class="icon-dribbble3 text-pink-400 icon-2x"></i>
										<span>Dribbble</span>
									</button>

									<button type="button" class="btn btn-light btn-block btn-float m-0">
										<i class="icon-google-drive text-success-400 icon-2x"></i>
										<span>Google Drive</span>
									</button>
								</div>
							</div>
						</div>
						<!-- /seamless button group -->
	</div>


	<div clas="col-md-6 col-x1-3">

						<!-- List of files -->
						<div class="card">
							<div class="card-header bg-transparent header-elements-inline">
								<h6 class="card-title font-weight-semibold">
									<i class="icon-folder6 mr-2"></i>
									Downloaded files
								</h6>

								<div class="header-elements">
									<span class="text-muted">(93)</span>
								</div>
							</div>

							<div class="list-group list-group-flush">
								<a href="#" class="list-group-item list-group-item-action">
									<i class="icon-file-pdf mr-3"></i>
									Logica de la programacion.pdf <span class="badge bg-success-400 ml-auto">New</span>
								</a>

								<a href="#" class="list-group-item list-group-item-action">
									<i class="icon-file-word mr-3"></i>
									Introduccion a la progrmacion.docx
								</a>

								<a href="#" class="list-group-item list-group-item-action">
									<i class="icon-file-excel mr-3"></i>
									Base de datos.csv
									<span class="badge bg-slate ml-auto">Draft</span>
								</a>

								<a href="#" class="list-group-item list-group-item-action">
									<i class="icon-file-word mr-3"></i>
									Bases de la progrmacion.docx
								</a>

								<a href="#" class="list-group-item list-group-item-action">
									<i class="icon-arrow-right22 mr-3"></i>
									Show all files (93)
								</a>
							</div>
						</div>
						<!-- /list of files -->
	</div>

	
</div>

	<!-- /page content -->

</body>
</html>
