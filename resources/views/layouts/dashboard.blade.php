
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Niang&Famille</title>

		<!-- Site favicon -->
		
		<link
			rel="icon"
			type="image/png"
			href="assets/img/logo.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="backend/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="backend/vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="backend/src/plugins/datatables/css/dataTables.bootstrap4.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="backend/src/plugins/datatables/css/responsive.bootstrap4.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="backend/vendors/styles/style.css" />
        @livewireStyles
	</head>
	<body>
		<div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="assets/img/logo.png" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Chargement...</div>
			</div>
		</div>

		

		@include('themes.header')
		

		@include('themes.right-sidebar')
		@include('themes.left-sidebar')
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
                {{$slot}}

				<div class="footer-wrap pd-20 mb-20 card-box">
					Tableau de Bord Niang&Famille
					<a href="https://github.com/NiangPro" target="_blank"
						>NiangProgrammeur</a
					>
				</div>
			</div>
		</div>
		<!-- js -->
		<script src="backend/vendors/scripts/core.js"></script>
		<script src="backend/vendors/scripts/script.min.js"></script>
		<script src="backend/vendors/scripts/process.js"></script>
		<script src="backend/vendors/scripts/layout-settings.js"></script>
		<script src="backend/src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="backend/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="backend/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="backend/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="backend/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="backend/vendors/scripts/dashboard3.js"></script>
		
        @livewireScripts
	</body>
</html>
