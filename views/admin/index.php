<!-----------------------------------------------------------------------------------
    Item Name: Carrot - Multipurpose eCommerce HTML Template.
    Author: ashishmaraviya
    Version: 2.1
    Copyright 2024
----------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:02 GMT -->
<head>
    <?php include_once "views/admin/layout/linkCss.php" ?>
</head>

<body>
	<main class="wrapper sb-default ecom">
		<!-- Loader -->
		<div id="cr-overlay">
			<div class="loader"></div>
		</div>

		<!-- Header -->
        <header class="cr-header">
            <?php include_once "views/admin/layout/header.php" ?>
        </header>

		<!-- sidebar -->
		<div class="cr-sidebar-overlay"></div>
		<div class="cr-sidebar" data-mode="light">
			<div class="cr-sb-logo">
				<a href="index.html" class="sb-full"><img src="assets/img/logo/full-logo.png" alt="logo"></a>
				<a href="index.html" class="sb-collapse"><img src="assets/img/logo/collapse-logo.png" alt="logo"></a>
			</div>
			<div class="cr-sb-wrapper">
				<div class="cr-sb-content">
					<ul class="cr-sb-list">
						<li class="cr-sb-item sb-drop-item">
							<a href="javascript:void(0)" class="cr-drop-toggle">
								<i class="ri-dashboard-3-line"></i><span class="condense">Bảng điều khiển<i
										class="drop-arrow ri-arrow-down-s-line"></i></span></a>
							<ul class="cr-sb-drop condense">
								<li><a href="index.html" class="cr-page-link drop"><i
									class="ri-checkbox-blank-circle-line"></i>ecommerce</a></li>
								<li><a href="product-list.html" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Danh sách sản phẩm</a></li>
								<li><a href="add-product.html" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Thêm mới sản phẩm</a></li>
								<li><a href="add-category.html" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Add Category</a></li>
								<li><a href="add-sub-category.html" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Add Sub Category</a></li>
								<li><a href="order-list.html" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Order List</a></li>
								<li class="cr-sb-item sb-subdrop-item">
									<a href="javascript:void(0)" class="cr-sub-drop-toggle">
										<i class="ri-shield-user-line"></i><span class="condense">Vendor<i
												class="drop-arrow ri-arrow-down-s-line"></i></span></a>
									<ul class="cr-sb-subdrop condense">
										<li><a href="vendor-profile.html" class="cr-page-link subdrop"><i
													class="ri-checkbox-blank-circle-line"></i>Profile</a></li>
										<li><a href="vendor-update.html" class="cr-page-link subdrop"><i
													class="ri-checkbox-blank-circle-line"></i>Vendor Update</a></li>
										<li><a href="vendor-list.html" class="cr-page-link subdrop"><i
													class="ri-checkbox-blank-circle-line"></i>Vendor List</a></li>
										<li><a href="invoice.html" class="cr-page-link subdrop"><i
													class="ri-checkbox-blank-circle-line"></i>Invoice</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="cr-sb-item-separator"></li>
						<li class="cr-sb-title condense">Pages</li>
						<li class="cr-sb-item sb-drop-item">
							<a href="javascript:void(0)" class="cr-drop-toggle">
								<i class="ri-pages-line"></i><span class="condense">Authentication<i
										class="drop-arrow ri-arrow-down-s-line"></i></span></a>
							<ul class="cr-sb-drop condense">
								<li><a href="signin.html" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i></i>Login</a></li>
								<li><a href="signup.html" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Signup</a></li>
								<li><a href="forgot.html" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Forgot password</a></li>
								<li><a href="two-factor.html" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>two factor</a></li>
								<li><a href="reset-password.html" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Reset password</a></li>
								<li><a href="remember.html" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>Remember</a></li>
							</ul>
						</li>
						<li class="cr-sb-item-separator"></li>
						<li class="cr-sb-title condense">Elements</li>
						<li class="cr-sb-item">
							<a href="remix-icons.html" class="cr-page-link">
								<i class="ri-remixicon-line"></i><span class="condense"><span class="hover-title">remix
										icons</span></span></a>
						</li>
						<li class="cr-sb-item">
							<a href="material-icons.html" class="cr-page-link">
								<i class="mdi mdi-material-ui"></i><span class="condense"><span
										class="hover-title">Material icons</span></span></a>
						</li>
						<li class="cr-sb-item">
							<a href="apexchart.html" class="cr-page-link">
								<i class="ri-bar-chart-grouped-line"></i><span class="condense"><span
										class="hover-title">Apexcharts</span></span></a>
						</li>
						<li class="cr-sb-item">
							<a href="buttons.html" class="cr-page-link">
								<i class="ri-radio-button-line"></i><span class="condense"><span
										class="hover-title">Buttons</span></span></a>
						</li>
						<li class="cr-sb-item">
							<a href="accordions.html" class="cr-page-link">
								<i class="ri-play-list-add-line"></i><span class="condense"><span
										class="hover-title">Accordions</span></span></a>
						</li>
						<li class="cr-sb-item">
							<a href="typography.html" class="cr-page-link">
								<i class="ri-file-text-line"></i><span class="condense"><span
										class="hover-title">Typography</span></span></a>
						</li>
						<li class="cr-sb-item">
							<a href="alert-popup.html" class="cr-page-link">
								<i class="ri-file-warning-line"></i><span class="condense"><span
										class="hover-title">Alert Popup</span></span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Notify sidebar -->
		<div class="cr-notify-bar-overlay"></div>
		<div class="cr-notify-bar">
			<div class="cr-bar-title">
				<h6>Notifications<span class="label">12</span></h6>
				<a href="javascript:void(0)" class="close-notify"><i class="ri-close-line"></i></a>
			</div>
			<div class="cr-bar-content">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="alert-tab" data-bs-toggle="tab" data-bs-target="#alert"
							type="button" role="tab" aria-controls="alert" aria-selected="true">Alert</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
							type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log" type="button"
							role="tab" aria-controls="log" aria-selected="false">Log</button>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="alert" role="tabpanel" aria-labelledby="alert-tab">
						<div class="cr-alert-list">
							<ul>
								<li>
									<div class="icon cr-alert">
										<i class="ri-alarm-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your final report is overdue</div>
										<p class="time">Just now</p>
										<p class="message">Please submit your quarterly report before - June 15.</p>
									</div>
								</li>
								<li>
									<div class="icon cr-warn">
										<i class="ri-error-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your product campaign is stop!</div>
										<p class="time">5:45AM - 25/05/2023</p>
										<p class="message">Please submit your quarterly report before Jun 15.</p>
									</div>
								</li>
								<li>
									<div class="icon cr-success">
										<i class="ri-check-double-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your payment is successfully processed</div>
										<p class="time">9:20PM - 19/06/2023</p>
										<p class="message">Check your account wallet. if there is any issue, create
											support ticket.</p>
									</div>
								</li>
								<li>
									<div class="icon cr-warn">
										<i class="ri-error-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">Budget threshold exceeded!</div>
										<p class="time">4:15AM - 01/04/2023</p>
										<p class="message">Budget threshold was exceeded for project "Carrot" B612
											elements.</p>
									</div>
								</li>
								<li>
									<div class="icon cr-warn">
										<i class="ri-close-line"></i>
									</div>
									<div class="detail">
										<div class="title">Project submission was decline!</div>
										<p class="time">4:15AM - 01/04/2023</p>
										<p class="message">Your project "B126" is declined by Theresa Mayeras.</p>
									</div>
								</li>
								<li>
									<div class="icon cr-success">
										<i class="ri-check-double-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your payment is successfully processed</div>
										<p class="time">9:20PM - 19/06/2023</p>
										<p class="message">Check your account wallet. if there is any issue, create
											support ticket.</p>
									</div>
								</li>
								<li class="check"><a class="cr-primary-btn" href="chatapp.html">View all</a></li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
						<div class="cr-message-list">
							<ul>
								<li>
									<a href="chatapp.html" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/9.jpg" alt="user">
										<span class="label online"></span>
									</div>
									<div class="detail">
										<a href="chatapp.html" class="name">Boris Whisli</a>
										<p class="time">5:30AM, Today</p>
										<p class="message">Hello, I am sending some file. Please use this in landing
											page. And make sure this all files are comppress.</p>
										<span class="download-files">
											<span class="download">
												<img src="assets/img/other/1.jpg" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<img src="assets/img/other/2.jpg" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<span class="file">
													<i class="ri-file-ppt-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
										</span>
									</div>
								</li>
								<li>
									<a href="chatapp.html" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/8.jpg" alt="user">
										<span class="label offline"></span>
									</div>
									<div class="detail">
										<a href="chatapp.html" class="name">Frank N. Stein</a>
										<p class="time">8:30PM, 05/12/2023</p>
										<p class="message">Please take a look on landing page. There is some bus to open
											popup model. and save form data.</p>
									</div>
								</li>
								<li>
									<a href="chatapp.html" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/7.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="chatapp.html" class="name">Frank N. Stein</a>
										<p class="time">8:30PM, 05/12/2023</p>
										<p class="message">Please take a look on landing page. There is some bus to open
											popup model. and save form data.</p>
										<span class="download-files">
											<span class="download">
												<span class="file">
													<i class="ri-file-zip-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<span class="file">
													<i class="ri-file-text-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<span class="file">
													<i class="ri-file-ppt-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
										</span>
									</div>
								</li>
								<li>
									<a href="chatapp.html" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/6.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="chatapp.html" class="name">Paige Turner</a>
										<p class="time">4:30PM, 12/12/2023</p>
										<p class="message">Landing page issues are done. and now i am working on admin
											user module.</p>
									</div>
								</li>
								<li>
									<a href="chatapp.html" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/5.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="chatapp.html" class="name">Allie Grater</a>
										<p class="time">8:30PM, 05/12/2023</p>
										<p class="message">Take marketing module task.</p>
									</div>
								</li>
								<li class="check"><a class="cr-primary-btn" href="chatapp.html">View all</a></li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="log" role="tabpanel" aria-labelledby="log-tab">
						<div class="cr-activity-list activity-list">
							<ul>
								<li>
									<span class="date-time">8 Thu<span class="time">11:30 AM - 05:10 PM
										</span></span>
									<p class="title">Project Submitted from Smith</p>
									<p class="detail">Lorem Ipsum is simply dummy text of the printing and
										lorem is typesetting industry.</p>
									<span class="download-files">
										<span class="download">
											<img src="assets/img/other/1.jpg" alt="image">
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<img src="assets/img/other/2.jpg" alt="image">
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-ppt-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
									</span>
								</li>
								<li>
									<span class="date-time warn">7 Wed<span class="time">1:30 PM - 02:30 PM
										</span></span>
									<p class="title">Morgus pvt - project due</p>
									<p class="detail">Project modul delay for some bugs.</p>
									<span class="download-files">
										<span class="download">
											<span class="file">
												<i class="ri-file-zip-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-text-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<img src="assets/img/other/3.jpg" alt="image">
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
									</span>
								</li>
								<li>
									<span class="date-time">6 Tue<span class="time">9:30 AM - 11:00 AM
										</span></span>
									<p class="title">Interview for management dept.</p>
									<p class="detail">There are many variations of passages of Lorem Ipsum
										available, but the majority have suffered alteration in some form,
										by injected humour.</p>
									<span class="download-files">
										<span class="download">
											<span class="file">
												<i class="ri-file-zip-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-text-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-ppt-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
									</span>
								</li>
								<li>
									<span class="date-time">5 Mon<span class="time">3:30 AM - 4:00 PM
										</span></span>
									<p class="title">Meeting with mr. Ken doe</p>
									<p class="detail">The majority have suffered alteration in some form,
										by injected humour.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<div class="cr-main-content">
			<div class="container-fluid">
				<!-- Page title & breadcrumb -->
				<div class="cr-page-title">
					<div class="cr-breadcrumb">
						<h5>eCommerce</h5>
						<ul>
							<li><a href="index.html">Carrot</a></li>
							<li>eCommerce</li>
						</ul>
					</div>
					<div class="cr-tools">
						<div id="pagedate">
							<div class="cr-date-range" title="Date">
								<span></span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-3 col-md-6">
								<div class="cr-card">
									<div class="cr-card-content label-card">
										<div class="title">
											<span class="icon icon-1"><i class="ri-shield-user-line"></i></span>
											<div class="growth-numbers">
												<h4>Customers</h4>
												<h5>857k</h5>
											</div>
										</div>
										<p class="card-groth up">
											<i class="ri-arrow-up-line"></i>
											32%
											<span>Last Month</span>
										</p>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="cr-card">
									<div class="cr-card-content label-card">
										<div class="title">
											<span class="icon icon-2"><i class="ri-shopping-bag-3-line"></i></span>
											<div class="growth-numbers">
												<h4>Order</h4>
												<h5>08.65k</h5>
											</div>
										</div>
										<p class="card-groth down">
											<i class="ri-arrow-down-line"></i>
											1.7%
											<span>Last Month</span>
										</p>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="cr-card">
									<div class="cr-card-content label-card">
										<div class="title">
											<span class="icon icon-3"><i class="ri-money-dollar-circle-line"></i></span>
											<div class="growth-numbers">
												<h4>Revenue</h4>
												<h5>$85746</h5>
											</div>
										</div>
										<p class="card-groth down">
											<i class="ri-arrow-down-line"></i>
											3.8%
											<span>Last Month</span>
										</p>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="cr-card">
									<div class="cr-card-content label-card">
										<div class="title">
											<span class="icon icon-4"><i class="ri-exchange-dollar-line"></i></span>
											<div class="growth-numbers">
												<h4>Expenses</h4>
												<h5>$75462</h5>
											</div>
										</div>
										<p class="card-groth up">
											<i class="ri-arrow-up-line"></i>
											8%
											<span>Last Month</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xxl-8 col-xl-12">
						<div class="cr-card revenue-overview">
							<div class="cr-card-header header-575">
								<h4 class="cr-card-title">Revenue Overview</h4>
								<div class="header-tools">
									<a href="javascript:void(0)" class="m-r-10 cr-full-card" title="Full Screen"><i
											class="ri-fullscreen-line"></i></a>
									<div class="cr-date-range date">
										<span></span>
									</div>
								</div>
							</div>
							<div class="cr-card-content">
								<div class="cr-chart-header">
									<div class="block">
										<h6>Orders</h6>
										<h5>825
											<span class="up"><i class="ri-arrow-up-line"></i>24%</span>
										</h5>
									</div>
									<div class="block">
										<h6>Revenue</h6>
										<h5>$89k
											<span class="up"><i class="ri-arrow-up-line"></i>24%</span>
										</h5>
									</div>
									<div class="block">
										<h6>Expence</h6>
										<h5>$68k
											<span class="down"><i class="ri-arrow-down-line"></i>24%</span>
										</h5>
									</div>
									<div class="block">
										<h6>Profit</h6>
										<h5>$21k
											<span class="up"><i class="ri-arrow-up-line"></i>24%</span>
										</h5>
									</div>
								</div>
								<div class="cr-chart-content">
									<div id="newrevenueChart" class="mb-m-24"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-4 col-xl-6 col-md-12">
						<div class="cr-card" id="campaigns">
							<div class="cr-card-header">
								<h4 class="cr-card-title">Campaigns</h4>
								<div class="header-tools">
									<div class="cr-date-range dots">
										<span></span>
									</div>
								</div>
							</div>
							<div class="cr-card-content">
								<div class="cr-chart-content">
									<div id="newcampaignsChart"></div>
								</div>
								<div class="cr-chart-header-2">
									<div class="block">
										<h6>Social</h6>
										<h5><span class="up">94%<i class="ri-arrow-up-line"></i></span>75k</h5>
									</div>
									<div class="block">
										<h6>Referral</h6>
										<h5><span class="down">96%<i class="ri-arrow-down-line"></i></span>54k</h5>
									</div>
									<div class="block">
										<h6>Organic</h6>
										<h5><span class="up">72%<i class="ri-arrow-up-line"></i></span>2.5k</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xxl-6 col-xl-12">
						<div class="cr-card" id="best_seller_tbl">
							<div class="cr-card-header">
								<h4 class="cr-card-title">Best Seller</h4>
								<div class="header-tools">
									<a href="javascript:void(0)" class="m-r-10 cr-full-card" title="Full Screen"><i
											class="ri-fullscreen-line"></i></a>
									<div class="cr-date-range dots">
										<span></span>
									</div>
								</div>
							</div>
							<div class="cr-card-content card-default">
								<div class="best-seller-table">
									<div class="table-responsive">
										<table id="best_seller_data_table" class="table">
											<thead>
												<tr>
													<th>Vendor</th>
													<th>Category</th>
													<th>Stock</th>
													<th>Sales</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img class="cat-thumb" src="assets/img/clients/1.jpg"
															alt="clients Image"><span class="name">DS Fashion</span>
													</td>
													<td>
														<span class="cat">
															<a href="product-list.html">Watches</a>
															<a href="product-list.html">Clothes</a>
															<a href="product-list.html">Phones</a>
														</span>
													</td>
													<td>685</td>
													<td>$1254</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/clients/2.jpg"
															alt="clients Image"><span class="name">Loka Creation</span>
													</td>
													<td>
														<span class="cat">
															<a href="product-list.html">Phone</a>
															<a href="product-list.html">Camera</a>
															<a href="product-list.html">Clothes</a>
															<a href="product-list.html">Phones</a>
														</span>
													</td>
													<td>874</td>
													<td>$1768</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/clients/3.jpg"
															alt="clients Image"><span class="name">Vorna Arts</span>
													</td>
													<td>
														<span class="cat">
															<a href="product-list.html">Laptop</a>
															<a href="product-list.html">Furniture</a>
															<a href="product-list.html">Phones</a>
														</span>
													</td>
													<td>95</td>
													<td>$2296</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/clients/4.jpg"
															alt="clients Image"><span class="name">Lestie Shop</span>
													</td>
													<td>
														<span class="cat">
															<a href="product-list.html">Clothes</a>
															<a href="product-list.html">Phones</a>
														</span>
													</td>
													<td>354</td>
													<td>$2754</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/clients/5.jpg"
															alt="clients Image"><span class="name">Moris Gallery</span>
													</td>
													<td>
														<span class="cat">
															<a href="product-list.html">Tools</a>
															<a href="product-list.html">Clothes</a>
															<a href="product-list.html">Bags</a>
														</span>
													</td>
													<td>675</td>
													<td>$3105</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/clients/6.jpg"
															alt="clients Image"><span class="name">Jens Fashion.</span>
													</td>
													<td>
														<span class="cat">
															<a href="product-list.html">Shoes</a>
															<a href="product-list.html">Clothes</a>
															<a href="product-list.html">Jewellery</a>
														</span>
													</td>
													<td>854</td>
													<td>$3854</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-6 col-xl-12">
						<div class="cr-card" id="top_product_tbl">
							<div class="cr-card-header">
								<h4 class="cr-card-title">Top Product</h4>
								<div class="header-tools">
									<a href="javascript:void(0)" class="m-r-10 cr-full-card" title="Full Screen"><i
											class="ri-fullscreen-line"></i></a>
									<div class="cr-date-range dots">
										<span></span>
									</div>
								</div>
							</div>
							<div class="cr-card-content card-default">
								<div class="top-product-table">
									<div class="table-responsive">
										<table id="top_product_data_table" class="table">
											<thead>
												<tr>
													<th>Product</th>
													<th>Price</th>
													<th>Orders</th>
													<th>Stock</th>
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img class="cat-thumb" src="assets/img/product/1.jpg"
															alt="clients Image"><span class="name">Mens t-shirt</span>
													</td>
													<td>$16</td>
													<td>162</td>
													<td>456</td>
													<td>$3524</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/product/2.jpg"
															alt="clients Image"><span class="name">Sofa chair</span>
													</td>
													<td>$52</td>
													<td>178</td>
													<td>958</td>
													<td>$8654</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/product/3.jpg"
															alt="clients Image"><span class="name">Night Lamp</span>
													</td>
													<td>$70</td>
													<td>198</td>
													<td>1524</td>
													<td>$1152</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/product/4.jpg"
															alt="clients Image"><span class="name">Mens hoodie</span>
													</td>
													<td>$16</td>
													<td>205</td>
													<td>253</td>
													<td>$5645</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/product/5.jpg"
															alt="clients Image"><span class="name">Digital Watch</span>
													</td>
													<td>$559</td>
													<td>209</td>
													<td>456</td>
													<td>$20546</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/product/6.jpg"
															alt="clients Image"><span class="name">DSLR Camera.</span>
													</td>
													<td>$1546</td>
													<td>212</td>
													<td>98</td>
													<td>$33500</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xxl-8 col-xl-12">
						<div class="cr-card" id="ordertbl">
							<div class="cr-card-header">
								<h4 class="cr-card-title">Recent Orders</h4>
								<div class="header-tools">
									<a href="javascript:void(0)" class="m-r-10 cr-full-card" title="Full Screen"><i
											class="ri-fullscreen-line"></i></a>
									<div class="cr-date-range dots">
										<span></span>
									</div>
								</div>
							</div>
							<div class="cr-card-content card-default">
								<div class="order-table">
									<div class="table-responsive">
										<table id="recent_order_data_table" class="table">
											<thead>
												<tr>
													<th>ID</th>
													<th>Product</th>
													<th>Customer</th>
													<th>Amount</th>
													<th>Status</th>
													<th>vendor</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="token">#fx2650</td>
													<td><img class="cat-thumb" src="assets/img/product/1.jpg"
															alt="clients Image"><span class="name">Mens t-shirt</span>
													</td>
													<td>Avira Venusio</td>
													<td>$15</td>
													<td class="cod">COD</td>
													<td>Melborn Fashion</td>
												</tr>
												<tr>
													<td class="token">#fx2650</td>
													<td><img class="cat-thumb" src="assets/img/product/2.jpg"
															alt="clients Image"><span class="name">Sofa chair</span>
													</td>
													<td>Zara nails</td>
													<td>$52</td>
													<td class="pending">Pending</td>
													<td>Capital Mines</td>
												</tr>
												<tr>
													<td class="token">#fx2365</td>
													<td><img class="cat-thumb" src="assets/img/product/3.jpg"
															alt="clients Image"><span class="name">Night Lamp</span>
													</td>
													<td>Olive Yew</td>
													<td>$69</td>
													<td class="wallet">wallet</td>
													<td>Bara Electrics</td>
												</tr>
												<tr>
													<td class="token">#fx2205</td>
													<td><img class="cat-thumb" src="assets/img/product/4.jpg"
															alt="clients Image"><span class="name">Mens hoodie</span>
													</td>
													<td>Allie Grater</td>
													<td>$49</td>
													<td class="paid">Paid</td>
													<td>Forest clothes</td>
												</tr>
												<tr>
													<td class="token">#fx2187</td>
													<td><img class="cat-thumb" src="assets/img/product/5.jpg"
															alt="clients Image"><span class="name">Digital Watch</span>
													</td>
													<td>Stanley Knife</td>
													<td>$559</td>
													<td class="cod">COD</td>
													<td>Samsung Digi</td>
												</tr>
												<tr>
													<td class="token">#fx2050</td>
													<td><img class="cat-thumb" src="assets/img/product/6.jpg"
															alt="clients Image"><span class="name">DSLR Camera.</span>
													</td>
													<td>Nick Carlet</td>
													<td>$1546</td>
													<td class="wallet">Wallet</td>
													<td>Canion tech</td>
												</tr>
												<tr>
													<td class="token">#fx1995</td>
													<td><img class="cat-thumb" src="assets/img/product/7.jpg"
															alt="clients Image"><span class="name">Head phone</span>
													</td>
													<td>Moris Nency</td>
													<td>$525</td>
													<td class="paid">Paid</td>
													<td>Beater Digital</td>
												</tr>
												<tr>
													<td class="token">#fx1985</td>
													<td><img class="cat-thumb" src="assets/img/product/8.jpg"
															alt="clients Image"><span class="name">Camera Dron</span>
													</td>
													<td>Wiley Waites</td>
													<td>$1255</td>
													<td class="paid">Paid</td>
													<td>Four wing</td>
												</tr>
												<tr>
													<td class="token">#fx1945</td>
													<td><img class="cat-thumb" src="assets/img/product/9.jpg"
															alt="clients Image"><span class="name">Drill machine</span>
													</td>
													<td>Sarah Moanees</td>
													<td>$684</td>
													<td class="pending">pending</td>
													<td>Hitachu</td>
												</tr>
												<tr>
													<td class="token">#fx1865</td>
													<td><img class="cat-thumb" src="assets/img/product/10.jpg"
															alt="clients Image"><span class="name">Camera Dron</span>
													</td>
													<td>Anne Ortha</td>
													<td>$854</td>
													<td class="cod">COD</td>
													<td>Skyrider tech</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-4 col-xl-6 col-md-12">
						<div class="cr-card" id="fxmap">
							<div class="cr-card-header">
								<h4 class="cr-card-title">Top Country</h4>
								<div class="header-tools">
									<div class="cr-date-range dots">
										<span></span>
									</div>
								</div>
							</div>
							<div class="cr-card-content">
								<div class="cr-map-view ecom-map">
									<div id="world-map" class="world-map"></div>
								</div>
								<div class="cr-map-detail">
									<div class="cr-map-detail">
										<div class="title">
											<h5>Revenue</h5>
											<a href="#" class="visit" title="View all data">view <i
													class="ri-arrow-right-line"></i></a>
										</div>
										<div class="cr-detail-list">
											<div class="cr-label">
												<div>
													<label>India</label>
													<span class="down"><i class="ri-arrow-down-line"></i>2.6%</span>
												</div>
												<p>$958.5k</p>
											</div>
											<div class="progress">
												<div class="progress-bar bg-secondary" role="progressbar"
													style="width: 95%" aria-valuenow="95" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</div>
										<div class="cr-detail-list">
											<div class="cr-label">
												<div>
													<label>Morocco</label>
													<span class="up"><i class="ri-arrow-up-line"></i>5.6%</span>
												</div>
												<p>$788.7k</p>
											</div>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar"
													style="width: 84%" aria-valuenow="84" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</div>
										<div class="cr-detail-list">
											<div class="cr-label">
												<div>
													<label>Brazil</label>
													<span class="up"><i class="ri-arrow-up-line"></i>3.7%</span>
												</div>
												<p>$592.2k</p>
											</div>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar"
													style="width: 76%" aria-valuenow="76" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
        <footer>
            <?php include_once "views/admin/layout/footer.php" ?>
        </footer>

		<!-- Feature tools -->
        <?php include_once "views/admin/layout/feature-tools.php" ?>
	</main>

	<?php include_once "views/admin/layout/script.php" ?>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:34 GMT -->
</html>