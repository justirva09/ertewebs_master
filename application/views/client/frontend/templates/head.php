<!DOCTYPE html>
<html>
<!-- head -->
<head>
	<title><?= $page_title ?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/client.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/fontawesome/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato" />
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
	
	<!--script -->
	<script type="text/javascript" src="<?= base_url()?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- script -->
</head>
<!-- head -->
<body>
<header id="header">
	<div class="header-container container-fluid">
		<div class="header-row row">
			<div class="header-left col-12 col-sm-12 col-md-3 col-lg-3">
				<div class="header-brand">
					<a href="<?= base_url() ?>">
						<h1 class="header-site-title">Website RT.10</h1>
					</a>
				</div>
				<span class="nav-toggle">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</div>
			<div class="header-right col-12 col-sm-12 col-md-9 col-lg-9">
				<nav class="header-nav">
					<ul class="navigasi">
						<li class=""><a href="<?= base_url() ?>">Home</a></li>
						<li class=""><a href="<?= base_url() ?>galeri">Galeri</a></li>
						<li class=""><a href="<?= base_url() ?>artikel">Blog</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>