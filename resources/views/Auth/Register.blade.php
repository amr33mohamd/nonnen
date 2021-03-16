
@extends('layout')
@section('content')

<body
	class="page-template-default page page-id-629 wp-custom-logo wp-embed-responsive theme-techreshape_v4.3 the7-core-ver-2.5.0.1 woocommerce-js title-off dt-responsive-on right-mobile-menu-close-icon ouside-menu-close-icon mobile-hamburger-close-bg-enable mobile-hamburger-close-bg-hover-enable  fade-medium-mobile-menu-close-icon fade-medium-menu-close-icon srcset-enabled btn-flat custom-btn-color custom-btn-hover-color phantom-sticky phantom-shadow-decoration phantom-custom-logo-on sticky-mobile-header top-header first-switch-logo-left first-switch-menu-right second-switch-logo-left second-switch-menu-right right-mobile-menu layzr-loading-on popup-message-style the7-ver-4.3 elementor-default elementor-page-573 elementor-page-566 elementor-page-560 no-mobile closed-overlay-mobile-header"
	data-elementor-device-mode="desktop" data-new-gr-c-s-check-loaded="14.990.0" data-gr-ext-installed="">
	<!-- The7 4.3 -->





		<div id="main" class="sidebar-none sidebar-divider-vertical">


			<div class="main-gradient"></div>
			<div class="wf-wrap">
				<div class="wf-container-main">




					<div id="content" class="content" role="main">


						<form method="post" class="woocommerce-form woocommerce-form-register register text-center" action="/register_user" style="text-align:center">
							@csrf


							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide " style="width:50%;margin:auto">
								<label for="reg_email">Email address&nbsp;<span class="required">*</span></label>
								<input type="email" class="woocommerce-Input woocommerce-Input--text input-text " name="email" id="reg_email" autocomplete="email" value=""> </p>

								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide " style="width:50%;margin:auto">

								<label for="reg_email">Password <span class="required">*</span></label>
								<input type="password" class="woocommerce-Input woocommerce-Input--text input-text " name="password" id="reg_email" autocomplete="email" value=""> </p>

								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach

							<div class="woocommerce-privacy-policy-text">
								<p style="width:50%;margin:auto">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="http://watrax.com/2020/opfor/july/ali/regist/"
										class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
							</div>
							<p class="woocommerce-FormRow form-row">
						<button type="submit"
									class="woocommerce-Button button" name="register" value="Register">Register</button>
							</p>


						</form>



					</div><!-- #content -->




				</div><!-- .wf-container -->
			</div><!-- .wf-wrap -->


		</div><!-- #main -->



</body>

</html>

@endsection
