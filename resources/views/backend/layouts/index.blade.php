<!DOCTYPE html>
<html lang="en">
	<head><base href=""/>
		<title>SNS - Report</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{ asset('metronic/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('/metronic/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!-- <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" /> -->
	</head>
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed">
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<div class="d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<div id="kt_header" class="header">
						<div class="container-fluid d-flex flex-stack">
							<div class="d-flex align-items-center me-5">
								<div class="d-lg-none btn btn-icon btn-active-color-white w-30px h-30px ms-n2 me-3" id="kt_aside_toggle">
									<i class="ki-duotone ki-abstract-14 fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
								<a href="{{ route('dashboard') }}">
									<img src="{{ asset('assets/logo.png') }}" style="width: 100px;" alt="">
								</a>
							</div>
							<div class="d-flex align-items-center flex-shrink-0">
								<div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
									<div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
											<span class="text-white fs-8 fw-bold ">{{ auth()->user()->name }}</span>
										</div>
									</div>
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5">
													<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">{{ auth()->user()->name }}</span></div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ auth()->user()->username }}</a>
												</div>
											</div>
										</div>
										<div class="separator my-2"></div>
										<div class="menu-item px-5">
                                            <form action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-color-gray-500 btn-active-color-gray-900 text-nowrap w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" >
                                                    <span class="btn-danger btn">Logout</span>
                                                </button>
                                            </form>
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex flex-column-fluid">
						<div id="kt_aside" class="aside card" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
							@include('backend.layouts.sidebar')
						</div>
						<div class="d-flex flex-column flex-column-fluid container-fluid">
							<div class="content flex-column-fluid" id="kt_content">
								@yield('content')
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<script>var hostUrl = "assets/";</script>
		<script src="{{ asset('metronic/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('metronic/js/scripts.bundle.js') }}"></script>
		<script src="{{ asset('metronic/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="{{ asset('metronic/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<script src="{{ asset('metronic/js/widgets.bundle.js') }}"></script>
		<script src="{{ asset('metronic/js/custom/widgets.js') }}"></script>
		<script src="{{ asset('metronic/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('metronic/js/custom/utilities/modals/create-app.js') }}"></script>
		<script src="{{ asset('metronic/js/custom/utilities/modals/create-campaign.js') }}"></script>
		<script src="{{ asset('metronic/js/custom/utilities/modals/users-search.js') }}"></script>
	</body>
</html>