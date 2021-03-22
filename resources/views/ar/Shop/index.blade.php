@extends('ar.layout')
@section('content')
<link rel="stylesheet" href="/css/bootstrap.min.css" />
<body
	class="archive post-type-archive post-type-archive-product wp-custom-logo wp-embed-responsive theme-techreshape_v4.3 the7-core-ver-2.5.0.1 woocommerce woocommerce-page woocommerce-js layout-masonry description-under-image title-off dt-responsive-on right-mobile-menu-close-icon ouside-menu-close-icon mobile-hamburger-close-bg-enable mobile-hamburger-close-bg-hover-enable  fade-medium-mobile-menu-close-icon fade-medium-menu-close-icon srcset-enabled btn-flat custom-btn-color custom-btn-hover-color phantom-sticky phantom-shadow-decoration phantom-custom-logo-on sticky-mobile-header top-header first-switch-logo-left first-switch-menu-right second-switch-logo-left second-switch-menu-right right-mobile-menu layzr-loading-on dt-wc-sidebar-collapse popup-message-style the7-ver-4.3 elementor-default no-mobile closed-overlay-mobile-header"
	data-elementor-device-mode="desktop" data-new-gr-c-s-check-loaded="14.990.0" data-gr-ext-installed="">
	<!-- The7 4.3 -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




		<div id="main" class="sidebar-left sidebar-divider-vertical">


			<div class="main-gradient"></div>
			<div class="wf-wrap">
				<div class="wf-container-main">


					<!-- Content -->
					<div id="content" class="content" role="main">
						<header class="woocommerce-products-header">

						</header>
						<div class="woocommerce-notices-wrapper"></div>
						<div class="switcher-wrap">
							<div class="view-mode-switcher">

							</div>



							<form class="woocommerce-ordering row" method="get">

  <input type="text" class="form-control col-sm-6" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">

								<select class="form-control col-sm-5"  name="orderby" style="height: 40px;margin-left: 10px
"  >
									<option value="menu_order" selected="selected">Default sorting</option>
									<option value="popularity">Sort by popularity</option>
									<option value="rating">Sort by average rating</option>
									<option value="date">Sort by latest</option>
									<option value="price">Sort by price: low to high</option>
									<option value="price-desc">Sort by price: high to low</option>
								</select>
								<input type="hidden" name="paged" value="1">
							</form>
						</div>
						<div class="loading-effect-none description-under-image content-align-left cart-btn-below-img resize-by-browser-width wc-img-hover wc-grid dt-css-grid-wrap woo-hover wc-grid dt-products products" data-padding="18px" data-cur-page="1"
							data-desktop-columns-num="3" data-v-tablet-columns-num="2" data-h-tablet-columns-num="3" data-phone-columns-num="1" data-width="220px" data-columns="4">
							<div class="dt-css-grid">
								@foreach($products as $product)
								<div class="wf-cell visible shown" data-post-id="486" data-date="2020-08-08T06:45:56+00:00" data-name="36&quot;x16&quot; forma pillow with feather-down insert">
									<article class="post visible product type-product post-486 status-publish first instock product_cat-cb2 has-post-thumbnail shipping-taxable product-type-simple">

										<figure class="woocom-project">
											<div class="woo-buttons-on-img">

												<a href="/ar/product" class="alignnone"><img width="300" height="300" src="/Products – Nooneen Design_files/php_589d401192d27-300x300.jpg"
														class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail iso-lazy-load preload-me thumb-lazy-load-show iso-layzr-loaded" alt=""
														sizes="(max-width:300px) 100vw,300px" style="will-change: auto;"></a>
											</div>
											<figcaption class="woocom-list-content">

												<h4 class="entry-title">
													<a href="/ar/product" title="36″x16″ forma pillow with feather-down insert" rel="bookmark">{{$product->name}}</a>
												</h4>

												<div class="woo-buttons"><a href="" data-quantity="1" class="product_type_simple ajax_add_to_cart" data-product_id="486"
														data-product_sku="" aria-label="Read more about “36&quot;x16&quot; forma pillow with feather-down insert”" rel="nofollow">Read more</a></div>
											</figcaption>
										</figure>

									</article>

								</div>
								@endforeach

							</div>
						</div>
						<div class="woocommerce-pagination paginator" role="navigation"><span class="nav-prev disabled"><i class="dt-icon-the7-arrow-0-42" aria-hidden="true"></i></span><a href="http://watrax.com/2020/opfor/july/ali/order/page/1/"
								class="page-numbers act" data-page-num="1">1</a><a href="http://watrax.com/2020/opfor/july/ali/order/page/2/" class="page-numbers " data-page-num="2">2</a><a href="http://watrax.com/2020/opfor/july/ali/order/page/3/"
								class="page-numbers " data-page-num="3">3</a><a href="http://watrax.com/2020/opfor/july/ali/order/page/2/" class="page-numbers nav-next" data-page-num="2"><i class="dt-icon-the7-arrow-0-41" aria-hidden="true"></i></a></div>
					</div>

					<aside id="sidebar" class="sidebar">
						<div class="wc-sidebar-toggle"></div>
						<div class="sidebar-content widget-divider-off">
							@foreach($categories as $category)

							<section id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
								<div class="widget-title">{{$category->name}}</div>
								<ul class="product-categories">
									@foreach($category->subCategories as $subCategory)
									<li class="cat-item cat-item-43"><a href="?id={{$subCategory->id}}">{{$subCategory->name}}</a></li>
									@endforeach
								</ul>
							</section>
							@endforeach




						</div>
					</aside><!-- #sidebar -->


				</div><!-- .wf-container -->
			</div><!-- .wf-wrap -->


		</div><!-- #main -->
    @endsection
