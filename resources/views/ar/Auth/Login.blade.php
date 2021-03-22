
@extends('ar.layout')
@section('content')

<body
	class="page-template-default page page-id-629 wp-custom-logo wp-embed-responsive theme-techreshape_v4.3 the7-core-ver-2.5.0.1 woocommerce-js title-off dt-responsive-on right-mobile-menu-close-icon ouside-menu-close-icon mobile-hamburger-close-bg-enable mobile-hamburger-close-bg-hover-enable  fade-medium-mobile-menu-close-icon fade-medium-menu-close-icon srcset-enabled btn-flat custom-btn-color custom-btn-hover-color phantom-sticky phantom-shadow-decoration phantom-custom-logo-on sticky-mobile-header top-header first-switch-logo-left first-switch-menu-right second-switch-logo-left second-switch-menu-right right-mobile-menu layzr-loading-on popup-message-style the7-ver-4.3 elementor-default elementor-page-573 elementor-page-566 elementor-page-560 no-mobile closed-overlay-mobile-header"
	data-elementor-device-mode="desktop" data-new-gr-c-s-check-loaded="14.990.0" data-gr-ext-installed="">
	<!-- The7 4.3 -->







	<body
		class="page-template-default page page-id-627 wp-custom-logo wp-embed-responsive theme-techreshape_v4.3 the7-core-ver-2.5.0.1 woocommerce-js title-off dt-responsive-on right-mobile-menu-close-icon ouside-menu-close-icon mobile-hamburger-close-bg-enable mobile-hamburger-close-bg-hover-enable  fade-medium-mobile-menu-close-icon fade-medium-menu-close-icon srcset-enabled btn-flat custom-btn-color custom-btn-hover-color phantom-sticky phantom-shadow-decoration phantom-custom-logo-on sticky-mobile-header top-header first-switch-logo-left first-switch-menu-right second-switch-logo-left second-switch-menu-right right-mobile-menu layzr-loading-on popup-message-style the7-ver-4.3 elementor-default elementor-page-573 elementor-page-566 elementor-page-560 no-mobile closed-overlay-mobile-header"
		data-elementor-device-mode="desktop" data-new-gr-c-s-check-loaded="14.990.0" data-gr-ext-installed="">
		<!-- The7 4.3 -->


			<div id="main" class="sidebar-none sidebar-divider-vertical">


				<div class="main-gradient"></div>
				<div class="wf-wrap">
					<div class="wf-container-main">




						<div id="content" class="content" role="main" style="text-align:center">

							<form class="login" action="/login_response" method="post">
									@csrf

								<p class="form-row  name-row" style="width:50%;margin:auto">
									<input type="text" class="input-text" placeholder=" البريد الالكتروني *" name="email" id="username" >
								</p>
								<p class="form-row  password-row" style="width:50%;margin:auto">
									<input class="input-text" placeholder="كلمه السر *" type="password" name="password" id="password">
								</p>
								<div class="clear"></div>


								<p class="form-row" style="margin-top:10px">
									<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="a4906de259"><input type="hidden" name="_wp_http_referer" value="/2020/opfor/july/ali/login/"> <input type="submit" class="button" name="login"
										value="تسجيل الدخول">
								</p>
								<input type="hidden" name="redirect" value="">
								<label for="rememberme" class="inline">
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								<p class="lost_password">
									<a href="/lost-password">نسيت كلمه السر</a>
								</p>

								<div class="clear"></div>


							</form>


						</div><!-- #content -->




					</div><!-- .wf-container -->
				</div><!-- .wf-wrap -->


			</div><!-- #main -->







</body>

</html>

@endsection
