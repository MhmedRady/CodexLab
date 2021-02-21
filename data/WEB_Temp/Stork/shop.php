<?php $pageTitle = 'Shop' ; ?>

<?php include 'inc.php'; ?>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo $img ?>shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Smartphones & Tablets</h2>
		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 side_">

					<button id="_side" type="button" class="open_side btn-sm" name="button"><i class="fas fa-chevron-right"></i> </button>
					<button id="close_side" type="button" class="close_side btn-sm" name="button"><i class="fas fa-times"></i> </button>
					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Search</div>
								<ul class="sidebar_categories">
									<input id="search_" type="text" class="form-control" name="" value="">
								</ul>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
								<ul class="sidebar_categories">
									<li><a href="#">Computers & Laptops</a></li>
									<li><a href="#">Cameras & Photos</a></li>
									<li><a href="#">Hardware</a></li>
									<li><a href="#">Smartphones & Tablets</a></li>
									<li><a href="#">TV & Audio</a></li>
									<li><a href="#">Gadgets</a></li>
									<li><a href="#">Car Electronics</a></li>
									<li><a href="#">Video Games & Consoles</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
						</div>
						<div class="sidebar_section filter_by_section">
							<div class="sidebar_title">Filter By</div>
							<div class="sidebar_subtitle">Price</div>
							<div class="filter_price">
								<div id="slider-range" class="slider_range"></div>
								<p>Range: </p>
								<p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle color_subtitle">Color</div>
							<ul class="colors_list">
								<li class="color"><a href="#" style="background: #b19c83;"></a></li>
								<li class="color"><a href="#" style="background: #000000;"></a></li>
								<li class="color"><a href="#" style="background: #999999;"></a></li>
								<li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
								<li class="color"><a href="#" style="background: #df3b3b;"></a></li>
								<li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
							</ul>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle brands_subtitle">Brands</div>
							<ul class="brands_list">
								<li class="brand"><a href="#">Apple</a></li>
								<li class="brand"><a href="#">Beoplay</a></li>
								<li class="brand"><a href="#">Google</a></li>
								<li class="brand"><a href="#">Meizu</a></li>
								<li class="brand"><a href="#">OnePlus</a></li>
								<li class="brand"><a href="#">Samsung</a></li>
								<li class="brand"><a href="#">Sony</a></li>
								<li class="brand"><a href="#">Xiaomi</a></li>
							</ul>
						</div>
						<div class="sidebar_section">
							<div class="row">
								<aside id="woocommerce_products-3" class="widget products_side widget_products ">
									<div class="title-outer">
										 <h3 class="widget-title">On-sale</h3>
									</div>
									<ul class="product_list_widget toggle-block">
									<li>
											<a href="#">
												<img src="<?php echo $img ?>1.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
												alt="" sizes="(max-width: 281px) 100vw, 281px" width="281" height="302">
												<span class="product-title">Vogue Stack Colorful Shoem Toy</span>
											</a>
											<div class="star-rating" title="Not yet rated">
												<span style="width:0%">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</span>
											</div>
											<del>
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>80.00</span>
												</del>
												<ins><span class="woocommerce-Price-amount amount price">
													<span class="woocommerce-Price-currencySymbol">$</span>70.00</span>
												</ins>
									</li>
									<li>
											<a href="#">
												<img src="<?php echo $img ?>1.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
												alt="" sizes="(max-width: 281px) 100vw, 281px" width="281" height="302">
												<span class="product-title">Vogue Stack Colorful Shoem Toy</span>
											</a>
											<div class="star-rating" title="Not yet rated">
												<span style="width:0%">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</span>
											</div>
											<del>
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>80.00</span>
												</del>
												<ins><span class="woocommerce-Price-amount amount price">
													<span class="woocommerce-Price-currencySymbol">$</span>70.00</span>
												</ins>
									</li>
								</ul>
							</aside>
								<aside id="leftbannerwidget-2" class="widget widgets-leftbanner">
								  <div class="left-banner">
				            <a href="#">
				                <img src="<?php echo $img ?>left-banner.jpg" alt="leftbanner" class="vv">
				            </a>
					        </div>
				        </aside>
							</div>
						</div>
					</div>

				</div>

				<!-- Hot New Arrivals -->



				<div class="col-lg-9">

					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span>186</span> products found</div>
							<div class="shop_sorting">
								<span>Sort by:</span>
								<ul>
									<li>
										<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
										<ul>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
											<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="product_grid">
							<div class="product_grid_border"></div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item discount">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>featured_1.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225<span>$300</span></div>
									<div class="product_name"><div><a href="#" tabindex="0">Huawei MediaPad...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>featured_2.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Apple iPod shuffle</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>featured_3.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Sony MDRZX310W</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>featured_4.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">LUNA Smartphone</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>shop_1.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Canon IXUS 175...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>featured_5.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379<span>$300</span></div>
									<div class="product_name"><div><a href="#" tabindex="0">Canon STM Kit...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>featured_6.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225<span>$300</span></div>
									<div class="product_name"><div><a href="#" tabindex="0">Samsung J330F</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>featured_7.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Lenovo IdeaPad</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>featured_8.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Digitus EDNET...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>new_1.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Astro M2 Black</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>new_2.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Transcend T.Sonic</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>new_3.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Xiaomi Band 2...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>new_4.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Rapoo T8 White</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item discount">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>featured_1.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225<span>$300</span></div>
									<div class="product_name"><div><a href="#" tabindex="0">Huawei MediaPad...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>new_6.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Nokia 3310 (2017)</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>new_7.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Rapoo 7100p Gray</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>new_8.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Canon EF</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>shop_2.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Gembird SPK-103</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo $img ?>featured_5.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Canon STM Kit...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

						</div>

						<!-- Shop Page Navigation -->

						<div class="shop_page_nav d-flex flex-row">
							<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
							<ul class="page_nav d-flex flex-row">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">...</a></li>
								<li><a href="#">21</a></li>
							</ul>
							<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
						</div>

					</div>
					<!-- Best Sellers -->

					<div class="best_sellers">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="viewed_title_container">
										<h3 class="viewed_title">Recently Viewed</h3>
											<div class="viewed_nav_container">
												<ol class="carousel-indicators">
											    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><span>1</span> </li>
											    <li data-target="#carouselExampleIndicators" data-slide-to="1"><span>2</span></li>
											    <li data-target="#carouselExampleIndicators" data-slide-to="2"><span>3</span></li>
											  </ol>
											</div>
									</div>
									<div class="tabbed_container">

										<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

										  <div class="carousel-inner">
										    <div class="carousel-item active">
													<!-- /************************************************/ -->
													<div class="bestsellers_panel panel">

														<!-- Best Sellers Slider -->

														<div class="bestsellers_slider slider row">

															<!-- Best Sellers Item -->
															<div class="bestsellers_item discount col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_1.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Xiaomi Redmi Note 4</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item discount col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_2.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Samsung J730F...</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_3.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Nomi Black White</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_4.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Samsung Charm Gold</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item discount col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_5.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Beoplay H7</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_6.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Huawei MediaPad T3</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item discount col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_1.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Xiaomi Redmi Note 4</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item discount col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_2.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Xiaomi Redmi Note 4</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_3.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Xiaomi Redmi Note 4</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

														</div>
													</div>
													<!-- /************************************************/ -->
										    </div>
										    <div class="carousel-item">
													<!-- /************************************************/ -->
													<div class="bestsellers_panel panel">

														<!-- Best Sellers Slider -->

														<div class="bestsellers_slider slider row">

															<!-- Best Sellers Item -->
															<div class="bestsellers_item discount col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_1.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Xiaomi Redmi Note 4</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item discount col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_2.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Samsung J730F...</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_3.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Nomi Black White</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_4.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Samsung Charm Gold</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item discount col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_5.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Beoplay H7</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_6.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Huawei MediaPad T3</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item discount col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_1.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Xiaomi Redmi Note 4</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item discount col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_2.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Xiaomi Redmi Note 4</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_3.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Xiaomi Redmi Note 4</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

														</div>
													</div>
													<!-- /************************************************/ -->
										    </div>
										    <div class="carousel-item">
													<!-- /************************************************/ -->
													<div class="bestsellers_panel panel">

														<!-- Best Sellers Slider -->

														<div class="bestsellers_slider slider row">

															<!-- Best Sellers Item -->
															<div class="bestsellers_item discount col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_1.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Xiaomi Redmi Note 4</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item discount col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_2.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Samsung J730F...</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_3.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Nomi Black White</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_4.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Samsung Charm Gold</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item discount col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_5.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Beoplay H7</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_6.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Huawei MediaPad T3</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item discount col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_1.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Xiaomi Redmi Note 4</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item discount col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_2.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Xiaomi Redmi Note 4</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>

															<!-- Best Sellers Item -->
															<div class="bestsellers_item col-md-4 col">
																<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
																	<div class="bestsellers_image"><img src="<?php echo $img ?>best_3.png" alt=""></div>
																	<div class="bestsellers_content">
																		<div class="bestsellers_category"><a href="#">Headphones</a></div>
																		<div class="bestsellers_name"><a href="product">Xiaomi Redmi Note 4</a></div>
																		<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="bestsellers_price discount">$225<span>$300</span></div>
																	</div>
																</div>
																<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
																<ul class="bestsellers_marks">
																	<li class="bestsellers_mark bestsellers_discount">-25%</li>
																	<li class="bestsellers_mark bestsellers_new">new</li>
																</ul>
															</div>


														</div>
													</div>
													<!-- /************************************************/ -->
										    </div>
												<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												</a>
												<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												</a>
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
	</div>


	<!-- Recently Viewed -->

	<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Recently Viewed</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">

						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?php echo $img ?>view_1.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225<span>$300</span></div>
										<div class="viewed_name"><a href="#">Beoplay H7</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?php echo $img ?>view_2.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$379</div>
										<div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?php echo $img ?>view_3.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225</div>
										<div class="viewed_name"><a href="#">Samsung J730F...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?php echo $img ?>view_4.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$379</div>
										<div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?php echo $img ?>view_5.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225<span>$300</span></div>
										<div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?php echo $img ?>view_6.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$375</div>
										<div class="viewed_name"><a href="#">Speedlink...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Brands -->

	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">

						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">

							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo $img ?>brands_1.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo $img ?>brands_2.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo $img ?>brands_3.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo $img ?>brands_4.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo $img ?>brands_5.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo $img ?>brands_6.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo $img ?>brands_7.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo $img ?>brands_8.jpg" alt=""></div></div>

						</div>

						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="<?php echo $img ?>send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include $tpl . 'Footer.inc' ?>
