<!--
    @Dashboard
-->

<!-- breadcrumbs -->
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="breadcrumbs">
		<ul>
			<li><a href="dashboard">Home</a></li> /
			<li class="current"><a href="#">Dashboard</a></li>
		</ul>
	</div>
</div>
<!-- breadcrumbs -->
<!-- content-->
<div id="top-dashboard" class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="row">

		<div class="section-1 col-12 col-sm-12 col-md-12 col-lg-12">
			<div class="row">
				<?php for ($i = 0; $i < 4; $i++) { ?>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3">
						<div class="card-dummy">

						</div>
					</div>
				<?php } ?>
			</div>
		</div>

		<div class="section-2 my-info col-12 col-sm-12 col-md-6 col-lg-8">
			<div class="section-2-content flat-card">

			</div>
		</div>

		<!--Sidebar-->
		<style>
			li.nth-child-selector:nth-child(1) {
				color: #3c763d;
				background-color: #dff0d8;
				border-color: #d6e9c6
			}

			li.nth-child-selector:nth-child(2) {
				color: #8a6d3b;
				background-color: #fcf8e3;
				border-color: #faebcc
			}

			li.nth-child-selector:nth-child(3) {
				color: #a94442;
				background-color: #f2dede;
				border-color: #ebccd1
			}

			li.nth-child-selector {
				border-radius: 11px
			}

			.notice-board .notice-board-list {
				padding: 0 8px;
				margin: 0;
				list-style: none
			}

			.notice-board {
				max-height: 385px
			}

			.notice-board .notice-board-list>li .notice-list-item {
				border-bottom: unset;
				padding: 14px
			}
		</style>
		<div class="section-3 my-notice col-12 col-sm-12 col-md-6 col-lg-4">
			<div class="flat-card">
				<div class="flat-card-header" data-toggle="collapse" data-target="#SidebarBody">
					<h4 class="flat-card-title">My Notice</h4>
				</div>
				<div id="SidebarBody" class="flat-card-body collapse show">
					<div class="notice-board">
						<ul class="notice-board-list">
							<li class="nth-child-selector">
								<div class="notice-list-item">
									<div class="notice-list-header">
										<span class="notice-list-date">08 Jul 2019</span>
										<span class="notice-list-arrive">5 min ago</span>
									</div>
									<h5 class="notice-list-title">Notice Title Here</h5>
									<p class="notice-list-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae erat a nisl venenatis pellentesque.</p>
								</div>
							</li>
							<?php for ($i = 0; $i < 2; $i++) { ?>
								<li class="nth-child-selector">
									<div class="notice-list-item">
										<div class="notice-list-header">
											<span class="notice-list-date">08 Jul 2019</span>
											<span class="notice-list-arrive">5 min ago</span>
										</div>
										<h5 class="notice-list-title">Notice Title Here</h5>
										<p class="notice-list-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae erat a nisl venenatis pellentesque.</p>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
<!-- content -->

<!-- <script src="assets/js/anime-list.js"></script> -->